-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2014 at 09:02 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmarays`
--
CREATE DATABASE IF NOT EXISTS `pharmarays` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pharmarays`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  `id_ailment` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `timecreated_admin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `adverseeffects`
--

CREATE TABLE IF NOT EXISTS `adverseeffects` (
  `id_adverseeffects` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_adverseeffects`),
  KEY `FKadverseeff649841` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ailmentstage`
--

CREATE TABLE IF NOT EXISTS `ailmentstage` (
  `id_ailmentstage` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_ailmentstage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(10) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `description` mediumtext,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `guestonly` tinyint(1) DEFAULT NULL,
  `memberid_member` int(10) NOT NULL,
  `newsid_news` int(10) DEFAULT NULL,
  `newsletterid_newsletter` int(10) DEFAULT NULL,
  `author` tinytext,
  `defaultimage` tinytext,
  PRIMARY KEY (`id_article`),
  KEY `FKarticle885354` (`memberid_member`),
  KEY `FKarticle874410` (`newsid_news`),
  KEY `FKarticle899694` (`newsletterid_newsletter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `title`, `description`, `time_created`, `guestonly`, `memberid_member`, `newsid_news`, `newsletterid_newsletter`, `author`, `defaultimage`) VALUES
(1, 'Child paracetamol dosages revised', 'Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...', '2013-10-12 03:34:09', 1, 1, 1, NULL, NULL, NULL),
(2, 'Paracetamol death: Desiree Phillips died after taking too many, inquest told', 'A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..', '2013-10-12 03:34:16', 1, 2, 2, NULL, NULL, NULL),
(3, 'Management of paracetamol poisoning', 'Paracetamol (acetaminophen) is an effective oral analgesic, with few adverse effects when used at the recommended dose. Nevertheless, paracetamol poisoning is common and potentially fatal...', '2013-10-12 03:34:22', 1, 4, 3, NULL, NULL, NULL),
(4, 'USPHS: Where Pharmacy Meets Public Health', 'The US Public Health Service (USPHS) Commissioned Corps was established in 1889 to help protect US citizens from infectious diseases through immunization and quarantine. As the nation&#39;s public health needs grew, so did the corps.<br />\n	<br />\n	Today, the USPHS Commissioned Corps consists of more than 6000 full-time, highly skilled professionals from a number of health care fields. All pharmacists in the Corps are uniformed officers, and they serve throughout the US Department of Health and Human Services and in other federal agencies.<br />\n	<br />\n	Rear Admiral Scott F. Giberson, assistant surgeon general and chief pharmacy officer, USPHS Commissioned Corps, says, &ldquo;PHS Pharmacy allows for unparalleled diversity and opportunity. Our pharmacists become an integral part of a unique career path that can involve advanced pharmacy practice, health policy development, emergency and humanitarian response, public health leadership, global health, and much more.&rdquo;<br />\n	<br />\n	<strong>DIVERSE OPPORTUNITIES </strong><br />\n	<br />\n	According to the USPHS Commissioned Corps Web site, the mission of the corps is to provide for the health and safety of the nation through &ldquo;rapid and effective response to public health needs, leadership and excellence in public health practices, and advancement of public health science.&rdquo;<br />\n	<br />\n	Captain Carmen Clelland, PharmD, MPA, director of the Health Professions Support Branch of the Indian Health Service, says that the majority of career opportunities in the corps are focused on patient care and counseling. Captain Clelland explains, &ldquo;There are many opportunities for recent graduates with the corps. Primary care, ambulatory care, and institutional practice opportunities include working with the Indian Health Service, Division of Immigration Health Services, and US Coast Guard. Many initiatives of these 3 organizations allow pharmacists to utilize their clinical skills recently learned in pharmacy school.&rdquo;<br />\n	<br />\n	For recent graduates who are interested in policymaking, academia, or administration, other agencies can provide important employment opportunities. The FDA, for example, has many regulatory positions for which pharmacists provide their expertise and knowledge. Other agencies, such as the Health Care Financing Administration, Health Resource and Services Administration, National Institutes of Health, Substance Abuse and Mental Health Services Administration, and Centers for Disease Control and Prevention, utilize more senior Corps pharmacists.<br />\n	<br />\n	<strong>GETTING COMMISSIONED</strong><br />\n	<br />\n	To become a member of the Commissioned Corps, pharmacy graduates must be citizens of the United States, be aged 44 years or younger, and pass a physical examination.<br />\n	<br />\n	Pharmacy graduates also need to hold a Bachelor of Science or PharmD degree from a program accredited by the American Council on Pharmaceutical Education. Corps candidates need a current, valid, and unrestricted pharmacy license for one of the 50 states, Washington, DC, Puerto Rico, the US Virgin Islands, or Guam. Recent pharmacy graduates who do not yet have a valid license may still apply to the corps, but will be appointed for a limited tour of duty until licensure is complete.<br />\n	<br />\n	Once accepted into the Commissioned Corps, the required length of service is 2 years with the same agency. After that term, corps pharmacists have the opportunity to apply for positions at different agencies.<br />\n	<br />\n	<strong>BENEFITS ABOUND</strong><br />\n	<br />\n	The benefits of a career with the Commissioned Corps are generous. New pharmacists who enroll in the corps receive a host of benefits, including competitive starting pay, free medical and dental care for the pharmacist and low-cost medical care for family members, tax-free housing and meal allowances, 30 days paid vacation, and paid sick and maternity leaves.<br />\n	<br />\n	For newly commissioned pharmacists, the Commissioned Corps offers a $30,000 accession bonus for signing a 4-year active-duty agreement. Pharmacists serving in the corps may also be eligible for an annual $15,000 retention bonus.<br />\n	<br />\n	In recognition of the financial burden a pharmacy student accepts by going through professional schooling, the USPHS, in coordination with other federal agencies, also offers loan repayment and other educational and family support programs for those who qualify.<br />\n	<br />\n	Captain Clelland notes that there are nonmonetary benefits to a career in the corps as well. Flexibility and career growth are 2 big benefits to a career in the corps&mdash;in his 20-year career with the IHS, Captain Clelland has served in both rural and urban settings, and has had the opportunity to take positions in patient care, administration, and policymaking.<br />\n	<br />\n	Although the Commissioned Corps maintains a low profile in the national consciousness, it provides valuable services to benefit public health in our country and around the world. Rear Admiral Giberson says, &ldquo;We [in the Commissioned Corps] desire professionals and pharmacists that want to serve a mission, become part of something special, and that want to make a difference in the lives of people.&rdquo;<br />\n	<br />\n	<strong>FOR STUDENTS ONLY </strong><br />\n	<br />\n	The Commissioned Corps also has programs for current students. Students who have completed at least 1 year of study in a master&rsquo;s or doctoral program or 2 years in a professionally accredited bachelor&rsquo;s program may qualify for the Junior Commissioned Officer Student Training and Extern Program (JRCOSTEP). JRCOSTEP participants work in the same types of positions as commissioned officers, and enjoy some of the same benefits. Assignments in JRCOSTEP last from 31 to 120 days, and are scheduled during school breaks and the summer months. Students are paid for their time and are not obligated to join the corps upon graduation.<br />\n	<br />\n	A similar program, the Senior Commissioned Officer Student Training and Extern Program (SRCOSTEP), was created for full-time students entering their last year of professional training in an accredited program. SRCOSTEP participants receive financial assistance to complete school, and agree to serve in the corps after graduation for twice the amount of the time for which they received assistance. Students interested in the JRCOSTEP and SRCOSTEP programs can check their eligibility at https://dcpweb.psc.gov/ rab/scripts/app_main_menu.htm.<br />\n	<br />\n	<strong>JOINING THE CORPS</strong><br />\n	<br />\n	Pharmacy students who are interested in careers with the USPHS Commissioned Corps should call 800-279-1605 for more information. To apply for a position online, visit <a href="http://www.usphs.gov/applynow/" target="_blank">www.usphs.gov/applynow/</a>.</p>\n', '2013-10-12 03:34:34', 0, 3, 4, NULL, NULL, NULL),
(5, 'Paracetamol warning: ''Slightly too much can cause overdose''', 'Doctors may not initially spot the problem because blood tests will not show the staggeringly high levels of paracetamol seen with a conventional overdose, where someone may have swallowed several packets of the drug...', '2013-10-12 03:34:29', 0, 1, 4, NULL, NULL, NULL),
(6, 'Fall in paracetamol deaths ''linked to pack limits''', 'Deaths from paracetamol overdoses fell by 43% in England and Wales in the 11 years after the law on pack sizes was changed, according to a study which means that we ought to  do things', '2013-10-12 03:34:57', 1, 2, 5, NULL, NULL, NULL),
(7, 'NEIMETH INTERNATIONAL PHARMACEUTICALS PLC', 'Neimeth International Pharmaceuticals plc is involved in the manufacturing and sales of pharmaceuticals, chemicals and animal health products .The Company had operated in Nigeria for 40 years, producing, marketing, and distributing Pfizer brands of pharmaceutical and veterinary products in tablets, capsules, ointment/cream, powder, injectables, and oral liquid forms. During the 40 year period (1957-1997), the company established the first pharmaceutical manufacturing plant in Nigeria at Aba, which ', '2013-10-12 03:34:39', 0, 2, 6, NULL, NULL, NULL),
(8, 'Move Back To Nigeria: The Patriotic Pharmacist Says “I’m Very Optimistic About Moving Back to Nigeria”', 'Move Back to Nigeria is a new series on BellaNaija. The aim is to encourage young and not-so-young professionals in the diaspora who are trying to make the decision of whether to move back to Nigeria. In collaboration with the brilliant team at MoveBackToNigeria.com, we hope to bring you a weekly interview with individuals who have successfully made the leap. The idea is to share their successes and their challenges as they made the decision.\r\n\r\nA lot of Nigerians in the diaspora have questions about making a change at home in Nigeria. Many suggest really good ideas on how to make things better; others would like to contribute to making a difference back home but are just not sure where to begin.\r\n\r\nThis week, we excitedly bring you a feature on a young Nigerian pharmacist (he  has chosen to remain anonymous) who is moving back to Nigeria to pursue his dreams in the health sector and beyond. Read on, to hear him talk about his career so far, his hopes and plans for his pharmaceutical practice and his take on the pharmaceutical industry in Nigeria. We hope you enjoy reading his story.\r\n\r\nThanks for agreeing to speak to us. Could you kindly tell us who you are?\r\nI’m a young Nigerian pharmacist, living and working in London, England and looking to move back to Nigeria in the next few months. My interests range from sports to music and everything in between.\r\n\r\nWhen did you leave Nigeria and why?\r\nI left Nigeria for the UK in 2001 for educational reasons.\r\n\r\nCan you shed some light on these educational reasons?\r\nSure. I left Nigeria after secondary school to do my A Levels in the UK and subsequently attend university there as well.  I studied pharmacy at Cardiff University and graduated with a Masters in Pharmacy.\r\n\r\nDid you always know you wanted to be a pharmacist?\r\nNot necessarily. Whilst I was proficient in science subjects, I was not always sure of what science I wanted to practice. My dad then decided on pharmacy and I’m happy to say it’s turned out to be a worthy decision.\r\n\r\nThat’s certainly fortunate. So how did your career in pharmacy begin?\r\nWell, it’s a seemingly convoluted path so do bear with me as I narrate. In the UK, after studying pharmacy, there’s a 1 year mandatory ‘pre-registration’ program (similar to the housemanship in medicine) which involves 1 year of working, shadowing a pharmacist and a very challenging professional exam afterwards. I undertook mine at Tesco Pharmacy, thankfully passed the exams and then registered as a pharmacist in the UK. I then went back to Cardiff University for another Masters degree, this time in Strategic Marketing as I felt that my business skills were lacking and I needed to remedy that. This I did for long term reasons because, I knew I would one day be going back to Nigeria to set up a pharmacy and I wanted to have the entrepreneurial skills necessary to market my drugs. After this degree, I got a job at Superdrug which lasted only briefly as the visa rules got changed and so I had to prematurely leave the UK for Nigeria.\r\n\r\nAlthough I was somewhat disillusioned at the prospect, I decided to use the opportunity to undertake the NYSC program. However, when I got home, I realised that I was misinformed about the NYSC procedure, particularly as it applies to graduates of medicine and pharmacy. You have to register as a pharmacist and then take a 6week course which is rotated nationwide and runs once annually, before being eligible for NYSC. I had unfortunately arrived months before the course and did not relish the prospect of waiting idly which led me to decide to come back to the UK for a third Masters degree, this time in Global Affairs at the University of Buckingham. I did this alongside a part-time pharmacist job in Boots and I stayed with them, even after the completion of my course while planning another move back to Nigeria; this time much more thought out and researched. After Boots, a better opportunity presented itself at Sainsbury’s Pharmacy and I took it and that’s where I currently work as the pharmacy manager.\r\n\r\nYou’ve mentioned a few times, your unwavering intent to return to Nigeria. Why this mindset?\r\nMoving back to Nigeria should be a decision based on personal circumstances. After all is said and done and despite the very well documented infrastructural and societal challenges in Nigeria, there’s still nowhere like home. I have a very good job in the UK and live a comfortable life but I feel that going home now is the right thing to do, for me.  I would like to be closer to my family, most of whom reside there and I would also like to set up my pharmacy practice in Nigeria, God willing. It is where I want to be and where I am happiest.\r\n\r\nWhilst I’m there, the intent is to get some hands on work experience, register my company and prepare for NYSC. Another reason is that there is a huge influx of pharmacists into the UK and so the money is not even what it used to be. The sector here is also getting very saturated for instance, because of EU laws, pharmacists from eastern Europe can come to the UK, shadow a pharmacist for a month and then get their license irrespective of whatever sort of training (or not) they may received in their home countries.\r\n\r\nThat’s understandable. You have discussed setting up your Pharmacy in Nigeria, can you go into some detail and tell us what this would entail?\r\nMy background in pharmacy and business has prepared me for this and it is something I want to do for a myriad of reasons. Operating a small, retail pharmacy is a profitable venture, it is also one that by its very nature will meet a very basic human need as I plan to site it close to schools, hospitals and potentially also specialise in certain medication(s), be a distributor, supplying private and public establishments and much more. I’m very optimistic about moving back and while I am very aware that things don’t always turn out as planned, particularly in the uncertain Nigerian terrain, I’m just hoping for the best.\r\n\r\nThis naturally leads us to the pharmaceutical industry in Nigeria and bodies like PCN & NAFDAC. What are your thoughts regarding these regulatory bodies?\r\nThe pharmaceutical industry in Nigeria is definitely progressing.  However, I feel we need to start manufacturing more medicines in Nigeria. The obvious infrastructural challenges certainly pose obstacles to this but it’s an area that should be better explored. We need more companies like Emzor, Orange Drugs and so on as a lot of medicines are currently imported from India and China which is not the route I would personally take if given the opportunity. There is more that can be done to increase our production especially considering we have the raw materials in abundance and a good example of this is maize starch which is a major component of most medicines.\r\n\r\nThe regulatory agencies like NAFDAC (National Agency for Food & Drug Administration and Control) and PCN (Pharmacists Council of Nigeria) need to be empowered and constitutionalized so as to be more effective and also to eliminate the crippling bureaucracy.  There are existing policies which go a long way towards curbing illegal practices. Many people are not aware of the existing industry rules and this is due to the fact that they are hardly enforced. One such rule is one in which if a businessman wants to set up a pharmacy, there must an in-house pharmacist who must own at least 40% of the business so as to ensure best practice. The PCN also needs to organise more public enlightenment campaigns for citizens to be aware of the laws and policies. For instance medication like Valium and Lexotan by law are prescription only in Nigeria but a lot of people flout these stipulations.\r\n\r\nWhat unique opportunities exist in the industry for people who may also be considering a move back?\r\nThere are many opportunities that abound, just take the size of Nigeria into consideration. There are 36 states in Nigeria with each one presenting a unique opportunity to whoever is interested and with the wherewithal to power the interest. For instance, I know someone who lives in Delta State but chooses to travel to the neighbouring Edo State to purchase medication for her kids when the need arises. There might be pharmacies close to her but she chooses to go all the way and it may be a function of the origin of the drugs sold by the pharmacies. She may just prefer European brands such as GSK or Roche to the Asian brands which are what abound in Nigeria and so here exists an opportunity for a business venture. Also, the WHO states that the fake drugs market In Africa is worth millions of dollars and we have a lot of people coming in from neighbouring countries like Ghana and Cameroon to buy medicines in Nigeria and so this is another opportunity to come in and present an ethical and alternative change.\r\n\r\nThis is all very enlightening and you’re clearly very passionate about this cause. Where then, do you see yourself and potentially, your pharmacy in 3 to 5 years?\r\nHopefully in a stable and successful position.  I intend to eventually expand and open more branches of my pharmacy as well as be a key player in the sector. I have already started the legwork and so with hard work and God’s blessings, the sky is just the foundation.\r\n\r\nThat’s certainly positive. On a final note and as you’re somewhat in the transition process, what would you say to people considering a similar move?\r\nYou need to know before you go. Do not just make hasty decisions. I see a lot of people you’ve interviewed on the MoveBackToNigeria.com website who’ve successfully made the move back home are either in the finance sector or the engineering sector and that’s understandable as those sectors are currently enjoying a boom. It is not the same for the health sector and anyone who does not do sufficient research will most likely encounter problems. Doctors are not doing so well back home except those who run their own clinics.\r\n\r\nAnother point to remember is that you need to be open-minded and not compare Nigerian systems to those in the west. It’s also important to be patient and hardworking and eventually, things should pay off.\r\n\r\n Thank you very much for your time and best wishes moving forward.', '2013-10-12 03:35:03', 1, 4, 7, NULL, NULL, NULL),
(9, '\r\nCan Nigeria’s manufacturing, pharmaceutical industry compete? (2) – Prof.Soludo', 'The former Central Bank governor, Prof. Charles Soludo in a recent forum organised by Nigeria Association of Industrial Pharmacists (NAIP) in Lagos, has questioned the ability of Nigeria’s manufacturing and pharmaceutical industry to compete in the global market with certain indices pointing to that direction.\r\n\r\nAs I review the global industry, the structural shifts and market trends, I do not have good news for the audience here. I refer specifically to the pharmaceutical manufacturers among your membership. As of today, Nigeria has neither a comparative nor a competitive advantage in pharmaceuticals.\r\n\r\n(To deliberately create a competitive advantage will require serious strategizing and effort). On cost considerations, Nigerian firms cannot compete: the risk-adjusted rate of return on investment in the industry is comparatively very low. It is not surprising that the global majors in the industry are not pouring in capital. Estimated at about US$l,billion (less than 0.5% of Nigeria’s GDP and basically the size of a medium-sized pharmaceutical company abroad) the share of Nigeria’s, pharmaceutical industry in the global industry is basically zero.\r\n\r\nLocal manufacfure has been consistently losing market shares in the local market let alone being competitive in the international market. I understand that todate, none of the pharmaceutical companies in Nigeria is WHO- certified. If you adjust for the outsourced production to foreign firms, the 100 or so largely small and fragmented companies in the industry account for about 20% of domestic drug consumption.\r\n\r\nIt is a struggling industry. Some of the existing firms have resorted to a number of ‘survivalist strategies’ by joining the ‘trading train – as marketers for foreign firms or have outsourced their production to Indian and Chinese manufacturers while, they are more amply rewarded as happy importers. I will not be surprised if out of your 300 corporate members, more than 60% are in the marketing/distribution segment.\r\n\r\nI will not waste your time with a rehearsal of why and how the industry is not competitive. You probably have a better list of the reasons. The bottomline is that it is subject to the same competitive disadvantages as the productive sector especially manufacturing.\r\n\r\nThe industry cannot withstand the drug armada from China and India in particular – which have by far better cost advantages – and you cannot stop them from coming given our obligations under the General Agreement on Trade and Tariffs (GATT) and the World Trade Organization (WTO). Some of you complain that the industry is a victim of unfair trade (characterized by inflow of fake, illegal, substandard drugs or even ‘dumping’) while the government does little to ‘protect’ or patronize the industry.\r\n\r\nSome demand for special, cheaper funds for pharmaceuticals production. The list is long. I will argue that some of the proposals, if implemented, will merely act as short to medium term palliatives. In your language, administering only pain killers to a patient with malaria will not make him well.\r\n\r\nWhere do we go from here?\r\n\r\nSome analysts believe that the national development discourse is saddled with creeping analysis paralysis.\r\n\r\nPhilosophers, it is said, have interpreted the world: the problem is to change it! As I review the National Economic Empowerment and Development Strategy – NEEDS – or its revised version in the name of Vision 2020 document, the various ‘conclusions’ of the annual Nigerian Economic Summit, and the sundry ‘blueprints’ f1ying around you almost come to the conclusion that the missing link is a focused execution capacity.\r\n', '2013-10-12 03:35:10', 0, 15, 8, NULL, NULL, NULL),
(10, 'Appraising Nigeria’s need for a pharmaceutical intervention fund', '\r\nAppraising Nigeria’s need for a pharmaceutical intervention fund\r\n\r\non December 17, 2012   /   in Viewpoint 8:16 pm   /   Comments\r\n\r\nBY YANGE IKYAA\r\n\r\nACCORDING to a research conducted on 90 drugs approved by US regulators between 1998 and 2000, the results of more than half of all clinical trials which demonstrate the safety and effectiveness of new drugs are not published within five years of the drugs in the market.\r\n\r\nThe researchers, who traced the publication or otherwise of 909 separate clinical trials in scientific literature, wrote that the failure of drug companies to publish evidences relating to new medicines amounted to “scientific misconduct,” harming public good and preventing informed decisions by doctors and patients on the safe use of new medicines.\r\n\r\nHowever, to most people in many lands, the United States is a nation that stands at the apex of consumer safety and effective drug market regulation in comparison with other nations throughout the world. But the contrary reality by these research findings may hold critical lessons for Nigeria and other countries with strong dependence and increased public confidence in foreign medical supplies for the day to day management of domestic healthcare problems.\r\n\r\nFor instance, when a call was made in April 2012 by NAFDAC that a 200 billion naira Pharmaceutical Intervention Fund be established in Nigeria, the idea was viewed by many people as financially expensive. According to official statements, the proposed Fund would be used in\r\nfinancing loans to local pharmaceutical firms in order to enhance their capacity for more production or possible expansion. Yet, the idea received some resentment from a section of the Nigerian masses.\r\n\r\nBut this critical report by American researchers may become a strong reason for most of them to now reconsider their respective positions on the matter, particularly as the nations on which Nigeria depends for health safety are being linked with consumer risks and other regulatory challenges.\r\n\r\nOn July 26, 2000, the Journal of the American Medical Association (Vol. 284, No. 4) reported that, every day, 290 people are killed by prescription drugs approved by the United States Food and Drug Administration, FDA. The report was authored by Dr. Barbara Starfield (MD, MPH) of the Johns Hopkins School of Hygiene and Public Health, who also placed the annual figure for deaths from the adverse effects of FDA-approved prescription medications at 106, 000 people.\r\n\r\nWith this manner of scary statistics from reputable medical sources, the regulation of consumer imports in Nigeria deserves to be treated as an urgent matter of national security. In order to achieve this, there must be a clearly laid_out plan to increase local production of pharmaceutical goods and enhance proportional reduction in the amount of imported medical supplies.\r\n\r\nAlready, there are favourable conditions for achieving this, but the Nigerian government seems to be going slow in this direction. Recently, the World Health Organization, WHO, certified Pan African Foundation, PAF, as a potential beneficiary of the NAFDAC-proposed Fund.  PAF is a Nigerian disposable syringe manufacturing company based in Port Harcourt, and was one among 11 other companies selected by NAFDAC for the WHO prequalification exercise. The company won a place alongside more others in South Africa, Uganda and Morocco, thus completing a list of seven companies endorsed by experts from US and the European Union.\r\n\r\nIn technical terms, a pre_qualification by WHO gives pharmaceutical companies the franchise of marketing their products worldwide. If PAF succeeds to function this way, it will not only strengthen the nation’s arm of consumer safety but also boost its revenue base.\r\n\r\nHowever, without a swift reaction to the NAFDAC-proposed Fund, Nigeria may only be sitting on her prospects in the sustainable management of its healthcare sector.\r\n\r\n*Mr.  Ikyaa, a commentator on national issues, wrote from Abuja.', '2013-10-12 03:35:16', 0, 15, 9, NULL, NULL, NULL),
(11, '\r\nAppraising Nigeria’s need for a pharmaceutical intervention fund', 'Mr. Lolu Ojo, Chief Executive Officer of Merit HealthCare Limited and Chairman of the Nigerian Association of Industrial Pharmacists (NAIP) in this interview with BEN NDUBUWA spoke on the need for government to help the pharmaceutical industry grow through  patronage as well as putting in place policies to check the incidence of fake drugs.\r\n\r\nWhat are the challenges facing the pharmaceutical industry?\r\n\r\nThe challenges of the pharmaceutical industry in Nigeria are myriad just like every other sector of the economy. First we do not have a conducive environment to operate in. The truth is that the environment is hostile to business growth and development. However, we are determined and we have charged our people to rise above the harsh economic environment.  We believe that as the day goes by, we will survive and give thanks to God.\r\n\r\nWhat more can you say in an environment where you generate your own electricity, build your borehole for water, pay for security, build your roads and drainage, among others. For instance, in the past one month or so, we had no light because some vandals stole the cable from the transformer. So, everyday, we run the generator to keep the business going. For me this is one of the greatest challenges.\r\n\r\nAgain, as you are probably aware, 70 per cent of all the pharmaceutical products consumed in this country are actually imported. Therefore, any swing in the foreign exchange rate directly impact on our businesses. If, for instance, you had made an order for some products and there is a change in the exchange rate that is not favourable you will be in trouble. This is an economy where you cannot increase price arbitrarily because the customer is already complaining of the old price not being affordable.\r\n\r\n The upward swing in exchange rate, which had been our lot in the past few years, erodes our margin and limit our ability to expand, upgrade facilities, employ more people, take risks/higher challenges, etc. More so, banks’ interest rate is not better. It is the most unfriendly compared to what happens in other climes. We pay as much as 25 per cent or more.  The high cost of production is quite challenging.\r\n\r\nSome of our colleagues, including myself, are into importation not necessarily because we want to but more because it offers a more convenient platform to start business. I would have preferred to be in manufacturing and we have decided that, no matter what it is going to cost, we will start our own production soon. The fear all over the place is that of inadequate power supply. For instance, if your production line is busy producing and all of a sudden the power goes off and assuming my generator is faulty, the worst that will happen to me as an importer is the inconveniences of not being able to use the computer systems or the office, but, it is not the same for a manufacturer. The loss would be enormous.\r\n\r\n \r\n\r\nAs chairman of NAIP, what do you intend to achieve?\r\n\r\nNAIP is a technical arm of the Pharmaceutical Society of Nigeria (PSN). The members of NAIP are those pharmacists who are not in the hospitals, community pharmacy practice, or in the academia. We have a lot of pharmacists in the banks, in telecommunications, in the oil industry and other areas.  \r\n\r\n As a group, we are stronger and able to speak with bigger and louder voice and we can mobilise our members and engage in those things that will favour them. As a body, whether you are manufacturing, marketing or other forms of industrial pharmacy, the important thing is that we come together instead of having a cacophony of voices. That way, we have resemblance of orderliness and one voice.\r\n\r\nJust recently, we had a stakeholders’ meeting to streamline the process of handling product complaints. Not only that, just like any other association, we can call ourselves to order and we can call companies to order as well. If pharmacists that are working with companies and are not doing well, we call them to order. We have handled so many cases like that. We also work on development, For instance, we have set up a business academy called ‘NAIP Business Academy’.\r\n\r\nIt is a training institution and the objective is to fill the skill and knowledge gaps that we have observed in the industry. When we started as sales representative, we were trained for up to three to four months. This is hardly the case now. So, it has become imperative that the Association should set up such an institution for our members.\r\n\r\nIt is unfortunate the some multinationals that we take pleasure in condemning are the ones that took extra time to train us before allowing us to go to the field. This institution is to take care of this gap created by the exit of some of these companies.  Unfortunately, the multinationals left because of the difficult operating environment. The Pfizer, Bayer, Roche, etc, they all left Nigeria then, though they are coming back but not as big as they were before their exit. Most of them now have a simple marketing office in the country.\r\n\r\n \r\n\r\nWhat Is attracting the multinationals back?\r\n\r\nYou cannot ignore Nigeria. The whole world is looking towards Nigeria as the next place for investment. Do you know what is happening in America and Europe now? Africa and Nigeria is surely the next destination for investment. You cannot ignore 160 million people. I learnt about the assertion of the CEO of Shoprite if as it is being widely circulated that 60 percent of Nigerians are living below poverty level, the remaining 40 percent that are probably above the poverty line is more than the population of South Africa.\r\n\r\n \r\n\r\nHow is your relationship with NAFDAC?         \r\n\r\nOur relationship with NAFDAC is normal but not optimal. I sincerely hope that before the end of my tenure as the national chairman of NAIP, the relationship will get better. I had actually led a delegation of NAIP members to the DG of NAFDAC’s office to declare our support and readiness to work with the agency. As a gentle man, he is good; his intentions are genuine and altruistic. There is need for more contact.\r\n\r\n A delegation of PSN recently met the DG and it was agreed that we need to interact more irrespective our differences for the good of the nation. Unfortunately, I could not attend that meeting because of other pressing and earlier scheduled NAIP assignment. We need to discuss and agree on issues and interventions in a free atmosphere before execution. Some issues or interventions like anti-faking devices, etc need the support of everybody for success.\r\n\r\nNAFDAC is a regulating institution and not a ‘strangulator’. The pharmaceutical industry form more than 80 per cent of NAFDAC’s clientele base. Therefore, we need each other for the sector to be vibrant. It is to our interest for a regulatory body like NAFDAC to be vibrant and alive to her responsibilities.\r\n\r\n \r\n\r\nHow do you feel about fake drugs coming from Asian countries?    \r\n\r\nUntil we change our attitude it will continue. The people bringing in fake drugs are Nigerians. Whether it is Musa, Okechukwu, Laolu or Ekaitte the thing is that they are Nigerians. There is nothing wrong with India or China. All the products you see on the shelves in Europe and America are from China and India; these drugs are made there because the cost of production is low. It is our people that go to tell these people don’t worry instead of 250 mg make it 50mg and label it 250mg and ship it to me I will sell them. What we tell our people is that they should buy from the right source.', '2013-10-12 03:35:27', 1, 5, 11, NULL, NULL, NULL),
(12, 'Indian Pharma Exports to Nigeria Hit $307m Annually', ' Indian High Commissioner to Nigeria, Mr. Mahesh Sachdev\r\n\r\nBy Olaolu Olusina\r\n\r\nIndia remains the largest source of pharmaceutical products to Nigeria with pharmaceutical exports to Nigeria from that country standing at a whopping $307 million a year at the end of  March  2012,  having gone up by 35 percent and 37 percent  annually during the  previous two years.\r\n\r\nThe Indian High Commissioner to Nigeria, Mr. Mahesh Sachdev, disclosed this while speaking at the inauguration of the second edition of the India Pharma Exhibition and Buyer-Seller Meet  which held recently in Lagos and was attended by over 60 Indian pharmaceutical stakeholders.\r\n\r\nHe maintained that the increase in the number of participants at the show compared to the first edition was a reaffirmation of the growing mutual relevance between the two countries.\r\n\r\n\r\nThe India Pharma Exhibition and Buyer-Seller Meet  is being organised by Pharmaceuticals Export Promotion Council (PHARMEXCIL), the exporters’ association of India’s formidable pharmaceutical industry,  considered as the world’s third largest by volume.\r\n\r\nAccording to the Indian High Commissioner, “This is the second time in less than two years that such an event is being organised in Nigeria. I am delighted to note that over 60 Indian pharma stakeholders have come to Nigeria for this event. I also commend enthusiastic participation by Nigeria own vibrant pharma sector. I believe that this is the largest such event to be held in Nigeria in pharma-sector, breaking the record of over 40 participants in the last Indian event two years ago.”\r\n\r\nDirector-General, PHARMEXCIL, Dr. P.V.Appaji, expressed gratitude to the Nigerian Government and the National Agency for Food and Drug Administration Control (NAFDAC) for the support given to members of his association just as he thanked all stakeholders for the warm reception given to Indian pharmaceutical companies in Nigeria.\r\n\r\nDirector-General, NAFDAC, Dr. Paul Orhii, lauded the efforts of the organisers, saying the forum designed to bring India pharma players to interact with their Nigerian counterparts, has the overarching goal of making genuine pharma products, especially the generic ones, available to Nigerians.\r\n', '2013-10-12 03:35:32', 0, 6, 12, NULL, NULL, NULL);
INSERT INTO `article` (`id_article`, `title`, `description`, `time_created`, `guestonly`, `memberid_member`, `newsid_news`, `newsletterid_newsletter`, `author`, `defaultimage`) VALUES
(13, 'PHARMACEUTICAL INDUSTRY IN NIGERIA IS FACING TOUGH TIME', 'Nnamdi Okafor\r\nThis may not be the best of times for the pharmaceutical industry in the country as the sector is still grappling with tough challenges that simply refuse to go away after many concerted efforts. According to Mr Nnamdi Okafor, the CEO, May & Baker Plc, the problems, which range from intense competition, low capacity utilization, serious faking and adulteration of original brands and even low buying power of customers, have been giving the industry a reputation of low profitability and return on investment.\r\n\r\nBut how does he intend to go through with these problems as the new helmsman of a 67-year-old healthcare institution?\r\n\r\n''I have my ideas on where I want to take the company which is also in tandem with the corporate vision. We want to take this good company that has been handed over to us and turn it into a great company.\r\n\r\nA truly strong and stable world-class company powered by strong global brands, aggressive business diversification, optimum business process efficiency and good corporate governance principles.'' Okafor said at an interactive session with media men, his first ever since assuming office, where he bared it all on his roadmap to take the company to its promised land. To him, the strength of any company is a reflection of the strength of its brands. ''So we intend to increase our support for our brands. We recognize that May & Baker is a strong brand and we shall continue to build on that strength'', he added.\r\n\r\nOkafor, a fellow of the Pharmaceutical Society of Nigeria(PSN) and the Nigerian Institute of Management (NIM) and an alumnus of the Lagos Business School, has been with May & Baker since 1985. He became the managing director of May & Baker Nigeria Plc on February 1, 2011 following the appointment of his predecessor, Dr Joseph Odumodu, as the Director-General of the Standards Organisation of Nigeria (SON).\r\n\r\nHe holds a Bachelor of Pharmacy degree from the then University of Ife, Ile-Ife (now Obafemi Awolowo University, Ife) as well as Master of Business Administration (MBA) in Marketing from ESUT Business School, Lagos. Commenting on the appointment of his former boss as SON Director General, he was full of praises for the man who put the company on a good pedestal for the 13 years.\r\n\r\nHis words: ''I want to put it on record that I inherited a good company. Our former managing director did a fantastic job in his 22 years of service to this company, 13 of which were spent at the helm of affairs. He navigated this company through its most turbulent years and put it on a sound pedestal with impressive revenue and profit growth, robust asset base and strong corporate reputation. So we are standing on a solid ground and are very proud of what he accomplished.''\r\n\r\nThis solid ground he promised to build on to make it a greater height by turning May & Baker to one of the fastest growing and profitable businesses in its category. ''This we intend to accomplish by developing a strategic mindset, putting our business on a rapid, stable and sustainable growth path, building systems and processes that function seamlessly and developing appetite for stretch financial goals. We are already working on a new strategic plan which will form the new road map for our journey towards our vision.''\r\n\r\nIn this piece, he shed more light on how he intends to achieve this lofty ideals.\r\n\r\nExcerpts:\r\nBackground\r\nI became the managing director of May & Baker Nigeria Plc on February 1, 2011. As you are aware, the transition became necessary when our immediate past managing director, Dr Joseph Odumodu, was appointed the Director-General of the Standards Organisation of Nigeria (SON) by the President. I am not new to the May & Baker family, having spent the 25 years of my working life in the company. If anything, I can say with every sense of modesty that I am indeed on a familiar terrain having also been on the board of this company as executive director for the past eight years.\r\n\r\nMy participation in the management of this company over these years has given me good knowledge of the business and will help me avoid past mistakes in trying to chart a new course for the company. However, it has its potential pitfall which is a tendency to perpetrate status quo. I can however assure you that the latter will not be the case here.\r\n\r\nThis is because the first thing I did on assumption of this new role is to reset my clock to my first day at work in May & Baker. This is to enable me see opportunities for change. It is clear to me that the only way to move this business to a new level is by implementing change through injection of new ideas and ways of doing things. So we will implement change. But we shall not implement change for the sake of change, we will only implement changes that will enhance our processes, business results and ultimately shareholder value.\r\n\r\nVision\r\nI want to put it on record the fact that I inherited a good company. Our former managing director did a fantastic job in his 22 years of service to this company, 13 of which were spent at the helm of affairs. He navigated this company through its most turbulent years and put it on a sound pedestal with impressive revenue and profit growth, robust asset base and strong corporate reputation. So we are standing on a solid ground and are very proud of what he accomplished.\r\n\r\nOn this note, permit me to give you an outline of my vision for the company and the strategic direction of the new management. May and Baker has a corporate vision which is ''To Be Among the Top 10 Conglomerates in Nigeria by 2020''. That vision remains unchanged because we believe it is the best we can have at this time. It was the collective decision of the management team taken at a strategic retreat three years ago and we shall vigorously pursue this dream.\r\n\r\nHowever, I have my ideas on where I want to take the company which is also in tandem with the corporate vision. We want to take this good company that has been handed over to us and turn it into a great company. A truly strong and stable world-class company powered by strong global brands, aggressive business diversification, optimum business process efficiency and good corporate governance principles.\r\n\r\nTo me the strength of a company is a reflection of the strength of its brands. So we intend to increase our support for our brands.\r\n\r\nWe recognize that May & Baker is a strong brand and we shall continue to build on that strength. However we also recognize that this equity is only strong with the older generation. Therefore we will deliberately target the younger generation with products and corporate social responsibility initiatives that will appeal to their lifestyle. Our strategic intent is to make May & Baker one of the fastest growing and profitable businesses in it''s category.\r\n\r\nThis we intend to accomplish by; developing a strategic mindset, putting our business on a rapid, stable and sustainable growth path, building systems and processes that function seamlessly and developing appetite for stretch financial goals. We are already working on a new strategic plan which will form the new road map for our journey towards our vision. This plan will be unveiled in the next three months and guide all our subsequent investments and resource deployment.\r\n\r\nCSR\r\nIn May & Baker we have supported the society through various sponsorships and donations to individuals, professional groups, governmental and non-governmental bodies. We intend to move a step further by being a credible source of information on public health and safety education, awareness and disease prevention. To achieve these objectives we are interested in partnering with societies and groups that invest in social wellbeing\r\n\r\nNew plant\r\nAs some of you are aware, May & Baker started a new pharmaceutical plant in Ota in 2008. It is a world class plant designed to blaze the trail in Nigeria as the country''s first WHO pre-Qualified pharmaceutical facility. This feat is meant to be not only a corporate accomplishment but also a national achievement. With it, Nigeria will be recording another first in West and Central Africa because the plant would be the first of its kind in these sub-regions. When fully certified by the WHO, the pharma plant in Ota will open a gateway to international business as well as help conserve the country''s foreign exchange in the area of drugs. This facility will be open to both local and international drug procuring entities who currently buy from Western and Asian manufacturers.\r\n\r\nThe facility, which has taken investment in excess of N3 billion, is now near completion and will have a capacity of about 30 billion tablets and 25 million bottles per annum working only two eight-hour shifts per day. This, in addition to our current capacities at the Ikeja factory, will represent a significant percentage of Nigeria''s drug requirement. The successful take-off of this plant in a short time is a major objective of the new management. In the years ahead we shall remain focused while playing on high stakes. We have plans to take full advantage of new openings in the economy and shall vigorously pursue opportunities in the export business especially within the West African sub region under the common external tariff programme of ECOWAS.\r\n\r\nWHO certification\r\nWe are not the only company in Nigeria that is going for the World Health Organization (WHO) certification . But I believe that we have the best chance of getting it because we have the best chance of getting it because we have the best facility. The process of getting WHO certification is a long process. It takes up to 18 months. It is a long process of documentation and it is also a political process. We are working very hard to get it in record time and I want to also say that NAFDAC is doing a very good job in this area by trying to assist companies which are ready to collaborate with WHO. We are going to Geneva next month(April) for a workshop meant to open up an avenue where drug manufacturers would interact with WHO officials who are in charge of this process.\r\n\r\nThat will facilitate the time frame for achieving it.\r\n\r\nChallenges\r\nYou know, the new plant is a very massive project. And I would say that we underestimated what would be involved. And as the project gets towards completion stage, we have challenges. So we have challenges with some of our contractors who started appealing for reviews and reviews. And at some point, we could not continue to grant such requests. So we have to change the main contractor who was working on the project. And in doing so, we lost some months-about two or three months. But I want to reassure you that that factory will start test running by the end of this month (March). We should be ready to start running on some products by the end of this month. And before the end of half year, we should officially commission that facility.\r\n\r\nThe year 2011 promises to be a very uncertain year for business generally. The reasons among others include the April general elections, adverse weather conditions in Asia and impact on food prices, revolution in the Middle East and impact on crude oil supply and prices and the overall impact of all these on inflation and purchasing power of an average Nigerian. As you are all aware, the pharmaceutical industry has been challenged over the years by various issues ranging from intense competition, low capacity utilization, serious faking and adulteration of original brands and even low buying power of customers.\r\n\r\nThis has given the industry a reputation of low profitability and return on investment. However at May and Baker Nigeria PLC, rather than being deterred by these negative signals, we have decided to drive our business and have performed above industry average. Our key strategies for higher performance in 2011 include stronger support for our brands especially our foods brand Mimee Noodles, broadening of our products offering and expected increase in output following commissioning of our Ota plant.\r\n\r\nWe are embarking on various expansion projects to deliver an enviable company for all. What we promise the shareholders is that we shall continue to make their investments in our company worthwhile by ensuring that they enjoy the benefits accruable from a strong entity in terms of returns on investment, capital appreciation and security of investment. We intend to excite our shareholders with more robust dividends.\r\n\r\nProducts\r\nCrunch Mee is still in the market but I must say it is not doing as much as we have wanted. The reason is that consumers seem not to like the way it is presented. People want it to be in form that would be easier for them to manage. At some point, we had to change its flavour and in that way improve its acceptability. We are in the process of reformulating it. But for it to get to the level that we want , the form will have to change and that will also involve some capital expenses. And because we are struggling to finish the one that we are doing, we are not in a hurry to put in money in buying machines for now. Mimee too is not out of the market.\r\n\r\nWe are very much in the market. Mimee is also not operating at 100 per cent capacity. We still have some spare capacity. What is happening is that that industry has full capacity. Some people came in, Dangote came in, Flourmills came in, Honeywell has been there. So we have a lot of capacity. In fact, Dangote built three factories and as I talk to you now, only one is functioning. The other two are down because the operators in the industry, unfortunately, are not expanding demand at the pace in which capacity was going up. There is some tough competition going on. That is why we have decided to, on our own, do something about demand. Very soon, we are going to be breaking our new campaign. And that campaign, I believe, is meant to sensitise the consumers and to get more people to try Mimee.\r\n\r\nAdulteration\r\nI am aware that some 10 years ago, this was a very bad situation because it was being done on two fronts: One, people were doing their own here and some were going outside Nigeria to also adulterate or fake these products. NAFDAC has done a lot to stem the tide. I would say that the incidence of adulteration has significantly come down. However, we still have issues of products being faked from time to time. I know we have encountered some of our products that were faked outside the country and brought in. And what we did was to quickly get in touch with NAFDAC.\r\n\r\nAnd working with NAFDAC, we were able to round up some of the parties that were involved in it because it was a very big cartel. What we have to do was trying to apply the break to whatever they had done and possibly confiscate the items. But beyond that, the legal system is a bit difficult to go through and we were not being prepared to go the whole hog of trying to imprison the people behind these things. But we just want to keep them uncomfortable and ensure that we dissuade them from continuing.\r\n\r\nOn the issue of faking, if you have followed the trend of the fakers, you will find out that they are evolving. One of the initiatives that we have also subscribed to is the use of identification code for the products. A lot of the products that can easily be faked would have some codes that people can pick up, and send SMS to a particular number and then get confirmation whether such product is genuine or not. As I said, the fakers are evolving, this is technology. For now, I am not sure they have been able to beat that particular system. So we are adopting it. And we keep looking at better ways to handle such situation.\r\n\r\nLiabilities\r\nIt is true that when you inherit assets, you also inherit liabilities. We know the environment that we are operating in and we know that everything is not rosy. And as business, we have liabilities. Of course, the first one is the fact that we need to build stronger brand as a company because that would help us to weather the storm, I mean when there is shock and withstand that shock in the system. If you have very strong brand, you will be able to withstand it.\r\n\r\nOf course, the fact that we are building a factory and we are borrowing money, we will also be paying interest on these funds. And what that means is that it would put some pressure on cash to run the business. That is one area that I am looking at with the Finance Director. That is what I can say for now. We will continue to improve on the good job that the past MD did. And there is always room for improvement.\r\n\r\nFuture plan\r\nWe are set to intensify our drive for rapid business expansion and diversification. We have already concluded plans to deepen our activities in current markets and enter new markets with new exciting products through parent and subsidiary companies. We are also at the verge of expanding our activities into new geographic markets including aggressive Inroads into export markets. We have in place established processes, procedures, policies and control systems that have guided our operations. Notwithstanding that these systems are working satisfactorily, we intend to look at some of them again with a view to making them more efficient. So we intend to continually fine tune our systems, processes and procedures for higher efficiency and better results.\r\n\r\nOur work force remains our most valuable assets. We are proud to have a rare assemblage of highly qualified and dedicated staff. This is made possible because May & Baker has a highly transparent recruitment process that ensures that only people who demonstrate the right competencies, mental and psychological disposition are employed. We shall provide the right environment and training for these talents to blossom into world class work force. We intend to adopt best practices in corporate governance. We shall run the business with the highest level of integrity and compliance with all relevant laws and regulations.\r\n\r\nAdvice\r\nOne thing that I want to say is that we are lucky as a country that we are exporting crude oil. So when the price of this crude oil goes up in the international market, and now that the Niger Delta situation is a bit under control, what this means is that we are going to export more crude; we are going to earn more revenue. The only thing that I would like to request is that the way this money is utilized will make a whole lot of difference.\r\n\r\nAs against what happens now, I mean the sharing of the money among the states and nobody can really accounts for what comes out of the extra windfall, the Federal Government should try to use this money to improve on infrastructure. Because a lot of people in the country are doing nothing because there is no power. For instance , imagine that we have 24 hours power supply, a lot of people will be working and also generate income for themselves. And that would reduce the difficulties that people are facing. It is important that government applies whatever resources(at its disposal) well.\r\n\r\nAnd like what is happening in some countries, food is very critical. The Federal Government should continue with what they are doing, which is subsidizing inputs of agriculture, which is important. And if it is possible, like it is being done in other parts of the world, subsidise some critical commodities like flour. The cost of flour has gone up and Nigerians like bread a lot. This means that they have to pay more for it. I think that the government should step in for such important items to see how the cost can be put under control. ', '2013-10-12 03:35:21', 1, 7, 10, NULL, NULL, NULL),
(14, 'Jobs In Nigeria In A Pharmaceutical Company, Wednesday 4, September 2013', 'An indigenous Pharmaceutical Company with foreign partners and brands in the ethical and OTC markets, seek candidates for immediate employment I the following areas:\r\n\r\nAREA MANAGERS (South-East and South West) – M01\r\nRegistered Pharmacist\r\n2 – 3 years post qualification experience as a medical sales representative\r\nMust be computer literate\r\n\r\nMEDICAL SALES REPRESENTATIVES (Ogun, Plateau, Jigawa, Kastina, Borno, Akwaibom, Bayelsa, Cross River, Abia, Gombe, Anambra, Kwara, Kogi, Bauchi, Enugu, Oyo, Ekiti, Osun and Yobe) – M01\r\nGraduate of a reputable university with degree in Pharmacy, Pharmacology, Physiology, Anatomy and Veterinary Medicine\r\n\r\nDRIVERS (Lagos) – M03\r\nValid driver’s license\r\nMinimum of 3 years driving experience\r\nMust be conversant with the Lagos State Routes and lives in Surulere or within environs\r\nAll applicants must possess a driving license with at least I year driving experience\r\n\r\nTO APPLY:\r\nInterested persons should apply immediately to: “markpharmjob@yahoo.com” giving full names, position applied for with the code and the state', '2013-10-12 03:35:41', 0, 8, 13, NULL, NULL, NULL),
(15, 'Prospect for Nigeria’s pharmaceutical industry ', 'The health needs of a nation reflect on certain essential medicines consumed by the populace. With the determining factor in the pharmaceutical business dependent on increasing disease pattern, over-the-counter (OTC) medicines such as analgesics, antimalarials and multivitamins make up a large share of the Nigerian market. Painkillers, also known as analgesics or antipyretics, have the largest market share of therapeutic classes of medicines locally produced due to their affordability, availability and widespread use for a wide range of symptoms.\r\n\r\nThis revelation, contained in a recent document review of the nation’s pharmaceutical sector tagged “Global United Nations Industrial Development Organisation (UNIDO) Project”, shows that analgesics constitute 25 percent of drugs produced in the country. Others include antibiotics (15 percent), multivitamins + haematinics (15 percent), antimalarial medicines (14 percent), antihypertensives (8 percent), cough and cold preparations (5 percent), antiretroviral medicines (6 percent), external/topical preparations (5 percent), antiTB medicines (4 percent), and others (3 percent).\r\n\r\nThe report shows that the existing large market size, strong demand and the need for management of infectious diseases, especially HIV/AIDS, malaria, TB, and neglected childhood diseases constitute enormous opportunity for pharmaceutical firms to produce therapeutic drugs to meet the health needs of Nigerians.\r\n\r\nCurrently, Nigeria is responsible for about 60 percent of medicines consumed in the ECOWAS by volume, underlining the huge sub-regional market of an estimated 600 million people, according to Pharmaceutical Manufacturing Group, Manufacturers’ Association of Nigeria (PMG-MAN). Trade incentives introduced by ECOWAS for pharmaceuticals within West Africa are helping to promote movement of pharmaceuticals within the sub-region, experts believe. Furthermore, the West African Pharmaceutical Manufacturers Association (WAPMA) is working to enhance confidence in the quality of medicines produced locally and promote business in the sub-region.\r\n\r\nEstimates of the size of the nation’s pharmaceutical market vary. Business Monitor International (BMI) in 2009 estimated Nigeria’s pharmaceutical market at $600 million. Out of this figure, BMI attributes the largest share of $418 million to generic medicines, $121 million to OTC products, and $61 million to patented products.\r\n\r\nEqually, Frost & Sullivan, a growing partnership company, estimated a pharmaceutical market value of $740 million in 2009. Out of this figure, $266.4 million was attributed to generic medicines, $177.6 million to branded products, and $296 million to OTC products.\r\n\r\nDrug manufacturers in the country are faced with several constraints, including low capacity utilisation, under-capitalisation, a weak financial base, high production costs, as well as difficulty in meeting WHO prequalification criteria.\r\n\r\nHowever, with some pharmaceutical firms such as Evans, SWIPHA, CHI Pharmaceuticals, May and Baker, and Fidson Healthcare plc in the process of upgrading and/or building new facilities in preparation to meet these prequalification requirements, we believe this development will promote local production, given the increased opportunity to participate in international tenders, such as WHO, United Nations Children Fund (UNICEF), United Nations Population Fund (UNFPA), UNITAID and the Global Fund to Fight AIDS, TB and Malaria. No doubt, WHO prequalification will help the nation to become self-sufficient in the manufacture of essential medicines, which will invariably have multiplier effects on the economy with creation of thousands of jobs and more foreign exchange earnings for the country.\r\n\r\nNigeria can learn from the India experience. The emergence of India’s pharmaceutical industry on the global landscape as a strong generics player allowed only process patents in pharmaceutical products. This development kept the cost of medicines at affordable levels by enabling domestic pharmaceutical firms to build technical expertise in reverse engineering of existing medicines by modifying the manufacturing process, thereby becoming efficient producers of generic drugs.', '2013-09-26 07:22:57', 1, 9, NULL, NULL, NULL, NULL),
(16, 'Pharmaceutical industry needs intervention fund, says PCN ', 'A CALL has been made to state governments to inject some intervention funds to pharmaceutical industries across the nation. While commending the Kano State government for some talks towards that direction, with the pharmacists association in the state, the Acting Registrar of Pharmaceutical Council of Nigeria, Mrs. Gloria O. Amuveri, maintained that if such intervention funds became operational, monitoring and ensuring the quality of drugs would be enhanced.\r\n\r\n  She made the call recently in Kano, in an interview with the newsmen. “It gives effective checks and balances while monitoring the compliance to manufacturing practices,” she added.\r\n\r\n  According to her more people would be gainfully employed and the sources of drugs would also be known without any hitch, she lamented. With such funds, she explained, the Council could institutionalize the drugs distribution channels in the country.\r\n\r\n  “Another advantage we can derive from such funds is, we will now have more indigenous companies manufacturing what we consume. If indigenous companies are the ones manufacturing then we can do what is called marketing surveillance. We can also have what is called ‘Recall Processes and Procedures,’” the registrar emphasized.\r\n\r\n  Amuveri assured that that would also mean very good development to the entire healthcare system in the country.\r\n\r\n  On interns, she highlighted that the council was doing everything possible to encourage the state health facilities to ensure that they employed interns, being a continuous training process by the professionals. “We wrote to all the states in the federation that it was imperative that interns were employed by the state governments. And we are commending Kano State for responding positively. Apart from that just look at the number of students sent by governor Kwankwaso to study pharmacy abroad,” she commended.', '2013-10-12 03:35:57', 0, 10, 15, NULL, NULL, NULL),
(31, 'adfadfasd', 'asdfasdfasdf', '2014-01-28 21:00:51', 0, 6, 30, NULL, 'asdfasfasdf', 'C:\\fakepath\\1151018_10201129338229254_1462394867_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article_search`
--

CREATE TABLE IF NOT EXISTS `article_search` (
  `id_articlesearch` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_articlesearch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `article_search`
--

INSERT INTO `article_search` (`id_articlesearch`, `article_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`, `user_id`) VALUES
(1, 15, '2014-02-06 15:06:53', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(2, 11, '2014-02-06 15:07:15', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(3, 15, '2014-02-06 15:09:42', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(4, 1, '2014-02-06 15:09:55', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(5, 2, '2014-02-06 15:20:02', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(6, 17, '2014-02-06 15:21:06', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(7, 5, '2014-02-06 15:21:22', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(8, 2, '2014-02-06 15:21:23', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(9, 8, '2014-02-06 15:21:24', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(10, 10, '2014-02-06 15:21:34', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(11, 13, '2014-02-06 15:21:35', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(12, 15, '2014-02-06 15:21:35', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(13, 16, '2014-02-06 15:21:40', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(14, 2, '2014-02-06 15:21:51', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(15, 1, '2014-02-06 15:22:50', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(16, 5, '2014-02-06 15:27:54', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(17, 3, '2014-02-06 15:35:47', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(18, 15, '2014-02-06 20:29:51', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(19, 15, '2014-02-06 20:31:22', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(20, 15, '2014-02-06 20:35:06', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(21, 15, '2014-02-06 20:39:40', '::1', 'Lagos', 3.8982, 6.98924, NULL),
(22, 1, '2014-02-06 21:09:01', '::1', 'Lagos', 3.8982, 6.98924, 0),
(23, 1, '2014-02-06 21:09:21', '::1', 'Lagos', 3.8982, 6.98924, 0),
(24, 618, '2014-02-07 09:06:47', '::1', 'Lagos', 3.8982, 6.98924, 0),
(25, 488, '2014-02-07 09:08:30', '::1', 'Lagos', 3.8982, 6.98924, 0),
(26, 618, '2014-02-07 09:09:20', '::1', 'Lagos', 3.8982, 6.98924, 0),
(27, 1, '2014-02-07 21:05:40', '::1', 'Lagos', 3.39583, 6.45306, 0),
(28, 31, '2014-02-10 22:33:47', '::1', 'Lagos', 3.39583, 6.45306, 18),
(29, 16, '2014-02-10 22:34:25', '::1', 'Lagos', 3.39583, 6.45306, 18),
(30, 5, '2014-02-16 20:26:16', '::1', 'Lagos', 3.39583, 6.45306, 0),
(31, 2, '2014-02-16 20:26:24', '::1', 'Lagos', 3.39583, 6.45306, 0),
(32, 17, '2014-02-16 20:27:11', '::1', 'Lagos', 3.39583, 6.45306, 0),
(33, 5, '2014-02-16 20:34:06', '::1', 'Lagos', 3.39583, 6.45306, 0),
(34, 3, '2014-02-16 20:34:12', '::1', 'Lagos', 3.39583, 6.45306, 0),
(35, 1, '2014-03-01 06:19:58', '::1', 'Lagos', 3.39583, 6.45306, 18),
(36, 11, '2014-03-01 07:31:18', '::1', 'Lagos', 3.39583, 6.45306, 18);

-- --------------------------------------------------------

--
-- Table structure for table `brandname`
--

CREATE TABLE IF NOT EXISTS `brandname` (
  `id_brandname` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` tinytext,
  `logo` varchar(255) DEFAULT NULL,
  `branches` longtext,
  PRIMARY KEY (`id_brandname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `brandname`
--

INSERT INTO `brandname` (`id_brandname`, `name`, `description`, `logo`, `branches`) VALUES
(1, 'Emzor', 'Emor', '', ''),
(2, 'Pfizer', 'Pfizer', '', ''),
(3, 'Orange Drugs', 'Orange Drugs', '', ''),
(4, 'May and Baker', 'May and Baker', '', ''),
(5, 'Swipha', 'Swipha', '', ''),
(6, 'Dana', 'Dana', '', ''),
(7, 'ciprotab', '', NULL, NULL),
(8, 'FIDSON', 'FIDSON HEALTHCARE LTD  ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brandname_search`
--

CREATE TABLE IF NOT EXISTS `brandname_search` (
  `id_brandnamesearch` int(11) NOT NULL AUTO_INCREMENT,
  `brandname_id` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_brandnamesearch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cautions`
--

CREATE TABLE IF NOT EXISTS `cautions` (
  `id_cautions` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_cautions`),
  KEY `FKcautions692964` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contraindications`
--

CREATE TABLE IF NOT EXISTS `contraindications` (
  `id_contraindications` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_contraindications`),
  KEY `FKcontraindi864295` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dosingtype`
--

CREATE TABLE IF NOT EXISTS `dosingtype` (
  `id_dosingtype` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  PRIMARY KEY (`id_dosingtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `drug` (
  `id_drug` int(10) NOT NULL AUTO_INCREMENT,
  `drug_name` tinytext,
  `drug_description` mediumtext,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `brandname_id` int(10) DEFAULT NULL,
  `drugclass_id` int(10) DEFAULT NULL,
  `drugcategory_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_drug`),
  UNIQUE KEY `drugclassid_drugclass` (`drugclass_id`,`drugcategory_id`),
  KEY `FKdrug496552` (`brandname_id`),
  KEY `FKdrug539221` (`drugclass_id`),
  KEY `FKdrug586190` (`drugcategory_id`),
  KEY `drugcategoryid_drugcategory` (`drugcategory_id`),
  KEY `drugcategoryid_drugcategory_2` (`drugcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=652 ;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(1, 'abacavir', 'ABACAVIR \n\n\n<h5>Presentations</h5>\n<p>Oral liquid: 100 mg (as sulfate)/5 ml. Tablet: 300mg (as sulfate)\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"HIV infection in combination with at least two other antiretroviral\nmedicines"\n</p>\n\n\n<h5>class</h5>\n<p>Anti-infective medicines\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"HIV infection in combination with at least two other antiretroviral medicines,\nby mouth, ADULT, 300 mg twice daily; "\n"CHILD 3 months–16 years, 8 mg/kg\ntwice daily "\n(maximum, 600 mg daily).\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"hypersensitivity reactions including nausea, vomiting,\ndiarrhoea, anorexia, lethargy, fatigue, fever, headache, insomnia, and\ndizziness (see also note on Hypersensitivity reactions above); blood\ndisorders; lipodystrophy (see introductory note above); pancreatitis, liver\ndamage and lactic acidosis (see note on Hepatic disease above); very rarely\nStevens-Johnson syndrome and toxic epidermal necrolysis; rash and\ngastrointestinal disturbances more common in children."\n</p>\n\n\n<h5>interactions</h5>\n<p>Methadone :Plasma concentration of methadone possibly reduced\nPhenobarbital :Plasma concentration of abacavir possibly reduced\nPhenytoin:Plasma concentration of abacavir possibly reduced\nRifampicin :Plasma concentration of abacavir possibly reduced\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>???</p>\n\n\n<h5>Precautions</h5>\n<p>chronic hepatitis B or C, hepatic impairment (see Note on\nhepatic disease below; Appendix 5); renal impairment (Appendix 4);\npregnancy (see introductory note above; Appendix 2) and breastfeeding (see\nintroductory note above; Appendix 3); interactions: Appendix 1.\nHYPERSENSITIVITY Reactions. Life-threatening hypersensitivity reactions\ncharacterized most commonly by fever or rash and possibly nausea, vomiting, diarrhoea,\nabdominal pain, dyspnoea, cough, lethargy, malaise, headache, and myalgia, less\nfrequently by mouth ulceration, oedema, hypotension, sore throat, adult respiratory\ndistress syndrome, paraesthesia, arthralgia, conjunctivitis, lymphadenopathy,\nlymphocytopenia, renal failure, and anaphylaxis and rarely by myolysis have been\nreported. Laboratory abnormalities may include raised liver enzymes (see Hepatic\ndisease below) and creatine kinase. Symptoms usually appear in the first 6 weeks, but\nmay occur at any time; monitor patients for symptoms every 2 weeks for 2 months;\ndiscontinue immediately if any symptom of hypersensitivity develops and do not\nrechallenge (risk of more severe hypersensitivity reaction); also discontinue if\nhypersensitivity cannot be ruled out, even when other diagnoses possible (if rechallenge\nis necessary, it must be carried out in a hospital setting). If abacavir is stopped for any\nreason other than hypersensitivity, exclude hypersensitivity reaction as the cause and\nrechallenge only if medical assistance is readily available; care is needed with\nconcomitant use of drugs which are known to cause skin toxicity.\nPATIENT ADVICE. Patients should be told about the importance of regular dosing\n(intermittent therapy may increase sensitization), how to recognize signs of\nhypersensitivity, and advised to seek immediate medical attention if symptoms develop\nor before re-starting treatment.\nHEPATIC DISEASE. Potentially life-threatening lactic acidosis and severe\nhepatomegaly with steatosis have been reported. Exercise caution in patients\n(particularly obese women) with hepatomegaly, hepatitis, liver enzyme abnormalities, or\nrisk factors for liver disease and hepatic steatosis (including alcohol abuse) and\ndiscontinue if rapid deterioration in liver function tests, symptomatic hyperlactataemia,\nprogressive hepatomegaly, or lactic acidosis occurs.</p>\n\n\n<h5>Pregnancy</h5>\n<p>Toxicity in animal studies</p>\n\n\n<h5>renal toxicity</h5>\n<p>Severe Avoid</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>Avoid in moderate hepatic impairment unless essential;\navoid in severe hepatic impairment</p>\n\n', '2013-11-21 22:03:04', 1, NULL, 1),
(486, 'Acetazolamide', 'Acetazolamide\n\n<h5>Presentations</h5>\n<p>Tablet: 250 mg\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"as an adjunct in the treatment of chronic open-angle glaucoma;\nsecondary glaucoma; as part of preoperative treatment of acute angleclosure\nglaucoma"\n</p>\n\n\n<h5>class</h5>\n<p>Ophthalmological preparations\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Chronic open-angle glaucoma, secondary glaucoma, by mouth, ADULT, 0.25–1 g\ndaily in divided doses"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"nausea, vomiting, diarrhoea, taste disturbances; loss of\nappetite, paraesthesia, flushing, headache, dizziness, fatigue, irritability,\ndepression; thirst, polyuria; reduced libido; metabolic acidosis and\nelectrolyte disturbances on long-term therapy; occasionally drowsiness,\nconfusion, hearing disturbances, urticaria, melaena, glycosuria, haematuria,\nabnormal liver function, renal calculi, blood disorders (including\nagranulocytosis and thrombocytopenia), and rash (including Stevens-\nJohnson syndrome and toxic epidermal necrolysis); transient myopia\nreported"\n</p>\n\n\n<h5>interactions</h5>\n<p>"Acetylsalicylic acid: Increased risk of toxicity when given with high-dose\nacetylsalicylic acid\nAlcohol: Enhanced hypotensive effect\nAmitriptyline: Increased risk of postural hypotension\nAmlodipine: Enhanced hypotensive effect\nAtenolol: Enhanced hypotensive effect\n* Carbamazepine: Increased risk of hyponatraemia; acetazolamide increases\nplasma carbamazepine concentration\nChlorpromazine Enhanced hypotensive effect\nCisplatin Increased risk of nephrotoxicity and ototoxicity\nClomipramine Increased risk of postural hypotension\nContraceptives, Oral Antagonism of diuretic effect by estrogens\nDexamethasone Increased risk of hypokalaemia; antagonism of diuretic\neffect\nDiazepam Enhanced hypotensive effect\n* Digoxin Hypokalaemia caused by acetazolamide increases cardiac\ntoxicity of digoxin\n* Enalapril Enhanced hypotensive effect\nFluphenazine Enhanced hypotensive effect\nFurosemide Increased risk of hypokalaemia\nGlyceryl trinitrate Enhanced hypotensive effect\nHalothane Enhanced hypotensive effect\nHydralazine Enhanced hypotensive effect\nHydrochlorothiazide Increased risk of hypokalaemia\nHydrocortisone Increased risk of hypokalaemia; antagonism of diuretic\neffect\nIbuprofen Risk of nephrotoxicity of ibuprofen increased; antagonism\nof diuretic effect\nIsosorbide dinitrate Enhanced hypotensive effect\nKetamine Enhanced hypotensive effect\nLevodopa Enhanced hypotensive effect\n* Lidocaine Hypokalaemia caused by acetazolamide antagonizes action\nof lidocaine (interaction less likely when lidocaine is used\ntopically)\n* Lithium Excretion of lithium increased\nMethyldopa Enhanced hypotensive effect\nNifedipine Enhanced hypotensive effect\nNitrous oxide Enhanced hypotensive effect\nPhenobarbital Increased risk of osteomalacia\nPhenytoin Increased risk of osteomalacia\nPrednisolone Increased risk of hypokalaemia; antagonism of diuretic\neffect\nPropranolol Enhanced hypotensive effect\n* Quinidine Cardiac toxicity of quinidine increased if hypokalaemia\noccurs; acetazolamide possibly reduces excretion of\nquinidine (increased plasma concentration)\nSalbutamol Increased risk of hypokalaemia with high doses of salbutamol                                       Sodium nitroprusside Enhanced hypotensive effect\nThiopental Enhanced hypotensive effect\nTimolol Enhanced hypotensive effect\nVerapamil Enhanced hypotensive effect"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"hypersensitivity to sulfonamides; chronic angle-closure\nglaucoma (may mask deterioration); hypokalaemia, hyponatraemia,\nhyperchloraemic acidosis; renal impairment ; severe hepatic\nimpairment "\n</p>\n\n\n<h5>Precautions</h5>\n<p>"the elderly; pregnancy and breastfeeding; diabetes mellitus; pulmonary obstruction; monitor blood\ncount and electrolytes if used for long periods"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>Not used to treat hypertension in pregnancy\nFirst trimester: Avoid (toxicity in animal studies)</p>\n\n\n<h5>breastfeeding</h5>\n<p>Amount too small to be harmful</p>\n\n\n<h5>renal toxicity</h5>\n<p>Mild: Avoid; metabolic acidosis\n</p>\n\n\n', '2014-01-06 15:19:38', 2, NULL, 2),
(487, 'Acetylcysteine', 'Acetylcysteine\n\n<h5>Presentations</h5>\n<p>Injection: 200 mg/ml in 10-ml ampoule\n</p>\n\n\n<h5>class</h5>\n<p>Antidotes\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>paracetamol overdosage\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Paracetamol overdosage, by intravenous infusion, ADULT and CHILD, initially\n150 mg/kg over 15 minutes, then 50 mg/kg over 4 hours, then 100 mg/kg\nover 16 hours.\nADMINISTRATION. Dilute requisite dose in glucose intravenous infusion solution,\n5% as follows: ADULT and CHILD over 12 years, initially 200 ml given over 15 minutes,\nthen 500 ml over 4 hours, then 1 litre over 16 hours: CHILD under 12 years with a body\nweight over 20 kg, initially 100 ml given over 15 minutes, then 250 ml over 4 hours,\nthen 500 ml over 16 hours; CHILD under 12 years with a body weight under 20 kg,\ninitially 3 ml/kg given over 15 minutes, then 7 ml/kg over 4 hours, then 14 ml/kg over\n16 hours.\nNOTE. Manufacturer may recommend other infusion fluids, but glucose solution, 5%\nis preferable"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"hypersensitivity-like reactions may be managed by reducing\ninfusion rate or suspending infusion until reaction has settled (specialist\nadvice may be needed); rash may be managed with an antihistamine, for\nexample chlorphenamine, and acute asthma with a short-acting beta2-\nagonist, such as salbutamol"\n</p>\n\n\n<h5>Precautions</h5>\n<p>asthma</p>\n\n', '2014-01-06 15:19:46', 3, NULL, 3),
(488, 'Acetylsalicylic Acid', 'Acetylsalicylic Acid\n\n\n<h5>Presentations</h5>\n<p>"Suppository: 50–150 mg.\nTablet: 75–500 mg"\n</p>\n\n\n<h5>class</h5>\n<p>Analgesics, antipyretics, NSAIMs, DMARDs\n; Cardiovascular medicines\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"mild to moderate pain including dysmenorrhoea, and headache; pain and\ninflammation in rheumatic disease and other musculoskeletal disorders,\nincluding juvenile arthritis; pyrexia; acute migraine attack;\nantiplatelet; acute migraine attacks"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Mild to moderate pain, pyrexia, by mouth with or after food, ADULT, 300–\n900 mg every 4–6 hours if necessary; maximum, 4 g daily; CHILD under\n16 years, not recommended.\nMild to moderate pain, pyrexia, by rectum, ADULT, 600–900 mg inserted every\n4 hours if necessary; maximum, 3.6 g daily; CHILD under 16 years, not\nrecommended.\nInflammatory arthritis, by mouth with or after food, ADULT, 4–8 g daily in\ndivided doses in acute conditions; up to 5.4 g daily may be sufficient in\nchronic conditions.                                                Juvenile arthritis, by mouth with or after food, CHILD, up to 130 mg/kg daily in\n5–6 divided doses in acute conditions; 80–100 mg/kg daily in divided doses\nfor maintenance Treatment of acute migraine attack, by mouth preferably with or after food,\nADULT, 300–900 mg at first sign of attack, repeated every 4–6 hours if\nnecessary; maximum, 4 g daily; CHILD under 16 years, not recommended; Treatment of acute migraine attack, by rectum, ADULT, 600–900 mg inserted at\nfirst sign of attack, repeated every 4 hours if necessary; maximum, 3.6 g\ndaily; CHILD under 16 years, not recommended."\nProphylaxis of cerebrovascular disease or myocardial infarction, by mouth,\nADULT, 75–100 mg daily.\nTreatment of acute myocardial infarction, acute ischaemic stroke, by mouth,\nADULT, 150–300 mg."\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"generally mild and infrequent for lower doses, but common\nwith anti-inflammatory doses; gastrointestinal discomfort or nausea,\nulceration with occult bleeding (occasionally major haemorrhage); also other\nhaemorrhage including subconjunctival; hearing disturbances such as\ntinnitus (rarely deafness), vertigo, confusion, hypersensitivity reactions\nincluding angioedema, bronchospasm, and rash; increased bleeding time;\nrarely oedema, myocarditis and blood disorders (particularly\nthrombocytopenia)"\n</p>\n\n\n<h5>interactions</h5>\n<p>"Acetazolamide Increased risk of toxicity when given with high-dose\nacetylsalicylic acid\nAntacids (Aluminium\nhydroxide; Magnesium\nhydroxide)\nExcretion of acetylsalicylic acid increased by alkaline urine\nDexamethasone Increased risk of gastrointestinal bleeding and ulceration;\ndexamethasone reduces plasma salicylate concentration\nEnalapril Antagonism of hypotensive effect; risk of renal impairment\nwhen acetylsalicylic acid given in doses of over 300 mg\ndaily\n* Fluoxetine Increased risk of bleeding\n* Heparin Enhanced anticoagulant effect of heparin\nHydrocortisone Increased risk of gastrointestinal bleeding and ulceration;\nhydrocortisone reduces plasma salicylate concentration\n* Ibuprofen Avoid concomitant use (increased adverse effects);\nantiplatelet effect of acetylsalicylic acid possibly reduced\n* Methotrexate Reduced excretion of methotrexate (increased toxicity)\nMetoclopramide Enhanced effect of acetylsalicylic acid (increased rate of\nabsorption)\nMifepristone Manufacturer of mifepristone advises avoid concomitant\nuse\nPhenytoin Enhancement of effect of phenytoin\nPrednisolone Increased risk of gastrointestinal bleeding and ulceration;\nprednisolone reduces plasma salicylate concentration\nSpironolactone Antagonism of diuretic effect\nValproic acid Enhancement of effect of valproic acid\n* Warfarin Increased risk of bleeding due to antiplatelet effect"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"hypersensitivity (including asthma, angioedema, urticaria, or\nrhinitis) to acetylsalicylic acid or any other NSAIM; children and\nadolescents under 16 years (to reduce risk of Reye syndrome, see also notes\nabove); previous or active peptic ulceration; haemophilia and other bleeding\ndisorders; not for treatment of gout"\n</p>\n\n\n<h5>Precautions</h5>\n<p>"asthma, allergic disease; renal impairment; hepatic\nimpairment; pregnancy and breastfeeding; elderly; G6PD-deficiency; dehydration; \nuncontrolled hypertension</p>\n\n\n<h5>Pregnancy</h5>\n<p>"Third trimester: Impaired platelet function and risk\nof haemorrhage; delayed onset and increased\nduration of labour with increased blood loss; avoid\nanalgesic doses if possible in last few weeks (low\ndoses probably not harmful); with high doses,\nclosure of fetal ductus arteriosus in utero and\npossibly persistent pulmonary hypertension in the\nnewborn; kernicterus in jaundiced neonates"\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>"Short course safe in usual dosage; monitor infant;\nregular use of high doses could impair platelet\nfunction and produce hypoprothrombinaemia in\ninfant if neonatal vitamin K stores low; possible\nrisk of Reye syndrome"\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>"Severe Avoid; sodium and water retention;\ndeterioration in renal function;\nincreased risk of gastrointestinal\nbleeding"\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>"Avoid in severe hepatic impairment — increased risk of\ngastrointestinal bleeding"\n</p>\n\n', '2014-01-06 21:17:24', 1, NULL, 4),
(489, 'Aciclovir Ointment ', 'Aciclovir\n\n\n<h5>Presentations</h5>\n<p>Ointment: 3% W/W\n</p>\n\n\n<h5>class</h5>\n<p>Ophthalmological preparations\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>keratitis caused by herpes simplex; systemic herpes simplex infections\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"ADMINISTRATION. Herpes simplex keratitis, apply directly to the eye, ADULT and\nCHILD, 1 cm of ointment 5 times daily; continue for at least 3 days after healing is\ncomplete."\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"local irritation including transient mild stinging, inflammation;\nsuperficial punctuate keratopathy reported; very rarely hypersensitivity\nreactions including angioedema"\n</p>\n\n\n\n<h5>Pregnancy</h5>\n<p>limited absorption from topical preparations\n</p>\n\n\n', '2014-01-06 15:20:04', 1, NULL, 5),
(490, 'Aciclovir', ' Aciclovir\n\n\n<h5>Presentations</h5>\n<p>"Powder for injection: 250 mg (as sodium salt) in vial.\nTablet: 200 mg"\n</p>\n\n\n<h5>class</h5>\n<p>Anti-infective medicines\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"treatment of primary genital herpes; disseminated varicella–zoster\ninfections in immunocompromised patients; herpes simplex encephalitis;\neye infections"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Treatment of herpes simplex (including genital herpes), by mouth, ADULT and\nCHILD over 2 years, 200 mg (400 mg in the immunocompromised or if\nabsorption is impaired) 5 times daily, usually for 5 days (longer if new lesions appear during treatment or if healing is incomplete); CHILD under\n2 years, half the adult dose.\nTreatment of herpes simplex in the immunocompromised, severe initial genital\nherpes, by intravenous infusion, ADULT and CHILD over 12 years, 5 mg/kg\nevery 8 hours, usually for 5 days.\nTreatment of disseminated herpes simplex, by intravenous infusion, NEONATE and\nINFANT up to 3 months, 20 mg/kg every 8 hours for 10–14 days (21 days if\nCNS involvement); CHILD 3 months–12 years, 250 mg/m2 every 8 hours,\nusually for 5 days.\nPrevention of recurrent herpes simplex, by mouth, ADULT, 200 mg 4 times daily\nor 400 mg twice daily, reduced to 200 mg 2–3 times daily if possible and\ninterrupted every 6–12 months for reassessment.\nProphylaxis of herpes simplex in the immunocompromised, by mouth, ADULT\nand CHILD over 2 years, 200–400 mg 4 times daily; CHILD under 2 years,\nhalf the adult dose.\nTreatment of chickenpox, by mouth, ADULT, 800 mg 4–5 times daily for\n5–7 days; CHILD under 2 years, 200 mg 4 times daily, CHILD 2–5 years,\n400 mg 4 times daily; CHILD over 6 years, 800 mg 4 times daily.\nTreatment of herpes zoster, by mouth, ADULT, 800 mg 5 times daily for\n7–10 days.\nTreatment of varicella–zoster, by intravenous infusion, ADULT and CHILD over\n12 years, 5 mg/kg every 8 hours, usually for 5–7 days (doubled in the\nimmunocompromised); NEONATE and INFANT up to 3 months,\n10–20 mg/kg every 8 hours for at least 7 days; CHILD 3 months–12 years,\n250 mg/m2 every 8 hours usually for 5 days (doubled in the\nimmunocompromised).\nTreatment of herpes simplex encephalitis, varicella–zoster in the\nimmunocompromised, by intravenous infusion, ADULT and CHILD over\n12 years, 10 mg/kg every 8 hours; CHILD 3 months–12 years, 500 mg/m2\nevery 8 hours; usually given for at least 10 days in encephalitis, possibly for\n14–21 days.\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer''s\ndirections. In obese patients, parenteral dose should be calculated on the basis of ideal\nweight for height (to avoid excessive dosage)."\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"nausea, vomiting, abdominal pain, diarrhoea, headache,\nfatigue, rash, urticaria, pruritus, photosensitivity; very rarely hepatitis,\njaundice, dyspnoea, neurological reactions (including dizziness, confusion,\nhallucinations, convulsions, and drowsiness), acute renal failure, anaemia,\nthrombocytopenia, and leukopenia; on intravenous infusion, severe local inflammation (sometimes resulting in ulceration), and very rarely fever,\nagitation, tremor, and psychosis"\n</p>\n\n\n<h5>interactions</h5>\n<p>Ciclosporin: Increased risk of nephrotoxicity\n</p>\n\n\n<h5>Precautions</h5>\n<p>maintain adequate hydration\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>"Not known to be harmful; limited absorption from\ntopical preparations"\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>"Significant amount in milk after systemic\nadministration, but considered safe to use"\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>"Mild : Reduce intravenous dose\nModerate to severe: Reduce dose"\n</p>\n\n\n', '2014-01-06 15:20:17', 2, NULL, 6),
(491, 'adrenaline e-d', 'adrenaline\n\n\n<h5>Presentations</h5>\n<p>Solution (eye drops): 2% (as hydrochloride)\n</p>\n\n\n<h5>class</h5>\n<p>Ophthalmological preparations\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>chronic open-angle glaucoma, ocular hypertension; anaphylaxis; cardiac arrest\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Chronic open-angle glaucoma, by ocular instillation, ADULT, 1 drop (0.5% or 1%\nsolution) 1–2 times daily"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"stinging, blurred vision, photophobia, eye pain, conjunctival\nhyperaemia, headache or browache; occasionally conjunctival sensitization\nand local skin reactions; conjunctival pigmentation and macular oedema in\naphakia (after prolonged use); systemic adverse reactions are rare following\ntopical use at normal dosage but tachycardia, hypertension, arrhythmia,\ndizziness, and sweating have been reported"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"angle-closure glaucoma, unless an iridectomy has been\ncarried out"\n</p>\n\n\n<h5>Precautions</h5>\n<p>"hypertension, heart disease, aneurysm, arrhythmia, tachycardia,\nhyperthyroidism, cerebral arteriosclerosis, diabetes mellitus"\n</p>\n\n\n', '2014-01-06 15:21:51', 3, NULL, 1),
(492, 'Adrenaline', 'Adrenaline\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 1 mg (as hydrochloride or hydrogen tartrate) in 1-ml ampoule                                                                                                                  NOTE: Different dilutions of epinephrine injection are used for different routes of administration.\r\nNOTE: Different dilutions of epinephrine injection are used for different routes of administration.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antiallergics and medicines used in anaphylaxis\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>severe anaphylactic reaction; severe angioedema; cardiac arrest; asthma\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Anaphylaxis, Epinephrine (adrenaline), by intramuscular injection using epinephrine injection 1:1000, ADULT and ADOLESCENT, 500 micrograms (0.5 ml);\r\nINFANT under 6 months, 50 micrograms (0.05 ml); CHILD 6 months–\r\n6 years, 120 micrograms (0.12 ml), 6–12 years, 250 micrograms (0.25 ml).\r\nNOTE. The above doses may be repeated several times if necessary at 5-minute intervals, according to blood pressure, pulse, and respiratory function.\r\nIf circulation inadequate, epinephrine (adrenaline) by slow intravenous injection using epinephrine injection 1:10 000 (given at a rate of 1 ml/minute),                                                                                                 In cardiac arrest, epinephrine (adrenaline) is given by intravenous injection in a dose of 1 mg (10 ml of 1:10 000 solution) as part of the procedure for cardiopulmonary resuscitation "\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"tachycardia and arrhythmias, hypertension, tremor, anxiety,\r\nsweating, nausea, vomiting, weakness, hyperglycaemia, dizziness and pulmonary oedema have all been reported; headache common"\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Severe anaphylaxis in patients on non-cardioselective betablockers,\r\nfor example propranolol, may not respond to epinephrine\r\n(adrenaline) injection calling for intravenous injection of salbutamol. Furthermore, epinephrine (adrenaline) may cause severe hypertension\r\nin those receiving beta-blockers. Patients on tricyclic antidepressants areconsiderably more susceptible to arrhythmias, calling for a much reduceddose of adrenaline."\r\n</p>\r\n\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"hyperthyroidism, hypertension, diabetes mellitus, heart disease,\r\narrhythmias, cerebrovascular disease; second stage of labour; elderly"\r\n</p>\r\n\r\n\r\n', '2014-01-06 15:21:59', 4, NULL, 2),
(493, 'Albendazole', 'Albendazole\n\n\n<h5>Presentations</h5>\n<p>Tablet (chewable): 400 mg, 200mg\n</p>\n\n\n<h5>class</h5>\n<p>Anti-infective medicines\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"Echinococcus multilocularis and E. granulosus infections prior to surgery or\nnot amenable to surgery; neurocysticercosis; nematode infections including\nascariasis, capillariasis, enterobiasis, hookworm infections, strongyloidiasis,\ntrichostrongyliasis, trichuriasis; filariasis"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Cystic echinococcosis, by mouth, ADULT over 60 kg, 800 mg daily in 2 divided doses for 28 days followed by 14 tablet-free days; ADULT less than 60 kg, 15 mg/kg daily in 2 divided doses (maximum daily dose, 800 mg) for 28 days followed by 14 tablet-free days; up to 3 courses may be given.\nAlveolar echinococcosis, by mouth, ADULT, as for cystic echinococcosis, but treatment cycles may need to be continued for months or years                                                                                 Neurocysticercosis, by mouth, ADULT over 60 kg, 800 mg daily in 2 divided doses for 8–30 days; ADULT less than 60 kg, 15 mg/kg daily in 2 divided doses (maximum daily dose, 800 mg) for 8–30 days.\nAscariasis, hookworm infections, enterobiasis, and trichostrongyliasis, by mouth, ADULT and CHILD over 2 years, 400 mg as a single dose; CHILD 12 months–2 years, 200 mg as a single dose.\nTrichuriasis, by mouth, ADULT and CHILD over 2 years, 400 mg as a single dose (for moderate infections) or 400 mg daily for 3 days (severe infections);\nCHILD 12 months–2 years, 200 mg as a single dose (for moderate infections) or 200 mg initially then 100 mg twice daily for 3 days (severe infections).\nStrongyloidiasis, by mouth, ADULT and CHILD over 2 years, 400 mg once or twice daily for 3 days.\nCapillariasis, by mouth, ADULT and CHILD over 2 years, 400 mg daily for 10 days                                                                                                             Filariasis, annual administration of single\ndoses of albendazole (400 mg) with either diethylcarbamazine (6 mg/kg) or ivermectin (200 micrograms/kg) is effective for interrupting transmission; this treatment should be continued for at least 5 years"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"gastrointestinal disturbances, headache, dizziness; increases in\nliver enzymes; reversible alopecia; rash; fever; leukopenia and rarely,\npancytopenia; allergic shock if cyst leakage; convulsions and meningism in cerebral disease"\n</p>\n\n\n<h5>interactions</h5>\n<p>"Dexamethasone Plasma albendazole concentration possibly increased\nPraziquantel Increased plasma concentration of active metabolite of\nalbendazole"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>Contraindicated in cestode infections\n</p>\n\n\n<h5>Precautions</h5>\n<p>"liver function tests and blood counts recommended before\nlonger-term treatment and twice during each cycle; exclude pregnancy\nbefore starting treatment (advise patients to use non-hormonal\ncontraception during and for 1 month after treatment); breastfeeding"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>First trimester: avoid in nematode infections\n</p>\n\n\n', '2014-01-06 15:22:04', 1, NULL, 3),
(494, 'Alcuronium', 'Alcuronium\n\n\n<h5>Presentations</h5>\n<p>Injection: 5 mg (chloride)/ml in 2-ml ampoule\n</p>\n\n\n<h5>class</h5>\n<p>Muscle relaxants (peripherally-acting) and cholinesterase inhibitors\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>muscle relaxation during surgery\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Muscle relaxation, by intravenous injection, ADULT, initially 200–\n250 micrograms/kg, then 30–50 micrograms/kg as required for\nmaintenance; CHILD, initially 125–200 micrograms/kg, then\n50 micrograms/kg for maintenance"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"histamine release, leading to allergic reactions, such as wheal\nand flare effects at site of injection, flushing, and bronchospasm\n(anaphylactoid reactions reported); transient hypotension, slight increase in heart rate or decreased pulse rate"\n</p>\n\n\n<h5>Precautions</h5>\n<p>"renal impairment; hepatic impairment;\nburns patients (possibly increase dose); electrolyte disturbances; respiratory acidosis or hypokalaemia (possibly decrease dose); history of asthma; pregnancy and breastfeeding; interactions:\n"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"respiratory insufficiency or pulmonary disease; dehydrated\nor severely ill patients; myasthenia gravis or other neuromuscular disorders"\n</p>\n\n\n<h5>interactions</h5>\n<p>"Amikacin: Enhanced effects of alcuronium\nCarbamazepine: Antagonism of muscle relaxant effect (recovery from\nneuromuscular blockade accelerated)\n* Clindamycin: Enhanced muscle relaxant effect\n* Gentamicin: Enhanced muscle relaxant effect\nHalothane: Effects of alcuronium enhanced\nLithium: Enhanced muscle relaxant effect\nMagnesium (parenteral): Enhanced muscle relaxant effect\nNeostigmine: Antagonism of muscle relaxant effect\nNifedipine: Enhanced muscle relaxant effect\nPhenytoin: Antagonism of muscle relaxant effect (accelerated recovery from neuromuscular blockade)\n* Procainamide: Enhanced muscle relaxant effect\nPropranolol: Enhanced muscle relaxant effect\nPyridostigmine: Antagonism of muscle relaxant effect\n* Quinidine: Enhanced muscle relaxant effect\n* Streptomycin: Enhanced muscle relaxant effect\nVerapamil: Enhanced muscle relaxant effect"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>"Does not cross placenta in significant amounts; use\nonly if potential benefit outweighs risk"\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>No information available\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>Severe: Prolonged duration of block\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>"Possibly slower onset, higher dose requirement and\nprolonged recovery time"\n</p>\n\n', '2014-01-06 15:22:11', 2, NULL, 4),
(495, 'Allopurinol', 'Allopurinol\n\n\n<h5>Presentations</h5>\n<p>Tablet: 100 mg, 300mg\n</p>\n\n\n<h5>class</h5>\n<p>Analgesics, antipyretics, NSAIMs, DMARDs</p>\n\n\n<h5>Indication(s)</h5>\n<p>"prophylaxis of gout; prophylaxis of hyperuricaemia associated with\ncancer chemotherapy"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Prophylaxis of gout, by mouth, ADULT, initially 100 mg daily as a single dose, preferably after food, then adjusted according to plasma or urinary uric acid concentration (usual maintenance dose in mild conditions, 100–200 mg daily; in moderately severe conditions, 300–600 mg daily; in severe conditions; 700–900 mg daily; doses over 300 mg daily given in divided doses).\nNOTE. Initiate 2–3 weeks after acute attack has subsided and administer a suitable\nNSAIM (not ibuprofen or a salicylate) or colchicine from the start of allopurinol treatment and continue for at least 1 month after correction of hyperuricaemia.\nProphylaxis of hyperuricaemia in cancer patients undergoing chemotherapy, by mouth, ADULT, maintenance doses as for acute gout, adjusted according to response, commencing 24 hours before chemotherapy treatment and continuing for 7–10 days afterwards; CHILD under 15 years, 10–20 mg/kg daily (maximum, 400 mg daily)"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"rash (see Precautions); hypersensitivity reactions occur\nrarely and include fever, lymphadenopathy, arthralgia, eosinophilia,\nerythema multiforme (Stevens-Johnson syndrome) or toxic epidermal\nnecrolysis, vasculitis, hepatitis, renal impairment and, very rarely, seizures;\ngastrointestinal disorders; rarely malaise, headache, vertigo, drowsiness,\nvisual and taste disturbances, hypertension, alopecia, hepatotoxicity,\nparaesthesia, neuropathy, gynaecomastia, and blood disorders (including\nleukopenia, thrombocytopenia, haemolytic anaemia, and aplastic anaemia)"\n</p>\n\n\n<h5>Precautions</h5>\n<p>ensure adequate fluid intake of 2–3 litres daily; withdraw treatment if rash occurs, reintroduce if rash is mild but discontinue immediately if it recurs\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"acute gout (if an acute attack occurs while receiving\nallopurinol, continue prophylaxis and treat attack separately)"\n</p>\n\n\n<h5>interactions</h5>\n<p>"Amoxicillin Increased risk of rash                                                              Ampicillin Increased risk of rash\n* Azathioprine Effects of azathioprine enhanced and toxicity increased; reduce dose of azathioprine\nCiclosporin Plasma ciclosporin concentration possibly increased (risk of nephrotoxicity)\nDidanosine Possibly increased plasma concentration of didanosine\nHydrochlorothiazide Increased risk of hypersensitivity, especially in renal impairment\n* Mercaptopurine Effects of mercaptopurine enhanced and toxicity increased; reduce dose of mercaptopurine\nWarfarin Anticoagulant effect possibly enhanced"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>"Toxicity not reported; use only if no safer alternative\nand disease carries risk for mother or child"\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>Present in milk — not known to be harmful\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>"Moderate 100–200 mg daily; increased toxicity;rash\nSevere 100 mg on alternate days (maximum 100 mg daily)"\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>Reduce dose\n</p>\n\n', '2014-01-06 15:22:18', 3, NULL, 5),
(496, 'Aluminium Diacetate', 'Aluminium Diacetate\n\n\n<h5>Presentations</h5>\n<p>Solution: 5%\n</p>\n\n\n<h5>class</h5>\n<p>Dermatological medicines (topical)\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"wet dressings to assist healing of suppurating superficial wounds,\ntropical ulcers, and eczematous skin lesions; removal of adherent crusts"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Impetigo and pemphigus, ADULT and CHILD, apply dressings soaked in 0.65%\nsolution until superficial crusts can be separated.\nSuppurating superficial wounds and tropical ulcers, ADULT and CHILD, apply\ndressings soaked in a 0.65% solution to the affected area for 30–120 minutes\ndaily, changing dressings every 5–15 minutes; tropical ulcers also require\ntreatment with procaine benzylpenicillin for 2–4 weeks (section 6.2.1).\nDILUTION. Aluminium diacetate solution, 5% should be diluted before use, 1 part in\n7.7 parts water, to give a 0.65% solution"\n</p>\n\n\n<h5>Precautions</h5>\n<p>avoid use of plastic or rubber occlusive dressings\n</p>\n\n\n', '2014-01-06 15:24:06', 4, NULL, 6),
(497, 'Aluminium Hydroxide ', 'Aluminium Hydroxide \n\n\n<h5>Presentations</h5>\n<p>"Oral liquid: 320 mg/5 ml.\nTablet: 500 mg"\n</p>\n\n\n<h5>class</h5>\n<p>Gastrointestinal medicines</p>\n\n\n<h5>Indication(s)</h5>\n<p>"ulcer and non-ulcer dyspepsia; gastro-oesophageal reflux disease;\nhyperphosphataemia"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Dyspepsia, gastro-oesophageal reflux disease, by mouth, ADULT, 1–2 tablets\nchewed 4 times daily and at bedtime or 5–10 ml suspension 4 times daily,\nbetween meals and at bedtime; CHILD 6–12 years, 5 ml up to 3 times daily.\nHyperphosphataemia, by mouth, ADULT, 2–10 g daily in divided doses with\nmeals.\nPATIENT ADVICE. Do not take other medicines within 2–4 hours of aluminium\nhydroxide preparations. May be taken with water to reduce constipating effects"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"constipation; intestinal obstruction (with large doses);\nhypophosphataemia with increased bone resorption, hypercalciuria, and\nincreased risk of osteomalacia (more common in patients on a low\nphosphate diet or on prolonged therapy); hyperaluminaemia resulting in\nosteomalacia, encephalopathy, dementia, and microcytic anaemia (in\nchronic renal failure treated with aluminium hydroxide as phosphatebinding\nagent)"\n</p>\n\n\n<h5>Precautions</h5>\n<p>"impaired renal function and renal dialysis; constipation; dehydration; fluid restriction;\ngastrointestinal disorders associated with decreased bowel motility or\nobstruction"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"hypophosphataemia; undiagnosed gastrointestinal or rectal\nbleeding; appendicitis; porphyria"\n</p>\n\n\n<h5>interactions</h5>\n<p>"Acetylsalicylic acid Excretion of acetylsalicylic acid increased by alkaline urine\nAzithromycin Reduced absorption of azithromycin\nChloroquine Reduced absorption of chloroquine                             Chlorpromazine Reduced absorption of chlorpromazine\nCiprofloxacin Reduced absorption of ciprofloxacin\nDigoxin Possibly reduced absorption of digoxin\nDoxycycline Reduced absorption of doxycycline\nEnalapril Absorption of enalapril reduced\nFluphenazine Reduced absorption of fluphenazine\nIsoniazid Reduced absorption of isoniazid\nLevofloxacin Reduced absorption of levofloxacin\nOfloxacin Reduced absorption of ofloxacin\nPenicillamine Reduced absorption of penicillamine\nPhenytoin Reduced absorption of phenytoin\nQuinidine Reduced quinidine excretion in alkaline urine (plasma\nquinidine concentration occasionally increased)\nRifampicin Reduced absorption of rifampicin"\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>"Severe Aluminium is absorbed and may\naccumulate\nNOTE. Absorption of aluminium from\naluminium salts is increased by citrates\nwhich are contained in many\neffervescent preparations (such as\neffervescent analgesics)"\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>"In patients with fluid retention, avoid antacids\ncontaining large amounts of sodium; also avoid those\ncausing constipation (can precipitate coma)"\n</p>\n\n', '2013-11-21 22:03:04', 1, NULL, 1),
(498, 'Amiloride', 'Amiloride\n\n\n<h5>Presentations</h5>\n<p>Tablet: 5 mg (hydrochloride)\n</p>\n\n\n<h5>class</h5>\n<p>Cardiovascular medicines\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>oedema associated with heart failure or hepatic cirrhosis (with ascites), usually in combination with thiazide or loop diuretic\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Oedema (used alone), by mouth, ADULT, initially 10 mg daily in 1 or 2 divided\ndoses, adjusted according to response (maximum, 20 mg daily).\nOedema (in combination with a thiazide or a loop diuretic), by mouth, ADULT,\ninitially 5 mg daily, increasing to 10 mg daily if necessary (maximum, 20 mg\ndaily)"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>hyperkalaemia, hyponatraemia (for other symptoms of fluid\nand electrolyte imbalance, see introductory notes above); diarrhoea,\nconstipation, anorexia; paraesthesia, dizziness, minor psychiatric or visual\ndisturbances; rash, pruritus; rise in blood urea nitrogen</p>\n\n\n<h5>Precautions</h5>\n<p>monitor electrolytes, particularly potassium; diabetes mellitus; the elderly\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>hyperkalaemia; renal failure\n</p>\n\n\n<h5>interactions</h5>\n<p>"Alcohol Enhanced hypotensive effect\nAmitriptyline Increased risk of postural hypotension\nAmlodipine Enhanced hypotensive effect\nAtenolol Enhanced hypotensive effect\nCarbamazepine Increased risk of hyponatraemia\nChlorpromazine Enhanced hypotensive effect\n* Ciclosporin Increased risk of hyperkalaemia\nCisplatin Increased risk of nephrotoxicity and ototoxicity\nClomipramine Increased risk of postural hypotension\nContraceptives, Oral Antagonism of diuretic effect by estrogens\nDexamethasone Antagonism of diuretic effect\nDiazepam Enhanced hypotensive effect\n* Enalapril Enhanced hypotensive effect; increased risk of severe\nhyperkalaemia\nFluphenazine Enhanced hypotensive effect\nGlyceryl trinitrate Enhanced hypotensive effect\nHalothane Enhanced hypotensive effect\nHydralazine Enhanced hypotensive effect\nHydrocortisone Antagonism of diuretic effect\nIbuprofen Risk of nephrotoxicity of ibuprofen increased; antagonism\nof diuretic effect; possibly increased risk of hyperkalaemia\nIsosorbide dinitrate Enhanced hypotensive effect\nKetamine Enhanced hypotensive effect\nLevodopa Enhanced hypotensive effect\n* Lithium Reduced lithium excretion (increased plasma lithium\nconcentration and risk of toxicity)\nMethyldopa Enhanced hypotensive effect                                    Nifedipine Enhanced hypotensive effect\nNitrous oxide Enhanced hypotensive effect\n* Potassium salts Increased risk of hyperkalaemia\nPrednisolone Antagonism of diuretic effect\nPropranolol Enhanced hypotensive effect\nSodium nitroprusside Enhanced hypotensive effect\nThiopental Enhanced hypotensive effect\nTimolol Enhanced hypotensive effect\nVerapamil Enhanced hypotensive effect"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>Not used to treat hypertension in pregnancy\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>No information available; manufacturer advises avoid\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>"Mild Monitor plasma potassium; high risk of hyperkalaemia in renal impairment;\nexcreted by kidney unchanged\nModerate Avoid"\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>???</p>\n\n', '2014-01-06 15:24:19', 2, NULL, 2),
(499, 'Amitriptyline', 'Amitriptyline\n\n\n<h5>Presentations</h5>\n<p>Tablet: 25 mg (hydrochloride)\n</p>\n\n\n<h5>class</h5>\n<p>Psychotherapeutic medicines\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>moderate to severe depression\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>Depression, by mouth, ADULT, initially 75 mg daily (30–75 mg, daily in the elderly and adolescents) in divided doses or as a single dose at bedtime, increased gradually to 150–200 mg daily as necessary; CHILD under 16 years, not recommended\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>sedation, dry mouth, blurred vision (disturbance of\naccommodation, increased intraocular pressure), constipation, nausea,\ndifficulty in micturition; cardiovascular adverse effects particularly with high\ndosage including ECG changes, arrhythmias, postural hypotension,\ntachycardia, syncope; sweating, tremor, rash and hypersensitivity reactions\n(urticaria, photosensitivity); behavioural disturbances; hypomania or mania,\nconfusion or delirium (particularly in the elderly), headache, interference\nwith sexual function, blood sugar changes; increased appetite and weight\ngain (occasional weight loss); endocrine adverse effects such as testicular\nenlargement, gynaecomastia and galactorrhoea; convulsions, movement\ndisorders and dyskinesias, dysarthria, paraesthesia, taste disturbances,\ntinnitus, fever, agranulocytosis, leukopenia, eosinophilia, purpura,\nthrombocytopenia, hyponatraemia (may be due to inappropriate antidiuretic\nhormone secretion); abnormal liver function test; in overdose excitement,\nrestlessness, and marked anticholinergic effects (severe symptoms include\nunconsciousness, convulsions, myoclonus, hyperreflexia, hypotension,\nacidosis, and respiratory and cardiac depression with arrhythmias; high rate\nof fatality</p>\n\n\n<h5>Precautions</h5>\n<p>"cardiac disease (see also Contraindications ); history of\nepilepsy; the elderly (reduce dose); thyroid disease;\nphaeochromocytoma; history of mania or psychoses (may aggravate\npsychotic symptoms); angle-closure glaucoma, history of urinary retention; concurrent electroconvulsive therapy; avoid abrupt withdrawal; anaesthesia (increased risk of arrhythmias and hypotension).\nSKILLED TASKS. May impair ability to perform skilled tasks, for example operating machinery or driving"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"recent myocardial infarction, arrhythmias (especially heart\nblock); manic phase in bipolar disorders; severe liver disease; children; porphyria"\n</p>\n\n\n<h5>interactions</h5>\n<p>"Acetazolamide Increased risk of postural hypotension\n* Alcohol Enhanced sedative effect\nAmiloride Increased risk of postural hypotension\n* Artemether + lumefantrine Manufacturer of artemether + lumefantrine advises avoid\nconcomitant use\nAtropine Increased antimuscarinic adverse effects\nBiperiden Increased antimuscarinic adverse effects\n* Carbamazepine Antagonism of anticonvulsant effect (convulsive threshold\nlowered); accelerated metabolism of amitriptyline (reduced\nplasma concentration; reduced antidepressant effect)\nChlorphenamine Increased antimuscarinic and sedative effects\n* Chlorpromazine Increased risk of antimuscarinic adverse effects; increased\nplasma amitriptyline concentration; possibly increased risk\nof ventricular arrhythmias\nCodeine Possibly enhanced sedative effect\nContraceptives, Oral Antagonism of antidepressant effect by estrogens but\nadverse effects of amitriptyline possibly increased due to\nincreased plasma concentration of amitriptyline\nDiazepam Enhanced sedative effect\n* Epinephrine Increased risk of hypertension and arrhythmias (but local\nanaesthetics which contain epinephrine appear to be safe)\n* Ethosuximide Antagonism of anticonvulsant effect (convulsive threshold\nlowered)\n* Fluphenazine Increased risk of antimuscarinic adverse effects; increased\nplasma amitriptyline concentration; possibly increased risk\nof ventricular arrhythmias\nFurosemide Increased risk of postural hypotension\nGlyceryl trinitrate Reduced effect of sublingual glyceryl trinitrate tablets\n(failure to dissolve under tongue owing to dry mouth)\n* Haloperidol Increased plasma amitriptyline concentration; possibly\nincreased risk of ventricular arrhythmias\nHalothane Increased risk of arrhythmias and hypotension\nHydrochlorothiazide Increased risk of postural hypotension\nIsoniazid Increased plasma concentration of isoniazid\nIsosorbide dinitrate Reduced effect of sublingual isosorbide dinitrate tablets\n(failure to dissolve under tongue owing to dry mouth)\nKetamine Increased risk of arrhythmias and hypotension\nLevothyroxine Enhanced effects of amitriptyline\nLithium Risk of toxicity\nMethadone Sedative effects possibly increased\nMorphine Possibly increased sedation\nNitrous oxide Increased risk of arrhythmias and hypotension            \nPhenobarbital Antagonism of anticonvulsant effect (convulsive threshold\nlowered); metabolism of amitriptyline possibly accelerated\n(reduced plasma concentration)\n* Phenytoin Antagonism of anticonvulsant effect (convulsive threshold\nlowered); possibly reduced plasma amitriptyline\nconcentration\n* Procainamide Increased risk of ventricular arrhythmias\nPromethazine Increased antimuscarinic and sedative effects\n* Quinidine Increased risk of ventricular arrhythmias\nRifampicin Plasma concentration of amitriptyline possibly reduced\n* Ritonavir Plasma concentration possibly increased by ritonavir\nSpironolactone Increased risk of postural hypotension\nThiopental Increased risk of arrhythmias and hypotension\n* Valproic acid Antagonism of anticonvulsant effect (convulsive threshold\nlowered)\nVerapamil Possibly increased plasma concentration of amitriptyline\n* Warfarin Enhanced or reduced anticoagulant effect"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>"Manufacturer advises avoid unless essential,\nparticularly during first and third trimesters"\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>"Detectable in breast milk; continue breastfeeding;\nadverse effects possible; monitor infant for\ndrowsiness"\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>Sedative effect increased (avoid in severe liver disease)\n</p>\n\n', '2014-01-06 15:24:39', 3, NULL, 3);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(500, 'Amlodipine', 'Amlodipine\n\n\n<h5>Presentations</h5>\n<p>"Tablet: 5 mg, 10mg,                                                                                            NOTE. Tablets from different suppliers may contain different salts (e.g. amlodipine\nbesilate, amlodipine maleate, amlodipine mesilate) but the strength is expressed in terms\nof amlodipine (base); tablets containing different salts are considered interchangeable"\n</p>\n\n\n<h5>class</h5>\n<p>Cardiovascular medicines\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>hypertension, angina\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Angina, by mouth, ADULT, initially 5 mg once daily, increased if necessary; maximum, 10 mg once daily.\nHypertension, by mouth, ADULT, initially 5 mg once daily, increased if necessary; maximum 10 mg once daily"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"abdominal pain, nausea; palpitation, flushing, oedema;\nheadache, dizziness, sleep disturbances, fatigue; less commonly\ngastrointestinal disturbances, dry mouth, taste disturbances, hypotension, syncope, chest pain, dyspnoea, rhinitis, mood changes, tremor, paraesthesia, increased sweating, urinary disturbances, impotence, gynaecomastia, weight changes, myalgia, arthralgia, muscle cramps, visual disturbances, tinnitus, pruritus, rash (including isolated reports of erythema multiforme), alopecia, purpura, and skin discoloration; very rarely gastritis, pancreatitis, hepatitis, jaundice, cholestasis, gingival hyperplasia, myocardial infarction, arrhythmias, vasculitis, coughing, hyperglycaemia, thrombocytopenia, peripheral neuropathy, angioedema, and urticaria"\n</p>\n\n\n<h5>Precautions</h5>\n<p>hepatic impairment; pregnancy; and\nbreastfeeding</p>\n\n\n<h5>Contra-indications</h5>\n<p>cardiogenic shock, unstable angina, significant aortic stenosis\n</p>\n\n\n<h5>interactions</h5>\n<p>"Acetazolamide Enhanced hypotensive effect\nAlcohol Enhanced hypotensive effect\nAmiloride Enhanced hypotensive effect\nAtenolol Enhanced hypotensive effect\nCarbamazepine Probably reduced effect of amlodipine\nChlorpromazine Enhanced hypotensive effect\nContraceptives, Oral Antagonism of hypotensive effect by estrogens\nDexamethasone Antagonism of hypotensive effect\nDiazepam Enhanced hypotensive effect\nEnalapril Enhanced hypotensive effect\nFluphenazine Enhanced hypotensive effect\nFurosemide Enhanced hypotensive effect\nGlyceryl trinitrate Enhanced hypotensive effect\nHaloperidol Enhanced hypotensive effect\nHalothane Enhanced hypotensive effect\nHydralazine Enhanced hypotensive effect\nHydrochlorothiazide Enhanced hypotensive effect\nHydrocortisone Antagonism of hypotensive effect\nIbuprofen Antagonism of hypotensive effect\nIsosorbide dinitrate Enhanced hypotensive effect\nKetamine Enhanced hypotensive effect\nLevodopa Enhanced hypotensive effect\nMefloquine Possible increased risk of bradycardia\nMethyldopa Enhanced hypotensive effect\nNitrous oxide Enhanced hypotensive effect\n* Phenobarbital Probably reduced effect of amlodipine\nPhenytoin Probably reduced effect of amlodipine\nPrednisolone Antagonism of hypotensive effect\nPropranolol Enhanced hypotensive effect\n* Ritonavir Possibly increased plasma concentration of amlodipine\nSodium nitroprusside Enhanced hypotensive effect\nSpironolactone Enhanced hypotensive effect\nThiopental Enhanced hypotensive effect\nTimolol Enhanced hypotensive effect"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>"No information on use in humans; risk to fetus\nshould be balanced against risk of uncontrolled\nmaternal hypertension"\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>Presence in milk possible; monitor infant\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>"Half-life prolonged — may need dose reduction;\nconsider initial dose of 2.5 mg"\n</p>\n\n', '2014-01-06 15:24:44', 4, NULL, 4),
(501, 'Amoxicillin + Clavulanic Acid', 'Amoxicillin + Clavulanic Acid\n\n\n<h5>Presentations</h5>\n<p>Tablet: 500 mg + 125 mg; 875mg + 125mg; 250mg +125mg \n</p>\n\n\n<h5>class</h5>\n<p>Anti-infective medicines\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"infections due to beta-lactamase-producing bacteria (where amoxicillin alone is not appropriate) including respiratory tract infections, otitis media,\ngenitourinary and abdominal infections, cellulitis, animal bites, severe dental infections, Haemophilus influenzae osteomyelitis, and surgical prophylaxis"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"NOTE. All doses expressed as amoxicillin.\nInfections due to susceptible beta-lactamase-producing organisms, by mouth, ADULT and CHILD over 12 years, 250 mg every 8 hours, doubled in severe infections; CHILD under 1 year, 20 mg/kg daily in 3 divided doses; CHILD 1–6 years, 125 mg every 8 hours; CHILD 6–12 years, 250 mg every 8 hours                                                                               Severe dental infections, by mouth, ADULT, 250 mg every 8 hours for 5 days.\nInfections due to susceptible beta-lactamase-producing organisms, by intravenous injection over 3–4 minutes, ADULT and CHILD over 12 years, 1 gevery 8 hours, increased to 1 g every 6 hours in severe infections; NEONATE and PREMATURE INFANT, 25 mg/kg every 12 hours; INFANT up to 3 months, 25 mg/kg every 8 hours; CHILD 3 months to 12 years, 25 mg/kg every 8 hours, increased to 25 mg/kg every 6 hours in more severe infections.\nSurgical prophylaxis, by intravenous injection, ADULT, 1 g at induction, with up to 2–3 further doses of 1 g every 8 hours if increased risk of infection.\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s\ndirections  "\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"nausea and vomiting, diarrhoea; rash (hypersensitivity or toxic\nresponse; may be indicative of a serious reaction – discontinue treatment); hypersensitivity reactions including urticaria, angioedema, anaphylaxis,serum sickness-type reactions, haemolytic anaemia, and interstitial nephritis; rarely antibiotic-associated colitis;\nneutropenia, thrombocytopenia, coagulation disorders; dizziness, headache, convulsions (particularly with high doses or in renal impairment); hepatitis, cholestatic jaundice; Stevens-Johnson syndrome, toxic epidermal necrolysis, exfoliative dermatitis, and vasculitis reported; superficial staining of teeth with suspension; phlebitis at injection site."\n</p>\n\n\n<h5>Precautions</h5>\n<p>"history of allergy to penicillins; erythematous rash (common in glandular fever, cytomegalovirus infection), chronic lymphatic leukaemia, and possibly\nHIV infection; maintain adequate hydration with high doses (risk of\ncrystalluria)"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"hypersensitivity to penicillins;\nhistory of penicillin- or amoxicillin with clavulanic acid-associated jaundice or hepatic dysfunction."\n</p>\n\n\n<h5>interactions</h5>\n<p>"Allopurinol Increased risk of rash\nContraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\nMethotrexate Reduced excretion of methotrexate (increased risk of toxicity)\nWarfarin Studies have failed to demonstrate an interaction, but common experience in anticoagulant clinics is that INR can be altered by a course of amoxicillin"\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>Trace amounts in milk\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>Risk of crystalluria with high doses (particularly during parenteral therapy); reduce dose if creatinine clearance lessthan 30 ml/minute\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>Monitor liver function in liver disease; cholestatic jaundice reported either during or shortly after treatment — more common in patients over the age of 65 years and in males; duration of treatment should not usually exceed 14 days\n</p>\n\n', '2014-01-06 15:24:50', 1, NULL, 5),
(502, 'Amoxicillin', 'Amoxicillin\n\n\n<h5>Presentations</h5>\n<p>"Capsule or tablet: 250 mg; 500 mg (anhydrous).\nPowder for oral liquid: 125 mg (anhydrous)/5 ml"\n</p>\n\n\n<h5>class</h5>\n<p>Anti-infective medicines\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"urinary tract infections, upper respiratory tract infections, bronchitis;\npneumonia; otitis media; dental abscess and other oral infections;\nosteomyelitis; Lyme disease; endocarditis prophylaxis; post-splenectomy prophylaxis; gynaecological infections; gonorrhoea; anthrax; Helicobacter pylori eradication"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Infections due to sensitive organisms, by mouth, ADULT and CHILD over 10 years, 250 mg every 8 hours, doubled in severe infections; CHILD up to 10 years, 125 mg every 8 hours, doubled in severe infections.\nSevere or recurrent purulent respiratory tract infections, by mouth, ADULT, 3 g every 12 hours.\nPneumonia, by mouth, ADULT, 0.5–1 g every 8 hours                                \nDental abscess (short course), by mouth, ADULT, 3 g repeated once after 8 hours.\nUrinary tract infections (short course), by mouth, ADULT, 3 g repeated once after 10–12 hours.\nUncomplicated genital chlamydial infection, non-gonococcal urethritis, by mouth, ADULT, 500 mg every 8 hours for 7 days.\nGonorrhoea (short course), by mouth, ADULT, 3 g as a single dose (with probenecid, 1 g).\nOtitis media, by mouth, ADULT, 1 g every 8 hours; CHILD, 40 mg/kg daily in 3 divided doses (maximum, 3 g daily)              "\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"nausea and vomiting, diarrhoea; rash (hypersensitivity or toxic\nresponse; may be indicative of a serious reaction – discontinue treatment); hypersensitivity reactions including urticaria, angioedema, anaphylaxis, serum sickness-like reactions, haemolytic anaemia, and interstitial nephritis; rarely antibiotic-associated colitis;\nneutropenia, thrombocytopenia, coagulation disorders; rarely central\nnervous system disorders including convulsions (associated with high doses or impaired renal function)"\n</p>\n\n\n<h5>Precautions</h5>\n<p>history of allergy to penicillins; erythematous rash common in glandular fever, cytomegalovirus infection, chronic lymphatic leukaemia, and sometimes in HIV infection; maintain adequate hydration with high doses (risk of crystalluria)\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>hypersensitivity to penicillins\n</p>\n\n\n<h5>interactions</h5>\n<p>"Allopurinol Increased risk of rash\nContraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\nMethotrexate Reduced excretion of methotrexate (increased risk of toxicity)\nWarfarin Studies have failed to demonstrate an interaction, but\ncommon experience in anticoagulant clinics is that INR can be altered by a course of amoxicillin"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>Not known to be harmful\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>Trace amounts in milk; safe in usual dosage; monitor infant\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>"Mild to moderate: Risk of crystalluria with high doses\nSevere: Reduce dose; rash more common and risk of crystalluria"\n</p>\n\n', '2014-01-06 15:24:56', 2, NULL, 6),
(503, 'Amphotericin B', 'Amphotericin B\n\n\n<h5>Presentations</h5>\n<p>Powder for injection: 50 mg in vial\n</p>\n\n\n<h5>class</h5>\n<p>Anti-infective medicines</p>\n\n\n<h5>Indication(s)</h5>\n<p>"life-threatening fungal infections including histoplasmosis,\ncoccidioidomycosis, paracoccidioidomycosis, blastomycosis, aspergillosis, cryptococcosis, mucormycosis, sporotrichosis, and candidosis; leishmaniasis"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Systemic fungal infections, by intravenous infusion, ADULT and CHILD, initial test dose, 1 mg over 20–30 minutes, followed by 250 micrograms/kg daily, gradually increased up to 1 mg/kg daily, or in severe infection, up to 1.5 mg/kg daily or on alternate days.\nNOTE. Prolonged treatment is usually necessary; if treatment is interrupted for longer than 7 days, it should be recommenced at 250 micrograms/kg daily and increased gradually.\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"fever, headache, anorexia, weight loss, nausea and vomiting,\nmalaise, diarrhoea, muscle and joint pain, dyspepsia, epigastric pain; renal function disturbances (including hypokalaemia, hypomagnesaemia, and renal toxicity); blood disorders; cardiovascular toxicity (including arrhythmias); neurological disorders (including peripheral neuropathy); abnormal liver function (discontinue treatment); rash; anaphylactoid reactions; pain and thrombophlebitis at injection site"\n</p>\n\n\n<h5>Precautions</h5>\n<p>initial test dose required; renal impairment; monitor hepatic and renal function; blood counts, and plasma electrolyte concentrations (including potassium and magnesium concentration); avoid rapid infusion                                                                                                                     ANAPHYLAXIS. Anaphylaxis rarely occurs with intravenous amphotericin B and a test dose is advisable before commencing the first infusion. The patient should be observed for about 30 minutes after the test dose\n</p>\n\n\n<h5>interactions</h5>\n<p>"NOTE. Close monitoring required with concomitant administration of nephrotoxic drugs or cytotoxics.\nAmikacin Increased risk of nephrotoxicity\n* Ciclosporin Increased risk of nephrotoxicity\n* Dexamethasone Increased risk of hypokalaemia (avoid concomitant use unless dexamethasone needed to control reactions)\n* Digoxin Hypokalaemia caused by amphotericin B increases cardiac\ntoxicity of digoxin\nFluconazole Possible antagonism of effect of amphotericin B\nFlucytosine Renal excretion of flucytosine decreased and cellular uptake increased (flucytosine toxicity possibly increased)\nFurosemide Increased risk of hypokalaemia\nGentamicin Increased risk of nephrotoxicity\nHydrochlorothiazide Increased risk of hypokalaemia\n* Hydrocortisone Increased risk of hypokalaemia (avoid concomitant use unless hydrocortisone needed to control reactions)\nMiconazole Possibly antagonism of effects of amphotericin B\nParomomycin Possibly increased risk of nephrotoxicity\nPentamidine Possibly increased risk of nephrotoxicity\n* Prednisolone Increased risk of hypokalaemia (avoid concomitant use unless prednisolone needed to control reactions)\nStreptomycin Increased risk of nephrotoxicity\nVancomycin Possibly increased risk of nephrotoxicity"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>Not known to be harmful but use only if potential benefit outweighs risk\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>No information available\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>Mild Use only if no alternative; nephrotoxicity may be reduced with use of lipid formulations\n</p>\n\n', '2014-01-06 15:25:00', 3, NULL, 1),
(504, 'Ampicillin', 'Ampicillin\n\n\n<h5>Presentations</h5>\n<p>Powder for injection: 500 mg; 1 g (as sodium salt) in vial\n</p>\n\n\n<h5>class</h5>\n<p>Anti-infective medicines</p>\n\n\n<h5>Indication(s)</h5>\n<p>"mastoiditis; gynaecological infections; septicaemia; peritonitis;\nendocarditis; meningitis; cholecystitis; osteomyelitis"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Severe infections due to sensitive organisms, by intramuscular injection, by slow intravenous injection or by intravenous infusion, ADULT, 500 mg every 4–6 hours;\nCHILD under 10 years, half the adult dose.\nMeningitis, by slow intravenous injection, ADULT, 1–2 g every 3–6 hours (maximum, 14 g daily); CHILD, 150–200 mg/kg daily in divided doses                                                                                                                     Listerial meningitis (in combination with another antibacterial), by intravenous infusion, ADULT, 12 g daily in divided doses every 4–6 hours for 10–14 days;\nNEONATE under 7 days, 50–100 mg/kg every 12 hours; NEONATE 7–21 days, 50–100 mg/kg every 8 hours; NEONATE 21–28 days, 50–100 mg/kg every 6 hours; CHILD 1 month–12 years, 50 mg/kg every 4–6 hours (maximum, 2 g every 4 hours).\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions    "\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"nausea and vomiting, diarrhoea; rash (hypersensitivity or toxic\nresponse; may be indicative of a serious reaction — discontinue treatment); hypersensitivity reactions including urticaria, angioedema, anaphylaxis, serum sickness-like reactions, haemolytic anaemia, and interstitial nephritis; rarely antibiotic-associated colitis;\nneutropenia, thrombocytopenia, coagulation disorders"\n</p>\n\n\n<h5>Precautions</h5>\n<p>history of allergy; erythematous rash (common in glandular fever, acute or chronic lymphatic leukaemia, and cytomegalovirus infection)\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>hypersensitivity to penicillins\n</p>\n\n\n<h5>interactions</h5>\n<p>"Allopurinol Increased risk of rash\nContraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\nMethotrexate Reduced excretion of methotrexate (increased risk of toxicity)\nWarfarin Studies have failed to demonstrate an interaction, but common experience in anticoagulant clinics is that INR can be altered by a course of ampicillin"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>Not known to be harmful\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>Trace amounts in milk; safe in usual dosage; monitor infant\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>Severe Reduce dose; rash more common\n</p>\n\n', '2014-01-06 15:25:07', 4, NULL, 2),
(505, 'Anti-D Immunoglobulin (Human)', 'Anti-D Immunoglobulin (Human)\n\n\n<h5>Presentations</h5>\n<p>"Injection: 250 micrograms in single-dose vial: Anti-D immunoglobulin is prepared from plasma with a high titre of anti-D antibody.\nIt is available to prevent a rhesus-negative mother from forming antibodies to fetal rhesus-positive cells which may pass into the maternal circulation. The aim is to protect any subsequent child against haemolytic disease of the newborn. It should be administered following any potentially sensitizing episode (for example, abortion, miscarriage, or still-birth), ideally immediately or within 72 hours of the episode but even if a longer period has elapsed, it may still give protection and should be used. The dose of anti-D immunoglobulin given depends on the level of exposure to rhesuspositive blood. The injection of anti-D immunoglobulin is not effective once the mother has formed anti-D antibodies. It is also given following transfusion of Rh0 (D) incompatible blood.\nPlasma fractions should comply with the Requirements for the Collection, Processing and Quality Control of Blood, Blood Components and Plasma Derivatives (Revised 1992). WHO Technical Report Series No 840, 1994, Annex 2"\n</p>\n\n\n<h5>class</h5>\n<p>Immunologicals</p>\n\n\n<h5>Indication(s)</h5>\n<p>Anti-D immunoglobulin is prepared from plasma with a high titre of anti-D antibody.\nIt is available to prevent a rhesus-negative mother from forming antibodies to fetal\nrhesus-positive cells which may pass into the maternal circulation. The aim is to protect\nany subsequent child against haemolytic disease of the newborn. It should be\nadministered following any potentially sensitizing episode (for example, abortion,\nmiscarriage, or still-birth), ideally immediately or within 72 hours of the episode but\neven if a longer period has elapsed, it may still give protection and should be used. The\ndose of anti-D immunoglobulin given depends on the level of exposure to rhesuspositive\nblood. The injection of anti-D immunoglobulin is not effective once the\nmother has formed anti-D antibodies. It is also given following transfusion of Rh0 (D)\nincompatible blood.\nPlasma fractions should comply with the Requirements for the Collection, Processing\nand Quality Control of Blood, Blood Components and Plasma Derivatives (Revised\n1992). WHO Technical Report Series No 840, 1994, Annex 2.\nUses: prevention of formation of antibodies to rhesus-positive blood cells in\nrhesus-negative patients</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"NOTE. National recommendations may vary.\nFollowing birth of a rhesus-positive infant to a rhesus-negative mother, by intramuscular injection, ADULT, 250 micrograms immediately or within 72 hours of birth (see also introductory note above).\nFollowing any potentially sensitizing episode (for example, amniocentesis, stillbirth), by intramuscular injection, ADULT, up to 20 weeks’ gestation, 250 micrograms per episode (after 20 weeks, 500 micrograms) immediately or within 72 hours (see also introductory note above).\nFollowing Rh0 (D) incompatible blood transfusion, by intramuscular injection, ADULT, 10–20 micrograms per ml transfused rhesus-positive blood"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>Local reactions, including pain and tenderness, may occur at the site of an intramuscular injection. Hypersensitivity reactions may also occur including, rarely, anaphylaxis. Following an intravenous injection, systemic reactions including fever, chills, facial flushing, headache, and nausea may occur, particularly following high rates of infusion. Hypersensitivity reactions may also occur including, rarely, anaphylaxis\n</p>\n\n\n<h5>Precautions</h5>\n<p>"rhesus-positive patients receiving treatment for blood disorders; rhesus-negative patients with anti-D antibodies in their serum; RUBELLA VACCINE. Rubella vaccine may be administered in the\npostpartum period at the same time as anti-D immunoglobulin, but only if separate syringes and contralateral sites are used. If blood is transfused, the antibody response to the vaccine may be inhibited (measure rubella antibodies after 8 weeks and revaccinate if necessary)"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>"Anaphylaxis, although rare, can occur and epinephrine (adrenaline) must always be immediately available during immunization \nImmunoglobulins may interfere with the immune response to live virus vaccines which should normally be given either at least\n3 weeks before or at least 3 months after administration of an immunoglobulin"\n</p>\n\n', '2014-01-06 15:25:13', 1, NULL, 3),
(506, 'Artemether + lumefantrine', 'Artemether + lumefantrine\n\n\n<h5>Presentations</h5>\n<p>Tablet: 20 mg + 120 mg\n</p>\n\n\n<h5>class</h5>\n<p>Antimalarials\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>treatment of uncomplicated malaria caused by P. falciparum alone or with other Plasmodium spp. in areas with significant drug resistance\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Treatment of uncomplicated falciparum malaria:\nby mouth, ADULT and CHILD over 12 years/body weight over 35 kg, initially 4 tablets followed by 5 further doses of 4 tablets each at 8, 24, 36, 48, and 60 hours (total, 24 tablets over 60 hours);\nCHILD body weight 5–14 kg, initially 1 tablet followed by 5 further doses of 1 tablet each at 8, 24, 36, 48, and 60 hours (total, 6 tablets over 60 hours); body weight 15–24 kg, initially 2 tablets followed by 5 further doses of 2 tablets each at 8, 24, 36, 48, and 60 hours (total, 12 tablets over 60 hours); body weight 25–34 kg, initially 3 tablets followed by 5 further doses of 3 tablets each at 8, 24, 36, 48, and 60 hours (total, 18 tablets over 60 hours).\nPATIENT ADVICE. Take tablets with food; repeat dose if vomiting occurs within 1 hour of administration"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"abdominal pain, anorexia, diarrhoea, nausea and vomiting;\nheadache, dizziness, sleep disorders; palpitation; arthralgia, myalgia; cough; asthenia, fatigue; pruritus, rash"\n</p>\n\n\n<h5>Precautions</h5>\n<p>"first trimester of pregnancy (Appendix 2); electrolyte disturbances;\nconcomitant administration of drugs that prolong the QT interval; monitor patients unable to take food (greater risk of recrudescence);  SKILLED TASKS. Dizziness may impair ability to perform skilled tasks, for example, operating machinery or driving"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>history of arrhythmias, clinically relevant bradycardia, or congestive heart failure accompanied by reduced left ventricular ejection fraction; family history of sudden death or congenital prolongation of QT interval\n</p>\n\n\n<h5>interactions</h5>\n<p>"Amitriptyline Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Azithromycin Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Chloroquine Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Chlorpromazine Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Ciprofloxacin Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Clomipramine Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Erythromycin Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Fluconazole Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Fluoxetine Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Fluphenazine Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Grapefruit juice Metabolism of artemether + lumefantrine may be inhibited (avoid concomitant use)\n* Haloperidol Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Indinavir Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Levofloxacin Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Lopinavir Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Mefloquine Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Nelfinavir Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Ofloxacin Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Primaquine Manufacturer of artemether + lumefantrine advises avoid concomitant use                                                                                              Procainamide Risk of ventricular arrhythmias; manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Proguanil Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Pyrimethamine Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Quinidine Risk of ventricular arrhythmias; manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Quinine Risk of ventricular arrhythmias; manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Ritonavir Manufacturer of artemether + lumefantrine advises avoid concomitant use\n* Saquinavir Manufacturer of artemether + lumefantrine advises avoid concomitant use                                                                         Sulfadoxine + pyrimethamine Manufacturer of artemether + lumefantrine advises avoid concomitant use"\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>First trimester: Avoid\n</p>\n\n\n<h5>breastfeeding</h5>\n<p>Discontinue breastfeeding during and for 1 week after stopping treatment; present in milk in animal studies\n</p>\n\n\n<h5>renal toxicity</h5>\n<p>"Severe Caution; monitor ECG and plasma potassium"\n</p>\n\n\n<h5>Hepatic impairment</h5>\n<p>Caution in severe impairment — monitor ECG and plasma potassium\n</p>\n\n', '2014-01-06 15:25:18', 2, NULL, 4),
(507, 'Artemether', 'Artemether\n\n\n<h5>Presentations</h5>\n<p>Oily injection: 80 mg/ml in 1-ml ampoule\n</p>\n\n\n<h5>class</h5>\n<p>Antimalarials\n</p>\n\n\n<h5>Indication(s)</h5>\n<p>"treatment of severe P. falciparum malaria in areas where quinine is ineffective"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Treatment of severe P. falciparum malaria (in areas of quinine resistance), by intramuscular injection, ADULT and CHILD over 6 months, loading dose of 3.2 mg/kg, then 1.6 mg/kg daily until patient can tolerate oral medication or up to a maximum of 7 days; this is followed by a single dose of oral mefloquine 15 mg/kg (occasionally, 25 mg/kg if necessary) to effect a radical cure.\nADMINISTRATION. Since small volumes are required for children, a 1-ml syringe should be used to ensure correct dosage"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"headache, nausea, vomiting, abdominal pain, diarrhoea;\ndizziness, tinnitus, neutropenia, elevated liver enzyme values; cardiotoxicity (after high doses); neurotoxicity (in animal studies)"\n</p>\n\n\n<h5>Precautions</h5>\n<p>SKILLED TASKS. Dizziness may impair ability to perform skilled tasks, for example, operating machinery or driving\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>first trimester of pregnancy\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>First trimester: Avoid\n</p>\n\n', '2014-01-06 15:25:26', 3, NULL, 5),
(508, 'Artesunate', 'Artesunate\n\n\n<h5>Presentations</h5>\n<p>"Injection: ampoules, containing 60 mg anhydrous artesunic acid with a separate ampoule of 5% sodium bicarbonate solution.\nTablet: 50 mg"\n</p>\n\n\n<h5>class</h5>\n<p>Antimalarials</p>\n\n\n<h5>Indication(s)</h5>\n<p>"treatment of uncomplicated malaria caused by P. falciparum in\ncombination with other antimalarials; treatment of severe malaria in areas where quinine is ineffective"\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Treatment of uncomplicated falciparum malaria (in combination with other antimalarial drugs):  by mouth, ADULT and CHILD over 5 months, 4 mg/kg daily for 3 days;\nby intravenous or intramuscular injection, ADULT, initially 2.4 mg/kg, then repeated at 12-hour intervals for 2 further doses, then once daily.\nRECONSTITUTION. Artesunic acid should be dissolved in sodium bicarbonate 5% solution for injection (to form sodium artesunate), and then further diluted in 5 ml of glucose 5% solution for injection before administration; solutions should be freshly prepared prior to administration. Consult manufacturer’s literature for further information"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>"headache, nausea, vomiting, abdominal pain, diarrhoea,\ndizziness, tinnitus, neutropenia, elevated liver enzyme values; ECG\nabnormalities including prolongation of the QT interval; temporary\nsuppression of reticulocyte response and induction of blackwater fever, reported; neurotoxicity (in animal studies)"\n</p>\n\n\n<h5>Precautions</h5>\n<p>"risk of recurrence if used alone in non-immune patients.\nSKILLED TASKS. Dizziness may impair ability to perform skilled tasks, for example, operating machinery or driving"\n</p>\n\n\n<h5>Contra-indications</h5>\n<p>first trimester of pregnancy\n</p>\n\n\n<h5>Pregnancy</h5>\n<p>First trimester: Avoid\n</p>\n\n\n', '2014-01-06 15:25:47', 4, NULL, 6),
(509, 'Ascorbic Acid (vitamin C)', 'Ascorbic Acid (vitamin C)\n\n\n<h5>Presentations</h5>\n<p>Tablet: 50 mg\n</p>\n\n\n<h5>class</h5>\n<p>Vitamins and minerals</p>\n\n\n<h5>Indication(s)</h5>\n<p>prevention and treatment of scurvy\n</p>\n\n\n<h5>Dosage and administration</h5>\n<p>"Prophylaxis of scurvy, by mouth, ADULT and CHILD, 25–75 mg daily.\nTreatment of scurvy, by mouth, ADULT and CHILD, not less than 250 mg daily in divided doses"\n</p>\n\n\n<h5>Adverse effects</h5>\n<p>gastrointestinal disturbances reported with large doses\n</p>\n\n', '2013-11-21 22:10:11', 1, NULL, 1),
(510, 'Asparaginase', 'Asparaginase\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Powder for injection: 10 000 IU in vial Also known as Crisantaspase.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>acute lymphoblastic leukaemia\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"consult specialist literature; pregnancy and breastfeeding"\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Vaccine, Live Avoid use of live vaccines with asparaginase (impairment of immune response)\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated\r\n</p>\r\n\r\n', '2014-01-06 15:26:23', 2, NULL, 2),
(511, 'Atenolol', 'Atenolol\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Cardiovascular medicines\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Cardiovascular medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>angina and myocardial infarction; arrhythmias ;hypertension; migraine prophylaxis\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Angina, by mouth, ADULT, 50 mg once daily, increased if necessary to 50 mg twice daily or 100 mg once daily.\r\nUnstable angina and acute myocardial infarction (early intervention within 12 hours), by intravenous injection over 5 minutes, ADULT, 5 mg, then by mouth, 50 mg after 15 minutes, followed by 50 mg after 12 hours, then 100 mg daily.                                                                                                                   Arrhythmias, by mouth, ADULT, 50 mg once daily, increased if necessary to 50 mg twice daily or 100 mg once daily                                   Hypertension, by mouth, ADULT, 50 mg once daily (higher doses rarely necessary)    "\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"gastrointestinal disturbances including nausea, vomiting,\r\ndiarrhoea, constipation, and abdominal cramp; fatigue; cold hands and feet; exacerbation of intermittent claudication and Raynaud phenomenon; bronchospasm; bradycardia, heart failure, conduction disorders, hypotension; sleep disturbances including nightmares; depression, confusion; hypoglycaemia or hyperglycaemia; exacerbation of psoriasis; rash, dry eyes, and oculomucocutaneous syndrome (reversible on withdrawal) rarely reported.                         "\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"avoid abrupt withdrawal especially in ischaemic heart disease;\r\nhistory of obstructive airway disease (use with caution and monitor lungfunction); first-degree atrioventricular block; portal\r\nhypertension (liver function deteriorates); renal impairment (reduce dose; diabetes mellitus (small decrease in glucose tolerance, which\r\ncan mask symptoms of hypoglycaemia); history of hypersensitivity\r\n[increased reaction to allergens, also reduced response to epinephrine (adrenaline)]; myasthenia gravis"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"history of asthma or bronchospasm (unless no alternative,\r\nin which case use with extreme caution and under specialist supervision); uncontrolled heart failure, Prinzmetal angina, marked bradycardia, hypotension, sick sinus syndrome, second- and third-degree atrioventricular block, cardiogenic shock; metabolic acidosis; severe peripheral arterial disease; phaeochromocytoma (unless used with an alpha-blocker)"\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Acetazolamide Enhanced hypotensive effect\r\nAlcohol Enhanced hypotensive effect\r\nAmiloride Enhanced hypotensive effect\r\nAmlodipine Enhanced hypotensive effect\r\nChlorpromazine Enhanced hypotensive effect\r\nContraceptives, Oral Antagonism of hypotensive effect by estrogens\r\nDexamethasone Antagonism of hypotensive effect\r\nDiazepam Enhanced hypotensive effect\r\nDigoxin Increased risk of AV block and bradycardia\r\nEnalapril Enhanced hypotensive effect\r\n* Epinephrine Severe hypertension\r\nFluphenazine Enhanced hypotensive effect\r\nFurosemide Enhanced hypotensive effect\r\nGlibenclamide Atenolol may mask warning signs of hypoglycaemia such as tremor\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\nHalothane Enhanced hypotensive effect\r\nHydralazine Enhanced hypotensive effect\r\nHydrochlorothiazide Enhanced hypotensive effect\r\nHydrocortisone Antagonism of hypotensive effect\r\nIbuprofen Antagonism of hypotensive effect\r\nInsulins Enhanced hypoglycaemic effect; atenolol may mask warning signs of hypoglycaemia such as tremor\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\nKetamine Enhanced hypotensive effect\r\nLevodopa Enhanced hypotensive effect\r\n* Lidocaine Increased myocardial depression (interaction less likely when lidocaine used topically)\r\nMefloquine Increased risk of bradycardia\r\nMetformin Atenolol may mask warning signs of hypoglycaemia such as tremor\r\nMethyldopa Enhanced hypotensive effect                                                     \r\nNifedipine Enhanced hypotensive effect; possibly severe hypotension and heart failure\r\nNitrous oxide Enhanced hypotensive effect\r\nPilocarpine Increased risk of arrhythmias\r\nPrednisolone Antagonism of hypotensive effect\r\n* Procainamide Increased myocardial depression\r\n* Quinidine Increased myocardial depression\r\nSodium nitroprusside Enhanced hypotensive effect\r\nSpironolactone Enhanced hypotensive effect\r\nThiopental Enhanced hypotensive effect\r\n* Verapamil Asystole, severe hypotension and heart failure"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>May cause intrauterine growth restriction, neonatal hypoglycaemia, and bradycardia; risk greater in severe hypertension\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Significant amounts in milk; safe in usual dosage; monitor infant\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>"Mild to moderate: Reduce dose to a maximum 50 mg daily\r\nif creatinine clearance 15–35 ml/minute\r\nSevere: May reduce renal blood flow and adversely affect renal function; reduce dose to a maximum 25 mg daily if creatinine clearance less than 15 ml/minute"\r\n</p>\r\n\r\n\r\n', '2014-01-06 15:26:28', 3, NULL, 3),
(512, 'Atropine eye drops', 'Atropine \r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Solution (eye drops): 0.1%; 0.5%; 1% (sulfate)\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Ophthalmological preparations</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>iritis, uveitis; cycloplegic refraction procedures; premedication; organophosphate poisoning \r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Cycloplegic refraction, by ocular instillation, ADULT, 1 drop (1% solution) twice daily for 1–2 days before procedure or a single application of 1 drop (1% solution) 1 hour before procedure; CHILD under 3 months, see Precautions;\r\nCHILD 3 months–1 year, 1 drop (0.1% solution)(1–5 years, 0.1–0.5% solution; over 5 years, 0.5–1% solution) twice daily for 1–3 days before procedure with a further dose given 1 hour before procedure    \r\nIritis, uveitis, by ocular instillation, ADULT, 1 drop (0.5% or 1% solution) up to 4 times daily; CHILD, 1 drop (0.5% or 1%) up to 3 times daily"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"transient stinging and raised intraocular pressure; local irritation, hyperaemia, oedema, and conjunctivitis (on prolonged\r\nadministration); contact dermatitis; systemic toxicity (in the very young and the elderly)"\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"use may precipitate acute attack of angle-closure glaucoma,\r\nparticularly in the elderly or long-sighted; infants under 3 months (risk of systemic effects with eye drops; eye ointment preferred)             SKILLED TASKS. May cause sensitivity to light and blurred vision. Advise patients not to carry out skilled tasks, for example, operating machinery or driving, until vision is clear"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>angle-closure glaucoma\r\n</p>\r\n\r\n', '2014-01-06 15:26:35', 4, NULL, 4),
(513, 'Atropine', 'Atropine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 1 mg (sulfate) in 1-ml ampoule\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anaesthetics\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"to inhibit salivary secretions; to inhibit arrhythmias resulting from\r\nexcessive vagal stimulation; to block the parasympathomimetic effects of anticholinesterases such as neostigmine; organophosphate poisoning; mydriasis and cycloplegia"\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Premedication, by intravenous injection, ADULT, 300–600 micrograms immediately before induction of anaesthesia, CHILD, 20 micrograms/kg (maximum 600 micrograms); by subcutaneous or intramuscular injection, ADULT, 300–600 micrograms 30–60 minutes before induction; CHILD, 20 micrograms/kg (maximum, 600 micrograms).\r\nIntraoperative bradycardia, by intravenous injection, ADULT, 300–600 micrograms (larger doses in emergencies); CHILD 1–12 years, 10–20 micrograms/kg.\r\nControl of muscarinic side-effects of neostigmine in reversal of competitive neuromuscular block, by intravenous injection, ADULT, 0.6–1.2 mg; CHILD under 12 years, (but rarely used) 20 micrograms/kg (maximum, 600 micrograms) with neostigmine 50 micrograms/kg     Organophosphate poisoning, by intramuscular or intravenous injection (depending on severity of poisoning), ADULT, 2 mg (CHILD, 20 micrograms/kg) every 5–10 minutes until the skin becomes flushed and dry, the pupils dilate, and tachycardia develops"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"dry mouth; blurred vision, photophobia; flushing and dryness\r\nof skin, rash; difficulty in micturition; less commonly arrhythmias,\r\ntachycardia and palpitations; confusion (particularly in the elderly); heat prostration and convulsions, especially in febrile children."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"Down syndrome; children; the elderly; ulcerative colitis, diarrhoea;\r\nhyperthyroidism; heart failure, or hypertension; pyrexia                           \r\nDURATION OF ACTION. Since atropine has a shorter duration of action than neostigmine, late unopposed bradycardia may result; close monitoring of the patient is necessary"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"angle-closure glaucoma; myasthenia gravis; paralytic ileus,\r\npyloric stenosis; prostatic enlargement"\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Many drugs have antimuscarinic effects; concomitant use of two or more such drugs can increase adverse effects such as dry mouth, urine retention, and constipation, and can also lead to confusion especially in the elderly.\r\nAmitriptyline Increased antimuscarinic adverse effects\r\nChlorphenamine Increased antimuscarinic adverse effects\r\nChlorpromazine Increased antimuscarinic adverse effects (but reduced plasma chlorpromazine concentration)\r\nClomipramine Increased antimuscarinic adverse effects\r\nFluphenazine Increased antimuscarinic adverse effects (but reduced\r\nplasma fluphenazine concentration)\r\nGlyceryl trinitrate Possibly reduced effect of sublingual glyceryl trinitrate tablets (failure to dissolve under the tongue owing to dry mouth)\r\nHaloperidol Possibly reduced effects of haloperidol\r\nIsosorbide dinitrate Possibly reduced effect of sublingual isosorbide dinitrate tablets (failure to dissolve under the tongue owing to dry mouth)\r\nLevodopa Absorption of levodopa possibly reduced\r\nMetoclopramide Antagonism of effects of metoclopramide on gastrointestinal activity\r\nNeostigmine Antagonism of effects of neostigmine\r\nPilocarpine Antagonism of effects of pilocarpine\r\nPromethazine Increased risk of antimuscarinic adverse effects\r\nPyridostigmine Antagonism of effects of pyridostigmine"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Small amount present in milk; monitor infant\r\n</p>\r\n\r\n\r\n', '2014-01-06 15:26:41', 1, NULL, 5),
(514, 'Azathioprine inj', 'Azathioprine inj\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 100 mg (as sodium salt) in vial\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>immunosuppressives</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>to prevent rejection in transplant recipients; rheumatoid arthritis; inflammatory bowel disease\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Transplant rejection, by mouth or by intravenous injection (over at least 1 minute and followed by 50 ml sodium chloride intravenous infusion) or by intravenous infusion, ADULT, up to 5 mg/kg on day of surgery, then reduced according to response to 1–4 mg/kg daily for maintenance.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions.\r\nNOTE. Intravenous injection is alkaline and very irritant; the intravenous route should therefore only be used if oral administration is not possible."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"hypersensitivity reactions including malaise, dizziness,\r\nvomiting, fever, muscular pains, arthralgia, rash, hypotension, or interstitial nephritis call for immediate withdrawal; haematological toxicity including leukopenia and thrombocytopenia (reversible upon withdrawal); liver impairment, cholestatic jaundice; hair loss; increased susceptibility to infections and colitis in patients also receiving corticosteroids; nausea; rarely pancreatitis, pneumonitis, and hepatic veno-occlusive disease"\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"monitor for toxicity throughout treatment; full blood counts\r\nnecessary every week (or more frequently with higher doses and in renal or hepatic impairment) for the first 4 weeks of treatment, and at least every 3 months thereafter; reduce dose in the elderly.                 BONE MARROW SUPPRESSION. Patients should be warned to report immediately any signs or symptoms of bone marrow suppression, for example, unexplained bruising or bleeding, or infection"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to azathioprine and mercaptopurine; breastfeeding\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Allopurinol Effects of azathioprine enhanced and toxicity increased;\r\nreduce dose of azathioprine\r\nPhenytoin Possibly reduced absorption of phenytoin\r\n* Sulfamethoxazole + trimethoprim Increased risk of haematological toxicity\r\nSulfasalazine Possibly increased risk of leukopenia\r\n* Trimethoprim Increased risk of haematological toxicity\r\n* Vaccine, Live Avoid use of live vaccines with azathioprine (impairment of immune response)\r\n* Warfarin Anticoagulant effect possibly reduced"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Transplant patients should not discontinue azathioprine on becoming pregnant; use in pregnancy should be carefully supervised; there is no evidence that azathioprine is teratogenic but premature birth and low birth weight and spontaneous abortion reported following maternal or paternal exposure\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe: Reduce dose\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>May need dose reduction\r\n</p>\r\n\r\n', '2014-01-06 15:26:46', 2, NULL, 6),
(515, 'Azathioprine', 'Azathioprine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 50 mg\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Analgesics, antipyretics, NSAIMs, DMARDs\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>rheumatoid arthritis in cases that have failed to respond to chloroquine or penicillamine; psoriatic arthritis; transplant rejection; inflammatory bowel disease\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Administered on expert advice.\r\nRheumatoid arthritis, by mouth, ADULT, initially 1.5–2.5 mg/kg daily in divided doses, adjusted according to response; maintenance dose, 1–3 mg/kg daily; consider withdrawal if no improvement within 3 months"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"hypersensitivity reactions requiring immediate and permanent\r\nwithdrawal include malaise, dizziness, vomiting, diarrhoea, fever, rigors, myalgia, arthralgia, rash, hypotension, and interstitial nephritis; dose-related bone marrow suppression; liver impairment, cholestatic jaundice; hair loss and increased susceptibility to infections and colitis in patients also receiving corticosteroids; nausea; rarely pancreatitis and pneumonitis; hepatic veno-occlusive disease; also herpes zoster infection"\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"monitor for toxicity throughout treatment; monitor full blood\r\ncounts frequently; renal  elderly (reduce dose)                                                 BONE MARROW SUPPRESSION. Patients should be warned to report immediately any signs or symptoms of bone marrow suppression, for example, unexplained bruising or bleeding, purpura, infection, or sore throat"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to azathioprine or mercaptopurine\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Allopurinol Effects of azathioprine enhanced and toxicity increased; reduce dose of azathioprine\r\nPhenytoin Possibly reduced absorption of phenytoin\r\n* Sulfamethoxazole + trimethoprim Increased risk of haematological toxicity\r\nSulfasalazine Possibly increased risk of leukopenia\r\n* Trimethoprim Increased risk of haematological toxicity\r\n* Vaccine, Live Avoid use of live vaccines with azathioprine (impairment of immune response)\r\n* Warfarin Anticoagulant effect possibly reduced"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Transplant patients should not discontinue azathioprine on becoming pregnant; use in pregnancy should be carefully supervised; there is no evidence that azathioprine is teratogenic but premature birth and low birth weight and spontaneous abortion reported following maternal or paternal exposure\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe: Reduce dose\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>May need dose reduction\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(516, 'Azithromycin', 'Azithromycin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Capsule: 250 mg or 500 mg.\r\nOral liquid: 200 mg/5 ml"\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"Azithromycin is more active than erythromycin against some Gram-negative organisms such as Chlamydia trachomatis. The concentration and persistence of azithromycin is much higher in tissue than in plasma. A single dose of azithromycin is recommended for use in the treatment of uncomplicated genital chlamydia and trachoma, but it is not recommended if there is a possibility of gonorrhoea because macrolide resistance emerges rapidly when it is used under these circumstances.\r\nUses: uncomplicated genital chlamydial infections and trachoma"\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Uncomplicated genital chlamydial infections, trachoma, by mouth, ADULT over 45 kg, 1 g as a single dose; ADULT, under 45 kg, 20 mg/kg as a single dose.\r\nPATIENT ADVICE. Not to be taken at the same time as aluminium- or magnesium containing indigestion remedies. Capsules should be taken at least 1 hour before, or 2 hours after, food; oral suspension can be taken with food"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"see under Erythromycin (but fewer gastrointestinal effects);\r\nalso anorexia, dyspepsia, flatulence, constipation, pancreatitis; syncope, dizziness, headache, drowsiness, agitation, anxiety, hyperactivity; photosensitivity; hepatitis, interstitial nephritis, acute renal failure, asthenia, paraesthesia, arthralgia, convulsions, mild neutropenia, thrombocytopenia, tinnitus, hepatic necrosis, hepatic failure, tongue discoloration, and taste disturbances."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>pregnancy and breastfeeding; prolongation of QT interval (ventricular tachycardia reported)\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hepatic impairment\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Antacids (Aluminium hydroxide; Magnesium hydroxide):Reduced absorption of azithromycin                                                                                      Artemether + lumefantrine Manufacturer of artemether + lumefantrine advises avoid concomitant use\r\n* Ciclosporin Possible inhibition of metabolism of ciclosporin (increased plasma concentration)\r\nContraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nDigoxin Increased plasma concentration of digoxin (increased risk of\r\ntoxicity)\r\nRitonavir Plasma concentration of azithromycin possibly increased\r\n* Warfarin Possibly enhanced anticoagulant effect of warfarin"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Limited information available; use only if adequate alternatives not available\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Present in milk; limited information available — use only if no suitable alternative\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid; jaundice reported\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(517, 'Barium Sulfate', 'Barium Sulfate\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Aqueous suspension\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Diagnostic agents</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>radiographic examination of the gastrointestinal tract\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Radiographic examination of the gastrointestinal tract, ADULT and CHILD, route of administration and dosage depend on procedure and preparation used (consult manufacturer’s literature).\r\nADMINISTRATION. Only by specialist radiographers, according to manufacturer’s directions"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"constipation or diarrhoea, gastrointestinal obstruction,\r\nappendicitis, abdominal cramps, and bleeding; perforation of bowel\r\nresulting in peritonitis, adhesions, granulomas and high mortality rate; electrocardiographical changes (with rectal administration); pneumonitis or granuloma formation (following accidental aspiration into lungs)."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"maintain adequate hydration after procedure to prevent severe\r\nconstipation."\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"constipation or diarrhoea, gastrointestinal obstruction,\r\nappendicitis, abdominal cramps, and bleeding; perforation of bowel\r\nresulting in peritonitis, adhesions, granulomas and high mortality rate; electrocardiographical changes (with rectal administration"\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(518, 'Beclometasone', 'Beclometasone\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Inhalation (aerosol): 50 micrograms per dose (dipropionate); 250 micrograms (dipropionate) per dose.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Medicines acting on the respiratory tract</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"chronic asthma not controlled by short-acting beta2-adrenoceptor agonists"\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Chronic asthma, by aerosol inhalation (standard-dose inhaler), ADULT, 200 micrograms twice daily or 100 micrograms 3–4 times daily (in more severe cases, initially 600–800 micrograms daily);               CHILD, 50–100 micrograms 2–4 times daily or 100–200 micrograms twice daily.\r\nChronic asthma, by aerosol inhalation (high-dose inhaler), ADULT, 500 micrograms twice daily or 250 micrograms 4 times daily; if necessary may be increased to 500 micrograms 4 times daily; CHILD, not recommended."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"oropharyngeal candidosis, cough, and dysphonia (usually only with high doses); adrenal suppression, \r\ngrowth retardation in children and adolescents, impaired bone metabolism, glaucoma, and cataract (with high doses, but less frequent than with systemic corticosteroids); paradoxical bronchospasm (requires discontinuation and alternative therapy but if mild, may be prevented by inhalation of beta2-adrenoceptor agonist or by transfer from aerosol to powder inhalation); rarely urticaria, rash, and angioedema;\r\nvery rarely anxiety, sleep disorders, and behavioural changes.\r\nCANDIDOSIS. Candidosis can be reduced by the use of a spacing device; rinsing the mouth with water after inhalation may also help to prevent candidosis."\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"active or quiescent tuberculosis; systemic therapy may be required during periods of stress or when airway obstruction or mucus prevent drug access to smaller airways; \r\nnot for relief of acute symptoms; monitor height of children receiving prolonged treatment; if growth is slowed, review therapy"\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Mifepristone Possibly reduced effects of inhaled beclometasone for 3–4 days\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Benefit of treatment, for example in asthma, outweighs risk\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Systemic effects in infant unlikely with maternal dose of less than equivalent of 40 mg prednisolone daily; monitor infant’s adrenal function with higher doses; the amount of inhaled drug in breast milk is probably too small to be harmful\r\n</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(519, 'Benzathine Benzylpenicillin', 'Benzathine Benzylpenicillin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 1.44 g benzylpenicillin (= 2.4 million IU) in 5-ml vial.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"streptococcal pharyngitis; diphtheria; syphilis and other treponemal\r\ninfections (yaws, pinta, bejel); rheumatic fever prophylaxis"\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Streptococcal pharyngitis; primary prophylaxis of rheumatic fever, by deep intramuscular injection, ADULT and CHILD over 30 kg, 900 mg as a single dose; CHILD under 30 kg, 450–675 mg as a single dose.\r\nSecondary prophylaxis of rheumatic fever, by deep intramuscular injection, ADULT and CHILD over 30 kg, 900 mg once every 3–4 weeks; CHILD under 30 kg, 450 mg once every 3–4 weeks.\r\nEarly syphilis, by deep intramuscular injection, ADULT, 1.8 g as a single dose, divided between 2 sites.\r\nLate syphilis, by deep intramuscular injection, ADULT, 1.8 g, divided between 2 sites, once weekly for 3 consecutive weeks.\r\nCongenital syphilis (where no evidence of CSF involvement), by deep\r\nintramuscular injection, CHILD up to 2 years, 37.5 mg/kg as a single dose\r\nYaws, pinta, bejel, by deep intramuscular injection, ADULT, 900 mg as a single dose; CHILD, 450 mg as a single dose.                                      RECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions.                              "\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"hypersensitivity reactions including urticaria, fever, joint pains,\r\nrash, angioedema, anaphylaxis, serum sickness-like reactions, haemolytic anaemia, and interstitial nephritis (see also introductory note above); neutropenia, thrombocytopenia, coagulation disorders; rarely central nervous system toxicity (associated with high dosage or severe renal failure); Jarisch-Herxheimer reaction (during treatment for syphilis and other spirochaete infections, probably due to release of endotoxins); rarely nonallergic (embolic–toxic) reactions; pain and inflammation at injection site."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>history of allergy to penicillins\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to penicillins; intravascular injection; neurosyphilis.\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Contraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nMethotrexate Reduced excretion of methotrexate (increased risk of toxicity)"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Trace amounts in milk; safe in usual dosage; monitor infant\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe Neurotoxicity—high doses may cause convulsions\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(520, 'Benznidazole', 'Benznidazole\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 100 mg.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>acute American trypanosomiasis (Chagas disease).\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Acute American trypanosomiasis (Chagas disease), by mouth, ADULT,\r\n5–7 mg/kg daily in 2 divided doses for 60 days; CHILD up to 12 years,\r\n10 mg/kg daily in 2 divided doses for 60 days."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"rash (if severe and accompanied by fever and purpura, discontinue treatment); nausea, vomiting, abdominal pain; dose-related\r\nparaesthesia and peripheral neuritis (discontinue treatment); leukopenia; rarely agranulocytosis."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"hepatic, renal, or haematological insufficiency (require close\r\nmedical supervision); monitor blood count, especially leukocytes,\r\nthroughout treatment."\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>early pregnancy\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>First trimester: avoid\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(521, 'Benzoic acid + salicylic acid', 'Benzoic acid + salicylic acid\r\n\r\n<h5>Presentations</h5>\r\n<p>Cream or ointment: 6% + 3%.  Also known as Whitfield ointment\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>mild dermatophyte infections, particularly tinea pedis and tinea corporis\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Fungal skin infections, ADULT and CHILD, apply directly to the affected area twice daily until the infected skin is shed (usually at least 4 weeks).\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>occasionally localized, mild inflammatory reaction\r\n</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(522, 'Benzoyl Peroxide', 'Benzoyl Peroxide\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Cream or lotion: 5%.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>mild to moderate acne and as an adjunct to oral therapy in more severe cases.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Acne, ADULT and ADOLESCENT, initially apply directly to clean skin on alternate days, increasing frequency to 1–2 times daily as tolerance to irritant effect develops.\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"initial irritation common but subsides with continued use (in some cases may need to reduce frequency of application or temporarily suspend use); \r\nrarely contact sensitivity occurs, and occasionally even one application can cause severe irritation; may bleach fabrics, hair, and skin."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"avoid contact with eyes, mouth, and mucous membranes; avoid\r\nuse of occlusive dressings; avoid excessive exposure to sunlight."\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(523, 'Benzyl Benzoate', 'Benzyl Benzoate\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Lotion: 25%.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>scabies; head, body, and pubic lice.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Scabies, ADULT and CHILD, apply over whole body; repeat application without bathing on the following day and wash off 24 hours later; a third application may be needed in some cases.\r\nPediculosis, ADULT and CHILD, apply to the affected area and wash off\r\n24 hours later; further applications possibly needed after 7 and 14 days."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>local irritation, particularly in children.\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"do not use on inflamed or broken skin; avoid contact with eyes\r\nand mucous membranes; not recommended for children; breastfeeding (withhold during treatment)."\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(524, 'Benzylpenicillin', 'Benzylpenicillin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 600 mg (= 1 million IU); 3 g (= 5 million IU) (sodium or potassium salt) in vial. Also known as penicillin G.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>pneumonia; throat infections; otitis media; Lyme disease; streptococcal endocarditis; meningococcal disease; necrotizing enterocolitis; necrotizing fasciitis; leptospirosis; neurosyphilis; anthrax; relapsing fever; actinomycosis; brain abscess; gas gangrene; cellulitis; osteomyelitis.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Mild to moderate infections due to sensitive organisms, by intramuscular injection, by slow intravenous injection or by intravenous infusion, ADULT, 2.4–4.8 g daily in 4 divided doses, with higher doses in severe infections; NEONATE under 1 week, 50 mg/kg daily in 2 divided doses; NEONATE 1–4 weeks, 75 mg/kg daily in 3 divided doses; CHILD 1 month–12 years, 100 mg/kg daily in\r\n4 divided doses, with higher doses in severe infections.\r\nBacterial endocarditis, by slow intravenous injection or by intravenous infusion, ADULT, 7.2–14.4 g daily in 6 divided doses.\r\nMeningococcal disease, by slow intravenous injection or by intravenous infusion, ADULT, up to 14.4 g daily in divided doses; PREMATURE INFANT and NEONATE under 1 week, 100 mg/kg daily in 2 divided doses; NEONATE 1–4 weeks, 150 mg/kg daily in 3 divided doses; CHILD 1 month–12 years, 180–300 mg/kg daily in 4–6 divided doses.                                                                                                             Suspected meningococcal disease (before transfer to hospital), by intramuscular injection or by slow intravenous injection, ADULT and CHILD over 10 years, 1.2 g; INFANT under 1 year, 300 mg; CHILD 1–9 years, 600 mg.\r\nNeurosyphilis, by slow intravenous injection, ADULT, 1.8–2.4 g every 4 hours for 2 weeks.\r\nCongenital syphilis, by slow intravenous injection, CHILD up to 2 years, 30 mg/kg twice daily for the first 7 days of life, then 30 mg/kg 3 times daily for 3 days; by intramuscular injection or slow intravenous injection, CHILD over 2 years, 120–180 mg/kg (maximum, 1.44 g) daily in 4–6 divided doses for 10–14 days.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions. Intravenous route preferred for neonates and infants; doses over 1.2 g should be given by the intravenous route only."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"hypersensitivity reactions including urticaria, fever, joint pains,\r\nrash, angioedema, anaphylaxis, serum sickness-like reactions, haemolytic anaemia, and interstitial nephritis; diarrhoea, antibiotic-associated colitis; neutropenia, thrombocytopenia, coagulation disorders; central nervous system toxicity including convulsions, coma, and encephalopathy (associated with high dosage or severe renal failure); electrolyte disturbances; Jarisch-Herxheimer reaction (during treatment for syphilis and other spirochaete infections, probably due to release of endotoxins); inflammation, phlebitis or thrombophlebitis at injection sites."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>history of allergy to penicillins; renal failure; heart failure;\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to penicillins; avoid intrathecal route\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Contraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nMethotrexate Reduced excretion of methotrexate (increased risk of toxicity)"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Trace amounts in milk; safe in usual dosage; monitor infant\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe: Maximum, 6 g daily; neurotoxicity—high doses may cause convulsions\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(525, 'Betamethasone', 'Betamethasone\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Cream or ointment: 0.1% (as valerate).\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>severe inflammatory skin conditions including contact dermatitis, atopic dermatitis (eczema), seborrhoeic dermatitis, lichen planus, and intractable pruritus; psoriasis of the scalp, hands, and feet\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Inflammatory skin conditions, ADULT and CHILD over 2 years of age, apply sparingly to the affected area, 1–2 times daily until improvement occurs, then less frequently.\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"exacerbation of local infection; local atrophic changes\r\n(particularly on the face and in skinfolds), characterized by thinning of the dermis, depigmentation, dilatation of superficial blood vessels, and formation of striae; contact dermatitis; perioral dermatitis; acne at site of application; suppression of the hypothalamic–pituitary–adrenal axis with prolonged or widespread use (particularly under occlusion); hypertrichosis reported."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"children (avoid prolonged use and use under specialist\r\nsupervision); psoriasis (may precipitate severe pustular psoriasis on\r\nwithdrawal; avoid in widespread plaque psoriasis); adrenal suppression if used on a large area of the body or for a long time, particularly with an occlusive dressing; avoid use on the face for more than 7 days; secondary infection requires treatment with an appropriate antimicrobial."\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>untreated skin infections, broken skin, rosacea, acne, perioral dermatitis.\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Benefit of treatment, for example in asthma, outweighs risk\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Systemic effects in infant unlikely with maternal dose of less than equivalent of 40 mg prednisolone daily; monitor infant’s adrenal function with higher doses\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(526, 'Biperiden', 'Biperiden\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Injection: 5 mg (lactate) in 1-ml ampoule.\r\nTablet: 2 mg (hydrochloride)."\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antiparkinsonism medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>drug-induced extrapyramidal symptoms (but not tardive dyskinesias) and adjunctive treatment of parkinsonism.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Drug-induced extrapyramidal symptoms, parkinsonism, by mouth, ADULT, initially 1 mg twice daily, increased gradually to 2 mg 3 times daily; usual maintenance dose, 3–12 mg daily in divided doses.\r\nDrug-induced extrapyramidal symptoms, parkinsonism, by intramuscular injection or slow intravenous injection, ADULT, 2.5–5 mg repeated as necessary; maximum, 20 mg in 24 hours"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"drowsiness, dry mouth, constipation, blurred vision; hesitancy\r\nof micturition, dizziness, tachycardia, arrhythmias; confusion, excitement, agitation, hallucinations, and psychiatric disturbances with high dosage, especially in the elderly and other susceptible patients (may require withdrawal of treatment); impaired memory."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>the elderly; cardiovascular disease \r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example operating machinery or driving\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>angle-closure glaucoma; untreated urinary retention; prostatic hypertrophy; myasthenia gravis; gastrointestinal obstruction.\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"NOTE. Many drugs have antimuscarinic effects; concomitant use of two or more such drugs can increase adverse effects such as dry mouth, urine retention, and constipation, and can also lead to confusion especially in the elderly.\r\nAmitriptyline Increased antimuscarinic adverse effects\r\nChlorphenamine Increased antimuscarinic adverse effects\r\nChlorpromazine Increased antimuscarinic adverse effects (but reduced plasma chlorpromazine concentration)\r\nClomipramine Increased antimuscarinic adverse effects\r\nFluphenazine Increased antimuscarinic adverse effects (but reduced plasma fluphenazine concentration)\r\nGlyceryl trinitrate Possibly reduced effect of sublingual glyceryl trinitrate tablets (failure to dissolve under the tongue owing to dry mouth)\r\nHaloperidol Possibly reduced effects of haloperidol\r\nIsosorbide dinitrate Possibly reduced effect of sublingual isosorbide dinitrate tablets (failure to dissolve under the tongue owing to dry mouth)\r\nLevodopa Absorption of levodopa possibly reduced\r\nMetoclopramide Antagonism of effects of metoclopramide on gastrointestinal activity\r\nNeostigmine Antagonism of effects of neostigmine\r\nPilocarpine Antagonism of effects of pilocarpine\r\nPromethazine Increased risk of antimuscarinic adverse effects\r\nPyridostigmine Antagonism of effects of pyridostigmine"\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(527, 'Bleomycin', 'Bleomycin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 15 mg (as sulfate) in vial.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>adjunct to surgery and radiotherapy in palliative treatment of Hodgkin and non-Hodgkin lymphomas; reticulum cell sarcoma and lymphoma; carcinomas of the head, neck, larynx, cervix, penis, skin, vulva, testicles; embryonal cell carcinoma, choriocarcinoma, and teratoma; malignant effusions\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Consult specialist literature.\r\nNOTE. Doses of bleomycin are expressed in international units. 1 Bleomycin Unit in the USP is equivalent to 1000 international units"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>consult specialist literature\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>NOTE. Irritant to tissues. consult specialist literature\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>consult specialist literature\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Cisplatin Increased pulmonary toxicity\r\n* Oxygen Serious pulmonary toxicity in patients exposed to conventional oxygen concentrations during anaesthesia\r\nPhenytoin Possibly reduced absorption of phenytoin                         \r\nVaccine, Live Avoid use of live vaccines with bleomycin (impairment of immune response)\r\n* Vinblastine Increased risk of cardiovascular toxicity"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (teratogenic and carcinogenic in animal studies)\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Moderate: Reduce dose\r\n</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(528, 'Bupivacaine', 'Bupivacaine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Injection: 0.25%; 0.5% (hydrochloride) in vial.\r\nInjection for spinal anaesthesia: 0.5% (hydrochloride) in 4-ml ampoule to be mixed with 7.5% glucose solution."\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anaesthetics\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>infiltration anaesthesia; peripheral and sympathetic nerve block; spinal anaesthesia; postoperative pain relief.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Local infiltration, using 0.25% solution, ADULT, up to 150 mg (up to 60 ml).\r\nPeripheral nerve block, using 0.25% solution, ADULT, up to 150 mg (up to 60 ml); using 0.5% solution, ADULT, up to 150 mg (up to 30 ml).\r\nLumbar epidural block in surgery, using 0.5% solution, ADULT, 50–100 mg (10–20 ml).\r\nLumbar epidural block in labour, using 0.25–0.5% solution, ADULT (female), up to 60 mg (up to 12 ml).\r\nCaudal block in surgery, using 0.25–0.5% solution, ADULT, up to 150 mg (up to 30 ml).\r\nCaudal block in labour, using 0.25–0.5% solution, ADULT (female), up to 100 mg (maximum 20 ml).\r\nNOTE. Use lower doses for debilitated or elderly patients or in epilepsy or acute illness.\r\nDo not use solutions containing preservatives for spinal, epidural, caudal, or intravenous regional anaesthesia."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"with excessive dosage or following intravascular injection,\r\nlight-headedness, dizziness, blurred vision, restlessness, tremors, and, occasionally, convulsions rapidly followed by drowsiness, unconsciousness, and respiratory failure; cardiovascular toxicity includes hypotension, heart block and cardiac arrest; hypersensitivity and allergic reactions also occur; epidural anaesthesia occasionally complicated by urinary retention, faecal incontinence, headache, backache, or loss of perineal sensation; transient paraesthesia and paraplegia very rare."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"respiratory impairment; hepatic impairment;\r\nepilepsy; porphyria; myasthenia gravis"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"adjacent skin infection or inflamed skin; concomitant\r\nanticoagulant therapy; severe anaemia or heart disease; spinal or epidural anaesthesia in dehydrated or hypovolaemic patients."\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Lidocaine Increased myocardial depression (interaction less likely when lidocaine used topically)\r\nProcainamide Increased myocardial depression\r\n* Propranolol Increased risk of bupivacaine toxicity\r\nQuinidine Increased myocardial depression"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: With large doses, neonatal respiratory depression, hypotonia, and bradycardia after paracervical or epidural block; lower doses of bupivacaine for intrathecal use during late pregnancy\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount too small to be harmful\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid (or reduce dose) in severe liver disease\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(529, 'Caffeine Citrate ', 'Caffeine Citrate \r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Injection: 20 mg/ml (equivalent to 10 mg caffeine base/ml).\r\nOral liquid: 20 mg/ml (equivalent to 10 mg caffeine base/ml)."\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Medicines acting on the respiratory tract\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"Caffeine citrate, a respiratory stimulant, is used for neonatal apnoea in preterm infants (those born at less than 35 weeks gestastional age and weighing under 2 kg). It is preferred over other xanthines such as theophylline (section 25.1), as caffeine citrate has a better safety profile and does not require routine medicine level monitoring.\r\nOther causes of neonatal apnoea should be sought and treated before treatment with caffeine citrate is started (e.g. sepsis, hypothermia, hypoglycaemia, hypoxaemia, anaemia, seizures).\r\nUses: neonatal apnoea in preterm infants."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"NOTE. All doses expressed as caffeine citrate.\r\nNeonatal apnoea, by mouth or by intravenous injection, NEONATE, 20 mg/kg as a loading dose, then 5 mg/kg once daily starting 24 hours after loading dose; continue for 4–5 days after cessation of apnoea.\r\nNOTE. Caffeine citrate, 2 mg = caffeine base, 1 mg."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"lethargy (physical sign of withdrawal); feeding intolerance;\r\nirritability, excessive central nervous system stimulation, tachycardia (early sign of toxicity), hyperglycaemia or hypoglycaemia; rarely acidosis, disseminated intravascular coagulation, haemorrhage, lung oedema, gastritis, renal failure, retinopathy of prematurity, and sepsis."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>cardiovascular disorders\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>???</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(530, 'Calamine Lotion', 'Calamine Lotion\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Lotion.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>mild pruritus\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Mild pruritus, ADULT and CHILD, apply liberally to the entire affected area 3–4 times daily\r\n</p>\r\n\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(531, 'Calcium Folinate', 'Calcium Folinate\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Injection: 3 mg/ml in 10-ml ampoule.\r\nTablet: 15 mg."\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"antidote in high-dose methotrexate therapy (as a ‘folate rescue’);\r\ninadvertent overdose of methotrexate; palliative treatment of advanced metastatic colorectal cancer (in combination with fluorouracil)"\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Antidote to methotrexate (usually started 24 hours after administration of methotrexate), by intramuscular or intravenous injection or by intravenous infusion, ADULT and CHILD, up to 120 mg in divided doses over 12–24 hours, then\r\n12–15 mg by intramuscular injection, or 15 mg by mouth every 6 hours for 48–72 hours.\r\nMethotrexate overdosage (started as soon as possible, preferably within 1 hour of administration of methotrexate), by intravenous injection or infusion, ADULT and CHILD, dose equal to or higher than that of methotrexate, at rate not\r\nexceeding 160 mg/minute. Colorectal cancer (in combination with fluorouracil), consult specialist literature.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions.\r\nNOTE. Intrathecal injection of calcium folinate is contraindicated."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>allergic reactions; pyrexia after parenteral administration.\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"not for pernicious anaemia or other megaloblastic anaemias due\r\nto vitamin B12 deficiency"\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Phenobarbital Plasma concentration of phenobarbital possibly reduced\r\nPhenytoin Plasma phenytoin concentration possibly reduced\r\nSulfasalazine Possibly reduced absorption of folic acid"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Manufacturer advises use only if potential benefit outweighs risk\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(532, 'Calcium Gluconate', 'Calcium Gluconate\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 100 mg/ml in 10-ml ampoule.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Vitamins and minerals\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"Calcium supplements, in the form of calcium gluconate, are usually only required where dietary calcium intake is inadequate. This dietary requirement varies with age and is relatively greater in childhood and during pregnancy and lactation (due to an increased\r\ndemand), and in old age (due to impaired absorption). In osteoporosis, a calcium intake which is double the recommended daily amount reduces the rate of bone loss. In hypocalcaemic tetany, calcium gluconate must be given parenterally but plasma calcium\r\nmust be monitored. Calcium gluconate is also used in cardiac resuscitation.\r\nUses: hypocalcaemic tetany."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Hypocalcaemic tetany, by slow intravenous injection, ADULT, 1 g (2.2 mmol) followed by about 4 g (8.8 mmol) daily by continuous intravenous infusion.\r\nDILUTION AND ADMINISTRATION. According to manufacturer’s directions."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"gastrointestinal disturbances; bradycardia, arrhythmia;\r\ninjection-site reactions; peripheral vasodilation; fall in blood pressure."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>monitor plasma calcium concentration; renal impairment; sarcoidosis; history of nephrolithiasis\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"conditions associated with hypercalcaemia and\r\nhypercalciuria (for example, some forms of malignant disease)."\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Ciprofloxacin Reduced absorption of ciprofloxacin\r\nDexamethasone Reduced absorption of calcium salts\r\nDigoxin Large intravenous doses of calcium salts can precipitate arrhythmias\r\nFerrous salts Reduced absorption of oral ferrous salts\r\nHydrochlorothiazide Increased risk of hypercalcaemia\r\nHydrocortisone Reduced absorption of calcium salts\r\nLevothyroxine Reduced absorption of levothyroxine\r\nPrednisolone Reduced absorption of calcium salts\r\nSodium fluoride Reduced absorption of sodium fluoride\r\nZinc sulfate Reduced absorption of zinc sulfate"\r\n</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(533, 'Capreomycin', 'Capreomycin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 1000 mg in vial.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>Capreomycin is a complementary list medicine for the treatment of multidrug-resistant tuberculosis which should be used in specialized centres adhering to WHO standards for tuberculosis control\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Amikacin Increased risk of nephrotoxicity and ototoxicity\r\nGentamicin Increased risk of nephrotoxicity and ototoxicity\r\nStreptomycin Increased risk of nephrotoxicity and ototoxicity\r\nVancomycin Increased risk of nephrotoxicity and ototoxicity"\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(534, 'Carbamazepine', 'Carbamazepine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet (scored): 100 mg; 200 mg.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Psychotherapeutic medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>prophylaxis of bipolar disorder unresponsive to or intolerant of lithium; epilepsy, trigeminal neuralgia\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Prophylaxis of bipolar disorder, by mouth, ADULT, initially 400 mg daily in divided doses increased until symptoms are controlled up to a maximum of 1.6 g daily; usual maintenance dose in range, 400–600 mg daily.\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"dizziness, drowsiness, headache, ataxia, blurred vision;\r\ndiplopia (may be associated with high plasma concentrations);\r\ngastrointestinal intolerance including nausea and vomiting, anorexia,\r\nabdominal pain, dry mouth, diarrhoea, or constipation; commonly, mild transient generalized erythematous rash (withdraw if rash worsens or is accompanied by other symptoms); leukopenia and other blood disorders (including thrombocytopenia, agranulocytosis, and aplastic anaemia); cholestatic jaundice, hepatitis, acute renal failure, Stevens-Johnson syndrome (erythema multiforme), toxic epidermal necrolysis, alopecia, thromboembolism, arthralgia, fever, proteinuria, lymph node enlargement, arrhythmias, heart block and heart failure, dyskinesias, paraesthesia, depression, impotence, male infertility, gynaecomastia, galactorrhoea, aggression, activation of psychosis, photosensitivity, pulmonary hypersensitivity, hyponatraemia, oedema, and disturbances of bone metabolism with osteomalacia also reported; confusion and agitation in the\r\nelderly."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"hepatic impairment; renal impairment; cardiac disease (see also Contraindications above); skin reactions; history of blood disorders (monitor blood counts\r\nbefore and during treatment); glaucoma; pregnancy (risk of neural tube defects and neonatal bleeding; Appendix 2); breastfeeding;\r\navoid sudden withdrawal; interactions                                                          BLOOD, HEPATIC OR SKIN DISORDERS. Patients or their carers should be told how to recognize signs of blood, liver, or skin disorders, and advised to seek immediate medical attention if symptoms such as fever, sore throat, rash, mouth ulcers, bruising, or bleeding develop. Leukopenia which is severe, progressive and associated with clinical symptoms requires withdrawal (if necessary under cover of suitable alternative).\r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example operating machinery or driving"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"atrioventricular conduction abnormalities; history of bone\r\nmarrow depression; porphyria"\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Acetazolamide Increased risk of hyponatraemia; acetazolamide increases plasma carbamazepine concentration\r\nAlcohol Possibly enhanced CNS adverse effects of carbamazepine\r\nAlcuronium Antagonism of muscle relaxant effect (recovery from neuromuscular blockade accelerated)\r\nAmiloride Increased risk of hyponatraemia\r\n* Amitriptyline Antagonism of anticonvulsant effect (convulsive threshold lowered); accelerated metabolism of amitriptyline (reduced plasma concentration; reduced antidepressant effect)\r\nAmlodipine Probably reduced effect of amlodipine\r\nChloroquine Possibly increased risk of convulsions\r\n* Chlorpromazine Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Ciclosporin Accelerated metabolism of ciclosporin (reduced plasma ciclosporin concentration)\r\n* Clomipramine Antagonism of anticonvulsant effect (convulsive threshold lowered); accelerated metabolism of clomipramine\r\n(reduced plasma concentration; reduced antidepressant effect)\r\n* Contraceptives, Oral Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\n* Dexamethasone Accelerated metabolism of dexamethasone (reduced effect)                                                                                                          Doxycycline Accelerated metabolism of doxycycline (reduced effect )\r\nErgocalciferol Ergocalciferol requirements possibly increased\r\n* Erythromycin Increased plasma carbamazepine concentration\r\nEthosuximide May be enhanced toxicity without corresponding increase in antiepileptic effect; plasma concentration of ethosuximide possibly reduced\r\n* Fluoxetine Plasma concentration of carbamazepine increased\r\n* Fluphenazine Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\nFurosemide Increased risk of hyponatraemia\r\n* Haloperidol Antagonism of anticonvulsant effect (convulsive threshold lowered); metabolism of haloperidol accelerated (reduced plasma concentration)\r\nHydrochlorothiazide Increased risk of hyponatraemia\r\n* Hydrocortisone Accelerated metabolism of hydrocortisone (reduced effect)\r\nIndinavir Possibly reduced plasma indinavir concentration\r\n* Isoniazid Increased plasma carbamazepine concentration (also\r\nisoniazid hepatotoxicity possibly increased)\r\n* Levonorgestrel Accelerated metabolism of levonorgestrel (reduced contraceptive effect)\r\nLevothyroxine Accelerated metabolism of levothyroxine (may increase levothyroxine requirements in hypothyroidism)\r\nLithium Neurotoxicity may occur without increased plasma lithium concentration\r\n* Lopinavir Possibly reduced plasma lopinavir concentration\r\nMebendazole Reduced plasma mebendazole concentration (possibly increase mebendazole dose in tissue infection)\r\n* Medroxyprogesterone Accelerated metabolism of medroxyprogesterone (does not apply to injectable medroxyprogesterone acetate used for contraception)\r\n* Mefloquine Antagonism of anticonvulsant effect\r\nMethadone Reduced plasma concentration of methadone\r\nMiconazole Plasma concentration of carbamazepine possibly increased\r\nNelfinavir Possibly reduced plasma nelfinavir concentration\r\nNifedipine Probably reduced effect of nifedipine\r\n* Norethisterone Accelerated metabolism of norethisterone (reduced contraceptive effect)\r\n* Phenobarbital May be enhanced toxicity without corresponding increase in antiepileptic effect; reduced plasma concentration of carbamazepine\r\n* Phenytoin May be enhanced toxicity without corresponding increase in antiepileptic effect; plasma concentration of phenytoin\r\noften lowered but may be raised; plasma concentration of\r\ncarbamazepine often lowered\r\nPraziquantel Plasma praziquantel concentration reduced\r\n* Prednisolone Accelerated metabolism of prednisolone (reduced effect)\r\n* Ritonavir Plasma concentration possibly increased by ritonavir\r\nSaquinavir Possibly reduced plasma saquinavir concentration\r\nSpironolactone Increased risk of hyponatraemia\r\nValproic acid May be enhanced toxicity without corresponding increase in antiepileptic effect; reduced plasma concentration of\r\nvalproic acid; plasma concentration of active metabolite of carbamazepine increased                                                                         \r\nVecuronium Antagonism of muscle relaxant effect (recovery from neuromuscular blockade accelerated)\r\n* Verapamil Enhanced effect of carbamazepine\r\n* Warfarin Accelerated metabolism of warfarin (reduced anticoagulant effect)"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>"First trimester: Risk of teratogenesis including\r\nincreased risk of neural tube defects (counselling and\r\nscreening and adequate folate supplements advised,\r\nfor example, 5 mg daily); risk of teratogenicity greater\r\nif more than one antiepileptic used; see section 5\r\nThird trimester: May possibly cause vitamin K\r\ndeficiency and risk of neonatal bleeding; if vitamin K\r\nnot given at birth, neonate should be monitored closely for signs of bleeding"\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Continue breastfeeding; adverse effects possible (severe skin reaction reported in one infant); monitor infant for drowsiness\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Manufacturer advises caution\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Metabolism impaired in advanced liver disease\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(535, 'Cefazolin', 'Cefazolin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 1 g (as sodium salt) in vial.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>prophylaxis of infection in surgery.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Surgical prophylaxis, by deep intramuscular injection, by intravenous injection (over at least 3–5 minutes), or by intravenous infusion, ADULT, 1 g as a single dose at induction of anaesthesia, or after cord clamping in caesarean section, repeated if necessary if surgery lasts over 3 hours; CHILD, 25 mg/kg  (maximum, 1 g) as a single dose at induction of anaesthesia, repeated if necessary if surgery lasts over 3 hours.\r\nNOTE. Further doses may be given every 6–8 hours post-operatively for 24 hours if necessary, or for up to 5 days in continued risk of infection (consult manufacturer’s literature).\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions; intramuscular administration may be painful and should be avoided where possible."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"diarrhoea, nausea, rash, electrolyte disturbances, cholestatic\r\nhepatitis, pain and inflammation at injection site; antibiotic-associated colitis; less commonly vomiting, headache, dizziness, and fever; rarely confusion (particularly following large doses and in renal impairment), arthritis, serum sickness-like reactions, neurotoxicity (including seizures), blood disorders (including neutropenia, eosinophilia, thrombocytopenia, leucopenia, thrombocythaemia, haemolytic anaemia, and bleeding), renal impairment (including interstitial nephritis), allergic reactions (including urticaria, anaphylaxis, angioedema, and bronchial obstruction), and abnormal liver function tests; erythema multiforme and toxic epidermal necrolysis also reported."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"sensitivity to Beta Lactam antibacterials (avoid if history of\r\nimmediate hypersensitivity reactions; see introductory note above);\r\nmoderate renal impairment; pregnancy and\r\nbreastfeeding (Appendix 3); use may result in false positive urinary glucose\r\n(if tested for reducing substances) and false positive Coombs'' test;"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to cefalosporins.\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Contraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Warfarin Possibly enhanced anticoagulant effect"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Excreted in low concentrations; safe in usual dosage; monitor infant\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Moderate: Reduce dose\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(536, 'Cefixime', 'Cefixime\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 400 mg\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>uncomplicated gonorrhoea\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Uncomplicated anogenital gonorrhoea, by mouth, ADULT, 400 mg as a single dose\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"diarrhoea, nausea and vomiting, abdominal discomfort,\r\nheadache; rarely antibiotic-associated colitis (particularly with higher doses); allergic reactions including rash, pruritus, urticaria, serum sickness-like reactions, fever and arthralgia, and anaphylaxis; erythema multiforme and toxic epidermal necrolysis reported; transient hepatitis, cholestatic jaundice; eosinophilia and blood disorders (including thrombocytopenia, leucopenia, agranulocytosis, aplastic anaemia, and haemolytic anaemia); reversible interstitial nephritis, hyperactivity, nervousness, sleep disturbances,\r\nhallucinations, confusion, hypertonia, and dizziness"\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"sensitivity to Beta Lactam antibacterials (avoid if history of\r\nimmediate hypersensitivity reaction; moderate renal impairment; pregnancy and breastfeeding; use may result in false positive urinary glucose (if tested for reducing substances) and false positive Coombs'' test"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to cefalosporins\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Contraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Warfarin Possibly enhanced anticoagulant effect"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Probably present in milk but safe in usual dosage; monitor infant\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Moderate: Reduce dose\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(537, 'Ceftazidime', 'Ceftazidime\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 250 mg (as pentahydrate) in vial\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>infections due to sensitive bacteria, especially those due to Pseudomonas spp. and those resistant to aminoglycosides\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Infections due to susceptible organisms, by deep intramuscular injection, by intravenous injection, or by intravenous infusion, ADULT, 1 g every 8 hours or 2 g every 12 hours; in severe infections (including in the immunocompromised), 2 g every 8–12 hours or 3 g every 12 hours (in the elderly, usual maximum, 3 g daily); NEONATE and INFANT up to 2 months, 25–60 mg/kg daily in 2 divided doses; CHILD over 2 months, 30–100 mg/kg daily in 2–3 divided doses (intravenous route recommended for children). Pseudomonal lung infection in cystic fibrosis, by deep intramuscular injection, by\r\nintravenous injection, or by intravenous infusion, ADULT, 100–150 mg/kg daily in 3 divided doses.\r\nInfections in the immunocompromised, cystic fibrosis, or meningitis, by intravenous injection or intravenous infusion, CHILD over 2 months up to 150 mg/kg daily in 3 divided doses (maximum, 6 g daily).\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions. Intramuscular doses over 1 g should be divided between more than one site."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"diarrhoea, nausea and vomiting, abdominal discomfort,\r\nheadache; rarely antibiotic-associated colitis (particularly with higher doses); allergic reactions including rash, pruritus, urticaria, serum sickness-like reactions, fever and arthralgia, and anaphylaxis; erythema multiforme and toxic epidermal necrolysis reported; transient hepatitis, cholestatic jaundice; eosinophilia and blood disorders (including thrombocytopenia, leukopenia, agranulocytosis, aplastic anaemia, and haemolytic anaemia); reversible interstitial nephritis; nervousness, sleep disturbances, confusion, hypertonia,\r\nand dizziness."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"sensitivity to Beta Lactam antibacterials (avoid if history of\r\nimmediate hypersensitivity reaction; renal impairment; pregnancy and breastfeeding; use may result in false positive urinary glucose (if tested for reducing substances) and false positive Coombs’ test"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to cefalosporins; porphyria\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Contraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Warfarin Possibly enhanced anticoagulant effect"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Excreted in low concentrations; safe in usual dosage; monitor infant\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild: Reduce dose\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(538, 'Ceftriaxone', 'Ceftriaxone\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 250 mg; 1 g (as sodium salt) in vial.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"serious infections due to sensitive bacteria, including septicaemia,\r\npneumonia, and meningitis; osteomyelitis, septic arthritis; Haemophilus influenzae epiglottis; surgical prophylaxis; prophylaxis of meningococcal meningitis; shigellosis, invasive salmonellosis; endocarditis; gonococcal conjunctivitis; gonorrhoea; pelvic inflammatory disease; Lyme disease."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Infections due to susceptible organisms, by deep intramuscular injection, by intravenous injection (over at least 2–4 minutes), or by intravenous infusion, ADULT, 1 g daily; up to 2–4 g daily in severe infections; INFANT and CHILD under 50 kg, 20–50 mg/kg daily should be given, up to 80 mg/kg daily in severe infections (doses of 50 mg/kg and over by intravenous infusion only); by intravenous infusion (over 60 minutes), NEONATE, 20–50 mg/kg daily (maximum, 50 mg/kg daily).\r\nUncomplicated gonorrhoea and gonococcal conjunctivitis, by deep intramuscular injection, ADULT, 125 mg as a single dose (also used with doxycycline and metronidazole to treat pelvic inflammatory disease). Neonatal gonococcal conjunctivitis, by intramuscular injection, NEONATE, 50 mg/kg as a single dose (maximum, 125 mg).  Disseminated gonococcal infection, by deep intramuscular injection or by intravenous injection, ADULT, 1 g daily for 7 days.\r\nSurgical prophylaxis, by deep intramuscular injection or by intravenous injection (over at least 2–4 minutes), ADULT, 1 g at induction. Colorectal surgery (with an antibacterial active against anaerobes), by deep intramuscular injection, by intravenous injection (over at least 2–4 minutes), or by intravenous infusion, ADULT, 2 g as a single dose.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions. Intramuscular doses over 1 g should be divided between more than one site. Administer by intravenous infusion over 60 minutes in neonates."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"diarrhoea, nausea and vomiting, abdominal discomfort,\r\nheadache; rarely antibiotic-associated colitis (particularly with higher doses); allergic reactions including rash, pruritus, urticaria, serum sickness-like reactions, fever and arthralgia, and anaphylaxis; erythema multiforme and toxic epidermal necrolysis reported; transient hepatitis, cholestatic jaundice; eosinophilia and blood disorders (including thrombocytopenia, leukopenia,\r\nagranulocytosis, aplastic anaemia, and haemolytic anaemia); reversible interstitial nephritis, hyperactivity, nervousness, sleep disturbances, hallucinations, confusion, hypertonia and dizziness; calcium ceftriaxone precipitates in the urine (particularly in the very young, the dehydrated, or in those who are immobilized) or in the gallbladder (consider discontinuation if symptomatic); rarely prolongation of prothrombin time and pancreatitis."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"sensitivity to Beta Lactam antibacterials (avoid if history of\r\nimmediate hypersensitivity reactions; severe renal impairment; hepatic impairment if accompanied by renal impairment (Appendix 5); premature neonates (may displace bilirubin from serum albumin); treatment longer than 14 days, renal failure, dehydration, or concomitant total parenteral nutrition (risk of ceftriaxone precipitation in gallbladder); pregnancy and breastfeeding (but appropriate to use); false positive urinary glucose (if tested for reducing substances) and false positive Coombs’ test; interactions"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"hypersensitivity to cefalosporins; porphyria; neonates with\r\njaundice, hypoalbuminaemia, acidosis or impaired bilirubin binding."\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Contraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Warfarin Possibly enhanced anticoagulant effect"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Excreted in low concentrations; safe in usual dosage; monitor infant\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe: Maximum, 2 g daily; also monitor plasma concentration if both severe renal impairment and hepatic impairment\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(539, 'Charcoal, Activated', 'Charcoal, Activated\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antidotes and other substances used in poisonings\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>treatment of acute poisoning.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Poisoning (reduction of absorption), by mouth, as soon as possible after ingestion of poison, ADULT, 50–100 g as a single dose; INFANT, 1 g/kg as a single dose; CHILD 1–12 years, 25 g as a single dose (50 g in severe poisoning). Poisoning (active elimination), by mouth, ADULT, 50 g every 4 hours (in case of intolerance 25 g every 2 hours); INFANT, 1 g/kg every 4–6 hours; CHILD over 1 year, 25–50 g every 4–6 hours.\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>black stools; vomiting, constipation or diarrhoea; pneumonitis (due to aspiration).\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"drowsy or unconscious patients (risk of aspiration; intubate\r\nbefore administration via nasogastric or gastric tube); not effective for poisoning with alcohols, clofenotane (dicophane, DDT), cyanides,\r\nmalathion, and metal salts including those of iron and lithium."\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>poisoning by hydrocarbons with high potential for harm if aspirated; poisoning by corrosive substances (may prevent visualization of lesions caused by the poison).\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(540, 'Chlorambucil', 'Chlorambucil\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 2 mg.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"chronic lymphocytic leukaemia; some non-Hodgkin lymphomas;\r\nHodgkin disease, and Waldenstrom (primary) macroglobulinaemia."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature.\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature.\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>consult specialist literature; renal impairment; severe hepatic impairment\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>consult specialist literature; pregnancy and breastfeeding\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Phenytoin Possibly reduced absorption of phenytoin\r\nVaccine, Live Avoid use of live vaccines with chlorambucil (impairment of immune response)"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid; use effective contraception during administration to men or women\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>"Moderate: Use with caution and monitor response; increased risk of\r\nmyelosuppression"\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Limited information available — consider dose reduction in severe hepatic impairment\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(541, 'Chloramphenicol', 'Chloramphenicol\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Capsule: 250 mg.\r\nOily suspension for injection: 0.5 g (as sodium succinate)/ml in 2-ml ampoule.\r\nOral liquid: 150 mg (as palmitate)/5 ml.\r\nPowder for injection: 1 g (sodium succinate) in vial"\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"Chloramphenicol is a potent broad-spectrum antibiotic. However, it is associated with serious haematological adverse effects and should be reserved for the treatment of severe infections, particularly those caused by Haemophilus influenzae and typhoid fever.\r\nThe oily suspension should be reserved for use in situations of catastrophic epidemics of meningococcal meningitis, such as those that occur in sub-Saharan Africa, in which the scale of the epidemic often overwhelms the medical services and precludes any other form of antimicrobial therapy.                                                                                    severe life-threatening infections, particularly those caused by\r\nHaemophilus influenzae and typhoid fever; also, pneumonia; cerebral abscess; mastoiditis; rickettsia; relapsing fever; gangrene; granuloma inguinale; listeriosis; plague; psitticosis; tularaemia; Whipple disease; septicaemia; meningitis."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Infections due to susceptible organisms which are not susceptible to other antimicrobials, by mouth, by intravenous injection, or by intravenous infusion, ADULT and CHILD, 50 mg/kg daily in 4 divided doses; up to 100 mg/kg daily in divided doses in severe infections such as meningitis, septicaemia, and haemophilus epiglottitis (reduce high doses as soon as clinically indicated); NEONATE under 2 weeks, 25 mg/kg daily in 4 divided doses; INFANT 2 weeks to 1 year, 50 mg/kg daily in 4 divided doses.\r\nEpidemics of meningococcal meningitis, by intramuscular injection (of oily suspension), ADULT, 3 g as a single dose, repeated after 48 hours if necessary; INFANT 1–8 weeks, 250 mg as a single dose; INFANT 2–11 months, 500 mg as a single dose; CHILD 1–2 years, 1 g as a single dose; CHILD 3–5 years, 1.5 g as a single dose; CHILD 6–9 years, 2 g as a single dose; CHILD 10–14 years, 2.5 g as a single dose; CHILD over 15 years, as for adult, repeated after 48 hours if necessary.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions. The oily suspension is for intramuscular use only.\r\nNOTE. Plasma concentration monitoring is required in neonates and is preferred in those under 4 years of age, in the elderly, and in hepatic impairment; recommended peak plasma chloramphenicol concentration (measured approximately 1 hour after intravenous injection or infusion) is 15–25 mg/litre; pre-dose ‘trough’ concentration should not exceed 15 mg/litre."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"bone marrow depression—reversible and irreversible aplastic\r\nanaemia (with reports of leukaemia), anaemia, leukopenia, and\r\nthrombocytopenia; nocturnal haemoglobinuria; peripheral neuritis and optic neuritis; nausea, vomiting, diarrhoea, dry mouth, stomatitis, glossitis; headache, depression; hypersensitivity reactions including rash, urticaria, fever, angioedema, and rarely anaphylaxis; grey syndrome (vomiting, greenish diarrhoea, abdominal distension, hypothermia, pallid cyanosis, irregular respiration, circulatory collapse) may follow excessive doses in neonates with immature hepatic metabolism; grey syndrome also reported in infants born to mothers treated in late pregnancy."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"avoid repeated courses and prolonged use; hepatic impairment\r\n(reduce dose); severe renal impairment (reduce dose; blood counts required before and during treatment; monitor plasma concentrations in neonates; breastfeeding; interactions"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>pregnancy; porphyria\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Ciclosporin Plasma concentration of ciclosporin possibly increased\r\n* Glibenclamide Enhanced effect of glibenclamide\r\nHydroxocobalamin Response to hydroxocobalamin reduced\r\n* Phenobarbital Metabolism of chloramphenicol accelerated (reduced plasma chloramphenicol concentration)\r\n* Phenytoin Plasma phenytoin concentration increased (increased risk of toxicity)\r\nRifampicin Accelerated metabolism of chloramphenicol (reduced\r\nplasma chloramphenicol concentration)\r\n* Warfarin Enhanced anticoagulant effect"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: Neonatal “grey” syndrome\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Continue breastfeeding; use alternative drug if possible; may cause bone marrow toxicity in infant; concentration in milk usually insufficient to cause “grey syndrome”\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe: Avoid unless no alternative; dose related depression of haematopoiesis\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p> Avoid if possible — increased risk of bone marrow depression; reduce dose and monitor plasma chloramphenicol concentration\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(542, 'Chlorhexidine', 'Chlorhexidine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Solution: 5% (digluconate) for dilution.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Disinfectants and antiseptics\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>antiseptic; disinfection of clean instruments\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Administration:\r\nAntiseptic (pre-operative skin disinfection and hand washing), ADULT and CHILD, use 0.5% solution in alcohol (70%) or 2 or 4% detergent solution to the skin area.\r\nAntiseptic (wounds, burns, and other skin damage), ADULT and CHILD, apply 0.05% aqueous solution directly to the affected area.\r\nDisinfection of clean instruments, immerse for at least 30 minutes in 0.05% solution containing sodium nitrite 0.1% (to inhibit metal corrosion).\r\nEmergency disinfection of clean instruments, immerse for 2 minutes in 0.5% solution in alcohol (70%).\r\nDILUTION AND ADMINISTRATION. According to manufacturer''s directions."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>occasional skin sensitivity and irritation.\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"aqueous solutions (which are susceptible to microbial\r\ncontamination should be freshly prepared; appropriate measures required to prevent contamination during storage or dilution); instruments with cemented glass components (avoid preparations containing surface active agents); irritant (avoid contact with middle ear, eyes, brain, and meninges); not for use in body cavities; alcoholic solutions not suitable before diathermy; syringes and needles treated with chlorhexidine (rinse thoroughly with sterile water or saline before use); inactivated by cork (use glass, plastic or rubber closures); alcohol-based solutions are flammable."\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(543, 'Chlorine Base Compound ', 'Chlorine Base Compound \r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder: (0.1% available chlorine) for solution.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Disinfectants and antiseptics\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>disinfection of surfaces, medical equipment, and water.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Surface disinfection (minor contamination), apply 0.1% solution.\r\nInstrument disinfection, soak in (0.1%) solution for a minimum of 15 minutes (to avoid corrosion do not soak for more than 30 minutes); rinse with sterile water                                                                                 DILUTION AND ADMINISTRATION. According to manufacturer''s directions"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>irritation and burning sensation on skin.\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>avoid exposure of product to flame; activity diminished in presence of organic material and increasing pH (can cause release of toxic chlorine gas).\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(544, 'Chloroquine', 'Chloroquine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Oral liquid: 50 mg (as phosphate or sulfate)/5 ml.\r\nTablet: 100 mg; 150 mg (as phosphate or sulfate).                               \r\nNOTE. Chloroquine base, 150 mg, is approximately equivalent to chloroquine sulfate,200 mg, or chloroquine phosphate, 250 mg."\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Analgesics, antipyretics, NSAIMs, DMARDs; Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>rheumatoid arthritis (including juvenile arthritis); treatment of acute malaria caused by P. malariae, P. vivax, and P. Ovale (followed in P. vivax and P. ovale infections by primaquine to eliminate intrahepatic forms; prophylaxis of malaria\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Administered on expert advice.\r\nNOTE. All doses in terms of chloroquine base.\r\nRheumatoid arthritis, by mouth, ADULT, 150 mg daily; maximum, 2.5 mg/kg daily; CHILD, up to 3 mg/kg daily.                                         Treatment of acute malaria, by mouth, ADULT and CHILD, 10 mg/kg followed by 5 mg/kg 6–8 hours later, then 5 mg/kg daily on next 2 days or 10 mg/kg for 2 days, followed by 5 mg/kg daily on day 3 (total dose, 25 mg/kg over 3 days).\r\nPATIENT ADVICE. Oral chloroquine should be taken after meals to minimize nausea and vomiting; if part or all a dose is vomited, the same amount must be readministered immediately.\r\nNOTE. To avoid excessive dosage in obese patients, the dose of chloroquine should be calculated on the basis of lean body weight.   "\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"gastrointestinal disturbances, headache, skin reactions\r\n(including rash and pruritus); less frequently ECG changes, convulsions, visual changes, retinal damage, keratopathy, ototoxicity, hair depigmentation, alopecia, and discoloration of skin, nails and mucous membranes; rarely blood disorders (including thrombocytopenia, agranulocytosis, and aplastic anaemia); mental changes (including emotional disturbances, and psychosis),\r\nmyopathy (including cardiomyopathy and neuromyopathy), acute\r\ngeneralized exanthematous pustulosis, exfoliative dermatitis, erythema multiforme (Stevens-Johnson syndrome), photosensitivity, and hepatic damage; important: arrhythmias and convulsions in overdosage."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"monitor visual acuity throughout treatment and warn patient to\r\nreport immediately any unexplained visual disturbances; hepatic impairment; renal impairment; pregnancy and breastfeeding; neurological disorders including epilepsy; severe gastrointestinal disorders; G6PD deficiency; elderly; may exacerbate psoriasis and aggravate myasthenia gravis; porphyria"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>psoriatic arthritis.\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Antacids (Aluminium hydroxide; Magnesium hydroxide) Reduced absorption of chloroquine\r\n* Artemether + lumefantrine Manufacturer of artemether + lumefantrine advises avoid concomitant use\r\nCarbamazepine Possibly increased risk of convulsions\r\n* Ciclosporin Increased plasma ciclosporin concentration (increased risk of toxicity)\r\n* Digoxin Plasma digoxin concentration possibly increased\r\nEthosuximide Possibly increased risk of convulsions\r\n* Mefloquine Increased risk of convulsions\r\nNeostigmine Chloroquine has potential to increase symptoms of\r\nmyasthenia gravis and thus diminish effect of neostigmine\r\nPhenytoin Possible increased risk of convulsions\r\nPraziquantel Plasma praziquantel concentration possibly reduced\r\nPyridostigmine Chloroquine has potential to increase symptoms of\r\nmyasthenia gravis and thus diminish effect of pyridostigmine      \r\nQuinidine Increased risk of ventricular arrhythmias\r\nQuinine Increased risk of ventricular arrhythmias\r\n* Valproic acid Possibly increased risk of convulsions"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>"First and third trimesters: Benefit of prophylaxis and\r\ntreatment in malaria outweighs risk"\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>At doses used for malaria prophylaxis, amount in milk probably too small to be harmful and inadequate for reliable protection against malaria in the breastfead infant; avoid breastfeeding when used for rheumatic disease\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>"Mild tomoderate Reduce dose in rheumatic disease\r\nSevere Reduce dose for malaria prophylaxis; avoid in rheumatic disease"\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(545, 'Chloroxylenol', 'Chloroxylenol\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Solution: 4.8%.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Disinfectants and antiseptics\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>antiseptic; disinfection of instruments and surfaces.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Antiseptic (wounds and other skin damage), apply a 1 in 20 dilution of 5% concentrate in water to the affected area.\r\nDisinfection of instruments, immerse a 1 in 20 dilution of 5% concentrate in alcohol (70%).\r\nDILUTION AND ADMINISTRATION. According to manufacturer’s directions."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>skin sensitivity reported\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"aqueous solutions (which are susceptible to microbial\r\ncontamination) should be freshly prepared; appropriate measures required to prevent contamination during storage or dilution."\r\n</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(546, 'Chlorphenamine', 'Chlorphenamine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Injection: 10 mg (hydrogen maleate) in 1-ml ampoule.\r\nTablet: 4 mg (hydrogen maleate)."\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antiallergics and medicines used in anaphylaxis\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"symptomatic relief of allergy, allergic rhinitis (hay fever) and\r\nconjunctivitis, urticaria, insect stings, and pruritus of allergic origin; adjunct in the emergency treatment of anaphylactic shock and severe angioedema."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Allergy, by mouth, ADULT, 4 mg every 4–6 hours (maximum, 24 mg daily); CHILD under 1 year, not recommended; CHILD 1–2 years, 1 mg twice daily; CHILD 2–5 years, 1 mg every 4–6 hours (maximum 6 mg daily); CHILD 6–12 years, 2 mg every 4–6 hours (maximum 12 mg daily). Allergic reactions, anaphylaxis (adjunct), by subcutaneous, intramuscular, or intravenous injection, ADULT, 10–20 mg (maximum 40 mg in 24 hours); CHILD 1 month–1 year, 250 micrograms/kg (maximum 2.5 mg); CHILD 1–5 years, 2.5–5 mg; CHILD 6–12 years, 5–10 mg.\r\nDILUTION AND ADMINISTRATION. Give intravenous injection over 1 minute; if necessary, injection solution can be diluted with sodium chloride, 0.9% injection."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"drowsiness (rarely paradoxical stimulation with high doses, or\r\nin children or the elderly), hypotension, headache, dizziness, palpitations, psychomotor impairment, urinary retention, dry mouth, blurred vision, gastrointestinal disturbances; liver dysfunction; blood disorders; also rash and photosensitivity reactions, sweating and tremor; hypersensitivity reactions including bronchospasm, angioedema and anaphylaxis; injections may be irritant."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"prostate enlargement, urinary retention; ileus or pyloroduodenal\r\nobstruction; glaucoma; child under 1 year; pregnancy; and\r\nbreastfeeding; renal impairment; hepatic impairment; epilepsy.       \r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example operating machinery or driving."\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Alcohol Enhanced sedative effect\r\nAmitriptyline Increased antimuscarinic and sedative effects\r\nAtropine Increased antimuscarinic adverse effects\r\nBiperiden Increased antimuscarinic adverse effects\r\nClomipramine Increased antimuscarinic and sedative effects\r\nDiazepam Enhanced sedative effect\r\nLopinavir Possibly increased plasma concentration of chlorphenamine"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>No evidence of teratogenicity\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Safe in usual dosage; monitor infant for drowsiness\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe Dose reduction may be required\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Sedation inappropriate in severe liver disease\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(547, 'Chlorpromazine', 'Chlorpromazine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Injection: 25 mg (hydrochloride/ml in 2-ml ampoule.\r\nOral liquid: 25 mg (hydrochloride/5 ml.\r\nTablet: 100 mg (hydrochloride).                                                                     \r\nWARNING. Owing to the risk of contact sensitization, pharmacists, nurses, and other health workers should avoid direct contact with chlorpromazine; tablets should not be crushed and solutions should be handled with care.  "\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Psychotherapeutic medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"schizophrenia and other psychotic disorders, mania, psychomotor\r\nagitation and violent behaviour; adjunct in severe anxiety."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Schizophrenia and other psychoses, mania, psychomotor agitation, violent behaviour, severe anxiety (adjunct), by mouth:\r\nADULT, initially 25 mg 3 times daily or 75 mg at night, adjusted according to response to usual maintenance dose of 75–300 mg daily (but up to 1 g daily may be required in psychoses); ELDERLY (or debilitated) third to half adult dose;\r\nCHILD (childhood schizophrenia and autism) 1–5 years, 500 micrograms/kg every 4–6 hours (maximum 40 mg daily); CHILD 6–12 years, third to half adult dose (maximum 75 mg daily).\r\nFor relief of acute symptoms, by deep intramuscular injection, ADULT, 25–50 mg every 6–8 hours; CHILD, 1–12 years, 500 micrograms/kg every 6–8 hours (1–5 years, maximum, 40 mg daily; 6–12 years, maximum, 75 mg daily)"\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"extrapyramidal symptoms and on prolonged administration,\r\noccasionally potentially irreversible tardive dyskinesias hypothermia (occasionally pyrexia), drowsiness, apathy, pallor, nightmares, dizziness, excitement, insomnia, headache, confusion,\r\ndepression; more rarely, agitation, EEG changes, convulsions, and nasal congestion; anticholinergic symptoms including dry mouth, constipation, blurred vision, and difficulty in micturition; hypotension, tachycardia, and arrhythmias; ECG changes; respiratory depression; menstrual disturbances, galactorrhoea, gynaecomastia, impotence, weight gain; sensitivity reactions such as agranulocytosis, leukopenia, leukocytosis, haemolytic anaemia, photosensitization, contact sensitization and rash, jaundice, and alterations\r\nin liver function; neuroleptic malignant syndrome; lupus erythematosus-like syndrome; corneal and lens opacities, and purplish pigmentation of the skin, cornea, and retina (with prolonged high dosage); intramuscular injection may be painful and cause hypotension and tachycardia (see Precautions) and nodule formation."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"cardiovascular and cerebrovascular disorders; respiratory disease;\r\nparkinsonism; epilepsy; acute infections, pregnancy;\r\nbreastfeeding; renal impairment (avoid if severe); hepatic impairment (avoid if severe;); history of jaundice;\r\nleukopenia (monitor blood counts if unexplained fever or infection occur); hypothyroidism, myasthenia gravis; prostatic hypertrophy; angle-closure glaucoma; the elderly (particularly in very hot or very cold weather; reduce dose); avoid abrupt withdrawal; patients should remain supine and blood pressure monitored for 30 minutes after intramuscular injection (risk of hypotension); interactions\r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example operating machinery or driving."\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"impaired consciousness due to central nervous system\r\ndepression; bone marrow depression; phaeochromocytoma"\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Acetazolamide Enhanced hypotensive effect\r\nAlcohol Enhanced sedative effect\r\nAmiloride Enhanced hypotensive effect\r\n* Amitriptyline Increased risk of antimuscarinic adverse effects; increased plasma amitriptyline concentration; possibly increased risk of ventricular arrhythmias\r\nAmlodipine Enhanced hypotensive effect\r\nAmodiaquine Plasma concentration of chlorpromazine increased (consider reducing chlorpromazine dose)\r\nAntacids (Aluminium hydroxide; Magnesium hydroxide) Reduced absorption of chlorpromazine\r\n* Artemether + lumefantrine Manufacturer of artemether + lumefantrine advises avoid concomitant use\r\nAtenolol Enhanced hypotensive effect\r\nAtropine Increased antimuscarinic adverse effects (but reduced plasma chlorpromazine concentration)\r\nBiperiden Increased antimuscarinic adverse effects (but reduced plasma chlorpromazine concentration)\r\n* Carbamazepine Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Clomipramine Increased antimuscarinic adverse effects; increased plasma clomipramine concentration; possibly increased risk of ventricular arrhythmias\r\nCodeine Enhanced sedative and hypotensive effect\r\nDiazepam Enhanced sedative effect\r\nDopamine Antagonism of hypertensive effect\r\nEnalapril Enhanced hypotensive effect\r\nEphedrine Antagonism of hypertensive effect\r\nEpinephrine Antagonism of hypertensive effect\r\n* Ethosuximide Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\nFurosemide Enhanced hypotensive effect\r\nGlibenclamide Possible antagonism of hypoglycaemic effect\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\n* Halothane Enhanced hypotensive effect\r\nHydralazine Enhanced hypotensive effect\r\nHydrochlorothiazide Enhanced hypotensive effect\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\n* Ketamine Enhanced hypotensive effect\r\nLevodopa Antagonism of effects of levodopa                                           \r\nLithium Increased risk of extrapyramidal effects and possibility of neurotoxicity\r\nMethadone Enhanced hypotensive and sedative effects\r\nMethyldopa Enhanced hypotensive effect; increased risk of\r\nextrapyramidal effects\r\nMetoclopramide Increased risk of extrapyramidal effects\r\nMorphine Enhanced sedative and hypotensive effect\r\nNifedipine Enhanced hypotensive effect\r\n* Nitrous oxide Enhanced hypotensive effect\r\n* Phenobarbital Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Phenytoin Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Procainamide Increased risk of ventricular arrhythmias\r\n* Propranolol Concomitant administration may increase plasma\r\nconcentration of both drugs; enhanced hypotensive effect\r\n* Quinidine Increased risk of ventricular arrhythmias\r\n* Ritonavir Plasma concentration possibly increased by ritonavir\r\nSodium nitroprusside Enhanced hypotensive effect\r\nSpironolactone Enhanced hypotensive effect\r\n* Thiopental Enhanced hypotensive effect\r\nTimolol Enhanced hypotensive effect\r\n* Valproic acid Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\nVerapamil Enhanced hypotensive effect"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: Extrapyramidal effects in neonate occasionally reported\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Continue breastfeeding; adverse effects possible; monitor infant for drowsiness\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe Start with small doses; increased cerebral sensitivity\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Can precipitate coma; hepatotoxic\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(548, 'Ciclosporin', 'Ciclosporin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Capsule: 25 mg.\r\nConcentrate for injection: 50 mg/ml in 1-ml ampoule for organ\r\ntransplantation."\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"prevention of rejection in kidney, liver, heart, or bone marrow\r\ntransplantation; graft-versus-host disease; nephrotic syndrome."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"NOTE.\r\nLower doses are required when ciclosporin is used with other immunosuppressants. \r\nConcentrate for infusion may contain polyethoxylated castor oil, which has been\r\nassociated with anaphylaxis; observe patient for 30 minutes after starting infusion and then at frequent intervals.\r\nOrgan transplantation, by mouth, ADULT and CHILD over 3 months, 10–15 mg/kg 4–12 hours before surgery, then 10–15 mg/kg daily for\r\n1–2 weeks, reducing to 2–6 mg/kg daily for maintenance (adjust dose\r\naccording to blood ciclosporin concentration and kidney function).\r\nOrgan transplantation, by intravenous infusion over 2–6 hours, ADULT and CHILD, one third of the corresponding dose by mouth.\r\nBone marrow transplantation, graft-versus-host disease, by mouth, ADULT and CHILD over 3 months, 12.5–15 mg/kg daily for 2 weeks, starting on the day before surgery, followed by 12.5 mg/kg daily for 3–6 months, then gradually tailed off (may take up to 1 year after transplant).\r\nBone marrow transplantation, graft-versus-host disease, by intravenous infusion over 2–6 hours, ADULT and CHILD over 3 months, 3–5 mg/kg daily for 2 weeks, starting on the day before surgery, followed by maintenance by mouth.\r\nNephrotic syndrome, by mouth, ADULT, initially 5 mg/kg daily in 2 divided doses; CHILD, initially 6 mg/kg daily in 2 divided doses; (reduce dose in renal impairment; maximum, 2.5 mg/kg daily); slowly reduced to lowest effective dose according to proteinuria and serum creatinine measurements\r\nfor maintenance; discontinue after 3 months if no improvement (after 6 months in membranous glomerulonephritis).\r\nDILUTION AND ADMINISTRATION. According to manufacturer’s directions.\r\nCONVERSION. Any conversion between brands should be undertaken very carefully, and the manufacturer consulted for further information."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"dose-related and reversible increases in serum creatinine and\r\nurea unrelated to tissue rejection; burning sensation in hands and feet during initial therapy; electrolyte disturbances including hyperkalaemia, and hypomagnesaemia; hepatic dysfunction; hyperuricaemia; hypercholesterolaemia; hyperglycaemia, hypertension (especially in heart transplant patients); increased incidence of malignancies and lymphoproliferative disorders; increased susceptibility to infections due to immunosuppression; gastrointestinal disturbances; gingival hyperplasia; hirsutism; fatigue; allergic reactions; thrombocytopenia (sometimes with haemolytic uraemic syndrome); also mild anaemia, tremors, convulsions,\r\nneuropathy; dysmenorrhoea or amenorrhoea; pancreatitis, myopathy or muscle weakness; cramp; gout; oedema; headache."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"monitor kidney function (dose-dependent increase in serum\r\ncreatinine and urea during first few weeks post-transplant may necessitate dose reduction; exclude rejection in kidney transplant); monitor liver function (adjust dosage according to bilirubin and liver enzymes; monitor blood pressure (discontinue if hypertension cannot be controlled by antihypertensives); monitor serum potassium, particularly if marked renal impairment (risk of hyperkalaemia); monitor serum magnesium; hyperuricaemia; measure blood lipids before and during treatment; avoid in porphyria; pregnancy and breastfeeding; interactions: Appendix 1.\r\nADDITIONAL PRECAUTIONS IN NEPHROTIC SYNDROME. Reduce dose by 25–50% if serum creatinine more than 30% above baseline at more than one measurement; perform renal biopsies at yearly intervals; not recommended for patients who also have uncontrolled infections or malignancy."\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Aciclovir Increased risk of nephrotoxicity\r\nAllopurinol Plasma ciclosporin concentration possibly increased (risk of nephrotoxicity)\r\n* Amikacin Increased risk of nephrotoxicity\r\n* Amiloride Increased risk of hyperkalaemia\r\n* Amphotericin B Increased risk of nephrotoxicity\r\n* Azithromycin Plasma concentration of ciclosporin possibly increased\r\n* Carbamazepine Accelerated metabolism of ciclosporin (reduced plasma ciclosporin concentration)\r\n* Chloramphenicol Plasma concentration of ciclosporin possibly increased\r\n* Chloroquine Increased plasma ciclosporin concentration (increased risk of toxicity)\r\n* Ciprofloxacin Increased risk of nephrotoxicity\r\n* Contraceptives, Oral Plasma ciclosporin concentration increased by progestogens and possibly increased by estrogens\r\n* Digoxin Increased plasma concentration of digoxin (increased risk of toxicity)\r\n* Doxorubicin Increased risk of neurotoxicity\r\n* Doxycycline Possibly increased plasma ciclosporin concentration\r\n* Enalapril Increased risk of hyperkalaemia\r\n* Erythromycin Increased plasma ciclosporin concentration (inhibition of metabolism of ciclosporin)\r\nEtoposide Possibly increased plasma concentration of etoposide (increased risk of toxicity)                                                                                        \r\nFluconazole Metabolism of ciclosporin inhibited (increased plasma concentration)\r\n* Gentamicin Increased risk of nephrotoxicity\r\n* Grapefruit juice Increased plasma ciclosporin concentration (risk of toxicity)\r\nGriseofulvin Plasma ciclosporin concentration possibly reduced\r\nHydrochlorothiazide Increased risk of nephrotoxicity and possibly hypermagnesaemia\r\n* Ibuprofen Increased risk of nephrotoxicity\r\n* Levofloxacin Increased risk of nephrotoxicity\r\n* Levonorgestrel Inhibition of ciclosporin metabolism (increased plasma ciclosporin concentration)\r\n* Medroxyprogesterone Inhibition of ciclosporin metabolism (increased plasma ciclosporin concentration)\r\n* Methotrexate Increased toxicity\r\n* Metoclopramide Plasma ciclosporin concentration increased\r\n* Nelfinavir Possibly increased plasma ciclosporin concentration\r\nNifedipine Possibly increased plasma nifedipine concentration (increased risk of adverse effects such as gingival hyperplasia)\r\n* Norethisterone Inhibition of ciclosporin metabolism (increased plasma ciclosporin concentration)\r\n* Ofloxacin Increased risk of nephrotoxicity\r\n* Phenobarbital Metabolism of ciclosporin accelerated (reduced effect)\r\n* Phenytoin Accelerated metabolism of ciclosporin (reduced plasma\r\nciclosporin concentration)\r\n* Potassium salts Increased risk of hyperkalaemia\r\nPrednisolone Increased plasma concentration of prednisolone\r\n* Rifampicin Accelerated metabolism of ciclosporin (reduced plasma\r\nciclosporin concentration)\r\n* Ritonavir Plasma concentration possibly increased by ritonavir\r\n* Saquinavir Plasma concentration of both ciclosporin and saquinavir increased\r\n* Silver sulfadiazine Increased risk of nephrotoxicity; possibly reduced plasma concentration of ciclosporin\r\n* Simvastatin Increased risk of myopathy\r\n* Spironolactone Increased risk of hyperkalaemia\r\n* Streptomycin Increased risk of nephrotoxicity\r\n* Sulfadiazine Plasma ciclosporin concentration possibly reduced; increased risk of nephrotoxicity\r\n* Sulfadoxine + pyrimethamine Increased risk of nephrotoxicity\r\n* Sulfamethoxazole + trimethoprim Increased risk of nephrotoxicity; plasma ciclosporin concentration possibly reduced by intravenous trimethoprim\r\n* Trimethoprim Increased risk of nephrotoxicity; plasma ciclosporin concentration possibly reduced by intravenous trimethoprim\r\n* Vaccine, Live Avoid use of live vaccines with ciclosporin (impairment of immune response)\r\n* Vancomycin Increased risk of nephrotoxicity\r\n* Verapamil Increased plasma ciclosporin concentration"</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>There is less experience of ciclosporin in pregnancy but it does not appear to be any more harmful than azathioprine; use in pregnancy should be supervised in specialist units\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Present in milk—manufacturer advises avoid\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Monitor kidney function—dosedependent increase in serum creatinine and urea during first few weeks may necessitate dose reduction (exclude rejection if kidney transplant)\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>May need dose adjustment\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(549, 'Ciprofloxacin', 'Ciprofloxacin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 250 mg, 500mg and 1gram (as hydrochloride).\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"Ciprofloxacin is active against both Gram-positive and Gram-negative bacteria. It is particularly active against salmonella, shigella, campylobacter, neisseria, Bacillus anthracis, and Pseudomonas ssp.. It is also active against chlamydia and some mycobacteria. Most\r\nanaerobic organisms are, however, not susceptible. Ciprofloxacin is used with doxycycline and metronidazole to treat pelvic inflammatory disease.\r\nUses: gastroenteritis (including cholera, shigellosis, travellers’ diarrhoea, campylobacter, and salmonella enteritis); typhoid; gonorrhoea; chancroid; pelvic inflammatory disease (with doxycycline and metronidazole); legionnaires’ disease; meningitis (including meningococcal meningitis prophylaxis); respiratory tract infections (including pseudomonal infections in cystic fibrosis, but not pneumococcal pneumonia); urinary tract infections; bone and joint infections; septicaemia; anthrax; skin infections; otitis externa; prophylaxis in surgery."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Infections due to susceptible organisms, by mouth, ADULT, 250–750 mg twice daily.\r\nShigellosis, by mouth, ADULT, 500 mg twice daily for 3 days.\r\nCholera, by mouth, ADULT, 1 g as a single dose.\r\nAcute uncomplicated cystitis, by mouth, ADULT, 100 mg twice daily for 3 days.\r\nGonorrhoea and gonococcal conjunctivitis, by mouth, ADULT, 500 mg as a single dose.\r\nChancroid, by mouth, ADULT, 500 mg twice daily for 3 days.\r\nPelvic inflammatory disease, by mouth, ADULT, 500 mg twice daily.\r\nPseudomonal lower respiratory tract infection in cystic fibrosis, by mouth, ADULT, 750 mg twice daily; CHILD 5–17 years, (see also Precautions), up to 20 mg/kg twice daily (maximum, 1.5 g daily).\r\nSurgical prophylaxis, by mouth, ADULT, 750 mg, 60–90 minutes before procedure.\r\nProphylaxis of meningococcal meningitis, by mouth, ADULT, 500 mg as a single dose."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"nausea, vomiting, dyspepsia, abdominal pain, flatulence,\r\ndiarrhoea (rarely antibiotic-associated colitis); pancreatitis, dysphagia, tremor, hyperglycaemia, headache, dizziness, sleep disorders, rash (rarely erythema multiforme (Stevens-Johnson syndrome) and toxic epidermal necrolysis), pruritus; vasculitis, erythema nodosum, petechiae, haemorrhagic bullae; less\r\nfrequently anorexia and increased blood urea and creatinine; drowsiness, restlessness, asthenia, depression, confusion, hallucinations, convulsions, paraesthesia, hypoesthesia, movement disorders; photosensitivity, hypersensitivity reactions (including fever, urticaria, angioedema, arthralgia, myalgia, and anaphylaxis); blood disorders (including eosinophilia,leukopenia, thrombocytopenia); disturbances in vision, taste, hearing, and\r\nsmell, tinnitus; tenosynovitis; tachycardia, hypotension, oedema, syncope, hot flushes and sweating; also isolated reports of tendon inflammation and damage (especially in the elderly and in those taking corticosteroids, haemolytic anaemia, renal failure, interstitial nephritis, and hepatic dysfunction (including hepatitis and cholestatic jaundice); discontinue if psychiatric, neurological, or hypersensitivity reactions (including severe rash) occur."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"history of epilepsy or conditions that predispose to seizures,\r\nG6PD deficiency, myasthenia gravis (risk of exacerbation), pregnancy and breastfeeding, children or adolescents; avoid exposure to excessive sunlight (discontinue if photosensitivity occurs); rarely tendon damage (see below); renal impairment;\r\navoid excessive alkalinity of urine and ensure adequate fluid intake (risk of crystalluria); interactions.\r\nUSE IN CHILDREN. Ciprofloxacin causes arthropathy in the weight-bearing joints of immature animals and is therefore generally not recommended for use in children and growing adolescents. However, the significance of this effect in humans is uncertain and in some specific circumstances, short-term use of ciprofloxacin in children may be justified. For example, ciprofloxacin is used to treat pseudomonal infections in cystic fibrosis (for children over 5 years), and for treatment and prophylaxis of inhalational anthrax.\r\nTENDON DAMAGE. Tendon damage (including rupture) has been reported rarely in patients receiving quinolones. Tendon rupture may occur within 48 hours of starting treatment. \r\nHealth-care workers should be aware that:\r\n? quinolones are contraindicated in patients with a history of tendon disorders related to quinolone use;\r\n? elderly patients are more prone to tendinitis;\r\n? the risk of tendon rupture is increased by the concomitant use of corticosteroids;\r\n? if tendinitis is suspected, the quinolone should be discontinued immediately.                                                                                                      \r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example, operating machinery or driving."\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>history of tendon disorders related to quinolone use\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Antacids (Aluminium hydroxide; Magnesium hydroxide) Reduced absorption of ciprofloxacin\r\n* Artemether + lumefantrine Manufacturer of artemether + lumefantrine advises avoid concomitant use\r\nCalcium salts Reduced absorption of ciprofloxacin\r\n* Ciclosporin Increased risk of nephrotoxicity\r\nContraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nDairy products Reduced absorption of ciprofloxacin\r\nFerrous salts Absorption of ciprofloxacin reduced by oral ferrous salts\r\nGlibenclamide Possibly enhanced effect of glibenclamide\r\n* Ibuprofen Possibly increased risk of convulsions\r\nMorphine Manufacturer of ciprofloxacin advises avoid premedication\r\nwith morphine (reduced plasma ciprofloxacin\r\nconcentration) when ciprofloxacin used for surgical prophylaxis\r\nPhenytoin Plasma phenytoin concentration can be increased or decreased by ciprofloxacin\r\n* Warfarin Enhanced anticoagulant effect\r\nZinc sulfate Reduced absorption of ciprofloxacin"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (arthropathy in animal studies); safer alternatives available\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Continue breastfeeding; use alternative drug if possible; high concentrations in breast milk\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Moderate Use half normal dose\r\n</p>\r\n\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(550, 'Cisplatin', 'Cisplatin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 10 mg; 50 mg in vial.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"metastatic testicular tumours, metastatic ovarian tumours, advanced\r\nbladder carcinoma and other solid tumours, including lung, cervical, and head and neck cancers."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>consult specialist literature; renal impairment; interactions\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>consult specialist literature; pregnancy and breastfeeding\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Acetazolamide Increased risk of nephrotoxicity and ototoxicity\r\n* Amikacin Increased risk of nephrotoxicity and possibly of ototoxicity\r\nAmiloride Increased risk of nephrotoxicity and ototoxicity\r\n* Bleomycin Increased pulmonary toxicity\r\nFurosemide Increased risk of nephrotoxicity and ototoxicity\r\n* Gentamicin Increased risk of nephrotoxicity and possibly of ototoxicity\r\nHydrochlorothiazide Increased risk of nephrotoxicity and ototoxicity\r\n* Methotrexate Risk of pulmonary toxicity\r\nParomomycin Increased risk of ototoxicity\r\nPhenytoin Reduced absorption of phenytoin\r\nSpironolactone Increased risk of nephrotoxicity and ototoxicity\r\n* Streptomycin Increased risk of nephrotoxicity and possibly of ototoxicity\r\nVaccine, Live Avoid use of live vaccines with cisplatin (impairment of immune response)\r\nVancomycin Increased risk of nephrotoxicity and possibly of ototoxicity"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (teratogenic and toxic in animal studies)\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild Avoid if possible; nephrotoxic and neurotoxic\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(551, 'Clindamycin', 'Clindamycin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Capsule: 150 mg.\r\nInjection: 150 mg (as phosphate)/ml"\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"Clindamycin is a bacteriostatic antibacterial with activity against Gram-positive aerobes and a wide range of anaerobes. However, its use is limited because of adverse effects.\r\nAntibiotic-associated colitis can occur with a wide range of antibacterials, but occurs most frequently with clindamycin. It may be fatal and is most common in women and the elderly; it can develop during or after treatment. Patients should discontinue treatment immediately if diarrhoea develops. Clindamycin is recommended for the treatment of staphylococcal bone and joint infections and for intra-abdominal sepsis. It is also used for endocarditis prophylaxis when a penicillin is not appropriate. Clindamycin is a complementary list medicine for use when penicillin is not appropriate.\r\nUses: staphylococcal bone and joint infections, pyomyositis; necrotizing fasciitis; peritonitis; endocarditis prophylaxis; pelvic inflammatory disease (with gentamicin); pneumonia."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Osteomyelitis or peritonitis, by mouth, ADULT, 150–300 mg every 6 hours, up to 450 mg every 6 hours in severe infections; CHILD, 3–6 mg/kg every 6 hours; by deep intramuscular injection or by intravenous infusion, ADULT, 0.6–2.7 g daily in 2–4 divided doses, increased up to 4.8 g daily in life-threatening infections (single doses over 600 mg should be given by intravenous infusion only; single doses given by intravenous infusion should not exceed 1.2 g);\r\nNEONATE, 15–20 mg/kg daily; CHILD over 1 month, 15–40 mg/kg daily in 3–4 divided doses, increased to at least 300 mg daily, regardless of weight, in severe infections.\r\nPelvic inflammatory disease, by intravenous infusion, ADULT, 900 mg every 8 hours.\r\nEndocarditis prophylaxis (for procedures under local or no anaesthetic), by mouth, ADULT, 600 mg, 1 hour before procedure.\r\nEndocarditis prophylaxis (for procedures under general anaesthetic), by intravenous infusion, ADULT, 300 mg over at least 10 minutes, at induction or 15 minutes before procedure, followed by 150 mg 6 hours later by mouth or by intravenous infusion.                                  PATIENT ADVICE. Patients should discontinue treatment immediately and contact doctor if diarrhoea develops; capsules should be swallowed with a glass of water.\r\nDILUTION AND ADMINISTRATION. According to manufacturer’s directions."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"diarrhoea (discontinue treatment); nausea, vomiting,\r\nabdominal discomfort, oesophagitis, antibiotic-associated colitis; rash, pruritus, urticaria, and rarely anaphylaxis; Erythema multiforme (Stevens- Johnson syndrome), exfoliative and vesiculobullous dermatitis; jaundice and altered liver function tests; neutropenia, eosinophilia, agranulocytosis, thrombocytopenia; pain, induration, and abscess after intramuscular injection; thrombophlebitis after intravenous injection."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"discontinue immediately if diarrhoea or colitis develop; hepatic\r\nimpairment; renal impairment; monitor liver and renal function on prolonged therapy and in neonates and infants; the elderly; females; pregnancy and breastfeeding; avoid rapid intravenous administration; interactions"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>diarrhoeal states; avoid injections containing benzyl alcohol in neonates; porphyria.\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Alcuronium Enhanced muscle relaxant effect\r\nNeostigmine Antagonism of effects of neostigmine\r\nPyridostigmine Antagonism of effects of pyridostigmine\r\n* Suxamethonium Enhanced effects of suxamethonium\r\n* Vecuronium Enhanced muscle relaxant effect"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount probably too small to be harmful but bloody diarrhoea reported in one infant\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Plasma half-life prolonged—may need dose reduction\r\n</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>???</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(552, 'Clofazimine', 'Clofazimine\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 50 mg; 100 mg.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>multibacillary (MB) leprosy; type 2 lepra reactions.\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Multibacillary leprosy (in combination with dapsone and rifampicin), by mouth, ADULT, 50 mg once daily and 300 mg a month; CHILD 10–14 years, 50 mg on alternate days and 150 mg once a month; CHILD under 10 years, see introductory note above; continue treatment for 12 months.\r\nType 2 lepra reaction (erythema nodosum leprosum), by mouth, ADULT and CHILD, 200–300 mg daily in 2 or 3 divided doses for a maximum of 3 months; 4–6 weeks treatment may be required before any effect is seen."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"reversible discoloration of skin, hair, cornea, conjunctiva,\r\ntears, sweat, sputum, faeces, and urine; dose-related gastrointestinal\r\nsymptoms including pain, nausea, vomiting, diarrhoea, weight loss, and gastrointestinal bleeding; severe mucosal and submucosal oedema, with prolonged treatment with high doses (may be severe enough to cause subacute small-bowel obstruction; see also Precautions); dry skin, acne-like eruptions, rash, pruritus, photosensitivity reactions, decreased sweat production; dry eyes; rarely headache, drowsiness, dizziness, taste disorders, and elevation of blood glucose concentration."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"pre-existing gastrointestinal symptoms (reduce dose; increase\r\ndose interval or discontinue if symptoms develop during treatment); liver and renal impairment; pregnancy; and breastfeeding; may discolour soft contact lenses."\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Limited information available—can cause reversible skin discoloration in nursing infant\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(553, 'Clomifene', 'Clomifene\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 50 mg (citrate).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Hormones, other endocrine medicines and contraceptives</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>anovulatory infertility</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Anovulatory infertility, by mouth, ADULT (female), 50 mg daily for 5 days,\r\nstarting within 5 days of onset of menstruation, preferably on the second\r\nday, or at any time if cycles have ceased; a second course of 100 mg daily\r\nfor 5 days may be given in the absence of ovulation.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>visual disturbances, ovarian hyperstimulation, hot flushes,\r\nabdominal discomfort, occasional nausea and vomiting, depression,\r\ninsomnia, breast tenderness, headache, intermenstrual spotting,\r\nmenorrhagia, endometriosis, convulsions, weight gain, rash, dizziness, hair\r\nloss.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>visual disturbances (discontinue and initiate eye examination) and\r\novarian hyperstimulation syndrome (discontinue treatment immediately);\r\npolycystic ovary syndrome (cysts may enlarge during treatment); uterine\r\nfibroids, ectopic pregnancy, incidence of multiple births increased (consider\r\nultrasound monitoring); breastfeeding</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hepatic disease; ovarian cysts; hormone\r\ndependent tumours or uterine bleeding of undetermined cause; pregnancy\r\n(exclude before treatment).</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Possible effects on fetal development</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>May inhibit lactation</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid in severe liver disease</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(554, 'Clomipramine', 'Clomipramine\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 10 mg; 25 mg (hydrochloride).?</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Psychotherapeutic medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>phobic and obsessional states; panic attacks.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Phobic and obsessional states, by mouth, ADULT, initially 25 mg daily, usually at\r\nbedtime (10 mg daily in the elderly) increased over 2 weeks to 100–150 mg\r\ndaily; CHILD, not usually recommended.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>sedation, dry mouth, blurred vision (disturbance of\r\naccommodation, increased intraocular pressure), constipation, nausea,\r\ndifficulty in micturition; cardiovascular adverse effects particularly with high\r\ndosage including ECG changes, arrhythmias, postural hypotension,\r\ntachycardia, and syncope; sweating, tremor, rash, hypersensitivity reactions\r\n(urticaria including photosensitivity); behavioural disturbances; hypomania\r\nor mania, confusion or delirium (particularly in the elderly), headache,\r\ninterference with sexual function, blood sugar changes; increased appetite\r\nand weight gain (occasional weight loss); endocrine adverse effects such as\r\ntesticular enlargement, gynaecomastia, and galactorrhoea; convulsions,\r\nmovement disorders and dyskinesias, dysarthria, paraesthesia, taste\r\ndisturbances, tinnitus, fever, agranulocytosis, leukopenia, eosinophilia,\r\npurpura, thrombocytopenia, hyponatraemia (may be due to inappropriate\r\nantidiuretic hormone secretion); abnormal liver function test, diarrhoea; hair\r\nloss reported.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>cardiac disease; history of epilepsy; pregnancy  and breastfeeding; the\r\nelderly; hepatic impairment; thyroid disease;\r\nphaeochromocytoma; history of mania, and psychoses (may aggravate\r\npsychotic symptoms); angle-closure glaucoma; history of urinary retention;\r\nconcurrent electroconvulsive therapy; avoid abrupt withdrawal; anaesthesia\r\n(increased risk of arrhythmias and hypotension); interactions: \r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example\r\noperating machinery or driving.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>recent myocardial infarction, arrhythmias (especially heart\r\nblock); manic phase in bipolar disorders; severe liver disease; children;\r\nporphyria</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Increased risk of postural hypotension\r\n* Alcohol Enhanced sedative effect\r\nAmiloride Increased risk of postural hypotension\r\n* Artemether + lumefantrine Manufacturer of artemether + lumefantrine advises avoid concomitant use\r\nAtropine Increased antimuscarinic adverse effects\r\nBiperiden Increased antimuscarinic adverse effects\r\nCarbamazepine Antagonism of anticonvulsant effect (convulsive threshold\r\nlowered); accelerated metabolism of clomipramine\r\n(reduced plasma concentration; reduced antidepressant effect)\r\nChlorphenamine Increased antimuscarinic and sedative effects\r\n* Chlorpromazine Increased antimuscarinic adverse effects; increased plasma\r\nclomipramine concentration; possibly increased risk of ventricular arrhythmias\r\nCodeine Possibly increased sedation\r\nContraceptives, Oral Antagonism of antidepressant effect by estrogens but\r\nadverse effects of clomipramine possibly increased due to increased plasma concentration of clomipramine\r\nDiazepam Enhanced sedative effect\r\n* Epinephrine Increased risk of hypertension and arrhythmias (but local\r\nanaesthetics which contain epinephrine appear to be safe)\r\n* Ethosuximide Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Fluphenazine Increased antimuscarinic adverse effects; increased plasma\r\nclomipramine concentration; possibly increased risk of\r\nventricular arrhythmias\r\nFurosemide Increased risk of postural hypotension\r\nGlyceryl trinitrate Reduced effect of sublingual glyceryl trinitrate tablets\r\n(failure to dissolve under the tongue owing to dry mouth)\r\n* Haloperidol Increased plasma clomipramine concentration; possibly\r\nincreased risk of ventricular arrhythmias\r\nHalothane Increased risk of arrhythmias and hypotension\r\nHydrochlorothiazide Increased risk of postural hypotension\r\nIsosorbide dinitrate Reduced effect of sublingual isosorbide dinitrate tablets\r\n(failure to dissolve under the tongue owing to dry mouth)\r\nKetamine Increased risk of arrhythmias and hypotension\r\nLevothyroxine Possibly enhanced effects of clomipramine\r\nLithium Risk of toxicity\r\nMethadone Sedative effects possibly increased\r\nMorphine Possibly increased sedation\r\nNitrous oxide Increased risk of arrhythmias and hypotension\r\n* Phenobarbital Antagonism of anticonvulsant effect (convulsive threshold\r\nlowered); metabolism of clomipramine possibly\r\naccelerated (reduced plasma concentration)\r\n* Phenytoin Antagonism of anticonvulsant effect (convulsive threshold\r\nlowered); possibly reduced plasma clomipramine concentration\r\n* Procainamide Increased risk of ventricular arrhythmias\r\nPromethazine Increased antimuscarinic and sedative effects\r\n* Quinidine Increased risk of ventricular arrhythmias\r\nRifampicin Plasma concentration of clomipramine possibly reduced\r\n* Ritonavir Plasma concentration possibly increased by ritonavir\r\nSpironolactone Increased risk of postural hypotension\r\nThiopental Increased risk of arrhythmias and hypotension\r\n* Valproic acid Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\nVerapamil Possibly increased plasma concentration of clomipramine\r\nWarfarin Enhanced or reduced anticoagulant effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Manufacturer advises avoid unless essential,\r\nparticularly during first and third trimesters</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Small amount present in milk; continue\r\nbreastfeeding; adverse effects possible; monitor\r\ninfant for drowsiness</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Sedative effects increased; avoid in severe liver disease</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(555, 'Clotrimazole', 'Clotrimazole\r\n\r\n<h5>Presentations</h5>\r\n<p>Vaginal cream: 1%; 10%.\r\nVaginal tablet: 100 mg; 500 mg</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>anogenital candidosis; ringworm</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Anogenital candidosis, ADULT, apply 1% cream to anogenital area 2–3 times daily.\r\nVaginal candidosis, ADULT, vaginal administration, (10% vaginal cream), 5 g of as\r\na single dose at night, repeated once if necessary.\r\nVaginal candidosis, ADULT, vaginal administration (pessary), 100 mg at night for\r\n6 nights or 200 mg at night for 3 nights or 500 mg at night as a single dose.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>local irritation</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>damages latex condoms and diaphragms (advise patients to use\r\nalternative contraceptive precautions).</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Simvastatin Increased risk of myopathy</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(556, 'Cloxacillin', 'Cloxacillin\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 500 mg; 1 g (as sodium salt).\r\nPowder for injection: 500 mg (as sodium salt) in vial.\r\nPowder for oral liquid: 125 mg (as sodium salt)/5 ml.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>infections due to beta-lactamase-producing staphylococci including\r\nimpetigo, cellulitis, and other soft-tissue infections; pyomyositis;\r\nstaphylococcal endocarditis, septicaemia, pneumonia, septic arthritis, and\r\nosteomyelitis; otitis externa.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Infections due to susceptible beta-lactamase-producing staphylococci, ADULT,\r\nby mouth, 500 mg 4 times daily, doubled in severe infection; by intramuscular\r\ninjection, 250 mg every 4–6 hours, doubled in severe infection; by slow\r\nintravenous injection or by intravenous infusion, 1–2 g every 6 hours; CHILD up to\r\n2 years, quarter the adult dose; CHILD 2–10 years, half the adult dose.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea and vomiting, diarrhoea; hypersensitivity reactions\r\nincluding urticaria, fever, joint pain, rash, angioedema, anaphylaxis, serum\r\nsickness-like reactions, haemolytic anaemia, and interstitial nephritis; neutropenia, thrombocytopenia, coagulation\r\ndisorders; rarely antibiotic-associated colitis; hepatitis and cholestatic\r\njaundice (may be delayed in onset); electrolyte disturbances; pain,\r\ninflammation, phlebitis, or thrombophlebitis at injection sites.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>history of allergy to penicillins;\r\nrenal impairment and hepatic impairment; heart\r\nfailure; pregnancy and breastfeeding;\r\ninteractions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to penicillins</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Contraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk\r\nprobably small)\r\nMethotrexate Reduced excretion of methotrexate (increased risk of\r\ntoxicity)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Trace amounts in milk; safe in usual dosage;\r\nmonitor infant</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe Reduce dose</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Cholestatic jaundice may occur up to several weeks\r\nafter treatment has been stopped; administration for\r\nmore than 2 weeks and increasing age are risk factors</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(557, 'Coal Tar', 'Coal Tar\r\n\r\n<h5>Presentations</h5>\r\n<p>Solution: 5%.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>chronic psoriasis, either alone or in combination with exposure to\r\nultraviolet light.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Psoriasis, ADULT and CHILD, apply directly to the affected area 1–3 times daily,\r\npreferably starting with lower strength preparation or add 100 ml to bath of\r\ntepid water and soak affected area for 10–20 minutes, once daily to once\r\nevery 3 days for at least 10 baths; bathing can be alternated with exposure to\r\nultraviolet (UVB) rays, allowing at least 24 hours between exposure and\r\ntreatment with coal tar.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>irritation, photosensitivity reactions; rarely hypersensitivity;\r\nskin, hair, and fabrics discoloured.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>skin protection possibly required to reduce photosensitivity reactions.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>inflamed, broken or infected skin.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(558, 'Codeine', 'Codeine\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 30 mg (phosphate).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Analgesics, antipyretics, NSAIMs, DMARDs</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>Drug subject to international control under the Single Convention on Narcotic Drugs (1961).\r\nUses: mild to moderate pain; short-term symptomatic relief of acute diarrhoea in adults</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Mild to moderate pain, by mouth, ADULT, 30–60 mg every 4 hours when\r\nnecessary; maximum, 240 mg daily; CHILD 1–12 years, 0.5–1 mg/kg every\r\n4–6 hours when needed; maximum, 240 mg daily.\r\nSymptomatic relief of acute diarrhoea, by mouth, ADULT, 30 mg 3–4 times daily.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>constipation particularly troublesome in long-term use;\r\ndizziness, nausea, vomiting; difficulty with micturition; ureteric or biliary\r\nspasm; dry mouth, headaches, sweating, facial flushing; in therapeutic doses,\r\ncodeine is much less liable than morphine to produce tolerance,\r\ndependence, euphoria, sedation, or other adverse effects.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>renal impairment and hepatic impairment; dependence; pregnancy and breastfeeding; overdosage: ; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>respiratory depression, obstructive airways disease, acute\r\nasthma attack; where risk of paralytic ileus.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Alcohol Enhanced sedative and hypotensive effect\r\nAmitriptyline Possibly increased sedation\r\nChlorpromazine Enhanced sedative and hypotensive effect\r\nClomipramine Possibly increased sedation\r\nDiazepam Enhanced sedative effect\r\nFluphenazine Enhanced sedative and hypotensive effect\r\nHaloperidol Enhanced sedative and hypotensive effect\r\nMetoclopramide Antagonism of effect of metoclopramide on gastrointestinal activity\r\n* Ritonavir Ritonavir possibly increases plasma concentration of codeine</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: Depresses neonatal respiration;\r\nwithdrawal effects in neonates of dependent mothers;\r\ngastric stasis and risk of inhalation pneumonia in\r\nmother during labour</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount too small to be harmful</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Moderate to severe Reduce dose or avoid; increased and\r\nprolonged effect; increased cerebral sensitivity</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid or reduce dose — may precipitate coma</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(559, '', 'Cyclophosphamide\r\n\r\n<h5>Presentations</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>???</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(560, 'Condoms', 'Condoms\r\n\r\n<h5>Presentations</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>???</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(561, 'Cyclophosphamide', 'Cyclophosphamide\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 500 mg in vial.\r\nTablet: 25 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>malignant lymphomas including non-Hodgkin lymphomas, lymphocytic\r\nlymphoma and Burkitt lymphoma; multiple myeloma; leukaemias, mycosis\r\nfungoides; neuroblastoma; adenocarcinoma of the ovary; retinoblastoma;\r\nbreast cancer.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>consult specialist literature; renal impairment\r\n and hepatic impairment; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>consult specialist literature; pregnancy and breastfeeding</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Phenytoin Possibly reduced absorption of phenytoin\r\nSuxamethonium Enhanced effect of suxamethonium\r\nVaccine, Live Avoid use of live vaccines with cyclophosphamide\r\n(impairment of immune response)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid; use effective contraception during and for at\r\nleast 3 months after administration to men or women;</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated during and for\r\n36 hours after stopping treatment</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Reduce dose</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Reduce dose</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(562, 'Cycloserine', 'Cycloserine\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule or tablet: 250 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>Cycloserine is a complementary list medicine for the treatment of multidrug-resistant\r\ntuberculosis which should be used in specialized centres adhering to WHO standards\r\nfor tuberculosis control.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Alcohol Increased risk of convulsions\r\nIsoniazid Increased risk of CNS toxicity</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(563, 'Cytarabine', 'Cytarabine\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 100 mg in vial.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>acute lymphoblastic leukaemia; chronic myeloid leukaemia; meningeal\r\nleukaemia; erythroleukaemia; non-Hodgkin lymphomas.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>consult specialist literature.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>consult specialist literature; hepatic impairment; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>consult specialist literature; pregnancy and breastfeeding</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Flucytosine Plasma flucytosine concentration possibly reduced\r\nPhenytoin Reduced absorption of phenytoin\r\nVaccine, Live Avoid use of live vaccines with cytarabine (impairment of immune response)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (teratogenic in animal studies)</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Reduce dose</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(564, 'Dacarbazine', 'Dacarbazine\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 100 mg in vial.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>metastatic malignant melanoma; Hodgkin disease.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>consult specialist literature.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>consult specialist literature; renal impairment; hepatic impairment; interactions\r\nNOTE. Irritant to tissues.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>consult specialist literature; pregnancy and breastfeeding</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Phenytoin Possibly reduced absorption of phenytoin\r\nVaccine, Live Avoid use of live vaccines with dacarbazine (impairment of immune response)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (carcinogenic and teratogenic in animal\r\nstudies); use effective contraception during and for at\r\nleast 6 months after administration to men or women;</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild to moderate Dose reduction may be required\r\nSevere Avoid</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Dose reduction may be required in mild to moderate\r\nliver disease; avoid if severe</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(565, 'Dactinomycin', 'Dactinomycin\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 500 micrograms in vial.\r\nAlso known as Actinomycin D</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>trophoblastic tumours, Wilm tumour, Ewing sarcoma, rhabdomyosarcoma</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>Consult specialist literature; interactions\r\nNOTE. Irritant to tissues.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>Consult specialist literature; pregnancy and breastfeeding</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Phenytoin Possibly reduced absorption of phenytoin\r\nVaccine, Live Avoid use of live vaccines with dactinomycin (impairment of immune response)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (teratogenic in animal studies)</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated</p>\r\n\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(566, 'Dapsone', 'Dapsone\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 25 mg; 50 mg; 100 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>paucibacillary (PB) and multibacillary (MB) leprosy</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Paucibacillary leprosy (in combination with rifampicin; see also introductory\r\nnote above), by mouth, ADULT, 100 mg daily; CHILD under 10 years, see\r\nintroductory note above; CHILD 10–14 years, 50 mg daily, see introductory\r\nnote above; continue treatment for 6 months.\r\nMultibacillary leprosy (in combination with rifampicin and clofazimine, see\r\nnote above), ADULT, 100 mg daily; CHILD under 10 years, see also\r\nintroductory note above; CHILD 10–14 years, 50 mg daily, see introductory\r\nnote above; continue treatment for 12 months.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>haemolysis and methaemoglobinaemia; allergic dermatitis\r\n(rarely including toxic epidermal necrolysis and Stevens-Johnson syndrome);\r\nrarely hepatitis and agranulocytosis; ‘dapsone syndrome’ resembling\r\nmononucleosis (a rare hypersensitivity reaction with symptoms including\r\nrash, fever, jaundice, and eosinophilia); gastrointestinal irritation;\r\ntachycardia, headache, nervousness, insomnia, blurred vision, paraesthesia,\r\nreversible peripheral neuropathy, and psychoses reported.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>anaemia (treat severe anaemia before commencement of therapy\r\nand monitor blood counts during treatment); susceptibility to haemolysis\r\nincluding G6PD deficiency (including breastfeeding affected infants);\r\npregnancy and breastfeeding; porphyria; interactions.\r\nBLOOD DISORDERS. On long-term treatment patients and their carers should be\r\ntold how to recognize blood disorders and advised to seek immediate medical attention\r\nif symptoms such as fever, sore throat, rash, mouth ulcers, purpura, bruising, or\r\nbleeding develop.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to sulfones; severe anaemia.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Rifampicin Reduced plasma dapsone concentration\r\nSulfamethoxazole + trimethoprim\r\nPlasma concentration of both dapsone and trimethoprim may increase with concomitant use\r\nTrimethoprim Plasma concentration of both dapsone and trimethoprim\r\nmay increase with concomitant use</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: Neonatal haemolysis and\r\nmethaemoglobinaemia; folic acid, 5 mg daily, should\r\nbe given to mother</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Although significant amount in milk risk to infant\r\nvery small; continue breastfeeding; monitor infant\r\nfor jaundice</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(567, 'Daunorubicin', 'Daunorubicin\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 50 mg (as hydrochloride).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>acute leukaemias.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>Consult specialist literature.renal impairment; hepatic impairment ; interactions\r\nNOTE. Irritant to tissues.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>Consult specialist literature.pregnancy and breastfeeding</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Phenytoin Possibly reduced absorption of phenytoin\r\nVaccine, Live Avoid use of live vaccines with daunorubicin (impairment of immune response)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (teratogenic and carcinogenic in animal studies)</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild to moderate: Reduce dose</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Reduce dose</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(568, 'Deferoxamine', 'Deferoxamine\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 500 mg (mesilate) in vial</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antidotes and other substances used in poisonings</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>acute iron poisoning; chronic iron overload; aluminium overload.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Acute iron poisoning, by slow intravenous infusion, ADULT and CHILD, initially\r\n15 mg/kg/hour, reduced after 4–6 hours so that total dose does not exceed\r\n80 mg/kg in 24 hours.\r\nChronic iron overload, by subcutaneous or intravenous infusion ADULT and CHILD,\r\nlowest effective dose (usually within range of 20–60 mg/kg/day) 4–7 days a week.\r\nAluminium overload in end-stage renal failure, by intravenous infusion, ADULT and\r\nCHILD, 5 mg/kg, once a week during last hour of dialysis.\r\nDiagnosis of iron overload, by intramuscular injection, ADULT and CHILD, 500 mg.\r\nDiagnosis of aluminium overload, by intravenous infusion, ADULT and CHILD,\r\n5 mg/kg during last hour of dialysis.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s\r\ndirections. For full details and warnings relating to administration for therapeutic or\r\ndiagnostic purposes, consult manufacturer’s literature.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>hypotension (especially when given too rapidly by\r\nintravenous injection), disturbances of hearing and vision (including lens\r\nopacity and retinopathy); injection-site reactions, gastrointestinal\r\ndisturbances, asthma, fever, headache, arthralgia and myalgia; very rarely\r\nanaphylaxis, acute respiratory distress syndrome, neurological disturbances\r\n(including dizziness, neuropathy, and paraesthesia), Yersinia and\r\nmucormycosis infections, rash, renal impairment, and blood dyscrasias.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>renal impairment; eye and ear examinations are\r\nadvised before and at 3-month intervals during treatment; aluminium\r\nencephalopathy (may exacerbate neurological dysfunction); pregnancy\r\nand breastfeeding; children under 3 years (may retard growth).</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Teratogenic in animal studies; manufacturer advises\r\nuse only if potential benefit outweighs risk</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>No information available; manufacturer advises use\r\nonly if potential benefit outweighs risk</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Metal complexes excreted by kidneys\r\n(in severe renal impairment dialysis\r\nincreases rate of elimination)</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(569, 'Dexamethasone', 'Dexamethasone\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 4 mg dexamethasone phosphate (as disodium salt) in 1-ml\r\nampoule</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antiallergics and medicines used in anaphylaxis</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>adjunct in the emergency treatment of anaphylaxis; short-term\r\nsuppression of inflammation in allergic disorders; for other indications</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Allergy (short-term use), by mouth, ADULT, usual range 0.5–10 mg daily as a\r\nsingle dose in the morning; CHILD, 10–100 micrograms/kg daily.\r\nAnaphylaxis (adjunct), by slow intravenous injection or infusion (as dexamethasone\r\nphosphate), ADULT, 0.5–24 mg; CHILD, 200–400 micrograms/kg.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea, dyspepsia, malaise, hiccups; hypersensitivity reactions\r\nincluding anaphylaxis; perineal irritation after intravenous administration;\r\nfor adverse effects associated with low-dose, long-term corticosteroid\r\ntreatment</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>increased susceptibility to, and severity of, infection; activation or\r\nexacerbation of tuberculosis, amoebiasis and strongyloidiasis; risk of severe\r\nchickenpox in non-immune patients (varicella-zoster immunoglobulin\r\nrequired if exposed to chickenpox); avoid exposure to measles (normal\r\nimmunoglobulin possibly required if exposed); diabetes mellitus; peptic\r\nulcer; hypertension; corneal perforation; for further precautions relating to\r\nlong-term use of corticosteroids</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>untreated systemic infection (unless condition lifethreatening);\r\nadministration of live virus vaccines.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Increased risk of hypokalaemia; antagonism of diuretic\r\neffect\r\nAcetylsalicylic acid Increased risk of gastrointestinal bleeding and ulceration;\r\ndexamethasone reduces plasma salicylate concentration\r\nAlbendazole Plasma albendazole concentration possibly increased\r\nAmiloride Antagonism of diuretic effect\r\nAmlodipine Antagonism of hypotensive effect\r\n* Amphotericin B Increased risk of hypokalaemia (avoid concomitant use\r\nunless dexamethasone needed to control reactions)\r\nAtenolol Antagonism of hypotensive effect\r\nCalcium salts Reduced absorption of calcium salts\r\n* Carbamazepine Accelerated metabolism of dexamethasone (reduced effect)\r\nContraceptives, Oral Oral contraceptives containing estrogens increase plasma concentration of dexamethasone\r\nDigoxin Increased risk of hypokalaemia\r\nEnalapril Antagonism of hypotensive effect\r\nEphedrine Metabolism of dexamethasone accelerated\r\nErythromycin Erythromycin possibly inhibits metabolism of dexamethasone\r\nFurosemide Antagonism of diuretic effect; increased risk of hypokalaemia\r\nGlibenclamide Antagonism of hypoglycaemic effect\r\nGlyceryl trinitrate Antagonism of hypotensive effect\r\nHydralazine Antagonism of hypotensive effect\r\nHydrochlorothiazide Antagonism of diuretic effect; increased risk of hypokalaemia\r\nIbuprofen Increased risk of gastrointestinal bleeding and ulceration\r\nIndinavir Possibly reduced plasma indinavir concentration\r\nInsulins Antagonism of hypoglycaemic effect\r\nIsosorbide dinitrate Antagonism of hypotensive effect\r\n* Lopinavir Possibly reduced plasma lopinavir concentration\r\nMetformin Antagonism of hypoglycaemic effect\r\n* Methotrexate Increased risk of haematological toxicity\r\nMethyldopa Antagonism of hypotensive effect\r\nMifepristone Possibly reduced effects of dexamethasone for 3–4 days\r\nNifedipine Antagonism of hypotensive effect\r\n* Phenobarbital Metabolism of dexamethasone accelerated (reduced effect)\r\n* Phenytoin Metabolism of dexamethasone accelerated (reduced effect)\r\nPraziquantel Plasma praziquantel concentration reduced\r\nPropranolol Antagonism of hypotensive effect\r\n* Rifampicin Accelerated metabolism of dexamethasone (reduced effect)\r\nRitonavir Plasma concentration possibly increased by ritonavir\r\nSalbutamol Increased risk of hypokalaemia if high doses of salbutamol\r\ngiven with dexamethasone\r\nSaquinavir Possibly reduced plasma saquinavir concentration\r\nSodium nitroprusside Antagonism of hypotensive effect\r\nSpironolactone Antagonism of diuretic effect\r\nVaccine, Influenza High doses of dexamethasone impair immune response\r\n* Vaccine, Live High doses of dexamethasone impair immune response; avoid use of live vaccines with dexamethasone\r\nVerapamil Antagonism of hypotensive effect\r\n* Warfarin Anticoagulant effect possibly enhanced or reduced (highdose\r\ndexamethasone enhances anticoagulant effect)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Benefit of treatment, for example in asthma,\r\noutweighs risk; risk of intrauterine growth retardation\r\non prolonged or repeated systemic treatment;\r\ncorticosteroid cover required by mother during\r\nlabour; monitor closely if fluid retention</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Systemic effects in infant unlikely with maternal\r\ndose of less than equivalent of 40 mg prednisolone\r\ndaily; monitor infant’s adrenal function with higher\r\ndoses</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(570, 'Dextran 70', 'Dextran 70\r\n\r\n<h5>Presentations</h5>\r\n<p>Injectable solution: 6%.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Blood products and plasma substitutes</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>short-term blood volume expansion.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Short-term blood volume expansion, by rapid intravenous infusion, ADULT,\r\n500–1000 ml initially, followed by a further 500 ml if necessary (total dosage\r\nshould not exceed 20 ml/kg during the initial 24 hours); if required\r\n10 ml/kg daily may be given for a further 2 days (treatment should not\r\ncontinue for longer than 3 days); CHILD, total dosage should not exceed\r\n20 ml/kg.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>hypersensitivity reactions including fever, nasal congestion,\r\njoint pains, urticaria, hypotension, bronchospasm, and rarely, severe\r\nanaphylactoid reactions; transient increase in bleeding time.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>cardiac disease, liver disease, renal impairment; \r\nmonitor urine output; avoid haematocrit falling below 25–\r\n30%; where possible, monitor central venous pressure; can interfere with\r\nblood group cross-matching and biochemical tests (take samples before\r\nstart of infusion); monitor for hypersensitivity reactions; pregnancy</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>severe congestive heart failure; renal failure; bleeding\r\ndisorders such as thrombocytopenia and hypofibrinogenaemia.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(571, 'Diazepam', 'Diazepam\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet (scored): 2 mg; 5 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Psychotherapeutic medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>Drug subject to international control under the Convention on Psychotropic Substances (1971).\r\nUses: short-term treatment of anxiety and insomnia; status epilepticus,\r\nrecurrent seizures; febrile convulsions, adjunct in acute alcohol withdrawal; premedication</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Anxiety, by mouth, ADULT, 2 mg 3 times daily, increased if necessary to 15–\r\n30 mg daily in divided doses (reduced to half the adult dose in the elderly\r\nand debilitated patients).\r\nInsomnia, by mouth, ADULT, 5–15 mg at bedtime</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>drowsiness and lightheadedness the next day; confusion and\r\nataxia (especially in the elderly); amnesia; dependence; paradoxical increase\r\nin aggression; muscle weakness; occasionally headache, vertigo, salivation\r\nchanges, gastrointestinal disturbances, visual disturbances, dysarthria,\r\ntremor, changes in libido, incontinence, and urinary retention; blood\r\ndisorders and jaundice; skin reactions; raised liver enzymes.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>respiratory disease; muscle weakness; history of alcohol or drug\r\nabuse, marked personality disorder; pregnancy and\r\nbreastfeeding; elderly or debilitated (reduce dose); hepatic\r\nimpairment (reduce dose but avoid if severe), renal impairment;\r\navoid prolonged use and abrupt withdrawal; porphyria;\r\ninteractions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>respiratory depression; acute pulmonary insufficiency; sleep\r\napnoea; severe hepatic impairment; myasthenia gravis.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Enhanced hypotensive effect\r\nAlcohol Enhanced sedative effect\r\nAmiloride Enhanced hypotensive effect\r\nAmitriptyline Enhanced sedative effect\r\nAmlodipine Enhanced hypotensive effect\r\nAtenolol Enhanced hypotensive effect\r\nChlorphenamine Enhanced sedative effect\r\nChlorpromazine Enhanced sedative effect\r\nClomipramine Enhanced sedative effect\r\nCodeine Enhanced sedative effect\r\nEnalapril Enhanced hypotensive effect\r\nFluphenazine Enhanced sedative effect\r\nFurosemide Enhanced hypotensive effect\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\nHaloperidol Enhanced sedative effect\r\nHalothane Enhanced sedative effect\r\nHydralazine Enhanced hypotensive effect\r\nHydrochlorothiazide Enhanced hypotensive effect\r\nIsoniazid Metabolism of diazepam inhibited\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\nKetamine Enhanced sedative effect\r\nLevodopa Possibly antagonism of levodopa effects\r\nMethadone Increased sedative effect\r\nMethyldopa Enhanced hypotensive effect\r\nMorphine Enhanced sedative effect\r\nNifedipine Enhanced hypotensive effect\r\nNitrous oxide Enhanced sedative effect\r\nPhenytoin Plasma phenytoin concentration possibly increased or\r\ndecreased by diazepam\r\nPromethazine Enhanced sedative effect\r\nPropranolol Enhanced hypotensive effect\r\nRifampicin Metabolism of diazepam accelerated (reduced plasma concentration)\r\n* Ritonavir Plasma concentration possibly increased by ritonavir (risk of\r\nextreme sedation and respiratory depression—avoid concomitant use)\r\nSodium nitroprusside Enhanced hypotensive effect\r\nSpironolactone Enhanced hypotensive effect\r\nThiopental Enhanced sedative effect\r\nTimolol Enhanced hypotensive effect\r\nVerapamil Enhanced hypotensive effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid regular use (risk of neonatal withdrawal\r\nsymptoms); use only if clear indication such as seizure\r\ncontrol (high doses during late pregnancy or labour\r\nmay cause neonatal hypothermia, hypotonia, and\r\nrespiratory depression)</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Continue breastfeeding; adverse effects possible;\r\nmonitor infant for drowsiness</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe: Start with small doses; increased cerebral sensitivity</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Can precipitate coma</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(572, 'Didanosine', 'Didanosine\r\n\r\n<h5>Presentations</h5>\r\n<p>Buffered powder for oral liquid: 100 mg; 167 mg; 250 mg packets.\r\nCapsule (unbuffered enteric-coated):125 mg; 200 mg; 250 mg; 400 mg.\r\nTablet (buffered chewable, dispersible): 25 mg; 50 mg; 100 mg; 150 mg;\r\n200 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>HIV infection in combination with at least two other antiretroviral medicines</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>In combination with other antiretroviral medicines, by mouth, ADULT under\r\n60 kg, 250 mg daily in 1–2 divided doses; ADULT over 60 kg, 400 mg daily in\r\n1–2 divided doses; CHILD under 3 months, 50 mg/m2 twice daily; CHILD\r\n3 months–13 years, 90–120 mg/m2 twice daily or 180-240 mg/m2 once daily.\r\nPATIENT ADVICE. To ensure sufficient antacid from buffered tablets, each dose to\r\nbe taken as 2 tablets (child under 1 year, 1 tablet), chewed thoroughly, crushed, or\r\ndispersed in water; tablets should be taken at least 1 hour before food or on an empty\r\nstomach.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>pancreatitis; peripheral neuropathy especially in advanced HIV infection (suspend treatment; a\r\nreduced dose may be tolerated when symptoms resolve); hyperuricaemia\r\n(suspend treatment if significant elevation); diarrhoea (occasionally serious);\r\nnausea, vomiting, dry mouth, parotid gland enlargement, sialadenitis,\r\nheadache, hypersensitivity reactions, dry eyes, retinal and optic nerve\r\nchanges (especially in children), diabetes mellitus, hypoglycaemia, raised\r\nliver enzymes, liver failure, acute renal failure,\r\nand rhabdomyolysis also reported; alopecia, insomnia, dizziness, blood\r\ndisorders, lipodystrophy</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>history of pancreatitis (preferably avoid, otherwise exercise extreme caution; peripheral neuropathy or\r\nhyperuricaemia; chronic hepatitis B or C; renal impairment; hepatic impairment; pregnancy; breastfeeding;\r\ndilated retinal examinations recommended (especially in children) every\r\n6 months, or if visual changes occur; interactions: Appendix 1.\r\nPANCREATITIS. If symptoms of pancreatitis develop or if serum amylase or lipase is\r\nraised (even if patient is asymptomatic), suspend treatment until diagnosis of\r\npancreatitis is excluded; on return to normal values, re-initiate treatment only if\r\nessential (using a low dose, increased gradually if appropriate). Whenever possible avoid\r\nconcomitant treatment with other drugs known to cause pancreatic toxicity (for\r\nexample, intravenous pentamidine); monitor patient closely if concomitant therapy is\r\nunavoidable. Since significant elevations of triglycerides cause pancreatitis, monitor\r\npatient closely if these are elevated.\r\nHEPATIC DISEASE. Potentially life-threatening lactic acidosis and severe\r\nhepatomegaly with steatosis have been reported. Exercise caution in patients\r\n(particularly obese women) with hepatomegaly, hepatitis, liver enzyme abnormalities, or\r\nrisk factors for liver disease and hepatic steatosis (including alcohol abuse) and\r\ndiscontinue if rapid deterioration in liver function tests, symptomatic hyperlactataemia,\r\nprogressive hepatomegaly or lactic acidosis occurs.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>NOTE. Antacids present in buffered tablet formulation may affect absorption of other\r\ndrugs; see also Antacids.\r\nAllopurinol Possibly increased plasma concentration of didanosine\r\n* Ribavirin Increased risk of adverse effects; manufacturer of ribavirin\r\nadvises avoid concomitant use\r\n* Stavudine Increased risk of adverse effects\r\nTenofovir Plasma concentration of didanosine increased (increased\r\nrisk of toxicity — avoid concomitant use)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid if possible in first trimester; increased risk of\r\nlactic acidosis and hepatic steatosis</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild Reduce dose; consult manufacturer''s literature</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Insufficient information but monitor for toxicity</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(573, 'Diethylcarbamazine', 'Diethylcarbamazine\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 50 mg; 100 mg (dihydrogen citrate).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>systemic lymphatic filariasis and occult filariasis; loiasis; tissue nematode\r\ninfections, in particular, visceral larva migrans</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Lymphatic filariasis (bancroftian), by mouth, ADULT and CHILD over 10 years,\r\n1 mg/kg as a single dose on the first day, increased gradually over 3 days to\r\n6 mg/kg daily, preferably in divided doses after meals, for 12 days; CHILD\r\nunder 10 years, half the adult dose; mass treatment control programmes,\r\nADULT and CHILD over 10 years, 6 mg/kg in divided doses over 24 hours,\r\nonce a year; child under 10 years, half the adult dose.\r\nLymphatic filariasis (brugian), by mouth, ADULT and CHILD over 10 years,\r\n1 mg/kg as a single dose on the first day, increased gradually over 3 days to\r\n3–6 mg/kg daily, preferably in divided doses after meals, for 6–12 days;\r\nCHILD under 10 years, half the adult dose; mass treatment control\r\nprogrammes, ADULT and CHILD over 10 years, 3–6 mg/kg in divided doses\r\nover 24 hours, 6 times at weekly or monthly intervals; CHILD under 10 years,\r\nhalf the adult dose.\r\nOccult filariasis, by mouth, ADULT, 8 mg/kg daily for 14 days, repeated as\r\nnecessary if symptoms return.\r\nNOTE. The above dose regimens are intended only as a guide, since many countries\r\nhave developed specific treatment regimens.\r\nLoiasis, treatment, by mouth, ADULT, 1 mg/kg as a single dose on the first day,\r\ndoubled on two successive days, then adjusted to 2–3 mg/kg 3 times daily\r\nfor a further 18 days\r\nLoiasis, prophylaxis, by mouth, ADULT, 300 mg weekly for as long as exposure occurs\r\nPATIENT ADVICE. Complete the prescribed course as directed to minimize allergic\r\nreactions to dying parasites.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>headache, dizziness, drowsiness, nausea and vomiting;\r\nimmunological reactions within a few hours of the first dose, subsiding by\r\nfifth day of treatment, including fever, headache, joint pain, dizziness,\r\nanorexia, malaise, transient haematuria, urticaria, vomiting, and asthma in\r\nasthmatics (similar to the Mazzotti reaction) induced by disintegrating\r\nmicrofilariae; nodules formed by recently killed worms (palpable\r\nsubcutaneously and along the spermatic cord); transient lymphangitis and\r\nexacerbation of lymphoedema.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>renal impairment (reduce dose;); cardiac disorders;\r\nother severe acute disease (delay diethylcarbamazine treatment until after\r\nrecovery).</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>pregnancy (delay treatment until after delivery)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid: Delay treatment until after delivery</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Moderate to severe:\r\nReduce dose; plasma half-life\r\nprolonged and urinary excretion\r\nconsiderably reduced</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(574, 'Digoxin', 'Digoxin\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 250 micrograms/ml in 2-ml ampoule.\r\nOral liquid: 50 micrograms/ml.\r\nTablet: 62.5 micrograms; 250 micrograms.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Cardiovascular medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>supraventricular arrhythmias, particularly atrial fibrillation; heart failure</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Atrial fibrillation, by mouth, ADULT, initially 1–1.5 mg in divided doses over\r\n24 hours for rapid digitalization (or 250 micrograms once or twice daily if\r\ndigitalization less urgent) followed by: 62.5–500 micrograms daily (higher\r\ndose may be divided), according to renal function and heart rate response;\r\nusual maintenance dose, 125–250 micrograms daily (lower dose more\r\nappropriate in the elderly).\r\nEmergency control of atrial fibrillation, by intravenous infusion over at least\r\n2 hours, ADULT, 0.75–1 mg.\r\nNOTE. Infusion dose may need to be reduced if digoxin or other cardiac glycoside has\r\nbeen given in previous 2 weeks.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>usually only associated with high doses; gastrointestinal\r\ndisturbances including anorexia, nausea, vomiting, diarrhoea, and abdominal\r\npain; visual disturbances, headache, fatigue, drowsiness, confusion,\r\ndizziness, delirium, hallucinations, depression; arrhythmias, heart block;\r\nrarely rash, and intestinal ischaemia; gynaecomastia on long-term use;\r\nthrombocytopenia reported.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>recent myocardial infarction; sick sinus syndrome; severe\r\npulmonary disease; thyroid disease; the elderly (reduce dose); renal\r\nimpairment; avoid hypokalaemia; avoid rapid intravenous\r\nadministration (nausea and increased risk of arrhythmias); pregnancy\r\nand breastfeeding; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypertrophic obstructive cardiomyopathy (unless also atrial\r\nfibrillation and heart failure); Wolff-Parkinson-White syndrome or other\r\naccessory pathway, particularly if accompanied by atrial fibrillation;\r\nventricular tachycardia or fibrillation; intermittent complete heart block;\r\nsecond-degree atrioventricular block.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Hypokalaemia caused by acetazolamide increases cardiac\r\ntoxicity of digoxin\r\n* Amphotericin B Hypokalaemia caused by amphotericin B increases cardiac\r\ntoxicity of digoxin\r\nAntacids (Aluminium hydroxide; Magnesium hydroxide)\r\nPossibly reduced absorption of digoxin\r\nAtenolol Increased risk of AV block and bradycardia\r\nAzithromycin Increased plasma concentration of digoxin (increased risk of toxicity)\r\nCalcium salts Large intravenous doses of calcium salts can precipitate arrhythmias\r\n* Chloroquine Plasma digoxin concentration possibly increased\r\n* Ciclosporin Increased plasma concentration of digoxin (increased risk of toxicity)\r\nDexamethasone Increased risk of hypokalaemia\r\nErythromycin Increased plasma concentration of digoxin (increased risk of\r\ntoxicity)\r\n* Furosemide Hypokalaemia caused by furosemide increases cardiac\r\ntoxicity of digoxin\r\nGentamicin Possibly increased plasma concentration of digoxin\r\n* Hydrochlorothiazide Hypokalaemia caused by hydrochlorothiazide increases\r\ncardiac toxicity of digoxin\r\nHydrocortisone Increased risk of hypokalaemia\r\nIbuprofen Possibly exacerbation of heart failure, reduced renal\r\nfunction, and increased plasma digoxin concentration\r\nMefloquine Possibly increased risk of bradycardia\r\n* Nifedipine Possibly increased plasma concentration of digoxin\r\nPenicillamine Plasma concentration of digoxin possibly reduced\r\nPhenytoin Plasma concentration of digoxin possibly reduced\r\nPrednisolone Increased risk of hypokalaemia\r\nPropranolol Increased risk of AV block and bradycardia\r\n* Quinidine Plasma concentration of digoxin increased (halve dose of digoxin)\r\n* Quinine Plasma concentration of digoxin increased\r\nRifampicin Plasma concentration of digoxin possibly reduced\r\nSalbutamol Possibly reduced plasma concentration of digoxin\r\n* Spironolactone Plasma concentration of digoxin increased\r\nSulfamethoxazole + trimethoprim\r\nPlasma concentration of digoxin possibly increased\r\nSulfasalazine Absorption of digoxin possibly reduced\r\nSuxamethonium Risk of ventricular arrhythmias\r\nTimolol Increased AV block and bradycardia\r\nTrimethoprim Plasma concentration of digoxin possibly increased\r\n* Verapamil Increased plasma concentration of digoxin; increased AV block and bradycardia</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>May need dosage adjustment</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount too small to be harmful</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild Reduce dose; toxicity increased by\r\nelectrolyte disturbances</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(575, 'Diloxanide', 'Diloxanide\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 500 mg (furoate).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>amoebiasis (asymptomatic carriers in non-endemic areas; eradication of\r\nresidual luminal amoebae after treatment of invasive disease with other\r\nmedicines).</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Amoebiasis (see Uses above), by mouth, ADULT, 500 mg 3 times daily for\r\n10 days; CHILD over 25 kg, 20 mg/kg daily in 3 divided doses for 10 days;\r\ncourse may be repeated if necessary.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>flatulence; occasionally, vomiting, pruritus, and urticaria.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>pregnancy (defer treatment until after first trimester)\r\nand breastfeeding</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Defer treatment until after first trimester</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Manufacturer advises avoid</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(576, 'Dimercaprol', 'Dimercaprol\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection in oil: 50 mg/ml in 2-ml ampoule.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antidotes and other substances used in poisonings</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>acute poisoning by antimony, arsenic, bismuth, gold, mercury, possibly\r\nthallium; adjunct (with sodium calcium edetate) in lead poisoning.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Poisoning by heavy metals, by intramuscular injection, ADULT and CHILD, 2.5–\r\n3 mg/kg every 4 hours for 2 days, 3 mg/kg 2–4 times on the third day,\r\nthen 3 mg/kg 1–2 times daily for 10 days or until recovery.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>hypertension, tachycardia; malaise, nausea, vomiting,\r\nabdominal pain, salivation, lacrimation, sweating, burning sensation in the\r\nmouth, throat, and eyes; feeling of constriction in the throat and chest;\r\nheadache, muscle spasms, tingling of the extremities; fever in children; local\r\npain and abscess at injection site.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>hypertension; renal impairment (discontinue or use with extreme\r\ncaution if impairment develops during treatment); any\r\nabnormal reaction such as hyperpyrexia should be assessed; the elderly;\r\npregnancy and breastfeeding; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>iron, selenium, and cadmium poisoning; severe hepatic\r\nimpairment (unless due to arsenic poisoning)</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Avoid</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Discontinue or use with extreme\r\ncaution if impairment develops during\r\ntreatment</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(577, 'Diphtheria (low dose) and tetanus vaccine', 'Diphtheria (low dose) and tetanus vaccine\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection, diphtheria (low dose) and tetanus toxoid adsorbed onto a mineral\r\ncarrier.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Immunologicals</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>active immunization of adults and children aged 7 years and over against\r\ndiphtheria and tetanus</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Primary immunization of unimmunized adults and children aged 7 years and\r\nover against diphtheria and tetanus, by intramuscular injection, ADULT and\r\nCHILD 7 years and over, 2 doses, each of 0.5 ml, separated by an interval of\r\n2 months, followed by a third dose after 6–12 months.\r\nReinforcing immunization of adults and children aged 7 years and over against\r\ndiphtheria and tetanus, by intramuscular injection, ADULT and CHILD 7 years\r\nand over, 1 dose of 0.5 ml, 10 years after completing primary course.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(578, 'Diphtheria (standard dose) and tetanus vaccine (for children under 7 years)', 'Diphtheria (standard dose) and tetanus vaccine (for children under 7 years)\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection, diphtheria (standard dose) and tetanus toxoids adsorbed onto a\r\nmineral carrier.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Immunologicals</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>active immunization of children under 7 years against diphtheria and\r\ntetanus.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Primary immunization of children against diphtheria and tetanus, by\r\nintramuscular injection, CHILD under 7 years, 3 doses, each of 0.5 ml, with an\r\ninterval of not less than 4 weeks between each dose.\r\nReinforcing immunization of children against diphtheria and tetanus, by\r\nintramuscular injection, CHILD under 10 years,1 dose of 0.5 ml at least 3 years\r\nafter completion of primary course of diphtheria, pertussis, and tetanus\r\nvaccine, or diphtheria and tetanus vaccine.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(579, 'Diphtheria Antitoxin', 'Diphtheria Antitoxin \r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 10 000 IU; 20 000 IU in vial.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Immunologicals</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>Diphtheria antitoxin is prepared from the plasma or serum of healthy horses\r\nimmunized against diphtheria toxin or diphtheria toxoid. It is used for passive\r\nimmunization in suspected cases of diphtheria without waiting for bacterial\r\nconfirmation of the infection. A test dose should be given initially to exclude\r\nhypersensitivity. Diphtheria antitoxin is not used for prophylaxis of diphtheria because\r\nof the risk of hypersensitivity.\r\nUses: passive immunization in suspected cases of diphtheria.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>NOTE. National recommendations may vary.\r\nPassive immunization in suspected diphtheria (see Precautions), by intramuscular\r\ninjection, ADULT and CHILD, 10 000–30 000 IU in mild to moderate cases;\r\n40 000–100 000 IU in severe cases (doses of more than 40 000 IU should\r\nbe given in divided doses, the first portion by intramuscular injection, followed\r\nby the bulk of the dose by intravenous injection after an interval of\r\n0.5–2 hours).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>anaphylaxis with urticaria, hypotension, dyspnoea, and shock;\r\nserum sickness up to 12 days after injection.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>initial test dose to exclude hypersensitivity; observation required\r\nafter full dose (epinephrine (adrenaline) and resuscitation facilities should be\r\navailable).</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(580, 'Diphtheria, Pertussis, And Tetanus Vaccine (DPT)', 'Diphtheria, Pertussis, And Tetanus Vaccine (DPT)\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection, diphtheria and tetanus toxoids and pertussis vaccine adsorbed\r\nonto a mineral carrier.\r\nNOTE. Available with either an acellular pertussis component or a whole cell pertussis\r\ncomponent</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Immunologicals</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>active immunization against diphtheria, tetanus, and pertussis.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Primary immunization of children against diphtheria, pertussis, and tetanus,\r\nby intramuscular injection, INFANT from 6 weeks of age, 3 doses, each of 0.5 ml\r\nwith an interval of not less than 4 weeks between each dose; CHILD\r\n1–6 years of age, 2 doses, each of 0.5 ml separated by an interval of\r\n2 months, followed by a third dose after 6–12 months.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>minor adverse effects are more\r\nfrequent with vaccines containing a whole cell pertussis component (see\r\nalso under Pertussis).</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>whole cell pertussis component\r\nassociated with more frequent minor adverse effects than acellular pertussis\r\ncomponent; the frequency increases with age and number of injections and\r\nso vaccines containing whole cell pertussis are not recommended for\r\nadolescents and adults.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(581, 'Dithranol', 'Dithranol\r\n\r\n<h5>Presentations</h5>\r\n<p>Ointment: 0.1-2%.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>moderately severe psoriasis.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Administration:\r\nPsoriasis (initiate under medical supervision), ADULT and CHILD, starting with\r\na lower strength preparation (0.1%), carefully apply directly to lesions only,\r\nleave in contact for 30 minutes, then wash off thoroughly; repeat\r\napplication daily, gradually increasing strength to 2% and contact time to 60\r\nminutes at weekly intervals; some 0.1–0.5% strength preparations are\r\nsuitable for overnight use.\r\nNOTE: Wash hands thoroughly after use.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>local irritation; excessive erythema or spread of lesions\r\n(discontinue use); conjunctivitis following contact with eyes; staining of skin,\r\nhair, and fabrics.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>irritant (avoid contact with eyes and healthy skin).</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity; avoid use on face, acute eruptions,\r\nexcessively inflamed areas.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(582, 'Dl-Methionine', 'Dl-Methionine\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 250 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antidotes and other substances used in poisonings</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>paracetamol overdosage</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Paracetamol overdosage, by mouth, ADULT and CHILD over 6 years, 2.5 g\r\ninitially, followed by 3 further doses of 2.5 g every 4 hours, CHILD under\r\n6 years, 1 g initially, followed by 3 further doses of 1 g every 4 hours.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea, vomiting, drowsiness, irritability.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>severe liver disease (may precipitate hepatic encephalopathy);\r\navoid concurrent use with activated charcoal.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(583, 'Dopamine', 'Dopamine\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 40 mg (hydrochloride)/ml in 5-ml vial.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Cardiovascular medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>cardiogenic shock including in myocardial infarction and cardiac surgery</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Cardiogenic shock, by intravenous infusion into a large vein, ADULT,\r\ninitially 2–5 micrograms/kg/minute, gradually increased by\r\n5–10 micrograms/kg/minute according to blood pressure, cardiac output,\r\nand urine output (seriously ill patients, up to 20–50 micrograms/kg/minute).\r\nDILUTION AND ADMINISTRATION. According to manufacturer’s directions.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea and vomiting; peripheral vasoconstriction;\r\nhypotension with dizziness, fainting, flushing; tachycardia, ectopic beats,\r\npalpitations, anginal pain; headache, dyspnoea; hypertension particularly in\r\noverdosage.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>correct hypovolaemia before, and maintain blood volume during\r\nthe treatment; correct hypoxia, hypercapnia, and metabolic acidosis before\r\nor at same time as starting treatment; use low dose in cardiogenic shock due\r\nto myocardial infarction; history of peripheral vascular disease (increased\r\nrisk of ischaemia of extremities); breastfeeding; the elderly;\r\ninteractions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>tachyarrhythmia, ventricular fibrillation; ischaemic heart\r\ndisease; phaeochromocytoma; hyperthyroidism.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Chlorpromazine Antagonism of hypertensive effect\r\nErgometrine Increased risk of ergotism\r\nFluphenazine Antagonism of hypertensive effect\r\nHaloperidol Antagonism of hypertensive effect</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>No information available</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(584, 'Doxorubicin', 'Doxorubicin\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 10 mg; 50 mg (hydrochloride) in vial.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>acute leukaemias; carcinomas of the breast, bladder, ovary and thyroid;\r\nneuroblastoma; Wilm tumour; non-Hodgkin and Hodgkin lymphomas; soft\r\ntissue sarcomas, osteosarcoma.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>consult specialist literature; hepatic\r\nimpairment; interactions\r\nNOTE. Irritant to tissues.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>consult specialist literature; pregnancy and breastfeeding</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Ciclosporin Increased risk of neurotoxicity\r\nPhenytoin Possibly reduced absorption of phenytoin\r\nStavudine Doxorubicin may inhibit effect of stavudine\r\nVaccine, Live Avoid use of live vaccines with doxorubicin (impairment of\r\nimmune response)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (teratogenic and toxic in animal studies); with\r\nliposomal product use effective contraception during\r\nand for at least 6 months after administration to men or women</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Reduce dose according to bilirubin concentration</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(585, 'Doxycycline', 'Doxycycline\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule or tablet: 100 mg (hydrochloride).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>Doxycycline is a tetracycline and is a broad-spectrum antibiotic that is effective for\r\nconditions caused by chlamydia, rickettsia, brucella, and the spirochaete, Borrelia\r\nburgdorferi (Lyme disease). It is the preferred tetracycline since it has a more favourable\r\npharmacokinetic profile than other tetracyclines, including tetracycline. It is deposited\r\nin growing bone and teeth causing staining and occasionally dental hypoplasia. It should\r\nnot be given to children under 8 years or pregnant women; in some countries, use in\r\nchildren under 12 years is contraindicated.\r\nUses: supplement to quinine or artesunate treatment for multidrug-resistant\r\nP. falciparum malaria; short-term prophylaxis of multidrug-resistant\r\nP. falciparum malaria; see also notes above; bacterial infections</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Supplement to malaria treatment (see note above), by mouth, ADULT and CHILD\r\nover 8 years, 100 mg twice daily for 7–10 days.\r\nShort-term prophylaxis of malaria, by mouth, ADULT, 100 mg daily for up to\r\n8 weeks; CHILD over 8 years, 1.5 mg/kg daily for up to 8 weeks; doxycycline\r\nshould be started on the day before exposure and continued for 4 weeks\r\nafter last risk of exposure.\r\nPATIENT ADVICE. Capsules should be swallowed whole with plenty of fluid while\r\nsitting or standing to prevent oesophageal irritation. May be given with food or milk to\r\ncounter gastric irritation.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>gastrointestinal disturbances; anorexia; flushing, tinnitus;\r\nphotosensitivity; hypersensitivity reactions (including rash, exfoliative\r\ndermatitis, Stevens-Johnson syndrome, urticaria, angioedema, anaphylaxis\r\nand pericarditis); headache and visual disturbances; hepatotoxicity, blood\r\ndisorders, pancreatitis and antibiotic-associated colitis reported; staining of\r\ngrowing teeth and occasional dental hypoplasia.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>avoid exposure to sunlight or sunlamps (photosensitivity\r\nreported); renal impairment; hepatic impairment;\r\nbreastfeeding; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>pregnancy; children under 8 years; porphyria;\r\nsystemic lupus erythematosus.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Antacids (Aluminium hydroxide; Magnesium hydroxide) Reduced absorption of doxycycline\r\nCarbamazepine Accelerated metabolism of doxycycline (reduced effect)\r\n* Ciclosporin Possibly increased plasma ciclosporin concentration\r\nContraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nFerrous salts Absorption of oral ferrous salts reduced by doxycycline; absorption of doxycycline reduced by oral ferrous salts\r\nMethotrexate Increased risk of methotrexate toxicity\r\nPhenobarbital Metabolism of doxycycline accelerated (reduced plasma concentration)\r\nPhenytoin Increased metabolism of doxycycline (reduced plasma concentration)\r\nRifampicin Plasma doxycycline concentration possibly reduced\r\n* Warfarin Anticoagulant effect possibly enhanced</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>First trimester: Effects on skeletal development in\r\nanimal studies\r\nSecond and third trimesters: Dental discoloration;\r\nmaternal hepatotoxicity with large doses</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Continue breastfeeding; use alternative drug if\r\npossible (absorption and therefore discoloration of\r\nteeth in infant probably usually prevented by\r\nchelation with calcium in milk)</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild Use with caution; avoid excessive doses</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid (or use with caution)</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(586, 'Efavirenz +Emtricitabine +Tenofovir', 'Efavirenz +Emtricitabine +Tenofovir\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 600 mg + 200 mg + 300 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>HIV infection alone as a complete regimen or in combination with other\r\nantiretroviral medicines.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>HIV infection alone as a complete regimen or in combination with other\r\nantiretroviral medicines, by mouth, ADULT over 18 years, 1 tablet once daily</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(587, 'Efavirenz', 'Efavirenz\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 50 mg; 100 mg; 200 mg.\r\nOral liquid: 150 mg/5 ml.\r\nTablet: 600 mg.\r\nNOTE. The bioavailability of efavirenz from the oral solution is lower than that from\r\nthe capsules and tablets; the oral solution is therefore not interchangeable with either\r\nthe capsules or tablets on a milligram-for-milligram basis.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>HIV infection in combination with at least two other antiretroviral\r\nmedicines</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>HIV infection (in combination with other antiretroviral medicines),\r\nby mouth (as tablets or capsules), ADULT and CHILD 40 kg and over, 600 mg\r\nonce daily; CHILD over 3 years/10–14 kg, 200 mg once daily; CHILD\r\n15–19 kg, 250 mg once daily; CHILD 20–24 kg, 300 mg once daily; CHILD\r\n25–32 kg, 350 mg once daily; CHILD 33–39 kg, 400 mg once daily;\r\nby mouth (as oral solution), ADULT and CHILD 40 kg and over, 720 mg once\r\ndaily; CHILD over 3 years/10–15 kg, 270 mg once daily; CHILD 15–20 kg,\r\n300 mg once daily; CHILD 20–24 kg, 360 mg once daily; CHILD 25–32 kg,\r\n450 mg once daily; CHILD 33–39 kg, 510 mg once daily.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>rash including Stevens-Johnson syndrome;\r\nabdominal pain, diarrhoea, nausea, vomiting; anxiety, depression,\r\ndizziness, headache, insomnia, somnolence, abnormal dreams, fatigue,\r\nimpaired concentration (administration at bedtime especially in the first\r\n2–4 weeks reduces central nervous system effects); pruritus; less frequently\r\nhepatitis, psychosis, mania, suicidal ideation, amnesia, ataxia, convulsions,\r\nand blurred vision; raised serum cholesterol, elevated liver enzymes\r\n(especially if seropositive for hepatitis B or C), pancreatitis, gynaecomastia,\r\nand photosensitivity also reported.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>chronic hepatitis B or C; hepatic impairment (avoid if severe);\r\nsevere renal impairment; breastfeeding; the elderly; history of mental illness\r\nor seizures; interactions\r\nRASH. Rash, usually occurring in the first 2 weeks, is the most common adverse effect;\r\ndiscontinue if rash is severe or if rash is accompanied by blistering, desquamation,\r\nmucosal involvement or fever; if rash is mild or moderate, continue without\r\ninterruption (rash usually resolves within 1 month).\r\nPSYCHIATRIC DISORDERS. Patients should be advised to seek medical attention if\r\nsevere, depression, psychosis or suicidal ideation occur.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>pregnancy; substitute nevirapine for efavirenz in pregnant women or women for whom\r\neffective contraception cannot be assured).</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Contraceptives, Oral Efficacy of estrogen-containing oral contraceptives possibly reduced\r\n* Ergometrine Increased risk of ergotism (avoid concomitant use)\r\nGrapefruit juice Plasma concentration of efavirenz possibly increased\r\nIndinavir Efavirenz reduces plasma concentration of indinavir\r\n* Lopinavir Plasma concentration of lopinavir reduced\r\nMethadone Reduced plasma concentration of methadone\r\nNevirapine Plasma efavirenz concentration reduced\r\nRifampicin Reduced plasma concentration of efavirenz (increase efavirenz dose)\r\nRitonavir Increased risk of toxicity (monitor liver function tests)\r\nSaquinavir Efavirenz significantly reduces plasma concentration of saquinavir</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (potential teratogenic effects)</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe No information available; caution advised</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>In mild to moderate liver disease, monitor for doserelated\r\nside-effects (for example, CNS effects) and\r\nmonitor liver function; avoid in severe hepatic impairment</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(588, 'Eflornithine', 'Eflornithine\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 200 mg (hydrochloride)/ml in 100-ml bottle.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>treatment of meningoencephalitic stages of T. brucei gambiense infection.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Treatment of meningoencephalitic T. brucei gambiense infections, by intravenous\r\ninfusion, ADULT, 100 mg/kg over 45 minutes every 6 hours for 14 days;\r\nCHILDREN less than 12 years old or under 35 kg, 150 mg/kg over 45\r\nminutes every 6 hours for 14 days.\r\nDILUTION AND ADMINISTRATION. According to manufacturer’s directions.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>diarrhoea, anaemia, leukopenia, thrombocytopenia,\r\nconvulsions; impaired hearing reported; less commonly vomiting, anorexia,\r\nalopecia, abdominal pain, headache, facial oedema, eosinophilia, and\r\ndizziness (reversible on treatment withdrawal).</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>hospitalization and close supervision required throughout\r\ntreatment; monitor complete blood and platelet counts for signs of bone\r\nmarrow suppression (severe anaemia, leukopenia, or thrombocytopenia\r\nrequires an interruption in treatment until there is evidence of bone marrow\r\nrecovery); renal impairment</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>pregnancy; breastfeeding.</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Avoid</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Reduce dose</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(589, 'Emtricitabine +Tenofovir', 'Emtricitabine +Tenofovir \r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 200 mg + 300 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>HIV infection alone as a complete regimen or in combination with other\r\nantiretroviral medicines.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>HIV infection alone as a complete regimen or in combination with other\r\nantiretroviral medicines, by mouth, ADULT over 18 years, 1 tablet once daily.\r\nPATIENT ADVICE. Tablets can be dispersed in at least 100 ml water, orange juice or\r\ngrape juice for patients who have difficulty swallowing.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>check Emtricitabine and Tenofovir</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>check Emtricitabine and Tenofovir</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(590, 'Emtricitabine', 'Emtricitabine\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 200 mg.\r\nOral liquid: 10 mg/ml.\r\nNOTE. 240 mg oral solution or 200 mg capsule. Where appropriate, capsules may be\r\nused instead of oral solution. Oral solution contains propylene glycol as an excipient.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>HIV infection in combination with at least two other antiretroviral\r\nmedicines.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>HIV infection (in combination with other antiretroviral medicines), by mouth,\r\nADULT and CHILD, over 33 kg, 1 capsule (200 mg) or 24 ml (240 mg) oral\r\nsolution once daily; CHILD 4 months–18 years, under 33 kg, 6 mg/kg oral\r\nsolution once daily</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea, vomiting, abdominal pain, dyspepsia, diarrhoea;\r\nheadache, dizziness, peripheral neuropathy, asthenia, insomnia, abnormal\r\ndreams, depression; anaemia, neutropenia; arthralgia, myalgia, bone\r\nnecrosis; raised serum lipase, amylase, creatine kinase, and liver enzymes, hyperbilirubinaemia,\r\nhypertriglyceridaemia, hyperglycaemia; rash, pruritus, urticaria,\r\nhyperpigmentation; lipodystrophy and metabolic effects</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>renal impairment, hepatic disease;\r\npregnancy  and breastfeeding , interactions\r\nHEPATIC DISEASE. Potentially life-threatening lactic acidosis and severe\r\nhepatomegaly with steatosis have been reported. Exercise caution in patients\r\n(particularly obese women) with hepatomegaly, hepatitis (especially hepatitis C treated\r\nwith interferon alfa and ribavirin), liver enzyme abnormalities, or risk factors for liver\r\ndisease and hepatic steatosis (including alcohol abuse); discontinue if rapid deterioration\r\nin liver function tests, symptomatic hyperlactataemia, progressive hepatomegaly or\r\nlactic acidosis occurs. Exacerbation of hepatitis in patients with chronic hepatitis B may\r\noccur on discontinuation of emtricitabine.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Lamivudine No information available; manufacturer advises avoid\r\nconcomitant use</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>No information available; use only if essential</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding recommended during first 6 months\r\nif no safe alternative to breast milk</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild: Reduce dose; consult manufacturer''s literature</p>\r\n\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(591, 'Enalapril', 'Enalapril\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 2.5 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Cardiovascular medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>hypertension; heart failure</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Hypertension by mouth, ADULT, initially 5 mg once daily (lower if used in\r\naddition to a diuretic or in renal impairment); increased if necessary; usual\r\nmaintenance dose, 20 mg once daily; maximum, 40 mg once daily.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>dizziness, headache; less commonly, nausea, diarrhoea,\r\nhypotension (severe in rare cases), dry cough, fatigue, asthenia, muscle\r\ncramps, rash, and renal impairment; rarely vomiting, dyspepsia, abdominal\r\npain, constipation, peptic ulcer, glossitis, stomatitis, ileus, anorexia,\r\npancreatitis, liver damage, chest pain, palpitations, arrhythmias, Raynaud\r\nsyndrome, angioedema, bronchospasm, rhinorrhoea, dry mouth, sore throat,\r\npulmonary infiltrates, paraesthesia, vertigo, nervousness, depression,\r\nconfusion, drowsiness, insomnia, dream abnormalities, pruritus, urticaria,\r\nalopecia, flushing, impotence, gynaecomastia, Stevens-Johnson syndrome,\r\ntoxic epidermal necrolysis, exfoliative dermatitis, pemphigus, taste\r\ndisturbances, tinnitus, and blurred vision; electrolyte disturbances and\r\nhypersensitivity-like reactions (including fever, myalgia, arthralgia,\r\neosinophilia, and photosensitivity) also reported.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>concomitant use of diuretics (see note below); hypotension with\r\nfirst doses, especially in patients on diuretics, on a low-sodium diet, on\r\ndialysis, if dehydrated, or with heart failure; peripheral vascular disease or\r\ngeneralized atherosclerosis (risk of clinically silent renovascular disease);\r\nsevere or symptomatic aortic stenosis (use with great care); monitor renal\r\nfunction before and during treatment; renal impairment (reduce dose); hepatic impairment; possibly increased risk\r\nof agranulocytosis in collagen vascular disease; history of idiopathic or\r\nhereditary angioedema (use with care or avoid); breastfeeding; interactions.\r\nUSE WITH DIURETICS. Because of the risk of very rapid falls in blood pressure in\r\nvolume-depleted patients; treatment should be initiated with very low doses. High-dose\r\ndiuretic therapy (for example, with furosemide at doses greater than 80 mg daily)\r\nshould be discontinued, or the dose significantly reduced, at least 24 hours before\r\nstarting enalapril (may not be possible in heart failure due to the risk of pulmonary\r\noedema). If high-dose diuretic therapy cannot be stopped, medical supervision is\r\nadvised for at least 2 hours after administration or until blood pressure is stable.\r\nANAPHYLACTOID REACTIONS. Avoid enalapril during dialysis with high-flux\r\npolyacrilonitrile membranes and during low-density lipoprotein apheresis with dextran\r\nsulfate; also withhold before desensitization with wasp or bee venom.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to ACE inhibitors (including angioedema);\r\nrenovascular disease; pregnancy</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Enhanced hypotensive effect\r\nAcetylsalicylic acid Antagonism of hypotensive effect; risk of renal impairment\r\nwhen acetylsalicylic acid given in doses of over 300 mg daily\r\nAlcohol Enhanced hypotensive effect\r\n* Amiloride Enhanced hypotensive effect; increased risk of severe hyperkalaemia\r\nAmlodipine Enhanced hypotensive effect\r\nAntacids (Aluminium hydroxide; Magnesium hydroxide) Absorption of enalapril reduced\r\nAtenolol Enhanced hypotensive effect\r\nChlorpromazine Enhanced hypotensive effect\r\n* Ciclosporin Increased risk of hyperkalaemia\r\nContraceptives, Oral Antagonism of hypotensive effect by estrogens\r\nDexamethasone Antagonism of hypotensive effect\r\nDiazepam Enhanced hypotensive effect\r\nFluphenazine Enhanced hypotensive effect\r\n* Furosemide Enhanced hypotensive effect\r\nGlibenclamide Hypoglycaemic effect possibly enhanced\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\nHaloperidol Enhanced hypotensive effect\r\nHalothane Enhanced hypotensive effect\r\nHeparin Increased risk of hyperkalaemia\r\nHydralazine Enhanced hypotensive effect\r\n* Hydrochlorothiazide Enhanced hypotensive effect\r\nHydrocortisone Antagonism of hypotensive effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid; may adversely affect fetal and neonatal blood\r\npressure control and renal function; also possible\r\nskull defects and oligohydramnios; toxicity in animal\r\nstudies</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount probably too small to be harmful</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild Use with caution and monitor response; initial dose, 2.5 mg once daily\r\nif creatinine clearance less than 30 ml/minute; hyperkalaemia and other\r\nadverse effects more common</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Closely monitor liver function in patients with hepatic\r\nimpairment</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(592, 'Ephedrine', 'Ephedrine\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 30 mg (hydrochloride)/ml in 1-ml ampoule.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anaesthetics</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>prevention of hypotension during delivery under spinal or epidural\r\nanaesthesia</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>To prevent hypotension during delivery under spinal anaesthesia, by slow\r\nintravenous injection of solution containing 3 mg/ml, ADULT, 3–6 mg\r\n(maximum single dose, 9 mg), repeated if necessary every 3–4 minutes\r\n(maximum cumulative dose, 30 mg).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>anorexia, hypersalivation, nausea, vomiting; tachycardia (also\r\nin fetus), arrhythmias, anginal pain, vasoconstriction with hypertension,\r\nvasodilation with hypotension; dyspnoea; headache, dizziness, anxiety,\r\nrestlessness, confusion, tremor; difficulty in micturition; sweating, flushing;\r\nchanges in blood glucose concentration.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>hyperthyroidism; diabetes mellitus; ischaemic heart disease,\r\nhypertension; angle-closure glaucoma; renal impairment;\r\npregnancy and breastfeeding; interactions</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Chlorpromazine Antagonism of hypertensive effect\r\nDexamethasone Metabolism of dexamethasone accelerated\r\nFluphenazine Antagonism of hypertensive effect\r\nHaloperidol Antagonism of hypertensive effect\r\nOxytocin Risk of hypertension due to enhanced vasopressor effect of ephedrine</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Increased fetal heart rate reported with parenteral\r\nephedrine</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Irritability and disturbed sleep reported</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe Avoid; increased CNS toxicity</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(593, 'Ergocalciferol', 'Ergocalciferol (Vitamin D2)\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule or tablet: 1.25 mg (50 000 IU).\r\nOral liquid: 250 micrograms/ml (10 000 IU/ml).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Vitamins and minerals</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>NOTE. If there is no plain vitamin D tablet available for the treatment of simple\r\ndeficiency, combined calcium and ergocalciferol tablets may be used but the calcium is\r\nunnecessary.\r\nUses: prevention and treatment of simple vitamin D deficiency; treatment of\r\nvitamin D deficiency caused by malabsorption or chronic liver disease;\r\nhypocalcaemia associated with hypoparathyroidism.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Prevention of vitamin D deficiency, by mouth, ADULT and CHILD,\r\n10 micrograms (400 IU) daily.\r\nTreatment of vitamin D deficiency, by mouth, ADULT, 1.25 mg (50 000 IU) daily\r\nfor a limited period; CHILD, 75–125 micrograms (3000–5000 IU) daily.\r\nHypocalcaemia associated with hypoparathyroidism, by mouth, ADULT, 2.5 mg\r\n(100 000 IU) daily; CHILD, up to 1.5 mg (60 000 IU) daily.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>symptoms of overdosage include anorexia, lassitude, nausea\r\nand vomiting, diarrhoea, weight loss, polyuria, sweating, headache, thirst,\r\nvertigo, and raised concentrations of calcium and phosphate in plasma and\r\nurine; tissue calcification may occur if dose of 1.25 mg continued for several\r\nmonths.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>ensure correct dose in infants; monitor plasma calcium at weekly\r\nintervals in patients receiving high doses or those with renal impairment;\r\nnausea and vomiting may indicate overdose and hypercalcaemia; pregnancy\r\nand breastfeeding; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypercalcaemia; metastatic calcification.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Carbamazepine Ergocalciferol requirements possibly increased\r\nHydrochlorothiazide Increased risk of hypercalcaemia\r\nPhenobarbital Ergocalciferol requirements possibly increased\r\nPhenytoin Ergocalciferol requirements possibly increased</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>High doses teratogenic in animals but therapeutic\r\ndoses unlikely to be harmful</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Caution with high doses; may cause hypercalcaemia\r\nin infant</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(594, 'Ergometrine', 'Ergometrine\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 200 micrograms (hydrogen maleate) in 1-ml ampoule.\r\nErgometrine is subject to international control under the United Nations Convention\r\nagainst Illicit Traffic in Narcotic Drugs and Psychotropic Substances (1988).\r\nNOTE. Injection requires transport by “cold chain” and refrigerated storage.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Oxytocics and antioxytocics</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>prevention and treatment of postpartum and post-abortion haemorrhage\r\nin emergency situations and where oxytocin not available.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Prevention and treatment of postpartum haemorrhage, by intramuscular injection,\r\nADULT and ADOLESCENT, 200 micrograms when the anterior shoulder is\r\ndelivered or immediately after birth.\r\nExcessive uterine bleeding, by slow intravenous injection, ADULT and ADOLESCENT,\r\n250–500 micrograms when the anterior shoulder is delivered or immediately\r\nafter birth.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea, vomiting, headache, dizziness, tinnitus, abdominal\r\npain, chest pain, palpitations, dyspnoea, bradycardia, transient hypertension,\r\nvasoconstriction; stroke, myocardial infarction and pulmonary oedema also\r\nreported.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>cardiac disease, hypertension, hepatic impairment;\r\nrenal impairment; multiple pregnancy, porphyria; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>induction of labour; first and second stages of labour;\r\nvascular disease, severe cardiac disease especially angina pectoris; severe\r\nhypertension; severe renal and hepatic impairment; sepsis; eclampsia.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Dopamine Increased risk of ergotism\r\n* Efavirenz Increased risk of ergotism (avoid concomitant use)\r\nHalothane Reduced effect of ergometrine on parturient uterus</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe Manufacturer advises avoid</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid in severe liver disease</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(595, 'Erythromycin', 'Erythromycin\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule or tablet: 250 mg (as stearate or ethyl succinate).\r\nPowder for injection: 500 mg (as lactobionate) in vial.\r\nPowder for oral liquid: 125 mg (as stearate or ethyl succinate).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>Erythromycin is a macrolide; it has an antibacterial spectrum that is similar but not\r\nidentical to penicillin and is used as an alternative in penicillin-allergic patients. It is\r\neffective in respiratory infections, whooping cough, legionnaires’ disease, and campylobacter enteritis.\r\nUses: alternative to penicillin in hypersensitive patients; sinusitis; otitis externa;\r\noral infections; cholera; respiratory tract infections (including pneumonia\r\nand legionnaires’ disease); syphilis; chancroid; chlamydia; neonatal\r\nchlamydial conjunctivitis; non-gonococcal urethritis; prostatitis;\r\nlymphogranuloma venereum; campylobacter enteritis; relapsing fever; skin\r\ninfections; diphtheria; diphtheria and whooping cough prophylaxis; Q fever\r\nin children.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Infections due to sensitive organisms, by mouth, ADULT and CHILD over 8 years,\r\n250–500 mg every 6 hours, up to 4 g daily in severe infections; CHILD up to\r\n2 years, 125 mg every 6 hours, doubled in severe infections; CHILD\r\n2–8 years, 250 mg every 6 hours, doubled in severe infections.\r\nEarly syphilis, by mouth, ADULT, 500 mg 4 times daily for 14 days.\r\nLate latent syphilis, by mouth, ADULT, 500 mg 4 times daily for 30 days.\r\nUncomplicated genital chlamydia, non-gonococcal urethritis, chancroid, by\r\nmouth, ADULT, 500 mg 4 times daily for 7 days (14 days in lymphogranuloma venereum).\r\nSevere infections due to sensitive organisms, by intravenous infusion, ADULT and\r\nCHILD, 50 mg/kg daily by continuous infusion or in divided doses every 6 hours.\r\nPATIENT ADVICE. Tablets and capsules should be swallowed whole.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>gastrointestinal effects including nausea, vomiting, abdominal\r\ndiscomfort, diarrhoea, and rarely antibiotic-associated colitis; less frequently\r\nurticaria, rash, and other allergic reactions (rarely anaphylaxis); reversible\r\nhearing loss after large doses; cholestatic jaundice, infantile hypertrophic\r\npyloric stenosis, cardiac effects (including chest pain and arrhythmias),\r\nmyasthenia-like syndrome, erythema multiforme (Stevens-Johnson\r\nsyndrome), toxic epidermal necrolysis.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>hepatic impairment and renal impairment predisposition to QT interval prolongation (including\r\nelectrolyte disturbances and concomitant use of drugs that prolong the QT\r\ninterval); pregnancy; breastfeeding; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to erythromycin or other macrolides; porphyria.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Artemether + lumefantrine Manufacturer of artemether + lumefantrine advises avoid concomitant use\r\n* Carbamazepine Increased plasma carbamazepine concentration\r\n*Ciclosporin Increased plasma ciclosporin concentration (inhibition of metabolism of ciclosporin)\r\nContraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nDexamethasone Erythromycin possibly inhibits metabolism of dexamethasone\r\nDigoxin Increased plasma concentration of digoxin (increased risk of toxicity)\r\nHydrocortisone Erythromycin possibly inhibits metabolism of hydrocortisone\r\nPrednisolone Erythromycin possibly inhibits metabolism of prednisolone\r\n*Quinidine Increased risk of ventricular arrhythmias with parenteral erythromycin\r\nRitonavir Plasma concentration possibly increased by ritonavir\r\n* Simvastatin Increased risk of myopathy\r\nValproic acid Metabolism of valproic acid possibly inhibited (increased plasma concentration)\r\n*Verapamil Possible inhibition of metabolism of verapamil (increased risk of toxicity)\r\n* Vinblastine Increased toxicity of vinblastine (avoid concomitant use)\r\n* Warfarin Enhanced anticoagulant effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Only small amounts in milk—not known to be harmful</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe Maximum, 1.5 g daily (ototoxicity)</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>May cause idiosyncratic hepatotoxicity</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(596, 'Estradiol Cypionate +Medroxyprogesterone Acetate', 'Estradiol Cypionate +Medroxyprogesterone Acetate\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 5 mg + 25 mg</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Hormones, other endocrine medicines and contraceptives</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>parenteral combined progestogen-estrogen contraception (short-term).</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Contraception, by deep intramuscular injection, ADULT (female), estradiol cipionate,\r\n5 mg + medroxyprogesterone acetate, 25 mg, as a single dose within the\r\nfirst 7 days of the menstrual cycle, repeated monthly.\r\nADMINISTRATION. If the interval between injections is greater than 35 days,\r\nexclude pregnancy before administering the next injection and advise patient to use\r\nadditional contraceptive measures (for example, a condom) for 7 days after the\r\ninjection.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>menstrual irregularities (usually stabilize after initial months\r\nof use); less commonly weight gain, headache, and dizziness; abdominal\r\npain, acne, alopecia, asthenia, breast tenderness, decreased libido,\r\ndepression, enlarged abdomen, nausea, nervousness, and vulvovaginal\r\ndisorder reported.</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Combined oral contraceptives may inhibit\r\nlactation—use alternative method of contraception\r\nuntil weaning or for 6 months after birth;\r\nprogestogen-only contraceptives do not affect\r\nlactation (preferably start 6 weeks after birth or\r\nlater)</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(597, 'Ethambutol', 'Ethambutol\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 100-400 mg (hydrochloride).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>tuberculosis, in combination with other drugs</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Dose:\r\nTuberculosis (as part of a 6- or 8-month regimen; see introductory note and\r\ntables above), by mouth, ADULT, 15 mg/kg daily or 30 mg/kg 3 times weekly;\r\nCHILD, 20 mg/kg daily or 30 mg/kg 3 times a week.\r\nNOTE. Peak plasma concentration (measured 2–2.5 hours after dose) should be in the\r\nrange 2–6 mg/litre (7–22 micromol/litre); trough (pre-dose) concentration should be\r\nless than 1 mg/litre (4 micromol/litre).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>optic neuritis including reduced visual acuity and red/green\r\ncolour blindness (early changes usually reversible; prompt withdrawal may\r\nprevent blindness); peripheral neuritis (especially in legs); gout; rarely rash,\r\npruritus, urticaria, and thrombocytopenia.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>ocular examination recommended before and during treatment;\r\n renal impairment (reduce dose and monitor plasma\r\nethambutol concentration if creatinine clearance is less than 30 ml/minute;\r\nthe elderly; pregnancy; breastfeeding\r\nNOTE. Patients should report visual disturbances immediately and discontinue\r\ntreatment; children who are incapable of reporting symptomatic visual changes\r\naccurately should be given alternative therapy, as should, if possible, any patient who\r\ncannot understand warnings about visual adverse effects.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>optic neuritis; children under 5 years (unable to report\r\nsymptomatic visual disturbances); severe renal impairment.</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not known to be harmful</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount too small to be harmful</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild: Reduce dose; if creatinine clearance less than 30 ml/minute monitor plasma\r\nethambutol concentration; optic nerve damage</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(598, 'Ethanol', 'Ethanol\r\n\r\n<h5>Presentations</h5>\r\n<p>Solution: 70% (denatured).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Disinfectants and antiseptics</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>disinfection of skin prior to injection, venepuncture, or surgical\r\nprocedures.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Administration:\r\nDisinfection of skin, ADULT and CHILD, apply undiluted solution directly to the\r\nskin area.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>skin dryness and irritation with frequent application.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>flammable; avoid broken skin; patients have suffered severe\r\nburns when diathermy has been preceded by application of alcoholic skin\r\ndisinfectants.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(599, 'Ethinylestradiol +Levonorgestrel', 'Ethinylestradiol +Levonorgestrel\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 30 micrograms + 150 micrograms.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Hormones, other endocrine medicines and contraceptives</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>contraception; menstrual symptoms; endometriosis</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Contraception, by mouth, ADULT (female), 1 tablet daily for 21 days; subsequent\r\ncourses repeated after a 7-day interval (during which withdrawal bleeding\r\noccurs); by mouth, [everyday (ED) preparations], ADULT (female), 1 active\r\ntablet daily started on day 1 of the cycle; subsequent courses repeated\r\nwithout interval (withdrawal bleeding occurs when inactive tablets are being\r\ntaken).\r\nADMINISTRATION. Each tablet (“pill”) should be taken at approximately the\r\nsame time each day; if delayed by longer than 24 hours, contraceptive protection\r\nmay be lost (see note on Missed pill below).\r\nMISSED PILL. The critical time for loss of contraception protection is when a pill\r\nis omitted either at the beginning or at the end of a cycle (at this lengthens the pill free\r\ninterval). If a woman forgets to take a pill, she should take it as soon as she\r\nremembers, and take the next one at the normal time. If the delay with any pill is\r\n24 hours or longer (but especially with the first one in the packet), the pill may not\r\nwork. She should still continue taking the pill normally but be aware that she will not\r\nbe protected for the next 7 days and must therefore either not have sex or use\r\nanother method of contraception, such as a condom. If these 7 days run beyond the\r\nend of the packet, the next packet should be started at once, omitting the pill-free\r\ninterval (or, in the case of ED pills, omitting the 7 inactive tablets). Emergency\r\ncontraception is recommended if more than 2 combined oral contraceptive tablets\r\nare missed from the first 7 tablets in a packet.\r\nDIARRHOEA AND VOMITING. Vomiting within 2 hours of taking an oral\r\ncontraceptive or very severe diarrhoea can interfere with the absorption of the pill.\r\nAdditional precautions should be used during, and for 7 days after, recovery (see\r\nalso note on Missed pill above). If vomiting and diarrhoea occur during the last 7\r\npills, the next pill-free period should be omitted (or in the case of ED tablets, the\r\ninactive ones should be omitted).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea, vomiting, headache, breast tenderness, increase in\r\nbody weight, thrombosis, changes in libido, depression, chorea, skin\r\nreactions, chloasma, hypertension, impairment of liver function, “spotting”\r\nin early cycles, absence of withdrawal bleeding, irritation of contact lenses;\r\nrarely photosensitivity reactions and hepatic tumours; breast cancer (studies\r\nhave shown a small increase in risk of having breast cancer diagnosed in\r\nwomen using the combined oral contraceptive; this relative risk may be due\r\nto earlier diagnosis; cancers diagnosed early are more likely to be localized\r\nto the breast; risk appears to relate to the age at which the contraceptive is\r\nstopped rather than to the total duration of use; any increased risk\r\ndisappears gradually during the 10 years after stopping and there is no\r\nexcess risk after 10 years; a small increase in the risk of breast cancer should\r\nbe weighed against the protective effect against cancers of the ovary and\r\nendometrium).</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>risk factors for venous thromboembolism and arterial disease\r\n(see also note above); migraine without focal aura or controlled with 5HT1\r\nagonist; hyperprolactinaemia (seek specialist advice);\r\nsome types of hyperlipidaemia; gallbladder disease; history of severe\r\ndepression especially if induced by hormonal contraception; long-term\r\nimmobilization; sickle-cell disease\r\ninflammatory bowel disease including Crohn disease; interactions:\r\nMIGRAINE. Patients should report any increase in headache frequency or onset of\r\nfocal symptoms (discontinue immediately and refer urgently to neurology expert if focal\r\nneurological symptoms not typical of aura persist for more than 1 hour).\r\nTRAVEL. Women taking oral contraceptives may be at increased risk of deep-vein\r\nthrombosis during travel involving long periods of immobility (over 5 hours). The risk\r\nmay be reduced by appropriate exercise during the journey, and possibly by wearing\r\nelastic hosiery.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>use within 3 weeks of birth; breastfeeding (until weaning or\r\nfor the first 6 months after birth;); personal history of two or\r\nmore risk factors for venous thromboembolism and arterial disease;\r\n heart disease associated with pulmonary hypertension or\r\nrisk of embolism; migraine with typical focal aura; severe migraine without\r\naura but regularly lasting over 72 hours duration despite treatment or\r\nmigraine treated with ergot derivatives (see also note below); history of subacute\r\nbacterial endocarditis; ischaemic cerebrovascular disease; liver disease\r\nincluding disorders of hepatic secretion such as Dubin-Johnson and Rotor\r\nsyndromes, infectious hepatitis (unless liver function is restored to normal);\r\nporphyria; systemic lupus erythematosus; liver adenoma; history of\r\nhaemolytic uraemic syndrome; gallstones; estrogen-dependent neoplasms;\r\nneoplasms of breast or genital tract; undiagnosed vaginal bleeding; history\r\nduring pregnancy of pruritus, chorea, deteriorating otosclerosis, cholestatic\r\njaundice, or pemphigoid gestationis; after evacuation of hydatidiform mole\r\n(unless urine and plasma gonadotrophin values are restored to normal).</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>NOTE. Interactions of combined (estrogen and progestogen) oral contraceptives may\r\nalso apply to combined parenteral contraceptives.\r\nAcetazolamide Antagonism of diuretic effect by estrogens\r\nAmiloride Antagonism of diuretic effect by estrogens\r\nAmitriptyline Antagonism of antidepressant effect by estrogens but\r\nadverse effects of amitriptyline possibly increased due to increased plasma concentration of amitriptyline\r\nAmlodipine Antagonism of hypotensive effect by estrogens\r\nAmoxicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nAmpicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nAtenolol Antagonism of hypotensive effect by estrogens\r\nAzithromycin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nBenzylpenicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Carbamazepine Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nCefixime Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nCeftazidime Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nCeftriaxone Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Ciclosporin Plasma ciclosporin concentration increased by progestogens and possibly increased by estrogens\r\nCiprofloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nClomipramine Antagonism of antidepressant effect by estrogens but\r\nadverse effects of clomipramine possibly increased due to increased plasma concentration of clomipramine\r\nDexamethasone Oral contraceptives containing estrogens increase plasma concentration of dexamethasone\r\nDoxycycline Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nEfavirenz Efficacy of estrogen-containing oral contraceptives possibly reduced\r\nEnalapril Antagonism of hypotensive effect by estrogens\r\nErythromycin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nFluconazole Anecdotal reports of failure of estrogen-containing contraceptives\r\nFurosemide Antagonism of diuretic effect by estrogens\r\nGlibenclamide Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nGlyceryl trinitrate Antagonism of hypotensive effect by estrogens\r\n* Griseofulvin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nHydralazine Antagonism of hypotensive effect by estrogens\r\nHydrochlorothiazide Antagonism of diuretic effect by estrogens\r\nHydrocortisone Oral contraceptives containing estrogens increase plasma concentration of hydrocortisone\r\nImipenem + cilastatin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nInsulins Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nIsosorbide dinitrate Antagonism of hypotensive effect by estrogens\r\nLevofloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nMetformin Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nMethyldopa Antagonism of hypotensive effect by estrogens\r\nMetronidazole Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Nelfinavir Accelerated metabolism of estrogens (reduced contraceptive\r\neffect); nelfinavir possibly reduces contraceptive effect of progestogens\r\n* Nevirapine Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nNifedipine Antagonism of hypotensive effect by estrogens\r\nOfloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Phenobarbital Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nPhenoxymethylpenicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Phenytoin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nPrednisolone Oral contraceptives containing estrogens increase plasma concentration of prednisolone\r\nPropranolol Antagonism of hypotensive effect by estrogens\r\n* Rifampicin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\n* Ritonavir Accelerated metabolism of estrogens (reduced contraceptive effect)\r\nSodium nitroprusside Antagonism of hypotensive effect by estrogens\r\nSpironolactone Antagonism of diuretic effect by estrogens\r\nVerapamil Antagonism of hypotensive effect by estrogens\r\n* Warfarin Antagonism of anticoagulant effect by estrogens and progestogens</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Epidemiological evidence suggests no harmful effects on fetus</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Combined oral contraceptives may inhibit\r\nlactation—use alternative method of contraception\r\nuntil weaning or for 6 months after birth;\r\nprogestogen-only contraceptives do not affect\r\nlactation (preferably start 6 weeks after birth or\r\nlater)</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid in active liver disease and if history of pruritus or\r\ncholestasis during pregnancy</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(600, 'Ethinylestradiol +Norethisterone', 'Ethinylestradiol +Norethisterone\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 35 micrograms + 1 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>contraception; menstrual symptoms; endometriosis</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Contraception, by mouth, ADULT (female), 1 tablet daily for 21 days; subsequent\r\ncourses repeated after a 7-day interval (during which withdrawal bleeding\r\noccurs); by mouth, [everyday (ED) preparations], ADULT (female), 1 active\r\ntablet daily started on day 1 of the cycle; subsequent courses repeated\r\nwithout interval (withdrawal bleeding occurs when inactive tablets are being taken).\r\nADMINISTRATION. Each tablet (“pill”) should be taken at approximately the\r\nsame time each day; if delayed by longer than 24 hours, contraceptive protection\r\nmay be lost (see note on Missed pill below).\r\nMISSED PILL. The critical time for loss of contraception protection is when a pill\r\nis omitted either at the beginning or at the end of a cycle (at this lengthens the pill free\r\ninterval). If a woman forgets to take a pill, she should take it as soon as she\r\nremembers, and take the next one at the normal time. If the delay with any pill is\r\n24 hours or longer (but especially with the first one in the packet), the pill may not\r\nwork. She should still continue taking the pill normally but be aware that she will not\r\nbe protected for the next 7 days and must therefore either not have sex or use\r\nanother method of contraception, such as a condom. If these 7 days run beyond the\r\nend of the packet, the next packet should be started at once, omitting the pill-free\r\ninterval (or, in the case of ED pills, omitting the 7 inactive tablets). Emergency\r\ncontraception is recommended if more than 2 combined oral contraceptive tablets\r\nare missed from the first 7 tablets in a packet.\r\nDIARRHOEA AND VOMITING. Vomiting within 2 hours of taking an oral\r\ncontraceptive or very severe diarrhoea can interfere with the absorption of the pill.\r\nAdditional precautions should be used during, and for 7 days after, recovery (see\r\nalso note on Missed pill above). If vomiting and diarrhoea occur during the last 7\r\npills, the next pill-free period should be omitted (or in the case of ED tablets, the\r\ninactive ones should be omitted).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea, vomiting, headache, breast tenderness, increase in\r\nbody weight, thrombosis, changes in libido, depression, chorea, skin\r\nreactions, chloasma, hypertension, impairment of liver function, “spotting”\r\nin early cycles, absence of withdrawal bleeding, irritation of contact lenses;\r\nrarely photosensitivity reactions and hepatic tumours; breast cancer (studies\r\nhave shown a small increase in risk of having breast cancer diagnosed in\r\nwomen using the combined oral contraceptive; this relative risk may be due\r\nto earlier diagnosis; cancers diagnosed early are more likely to be localized\r\nto the breast; risk appears to relate to the age at which the contraceptive is\r\nstopped rather than to the total duration of use; any increased risk\r\ndisappears gradually during the 10 years after stopping and there is no\r\nexcess risk after 10 years; a small increase in the risk of breast cancer should\r\nbe weighed against the protective effect against cancers of the ovary and\r\nendometrium).</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>risk factors for venous thromboembolism and arterial disease\r\n(see also note above); migraine without focal aura or controlled with 5HT1\r\nagonist; hyperprolactinaemia (seek specialist advice);\r\nsome types of hyperlipidaemia; gallbladder disease; history of severe\r\ndepression especially if induced by hormonal contraception; long-term\r\nimmobilization (see also note on Travel below); sickle-cell disease;\r\ninflammatory bowel disease including Crohn disease; interactions.\r\nMIGRAINE. Patients should report any increase in headache frequency or onset of\r\nfocal symptoms (discontinue immediately and refer urgently to neurology expert if focal\r\nneurological symptoms not typical of aura persist for more than 1 hour).\r\nTRAVEL. Women taking oral contraceptives may be at increased risk of deep-vein\r\nthrombosis during travel involving long periods of immobility (over 5 hours). The risk\r\nmay be reduced by appropriate exercise during the journey, and possibly by wearing\r\nelastic hosiery.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>use within 3 weeks of birth; breastfeeding (until weaning or\r\nfor the first 6 months after birth;); personal history of two or\r\nmore risk factors for venous thromboembolism and arterial disease;\r\n heart disease associated with pulmonary hypertension or\r\nrisk of embolism; migraine with typical focal aura; severe migraine without\r\naura but regularly lasting over 72 hours duration despite treatment or\r\nmigraine treated with ergot derivatives; history of subacute\r\nbacterial endocarditis; ischaemic cerebrovascular disease; liver disease\r\nincluding disorders of hepatic secretion such as Dubin-Johnson and Rotor\r\nsyndromes, infectious hepatitis (unless liver function is restored to normal);\r\nporphyria; systemic lupus erythematosus; liver adenoma; history of\r\nhaemolytic uraemic syndrome; gallstones; estrogen-dependent neoplasms;\r\nneoplasms of breast or genital tract; undiagnosed vaginal bleeding; history\r\nduring pregnancy of pruritus, chorea, deteriorating otosclerosis, cholestatic\r\njaundice, or pemphigoid gestationis; after evacuation of hydatidiform mole\r\n(unless urine and plasma gonadotrophin values are restored to normal).</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>NOTE. Interactions of combined (estrogen and progestogen) oral contraceptives may\r\nalso apply to combined parenteral contraceptives.\r\nAcetazolamide Antagonism of diuretic effect by estrogens\r\nAmiloride Antagonism of diuretic effect by estrogens\r\nAmitriptyline Antagonism of antidepressant effect by estrogens but\r\nadverse effects of amitriptyline possibly increased due to increased plasma concentration of amitriptyline\r\nAmlodipine Antagonism of hypotensive effect by estrogens\r\nAmoxicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nAmpicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nAtenolol Antagonism of hypotensive effect by estrogens\r\nAzithromycin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nBenzylpenicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Carbamazepine Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nCefixime Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nCeftazidime Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nCeftriaxone Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Ciclosporin Plasma ciclosporin concentration increased by progestogens and possibly increased by estrogens\r\nCiprofloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nClomipramine Antagonism of antidepressant effect by estrogens but\r\nadverse effects of clomipramine possibly increased due to increased plasma concentration of clomipramine\r\nDexamethasone Oral contraceptives containing estrogens increase plasma concentration of dexamethasone\r\nDoxycycline Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nEfavirenz Efficacy of estrogen-containing oral contraceptives possibly reduced\r\nEnalapril Antagonism of hypotensive effect by estrogens\r\nErythromycin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nFluconazole Anecdotal reports of failure of estrogen-containing contraceptives\r\nFurosemide Antagonism of diuretic effect by estrogens\r\nGlibenclamide Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nGlyceryl trinitrate Antagonism of hypotensive effect by estrogens\r\n* Griseofulvin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nHydralazine Antagonism of hypotensive effect by estrogens\r\nHydrochlorothiazide Antagonism of diuretic effect by estrogens\r\nHydrocortisone Oral contraceptives containing estrogens increase plasma concentration of hydrocortisone\r\nImipenem + cilastatin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nInsulins Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nIsosorbide dinitrate Antagonism of hypotensive effect by estrogens\r\nLevofloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nMetformin Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nMethyldopa Antagonism of hypotensive effect by estrogens\r\nMetronidazole Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Nelfinavir Accelerated metabolism of estrogens (reduced contraceptive\r\neffect); nelfinavir possibly reduces contraceptive effect of progestogens\r\n* Nevirapine Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nNifedipine Antagonism of hypotensive effect by estrogens\r\nOfloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Phenobarbital Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nPhenoxymethylpenicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Phenytoin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nPrednisolone Oral contraceptives containing estrogens increase plasma concentration of prednisolone\r\nPropranolol Antagonism of hypotensive effect by estrogens\r\n* Rifampicin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\n* Ritonavir Accelerated metabolism of estrogens (reduced contraceptive effect)\r\nSodium nitroprusside Antagonism of hypotensive effect by estrogens\r\nSpironolactone Antagonism of diuretic effect by estrogens\r\nVerapamil Antagonism of hypotensive effect by estrogens\r\n* Warfarin Antagonism of anticoagulant effect by estrogens and progestogens</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Epidemiological evidence suggests no harmful effects on fetus</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Combined oral contraceptives may inhibit\r\nlactation—use alternative method of contraception\r\nuntil weaning or for 6 months after birth;\r\nprogestogen-only contraceptives do not affect\r\nlactation (preferably start 6 weeks after birth or\r\nlater)</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid in active liver disease and if history of pruritus or\r\ncholestasis during pregnancy</p>', '2013-11-21 22:03:04', 1, NULL, 1),
(601, 'Ethinylestradiol', 'Ethinylestradiol\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 10 micrograms; 50 micrograms.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Hormones, other endocrine medicines and contraceptives</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>hormone replacement for menopausal symptoms (in combination with a\r\nprogestogen, if necessary); osteoporosis prophylaxis; palliation in prostate\r\ncancer; contraception in combination with a progestogen</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Hormone replacement, by mouth, ADULT (female), 10–20 micrograms daily\r\n(with a progestogen if necessary; see introductory note above).\r\nPalliation in prostate cancer, by mouth, ADULT, 0.15–1.5 mg daily.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea and vomiting, abdominal cramps and bloating, weight\r\nincrease; breast enlargement and tenderness; premenstrual-like syndrome;\r\nsodium and fluid retention; thromboembolism (see also introductory note\r\nabove); altered blood lipids (may lead to pancreatitis); cholestatic jaundice,\r\nglucose intolerance; rash and chloasma; changes in libido; depression,\r\nheadache, migraine, dizziness, leg cramps (rule out venous thrombosis);\r\nvaginal candidiasis; contact lenses may irritate.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>pregnancy (Appendix 2); estrogen-dependent cancer; active\r\nthrombophlebitis or thromboembolic disorders or history of recent venous\r\nthromboembolism (unless already on anticoagulant therapy); undiagnosed\r\nvaginal bleeding; breastfeeding (Appendix 3); liver disease, Dubin-Johnson\r\nand Rotor syndromes (where liver function tests have failed to return to\r\nnormal, or monitor closely).</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>NOTE. Interactions of combined (estrogen and progestogen) oral contraceptives may\r\nalso apply to combined parenteral contraceptives.\r\nAcetazolamide Antagonism of diuretic effect by estrogens\r\nAmiloride Antagonism of diuretic effect by estrogens\r\nAmitriptyline Antagonism of antidepressant effect by estrogens but\r\nadverse effects of amitriptyline possibly increased due to increased plasma concentration of amitriptyline\r\nAmlodipine Antagonism of hypotensive effect by estrogens\r\nAmoxicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nAmpicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nAtenolol Antagonism of hypotensive effect by estrogens\r\nAzithromycin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nBenzylpenicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Carbamazepine Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nCefixime Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nCeftazidime Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nCeftriaxone Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Ciclosporin Plasma ciclosporin concentration increased by progestogens and possibly increased by estrogens\r\nCiprofloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nClomipramine Antagonism of antidepressant effect by estrogens but\r\nadverse effects of clomipramine possibly increased due to increased plasma concentration of clomipramine\r\nDexamethasone Oral contraceptives containing estrogens increase plasma concentration of dexamethasone\r\nDoxycycline Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nEfavirenz Efficacy of estrogen-containing oral contraceptives possibly reduced\r\nEnalapril Antagonism of hypotensive effect by estrogens\r\nErythromycin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nFluconazole Anecdotal reports of failure of estrogen-containing contraceptives\r\nFurosemide Antagonism of diuretic effect by estrogens\r\nGlibenclamide Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nGlyceryl trinitrate Antagonism of hypotensive effect by estrogens\r\n* Griseofulvin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nHydralazine Antagonism of hypotensive effect by estrogens\r\nHydrochlorothiazide Antagonism of diuretic effect by estrogens\r\nHydrocortisone Oral contraceptives containing estrogens increase plasma concentration of hydrocortisone\r\nImipenem + cilastatin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nInsulins Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nIsosorbide dinitrate Antagonism of hypotensive effect by estrogens\r\nLevofloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\nMetformin Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nMethyldopa Antagonism of hypotensive effect by estrogens\r\nMetronidazole Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Nelfinavir Accelerated metabolism of estrogens (reduced contraceptive\r\neffect); nelfinavir possibly reduces contraceptive effect of progestogens\r\n* Nevirapine Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nNifedipine Antagonism of hypotensive effect by estrogens\r\nOfloxacin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Phenobarbital Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nPhenoxymethylpenicillin Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n* Phenytoin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\nPrednisolone Oral contraceptives containing estrogens increase plasma concentration of prednisolone\r\nPropranolol Antagonism of hypotensive effect by estrogens\r\n* Rifampicin Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\n* Ritonavir Accelerated metabolism of estrogens (reduced contraceptive effect)\r\nSodium nitroprusside Antagonism of hypotensive effect by estrogens\r\nSpironolactone Antagonism of diuretic effect by estrogens\r\nVerapamil Antagonism of hypotensive effect by estrogens\r\n* Warfarin Antagonism of anticoagulant effect by estrogens and progestogens</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Epidemiological evidence suggests no harmful effects\r\non fetus</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>May inhibit lactation; use alternative method of\r\ncontraception\r\nCombined oral contraceptives may inhibit\r\nlactation—use alternative method of contraception\r\nuntil weaning or for 6 months after birth;\r\nprogestogen-only contraceptives do not affect\r\nlactation (preferably start 6 weeks after birth or\r\nlater)</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Avoid</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid in active liver disease and if history of pruritus or\r\ncholestasis during pregnancy</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(602, 'Ethionamide', 'Ethionamide\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 125 mg; 250 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>Ethionamide is a complementary list medicine for the treatment of multidrug-resistant\r\ntuberculosis which should be used in specialized centres adhering to WHO standards\r\nfor tuberculosis control.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(603, 'Ethosuximide', 'Ethosuximide\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 250 mg.\r\nOral liquid: 250 mg/5 ml.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anticonvulsants/antiepileptics</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>absence seizures.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Absence seizures, by mouth, ADULT and CHILD over 6 years, initially 500 mg\r\ndaily, increased by 250 mg at intervals of 4–7 days to a usual maintenance\r\ndose of 1–1.5 g daily (in some cases, up to 2 g daily may be needed); CHILD\r\nunder 6 years, initially 250 mg daily, increased gradually to usual\r\nmaintenance dose of 20 mg/kg daily.\r\nPATIENT ADVICE. Daily doses of 1 g and above should be taken as 2 or more\r\ndivided doses.\r\nNOTE. Plasma concentration for optimum response, 40–100 mg/litre\r\n(300–700 micromol/litre).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>gastrointestinal disturbances including anorexia, hiccups,\r\nnausea and vomiting, and epigastric pain (particularly during initial\r\ntreatment); weight loss, drowsiness, dizziness, ataxia, headache, depression,\r\nmild euphoria; rarely rash including Stevens-Johnson syndrome (erythema\r\nmultiforme), systemic lupus erythematosus, disturbances of liver and renal\r\nfunction (see Precautions), and haematological disorders (including\r\nleukopenia, agranulocytosis, aplastic anaemia, thrombocytopenia,\r\npancytopenia); gum hyperplasia, swelling of tongue, irritability, hyperactivity,\r\nsleep disturbances, night terrors, aggressiveness, psychosis, increased libido,\r\nmyopia, and vaginal bleeding also reported.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>hepatic or renal impairment (blood counts and hepatic and renal\r\nfunction tests recommended); pregnancy and\r\nbreastfeeding; avoid sudden withdrawal ; porphyria; interactions: \r\nBLOOD DISORDERS. Patients or their carers should be told how to recognize signs\r\nof blood disorders, and advised to seek immediate medical attention if symptoms such\r\nas fever, sore throat, mouth ulcers, bruising or bleeding develop.\r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example, operating\r\nmachinery or driving; see also note above.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Amitriptyline Antagonism of anticonvulsant effect (convulsive threshold\r\nlowered)\r\nCarbamazepine May be enhanced toxicity without corresponding increase in\r\nantiepileptic effect; possibly reduced plasma concentration of ethosuximide\r\nChloroquine Possibly increased risk of convulsions\r\n*Chlorpromazine Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n*Clomipramine Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n*Fluphenazine Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Haloperidol Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n*Isoniazid Metabolism of ethosuximide inhibited (increased plasma\r\nethosuximide concentration and risk of toxicity)\r\n* Mefloquine Antagonism of anticonvulsant effect\r\nPhenobarbital May be enhanced toxicity without corresponding increase in\r\nantiepileptic effect; possibly reduced plasma concentration of ethosuximide</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>First trimester: May possibly be teratogenic; risk of\r\nteratogenicity greater if more than one antiepileptic\r\nused</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Significant amount in milk; continue breastfeeding;\r\nadverse effects possible; monitor infant for\r\ndrowsiness</p>\r\n\r\n\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(604, 'Etoposide', 'Etoposide\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 100 mg.\r\nInjection: 20 mg/ml in 5-ml ampoule.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>refractory testicular tumours; lung cancer.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>consult specialist literature; renal impairment; interactions\r\nNOTE. Irritant to tissues.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Ciclosporin Possibly increased plasma concentration of etoposide(increased risk of toxicity)\r\nPhenobarbital Possibly reduced plasma concentration of etoposide\r\nPhenytoin Possibly reduced absorption of phenytoin and possibly reduced plasma concentration of etoposide\r\nVaccine, Live Avoid use of live vaccines with etoposide (impairment of immune response)\r\n* Warfarin Possibly enhanced anticoagulant effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (teratogenic in animal studies)</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Breastfeeding contraindicated</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Consider dose reduction</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid in severe hepatic impairment</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(605, 'Factor Ix Complex', 'Factor Ix Complex Concentrate\r\n\r\n<h5>Presentations</h5>\r\n<p>Dried.\r\nPlasma fractions should comply with the WHO Requirements for the Collection,\r\nProcessing and Quality Control of Blood, Blood Components and Plasma Derivatives\r\n(Revised 1992). WHO Technical Report Series, No. 840, 1994, Annex 2.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Blood products and plasma substitutes</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>replacement therapy for factor IX deficiency in haemophilia B; bleeding\r\ndue to deficiencies of factors II, VII, or X.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Haemophilia B, by slow intravenous infusion, ADULT and CHILD, according to\r\npatient’s needs and specific preparation used.\r\nTreatment of bleeding due to deficiencies in factor II, VII or X as well as IX,\r\nby slow intravenous infusion, ADULT and CHILD, according to patient’s needs.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>allergic reactions including chills, and fever</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>risk of thrombosis (probably less risk with highly purified preparations).</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>disseminated intravascular coagulation.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(606, 'Factor Viii Concentrate', 'Factor Viii Concentrate \r\n\r\n<h5>Presentations</h5>\r\n<p>Dried.\r\nPlasma fractions should comply with the WHO Requirements for the Collection,\r\nProcessing and Quality Control of Blood, Blood Components and Plasma Derivatives\r\n(Revised 1992). WHO Technical Report Series, No. 840, 1994, Annex 2.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Blood products and plasma substitutes</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>control of haemorrhage in haemophilia A</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Haemophilia A, by slow intravenous infusion, ADULT and CHILD, according to\r\npatient’s needs.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>allergic reactions including chills, fever</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>intravascular haemolysis after large or frequently repeated doses\r\nin patients with blood groups A, B, or AB (less likely with high potency,\r\nhighly purified concentrates).</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(607, 'Ferrous Salt +Folic Acid', 'Ferrous Salt +Folic Acid\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: equivalent to 60 mg iron + 400 micrograms folic acid.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Medicines affecting the blood</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>prevention of iron and folic acid deficiencies in pregnancy</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Severe anaemia, by mouth, ADULT, elemental iron, 120 mg + folic acid\r\n400 micrograms daily for 3 months; CHILD under 2 years, elemental iron,\r\n25 mg + folic acid 100–400 micrograms daily for 3 months; CHILD\r\n2–12 years, elemental iron 60 mg + folic acid, 400 micrograms daily for 3 months.\r\nPrevention of iron and folate deficiencies in pregnancy, by mouth, ADULT,\r\nelemental iron, 100 mg + folic acid, 350–400 micrograms daily throughout\r\npregnancy.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>constipation, diarrhoea, dark stools, nausea, epigastric pain,\r\ngastrointestinal irritation; long-term or excessive administration may cause\r\nhaemosiderosis</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Calcium salts Reduced absorption of oral ferrous salts\r\nCiprofloxacin Absorption of ciprofloxacin reduced by oral ferrous salts\r\n* Dimercaprol Avoid concomitant use\r\nDoxycycline Absorption of oral ferrous salts reduced by doxycycline;\r\nabsorption of doxycycline reduced by oral ferrous salts\r\nLevodopa Absorption of levodopa may be reduced by oral ferrous salts\r\nLevofloxacin Absorption of levofloxacin reduced by oral ferrous salts\r\nLevothyroxine Absorption of levothyroxine reduced by oral ferrous salts (give at least 2 hours apart)\r\nMethyldopa Oral ferrous salts reduce hypotensive effect of methyldopa\r\nOfloxacin Absorption of ofloxacin reduced by oral ferrous salts\r\nPenicillamine Oral ferrous salts reduce absorption of penicillamine\r\nZinc sulfate Absorption of zinc and of oral ferrous salts reduced\r\nPhenobarbital Plasma concentration of phenobarbital possibly reduced\r\nPhenytoin Plasma phenytoin concentration possibly reduced\r\nSulfasalazine Possibly reduced absorption of folic acid</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(608, 'Ferrous Salt', 'Ferrous Salt\r\n\r\n<h5>Presentations</h5>\r\n<p>Oral liquid: equivalent to 25 mg iron (as sulfate)/ml.\r\nTablet: equivalent to 60 mg iron\r\nferrous fumarate 210 mg (68 mg iron);\r\n? ferrous gluconate 300 mg (35 mg iron);\r\n? ferrous succinate 100 mg (35 mg iron);\r\n? ferrous sulfate 300 mg (60 mg iron);\r\n? dried ferrous sulfate 200 mg (65 mg iron).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Medicines affecting the blood</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>iron-deficiency anaemia.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Iron-deficiency anaemia, by mouth, ADULT, elemental iron, 100–200 mg daily in\r\ndivided doses.\r\nPrevention of iron-deficiency anaemia (in those at particular risk), by mouth,\r\nADULT (woman), elemental iron 60 mg daily; CHILD under 5 years,\r\nelemental iron, 2 mg/kg daily (maximum, 30 mg), CHILD over 5 years,\r\nelemental iron, 30 mg daily; in women and children over 5 years, folic acid\r\nmay also be given.\r\nPATIENT ADVICE. Although iron preparations are best absorbed on an empty\r\nstomach, they may be taken after food to reduce gastrointestinal adverse effects; they\r\nmay discolour stools. Liquid preparations containing iron salts should be well diluted\r\nwith water (and if possible swallowed through a drinking straw to prevent discoloration\r\nof the teeth).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>constipation, diarrhoea, dark stools, nausea, epigastric pain,\r\ngastrointestinal irritation; long-term or excessive administration may cause\r\nhaemosiderosis.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>should not be administered for longer than 6 months; pregnancy;\r\npeptic ulcer, regional enteritis, ulcerative colitis, intestinal strictures,\r\ndiverticula; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>haemosiderosis, haemochromatosis; any form of anaemia\r\nnot caused by iron deficiency; patients receiving repeated blood\r\ntransfusions; parenteral iron therapy.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Calcium salts Reduced absorption of oral ferrous salts\r\nCiprofloxacin Absorption of ciprofloxacin reduced by oral ferrous salts\r\n* Dimercaprol Avoid concomitant use\r\nDoxycycline Absorption of oral ferrous salts reduced by doxycycline;\r\nabsorption of doxycycline reduced by oral ferrous salts\r\nLevodopa Absorption of levodopa may be reduced by oral ferrous salts\r\nLevofloxacin Absorption of levofloxacin reduced by oral ferrous salts\r\nLevothyroxine Absorption of levothyroxine reduced by oral ferrous salts (give at least 2 hours apart)\r\nMethyldopa Oral ferrous salts reduce hypotensive effect of methyldopa\r\nOfloxacin Absorption of ofloxacin reduced by oral ferrous salts\r\nPenicillamine Oral ferrous salts reduce absorption of penicillamine\r\nZinc sulfate Absorption of zinc and of oral ferrous salts reduced</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(609, 'Fluconazole', 'Fluconazole\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 50 mg.\r\nInjection: 2 mg/ml in vial.\r\nOral liquid: 50 mg/5 ml.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>systemic mycoses including histoplasmosis, non-meningeal\r\ncoccidioidomycosis, paracoccidioidomycosis, and blastomycosis; treatment\r\nand, in AIDS and other immunosuppressed patients, prophylaxis of\r\ncryptococcal meningitis; prevention of fungal infections in\r\nimmunocompromised patients; oesophageal and oropharyngeal candidosis,\r\nvaginal candidosis and systemic candidosis; ringworm where topical\r\ntreatment has failed).</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Systemic mycoses, by mouth or by intravenous infusion, ADULT, 200 mg daily for at\r\nleast 6 months; CHILD over 2 years, 3–6 mg/kg daily for at least 6 months.\r\nCryptococcal meningitis (following amphotericin B induction therapy), by\r\nmouth or by intravenous infusion, ADULT, 800 mg daily for 2 days, followed by\r\n400 mg daily for 8 weeks; CHILD, 6–12 mg/kg daily for 8 weeks (every 72\r\nhours in NEONATE up to 2 weeks old, or every 48 hours in NEONATE 2–4 weeks old).\r\nPrevention of relapse of cryptococcal meningitis in AIDS patients after\r\ncompletion of primary therapy, by mouth, ADULT, 200 mg daily or by\r\nintravenous infusion, ADULT, 100–200 mg daily.\r\nSystemic candidosis (in patients unable to tolerate amphotericin B), by mouth or\r\nby intravenous infusion, ADULT, 400 mg as an initial dose, then 200 mg daily for\r\nat least 4 weeks; CHILD, 6–12 mg/kg daily (every 72 hours in NEONATE up\r\nto 2 weeks old, or every 48 hours in NEONATE 2–4 weeks old).\r\nOesophageal and oropharyngeal candidosis, by mouth or by intravenous infusion,\r\nADULT, 200 mg as an initial dose, then 100 mg daily until symptoms\r\nresolved; up to 400 mg daily in very resistant infections; CHILD, 3–6 mg/kg\r\non the first day, followed by 3 mg/kg daily (every 72 hours in NEONATE up\r\nto 2 weeks old, or every 48 hours in NEONATE 2–4 weeks old).\r\nVaginal candidosis, by mouth, ADULT, 150 mg as a single dose.\r\nPrevention of fungal infections in immunocompromised patients, by mouth or\r\nby intravenous infusion, ADULT, 50–400 mg daily adjusted according to risk;\r\ncommence treatment before anticipated onset of neutropenia and continue\r\nfor 7 days after neutrophil count is in desirable range; CHILD, 3–12 mg/kg\r\ndaily according to extent and duration of neutropenia (every 72 hours in\r\nNEONATE up to 2 weeks old, or every 48 hours in NEONATE 2–4 weeks old);\r\nmaximum, 400 mg daily.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>nausea, vomiting, abdominal pain, dyspepsia, flatulence,\r\ndiarrhoea; headache, taste disturbances, hepatic disorders, dizziness,\r\nseizures, alopecia, pruritus; rash (withdraw treatment); angioedema,\r\nanaphylaxis, bullous lesions, toxic epidermal necrolysis, and erythema\r\nmultiforme (Stevens-Johnson syndrome) reported (severe skin reactions\r\nmore common in AIDS); hyperlipidaemia, leukopenia, thrombocytopenia,\r\nhypokalaemia.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>renal impairment; pregnancy  and breastfeeding; monitor liver function (discontinue if signs or\r\nsymptoms of hepatic disease, especially hepatic necrosis;);\r\nsusceptibility to QT interval prolongation; interactions</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Amphotericin B Possible antagonism of effect of amphotericin B\r\n*Artemether +lumefantrine\r\nManufacturer of artemether + lumefantrine advises avoid concomitant use\r\n*Ciclosporin Metabolism of ciclosporin inhibited (increased plasma concentration)\r\nContraceptives, Oral Anecdotal reports of failure of estrogen-containing contraceptives\r\n* Glibenclamide Plasma concentration of glibenclamide increased\r\nHydrochlorothiazide Plasma concentration of fluconazole increased\r\n* Nevirapine Increased plasma concentration of nevirapine\r\n*Phenytoin Plasma concentration of phenytoin increased (consider reducing dose of phenytoin)\r\n* Rifampicin Accelerated metabolism of fluconazole (reduced plasma concentration)\r\nRitonavir Plasma concentration of fluconazole increased by ritonavir\r\nSaquinavir Plasma concentration of saquinavir possibly increased\r\n* Warfarin Enhanced anticoagulant effect\r\n*Zidovudine Increased plasma concentration of zidovudine (increased risk of toxicity)</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (multiple congenital abnormalities reported\r\nwith long-term high doses)</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Present in milk; safe in usual dosage; monitor\r\ninfant</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild to moderate Usual initial dose then halve subsequent doses</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Toxicity with related drugs</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(610, 'Flucytosine', 'Flucytosine\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule: 250 mg.\r\nInfusion: 2.5 g in 250 ml.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>adjunct to amphotericin B (or fluconazole) in cryptococcal meningitis;\r\nadjunct to amphotericin B in systemic candidosis</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Systemic candidosis and cryptococcosis, by intravenous infusion (over 20–\r\n40 minutes), ADULT and CHILD, 200 mg/kg daily in 4 divided doses usually\r\nfor no more than 7 days (at least 4 months in cryptococcal meningitis);\r\nreduce dose to 100–150 mg/kg daily in 4 divided doses if organisms are\r\nextremely sensitive.\r\nSystemic candidosis, initial treatment or after intravenous therapy, by mouth,\r\nADULT and CHILD, 50–150 mg/kg daily in 4 divided doses.\r\nNOTE. For plasma concentration monitoring blood should be taken shortly before the\r\nstart of the next infusion (or before the next dose by mouth); plasma concentration for\r\noptimum response, 25–50 mg/litre; plasma concentration should not be allowed to\r\nexceed 80 mg/litre.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>rash, nausea, vomiting and diarrhoea; alterations in liver\r\nfunction tests; less frequently, confusion, hallucinations, convulsions,\r\nheadache, sedation, and vertigo; blood disorders including leukopenia,\r\npotentially fatal thrombocytopenia, and aplastic anaemia.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>the elderly; renal impairment; concomitant use with\r\namphotericin B (both nephrotoxic); liver and kidney function tests and\r\nblood counts required (monitor weekly in renal impairment or in blood\r\ndisorders); pregnancy and breastfeeding ;\r\ninteractions</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Amphotericin B Renal excretion of flucytosine decreased and cellular uptake\r\nincreased (flucytosine toxicity possibly increased)\r\nCytarabine Plasma flucytosine concentration possibly reduced</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Teratogenic in animal studies; manufacturer advises\r\nuse only if potential benefit outweighs risk</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Manufacturer advises avoid</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Reduce dose and monitor plasma\r\nflucytosine concentration; consult\r\nmanufacturer’s literature</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(611, 'Fluorescein', 'Fluorescein\r\n\r\n<h5>Presentations</h5>\r\n<p>Eye drops: 1% (sodium salt).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Diagnostic agents</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>detection of lesions and foreign bodies in the eye.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Detection of lesions and foreign bodies in the eye, by ocular instillation, ADULT\r\nand CHILD, instil sufficient solution dropwise to stain the damaged area.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>transient blurring of vision.\r\nSKILLED TASKS. Transient blurring of vision; advise patient not to operate\r\nmachinery or drive until vision is clear.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>avoid use with soft contact lenses.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(612, 'Fluorouracil oint', 'Fluorouracil\r\n\r\n<h5>Presentations</h5>\r\n<p>Ointment: 5%.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>premalignant and malignant skin conditions, including actinic keratosis;\r\nmalignant disease</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Administration:\r\nPremalignant and malignant skin conditions including actinic keratosis, ADULT,\r\napply thinly to the affected area, 1–2 times daily until a marked inflammatory\r\nresponse occurs (usually 3–4 weeks); cover with occlusive dressing in\r\nmalignant conditions; healing may require further 2 months after\r\ncompletion of treatment; maximum area of skin treated at one time,\r\n500 cm2.\r\nNOTE. Avoid use of a metal applicator.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>local inflammatory and allergic reactions; rarely erythema\r\nmultiforme; photosensitivity reactions during, and for up to 2 months after\r\ntreatment.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>avoid mucous membranes and eyes; since ultraviolet light\r\nintensifies the inflammatory reaction, avoid prolonged exposure to sunlight</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>haemorrhagic ulcerated tissue.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>???</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(613, 'Fluorouracil', 'Fluorouracil\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 50 mg/ml in 5-ml ampoule.\r\nAlso known as 5-fluorouracil or 5FU.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antineoplastic, immunosuppressives and medicines used in palliative care</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>carcinomas of the colorectum, breast, stomach, pancreas, cervix,\r\nprostate, ovary; and endometrium; liver tumours; head and neck tumours;\r\nactinic keratosis</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>Consult specialist literature</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>consult specialist literature; hepatic\r\nimpairment; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>consult specialist literature; pregnancy and breastfeeding</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Metronidazole Metabolism of fluorouracil inhibited (increased toxicity)\r\nPhenytoin Metabolism of phenytoin possibly inhibited (increased risk of toxicity)\r\nVaccine, Live Avoid use of live vaccines with fluorouracil (impairment of immune response)\r\n* Warfarin Anticoagulant effect possibly enhanced</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (teratogenic);</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Discontinue breastfeeding</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Caution advised; dose reduction may be required</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(614, 'Fluoxetine', 'Fluoxetine\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule or tablet: 20 mg (present as hydrochloride).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Psychotherapeutic medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>moderate to severe major depression.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Depression, by mouth, ADULT, initially 20 mg once daily, increased as necessary\r\nafter 3 weeks to a maximum of 80 mg daily (60 mg daily in the elderly);\r\nusual maintenance dose in the range, 20–60 mg once daily (20–40 mg once\r\ndaily in the elderly).\r\nNOTE. Consider the long duration of action of fluoxetine when adjusting dosage.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>gastrointestinal disturbances, anorexia with weight loss,\r\npostural hypotension, pharyngitis, dyspnoea, headache, sleep disturbances,\r\ndizziness, ataxia, tremor, convulsions (consider discontinuation); altered\r\nblood glucose control in people with diabetes; taste disturbances, urinary\r\nretention and frequency, sexual dysfunction, galactorrhoea, arthralgia,\r\nmyalgia, visual disturbances, photosensitivity, chills, increased sweating, dry\r\nmouth, alopecia, rash (may be sign of serious systemic reaction; consider\r\ndiscontinuation), urticaria, angioedema, vasculitis, anaphylaxis; yawning,\r\nidiosyncratic hepatitis, pulmonary fibrosis, restlessness, akathisia,\r\nhallucinations, manic reactions, confusion, agitation, anxiety,\r\ndepersonalization, panic attacks, suicidal ideation, hyponatraemia,\r\nmovement disorders and dyskinesias, bleeding disorders including\r\necchymosis; serotonin syndrome, and erythema multiforme (leading to\r\nStevens-Johnson syndrome or toxic epidermal necrolysis) also reported; on\r\nwithdrawal dizziness, nausea, anxiety, headaches, paraesthesia, sleep\r\ndisturbances, fatigue, agitation, tremor, and sweating (particularly if\r\nwithdrawn too abruptly).</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>epilepsy; cardiac disease, bleeding disorders, diabetes mellitus;\r\nsusceptibility to angle-closure glaucoma; history of mania (discontinue if\r\npatient entering manic phase); concurrent electroconvulsive therapy\r\n(prolonged seizures reported); pregnancy and breastfeeding;\r\n hepatic impairment; avoid abrupt withdrawal;\r\nchildren and adolescents (increased risk of suicide); interactions:\r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example operating\r\nmachinery or driving.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetylsalicylic acid Increased risk of bleeding\r\nAlcohol Possibly increased sedation\r\n*Artemether + lumefantrine\r\nManufacturer of artemether + lumefantrine advises avoid concomitant use\r\n* Carbamazepine Plasma concentration of carbamazepine increased\r\n* Haloperidol Plasma concentration of haloperidol increased\r\n* Ibuprofen Increased risk of bleeding\r\n* Lithium Increased risk of CNS effects (lithium toxicity reported)\r\nPhenobarbital Antagonism of anticonvulsive effect (convulsive threshold lowered)\r\n* Phenytoin Plasma concentration of phenytoin increased\r\n* Ritonavir Plasma concentration of fluoxetine possibly increased\r\n* Warfarin Anticoagulant effect possibly enhanced</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Manufacturer advises use only if potential benefit\r\noutweighs risk; risk of neonatal withdrawal</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Present in milk; manufacturer advises avoid or use\r\nlowest effective dose</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Reduce dose or administer on alternate days</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(615, 'Fluphenazine', 'Fluphenazine\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 25 mg (decanoate or enantate) in 1-ml ampoule.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Psychotherapeutic medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>maintenance treatment of schizophrenia and other psychoses.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Maintenance in schizophrenia and other psychoses, by deep intramuscular injection\r\ninto gluteal muscle, ADULT, test dose of 12.5 mg (6.25 mg in the ELDERLY)\r\nthen after 4–7 days, 12.5–100 mg repeated at intervals of 2–5 weeks,\r\nadjusted according to response; CHILD, not recommended.\r\nAdministration:\r\nAccording to manufacturer’s directions.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>extrapyramidal symptoms(most likely to occur a few hours after injection\r\nand continue for about 2 days but may be delayed) and on prolonged administration,\r\noccasionally potentially irreversible tardive dyskinesias\r\nhypothermia (occasionally pyrexia), drowsiness, apathy, pallor,\r\nnightmares, dizziness, excitement, insomnia, headache, confusion,\r\ndepression; more rarely, agitation, EEG changes, convulsions, and nasal\r\ncongestion; anticholinergic symptoms including dry mouth, constipation,\r\nblurred vision, and difficulty in micturition; hypotension, tachycardia, and\r\narrhythmias; ECG changes; respiratory depression; menstrual disturbances,\r\ngalactorrhoea, gynaecomastia, impotence, weight gain; sensitivity reactions\r\nsuch as agranulocytosis, leukopenia, leukocytosis, haemolytic anaemia,\r\nphotosensitization, contact sensitization and rash, jaundice, and alterations\r\nin liver function; neuroleptic malignant syndrome; lupus erythematosus-like\r\nsyndrome; corneal and lens opacities, and purplish pigmentation of the skin,\r\ncornea, and retina (with prolonged high dosage); intramuscular injection\r\nmay be painful and cause hypotension and tachycardia (see Precautions) and\r\nnodule formation.\r\nsystemic lupus erythematosus; pain at injection site, and occasionally erythema, swelling,\r\nnodules; inappropriate antidiuretic hormone secretion, oedema</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>treatment requires careful monitoring for optimum effect;\r\nadminister an initial small test dose as adverse effects are prolonged;\r\nextrapyramidal symptoms occur frequently; when transferring from oral to\r\ndepot therapy, dosage by mouth should be reduced gradually;\r\ncardiovascular and cerebrovascular disorders, respiratory disease; epilepsy;\r\nacute infections; pregnancy; breastfeeding; renal); history of jaundice; leukopenia (monitor blood counts\r\nif unexplained fever or infection occur); hypothyroidism; myasthenia gravis;\r\nprostatic hypertrophy; angle-closure glaucoma; the elderly (reduce dose in\r\nvery hot or very cold weather); interactions.\r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example, operating\r\nmachinery or driving.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>children; confusional states; impaired consciousness due to\r\ncentral nervous system depression; parkinsonism; intolerance to\r\nantipsychotics; depression; bone marrow depression; phaeochromocytoma;\r\nmarked cerebral artherosclerosis.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Enhanced hypotensive effect\r\nAlcohol Enhanced sedative effect\r\nAmiloride Enhanced hypotensive effect\r\n*Amitriptyline Increased risk of antimuscarinic adverse effects; increased\r\nplasma amitriptyline concentration; possibly increased risk of ventricular arrhythmias\r\nAmlodipine Enhanced hypotensive effect\r\nAntacids (Aluminium\r\nhydroxide; Magnesium\r\nhydroxide)\r\nReduced absorption of fluphenazine\r\n*Artemether +lumefantrine\r\nManufacturer of artemether + lumefantrine advises avoid concomitant use\r\nAtenolol Enhanced hypotensive effect\r\nAtropine Increased antimuscarinic adverse effects (but reduced\r\nplasma fluphenazine concentration)\r\nBiperiden Increased antimuscarinic adverse effects (but reduced\r\nplasma fluphenazine concentration)\r\n*Carbamazepine Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n*Clomipramine Increased antimuscarinic adverse effects; increased plasma\r\nclomipramine concentration; possibly increased risk of ventricular arrhythmias\r\nCodeine Enhanced sedative and hypotensive effect\r\nDiazepam Enhanced sedative effect\r\nDopamine Antagonism of hypertensive effect\r\nEnalapril Enhanced hypotensive effect\r\nEphedrine Antagonism of hypertensive effect\r\nEpinephrine Antagonism of hypertensive effect\r\n*Ethosuximide Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\nFurosemide Enhanced hypotensive effect\r\nGlibenclamide Possible antagonism of hypoglycaemic effect\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\n* Halothane Enhanced hypotensive effect\r\nHydralazine Enhanced hypotensive effect\r\nHydrochlorothiazide Enhanced hypotensive effect\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\n* Ketamine Enhanced hypotensive effect\r\nLevodopa Antagonism of effects of levodopa\r\nLithium Increased risk of extrapyramidal effects and possibility of neurotoxicity\r\nMethadone Enhanced hypotensive and sedative effects\r\nMethyldopa Enhanced hypotensive effect; increased risk of extrapyramidal effects\r\nMetoclopramide Increased risk of extrapyramidal effects\r\nMorphine Enhanced sedative and hypotensive effect\r\nNifedipine Enhanced hypotensive effect\r\n* Nitrous oxide Enhanced hypotensive effect\r\n*Phenobarbital Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n*Phenytoin Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Procainamide Increased risk of ventricular arrhythmias\r\nPropranolol Enhanced hypotensive effect\r\n* Quinidine Increased risk of ventricular arrhythmias\r\n* Ritonavir Plasma concentration possibly increased by ritonavir\r\nSodium nitroprusside Enhanced hypotensive effect\r\nSpironolactone Enhanced hypotensive effect\r\n* Thiopental Enhanced hypotensive effect\r\nTimolol Enhanced hypotensive effect\r\n*Valproic acid Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\nVerapamil Enhanced hypotensive effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: Extrapyramidal effects in neonate\r\noccasionally reported</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount excreted in milk probably too small to be\r\nharmful; continue breastfeeding; adverse effects\r\npossible; monitor infant for drowsiness</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe: Start with small doses; increased\r\ncerebral sensitivity</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Can precipitate coma; hepatotoxic</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(616, 'Folic Acid', 'Folic Acid\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 1 mg; 5 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Medicines affecting the blood</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>treatment of folate-deficiency megaloblastic anaemia; prevention of\r\nneural tube defects in pregnancy</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Treatment of folate-deficiency, megaloblastic anaemia, by mouth, ADULT, 5 mg\r\ndaily for 4 months (in pregnancy continued to term); up to 15 mg daily may\r\nbe necessary in malabsorption states\r\nPrevention of first occurrence of neural tube defects, by mouth, ADULT,\r\n400–500 micrograms daily before conception and during the first 12 weeks\r\nof pregnancy.\r\nPrevention of recurrence of neural tube defects, by mouth, ADULT, 5 mg daily\r\n(reduced to 4 mg daily, if suitable preparation available) from at least\r\n4 weeks before conception until 12th week of pregnancy.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>women receiving antiepileptic therapy (need counselling before\r\nstarting folic acid); interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>should never be given without vitamin B12 in undiagnosed\r\nmegaloblastic anaemia or other vitamin B12 deficiency states because of the\r\nrisk of precipitating subacute combined degeneration of the spinal cord;\r\nfolate-dependent malignant disease.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Phenobarbital Plasma concentration of phenobarbital possibly reduced\r\nPhenytoin Plasma phenytoin concentration possibly reduced\r\nSulfasalazine Possibly reduced absorption of folic acid</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(617, 'Furosemide', 'Furosemide\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 10 mg/ml in 2-ml ampoule.\r\nTablet: 40 mg</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Diuretics; Cardiovascular medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>oedema; oliguria due to renal failure; heart failure</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Oedema, by mouth, ADULT, initially 40 mg daily on rising; usual maintenance\r\ndose, 20–40 mg daily; may be increased to 80 mg daily or more in resistant\r\noedema; CHILD, 1–3 mg/kg daily (maximum, 40 mg daily).\r\nAcute pulmonary oedema, by slow intravenous injection, ADULT, 20–50 mg,\r\nincreased incrementally in 20-mg steps every 2 hours, if necessary; if the\r\neffective single dose is more than 50 mg, consider using slow intravenous\r\ninfusion at a rate not exceeding 4 mg/minute; CHILD, 0.5–1.5 mg/kg daily\r\n(maximum, 20 mg daily)\r\nOliguria (glomerular filtration rate less than 20 ml/minute), by slow intravenous\r\ninfusion at a rate not exceeding 4 mg/minute, ADULT, initially 250 mg over\r\n1 hour; if urine output is not satisfactory during the hour after the first dose,\r\ninfuse 500 mg over 2 hours then, if there is no satisfactory response during\r\nthe hour after the second dose, infuse 1 g over 4 hours; if there is no\r\nresponse after the third dose, dialysis is probably necessary; the effective\r\ndose (up to 1 g) can be repeated every 24 hours.\r\nNOTE. Dose to be diluted in a suitable amount of infusion fluid, according to the\r\nhydration of the patient.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>hypokalaemia, hypomagnesaemia, hyponatraemia,\r\nhypochloraemic alkalosis (for symptoms of fluid and electrolyte imbalance,\r\nsee introductory notes), increased calcium excretion, hypovolaemia,\r\nhyperglycaemia (but less often than with thiazide diuretics); temporary\r\nincrease in plasma cholesterol and triglyceride concentration; less\r\ncommonly hyperuricaemia and gout; rarely rash, photosensitivity, bone\r\nmarrow depression (withdraw treatment), pancreatitis (with large parenteral\r\ndoses), tinnitus and deafness (with rapid administration of large parenteral\r\ndoses and in renal impairment; deafness may be permanent if other ototoxic\r\ndrugs taken).</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>monitor electrolytes, particularly potassium and sodium;\r\nhypotension; the elderly (reduce dose); pregnancy; in oliguria,\r\ncorrect hypovolaemia before administration; renal impairment,\r\nhepatic impairment; prostatic enlargement; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>renal failure with anuria; precomatose states associated with\r\nliver cirrhosis.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Increased risk of hypokalaemia\r\nAlcohol Enhanced hypotensive effect\r\n* Amikacin Increased risk of ototoxicity\r\nAmitriptyline Increased risk of postural hypotension\r\nAmlodipine Enhanced hypotensive effect\r\nAmphotericin B Increased risk of hypokalaemia\r\nAtenolol Enhanced hypotensive effect\r\nCarbamazepine Increased risk of hyponatraemia\r\nChlorpromazine Enhanced hypotensive effect\r\nCisplatin Increased risk of nephrotoxicity and ototoxicity\r\nClomipramine Increased risk of postural hypotension\r\nContraceptives, Oral Antagonism of diuretic effect by estrogens\r\nDexamethasone Antagonism of diuretic effect; increased risk of\r\nhypokalaemia\r\nDiazepam Enhanced hypotensive effect\r\n*Digoxin Hypokalaemia caused by furosemide increases cardiac toxicity of digoxin\r\n* Enalapril Enhanced hypotensive effect\r\nFluphenazine Enhanced hypotensive effect\r\n* Gentamicin Increased risk of ototoxicity\r\nGlibenclamide Antagonism of hypoglycaemic effect\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\nHalothane Enhanced hypotensive effect\r\nHydralazine Enhanced hypotensive effect\r\nHydrochlorothiazide Increased risk of hypokalaemia\r\nHydrocortisone Antagonism of diuretic effect; increased risk of hypokalaemia\r\nIbuprofen Risk of nephrotoxicity of ibuprofen increased; antagonism of diuretic effect\r\nInsulins Antagonism of hypoglycaemic effect\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\nKetamine Enhanced hypotensive effect\r\nLevodopa Enhanced hypotensive effect\r\n*Lidocaine Action of lidocaine antagonized by hypokalaemia caused by\r\nfurosemide (interaction less likely when lidocaine used topically)\r\n*Lithium Reduced lithium excretion (increased plasma lithium\r\nconcentration and risk of toxicity); furosemide safer than hydrochlorothiazide\r\nMetformin Antagonism of hypoglycaemic effect\r\nMethyldopa Enhanced hypotensive effect\r\nNifedipine Enhanced hypotensive effect\r\nNitrous oxide Enhanced hypotensive effect\r\nParomomycin Increased risk of ototoxicity\r\nPrednisolone Antagonism of diuretic effect; increased risk of hypokalaemia\r\nPropranolol Enhanced hypotensive effect\r\n* Quinidine Cardiac toxicity of quinidine increased by hypokalaemia caused by furosemide\r\nSalbutamol Increased risk of hypokalaemia with high doses of salbutamol\r\nSodium nitroprusside Enhanced hypotensive effect\r\n* Streptomycin Increased risk of ototoxicity\r\nThiopental Enhanced hypotensive effect\r\nTimolol Enhanced hypotensive effect\r\n* Vancomycin Increased risk of ototoxicity\r\nVerapamil Enhanced hypotensive effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not used to treat hypertension in pregnancy</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount too small to be harmful</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Moderate May need high doses; deafness may\r\nfollow rapid intravenous injection</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(618, 'Gentamicin', 'Gentamicin\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 10 mg; 40 mg (as sulfate)/ml in 2-ml vial.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>pneumonia; cholecystitis; peritonitis; septicaemia; acute pyelonephritis;\r\nprostatitis; otitis externa; skin and soft tissue infections; pelvic inflammatory\r\ndisease (with clindamycin); endocarditis; meningitis; listeriosis; tularaemia;\r\nbrucellosis; plague; surgical prophylaxis; eye infections</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Infections due to susceptible organisms, by intramuscular injection or by slow\r\nintravenous injection (over at least 3 minutes) or by intravenous infusion, ADULT,\r\n3–5 mg/kg daily in divided doses every 8 hours; NEONATE up to 2 weeks,\r\n3 mg/kg every 12 hours; CHILD 2 weeks–12 years, 2 mg/kg every 8 hours.\r\nPelvic inflammatory disease (with clindamycin), by intravenous injection, ADULT,\r\n1.5 mg/kg every 8 hours.\r\nEndocarditis (as part of combination therapy), by intramuscular injection or by\r\nintravenous injection (over at least 3 minutes), ADULT, 1 mg/kg every 8 hours.\r\nSurgical prophylaxis (with clindamycin), by intravenous injection, ADULT, 5 mg/kg\r\nas a single dose at induction.\r\nNOTE. One hour (peak) concentrations should not exceed 5–10 mg/litre\r\n(3–5 mg/litre for endocarditis); pre-dose (trough) concentration should be less than\r\n2 mg/litre (less than 1 mg/litre in endocarditis).\r\nDILUTION AND ADMINISTRATION. According to manufacturer’s directions.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>vestibular and auditory damage, nephrotoxicity; rarely,\r\nhypomagnesaemia on prolonged therapy; antibiotic-associated colitis,\r\nstomatitis; also nausea, vomiting, rash, and blood disorders</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>renal impairment (reduce dose); neonates, infants,\r\nand the elderly (adjust dosage and monitor renal, auditory, and vestibular\r\nfunction, and serum gentamicin concentrations); avoid prolonged use;\r\nconditions characterized by muscular weakness; obesity (use ideal body\r\nweight to calculate dose and monitor serum gentamicin concentration\r\nclosely); pregnancy  and breastfeeding;\r\ninteractions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>myasthenia gravis</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Alcuronium Enhanced muscle relaxant effect\r\nAmphotericin B Increased risk of nephrotoxicity\r\nCapreomycin Increased risk of nephrotoxicity and ototoxicity\r\n* Ciclosporin Increased risk of nephrotoxicity\r\n* Cisplatin Increased risk of nephrotoxicity and possibly of ototoxicity\r\nDigoxin Possibly increased plasma concentration of digoxin\r\n* Furosemide Increased risk of ototoxicity\r\n* Neostigmine Antagonism of effect of neostigmine\r\nPyridostigmine Antagonism of effect of pyridostigmine\r\n* Suxamethonium Enhanced muscle relaxant effect\r\nVancomycin Increased risk of nephrotoxicity and ototoxicity\r\n* Vecuronium Enhanced muscle relaxant effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Second and third trimesters: Auditory or vestibular\r\nnerve damage; risk probably very small with\r\ngentamicin, but avoid unless essential (if given, serum\r\ngentamicin concentration monitoring essential)</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount probably too small to be harmful; monitor\r\ninfant for thrush and diarrhoea</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild Reduce dose; monitor plasma\r\nconcentrations</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(619, 'Gentian Violet (Methylrosanilinium chloride)', 'Gentian Violet (Methylrosanilinium chloride)\r\n\r\n<h5>Presentations</h5>\r\n<p>Aqueous solution: 0.5%.\r\nTincture: 0.5%.\r\nAlso known as crystal violet.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>superficial fungal and bacterial infections.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Skin infections, ADULT and CHILD, apply directly to affected area, 2 or 3 times\r\ndaily for 3 days</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>severe irritation (discontinue treatment); temporary staining\r\nof skin, permanent staining of fabrics; animal carcinogenicity (restricted use\r\nin some countries).</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>excoriated or ulcerated lesions, broken skin, mucous\r\nmembranes; porphyria</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(620, 'Glibenclamide', 'Glibenclamide\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 2.5 mg; 5 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Hormones, other endocrine medicines and contraceptives</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>diabetes mellitus</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Diabetes mellitus, by mouth, ADULT, initially 5 mg once daily with or\r\nimmediately after breakfast (2.5 mg in the elderly), adjusted according to\r\nresponse (maximum, 15 mg daily).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>gastrointestinal disturbances and headache (usually mild and\r\ninfrequent), liver disorders; hypersensitivity reactions (usually only in first\r\n6–8 weeks); rarely erythema multiforme, exfoliative dermatitis, fever, and\r\njaundice; hypoglycaemia, particularly in the elderly; rarely blood disorders\r\nincluding leukopenia, thrombocytopenia, agranulocytosis, pancytopenia,\r\nhaemolytic anaemia, and aplastic anaemia.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>pregnancy; renal impairment; hepatic\r\nimpairment; the elderly (reduce dose); substitute insulin\r\nduring intercurrent illness severe infection, trauma, surgery, and pregnancy; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>ketoacidosis; porphyria; breastfeeding</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Alcohol Enhanced hypoglycaemic effect\r\nAtenolol Atenolol may mask warning signs of hypoglycaemia such as tremor\r\n* Chloramphenicol Enhanced effect of glibenclamide\r\nChlorpromazine Possible antagonism of hypoglycaemic effect\r\nCiprofloxacin Possibly enhanced effect of glibenclamide\r\nContraceptives, Oral Antagonism of hypoglycaemic effect by estrogens and progestogens\r\nDexamethasone Antagonism of hypoglycaemic effect\r\nEnalapril Hypoglycaemic effect possibly enhanced\r\n* Fluconazole Plasma concentration of glibenclamide increased\r\nFluphenazine Possible antagonism of hypoglycaemic effect\r\nFurosemide Antagonism of hypoglycaemic effect\r\nHydrochlorothiazide Antagonism of hypoglycaemic effect\r\nHydrocortisone Antagonism of hypoglycaemic effect\r\n* Ibuprofen Possibly enhanced effect of glibenclamide\r\nLevonorgestrel Antagonism of hypoglycaemic effect\r\nMedroxyprogesterone Antagonism of hypoglycaemic effect\r\nNorethisterone Antagonism of hypoglycaemic effect\r\nPrednisolone Antagonism of hypoglycaemic effect\r\nPropranolol Propranolol may mask warning signs of hypoglycaemia such as tremor\r\n*Rifampicin Possibly accelerated metabolism (reduced effect) of glibenclamide\r\nSilver sulfadiazine Effect of glibenclamide rarely enhanced\r\nSulfadiazine Effect of glibenclamide rarely enhanced\r\nSulfadoxine + pyrimethamine: Effect of glibenclamide rarely enhanced\r\nSulfamethoxazole + trimethoprim\r\nEffect of glibenclamide rarely enhanced\r\nTestosterone Hypoglycaemic effect possibly enhanced\r\nTimolol Timolol may mask warning signs of hypoglycaemia such as tremor\r\nTrimethoprim Effects of glibenclamide rarely enhanced\r\n*Warfarin Possibly enhanced hypoglycaemic effect and changes to anticoagulant effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: Neonatal hypoglycaemia; insulin is\r\nnormally substituted in all diabetics; if oral drugs are\r\nused, therapy should be stopped at least 2 days before\r\ndelivery</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Theoretical possibility of hypoglycaemia in infant</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe: Avoid</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Increased risk of hypoglycaemia in severe liver disease;\r\navoid or use small dose; can produce jaundice</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(621, 'Glucose with Sodium Chloride', 'Glucose with Sodium Chloride\r\n\r\n<h5>Presentations</h5>\r\n<p>Injectable solution: 4% glucose, 0.18% sodium chloride\r\n(equivalent to Na+30 mmol/l, Cl-30 mmol/l).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Solutions correcting water, electrolyte and acid–base disturbances</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>fluid and electrolyte replacement.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Fluid replacement, by intravenous infusion, ADULT and CHILD, determined on the\r\nbasis of clinical and, whenever possible, electrolyte monitoring</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>administration of large doses may give rise to oedema.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>restrict intake in impaired renal function, cardiac failure,\r\nhypertension, peripheral and pulmonary oedema, and toxaemia during\r\npregnancy.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(622, 'Glucose', 'Glucose\r\n\r\n<h5>Presentations</h5>\r\n<p>Injectable solution: 5%; 10% isotonic; 50% hypertonic.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Solutions correcting water, electrolyte and acid–base disturbances</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>fluid replacement without significant electrolyte deficit; treatment of\r\nhypoglycaemia</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Fluid replacement, by intravenous infusion, ADULT and CHILD, determined on the\r\nbasis of clinical and, whenever possible, electrolyte monitoring \r\nTreatment of hypoglycaemia, by intravenous infusion of 50% glucose solution into\r\na large vein, ADULT, 25 ml</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>glucose injections, especially if hypertonic, have a low pH and\r\nmay cause venous irritation and thrombophlebitis; fluid and electrolyte\r\ndisturbances; oedema or water intoxication (on prolonged administration or\r\nrapid infusion of large volumes of isotonic solutions); hyperglycaemia (on\r\nprolonged administration of hypertonic solutions).</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>diabetes mellitus (may require additional insulin).</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(623, 'Glutaral', 'Glutaral\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Solution: 2%.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Disinfectants and antiseptics</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>disinfection and sterilization of instruments and surfaces</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Disinfection of clean instruments, immerse in undiluted solution for 10–\r\n20 minutes; up to 3 hours may be required for certain instruments (for\r\nexample, bronchoscopes with possible mycobacterial contamination); rinse\r\nwith sterile water or alcohol after disinfection.\r\nSterilization of clean instruments, immerse in undiluted solution for up to\r\n10 hours; rinse with sterile water or alcohol after disinfection.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>(occupational exposure) nausea, headache, airway obstruction,\r\nasthma, rhinitis, eye irritation, dermatitis, and skin discoloration.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>minimize occupational exposure (adequate skin protection and\r\nmeasures to avoid inhalation of vapour).</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(624, 'Glyceryl Trinitrate', 'Glyceryl Trinitrate\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet (sublingual): 500 micrograms.\r\nNOTE. Glyceryl trinitrate tablets are unstable. They should therefore be dispensed in\r\nglass or stainless steel containers, and closed with a foil-lined cap which contains no\r\nwadding. No more than 100 tablets should be dispensed at one time, and any unused\r\ntablets should be discarded 8 weeks after opening the container</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Cardiovascular medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>prophylaxis and treatment of angina.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Angina (acute attack), sublingually, ADULT, 0.5–1 mg, repeated as required.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>throbbing headache; flushing; dizziness, postural hypotension;\r\ntachycardia; paradoxical bradycardia also reported.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>severe hepatic impairment; renal impairment;\r\n hypothyroidism; malnutrition; hypothermia; recent history of\r\nmyocardial infarction; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to nitrates; hypotension; hypovolaemia;\r\nhypertrophic obstructive cardiomyopathy, aortic stenosis, cardiac\r\ntamponade, constrictive pericarditis, mitral stenosis; marked anaemia; head\r\ntrauma; cerebral haemorrhage; angle-closure glaucoma.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Enhanced hypotensive effect\r\nAlcohol Enhanced hypotensive effect\r\nAmiloride Enhanced hypotensive effect\r\nAmitriptyline Reduced effect of sublingual glyceryl trinitrate tablets\r\n(failure to dissolve under the tongue owing to dry mouth)\r\nAmlodipine Enhanced hypotensive effect\r\nAtenolol Enhanced hypotensive effect\r\nAtropine Possibly reduced effect of sublingual glyceryl trinitrate\r\ntablets (failure to dissolve under the tongue owing to dry mouth)\r\nBiperiden Possibly reduced effect of sublingual glyceryl trinitrate\r\ntablets (failure to dissolve under the tongue owing to dry\r\nmouth)\r\nChlorpromazine Enhanced hypotensive effect\r\nClomipramine Reduced effect of sublingual glyceryl trinitrate tablets\r\n(failure to dissolve under the tongue owing to dry mouth)\r\nContraceptives, Oral Antagonism of hypotensive effect by estrogens\r\nDexamethasone Antagonism of hypotensive effect\r\nDiazepam Enhanced hypotensive effect\r\nEnalapril Enhanced hypotensive effect\r\nFluphenazine Enhanced hypotensive effect\r\nFurosemide Enhanced hypotensive effect\r\nHalothane Enhanced hypotensive effect\r\n*Heparin Anticoagulant effect reduced by infusion of glyceryl trinitrate\r\nHydralazine Enhanced hypotensive effect\r\nHydrochlorothiazide Enhanced hypotensive effect\r\nHydrocortisone Antagonism of hypotensive effect\r\nIbuprofen Antagonism of hypotensive effect\r\nKetamine Enhanced hypotensive effect\r\nLevodopa Enhanced hypotensive effect\r\nMethyldopa Enhanced hypotensive effect\r\nNifedipine Enhanced hypotensive effect\r\nNitrous oxide Enhanced hypotensive effect\r\nPrednisolone Antagonism of hypotensive effect\r\nPropranolol Enhanced hypotensive effect\r\nSodium nitroprusside Enhanced hypotensive effect\r\nSpironolactone Enhanced hypotensive effect\r\nThiopental Enhanced hypotensive effect\r\nTimolol Enhanced hypotensive effect\r\nVerapamil Enhanced hypotensive effect</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(625, 'Griseofulvin', 'Griseofulvin\r\n\r\n<h5>Presentations</h5>\r\n<p>Capsule or tablet: 125 mg; 250 mg; 500mg</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>fungal infections of the skin, scalp, hair and nails where topical\r\ntreatment has failed or is inappropriate</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Superficial fungal infections, by mouth, ADULT, 0.5–1 g (but not less than\r\n10 mg/kg) daily with food in single or divided doses; CHILD, 10 mg/kg\r\ndaily with food in single or divided doses.\r\nNOTE. Duration of treatment depends on the infection and thickness of keratin at the\r\nsite of infection — at least 4 weeks for skin and hair, at least 6 weeks for scalp\r\nringworm (and in severe infection, up to 3 months); up to 6 months for fingernails and\r\nup to 12 months or more for toenails.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>headache, nausea, vomiting, diarrhoea, rash, dizziness, and\r\nfatigue reported; leukopenia, hepatotoxicity; sleep disturbances;\r\nphotosensitivity; systemic lupus erythematosus, toxic epidermal necrolysis,\r\nerythema multiforme; peripheral neuropathy; confusion and impaired\r\ncoordination.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>pre-existing hepatic insufficiency (closely monitor hepatic\r\nfunction throughout treatment); blood disorders (monitor blood count\r\nweekly during first month of treatment); breastfeeding; interactions.\r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example operating\r\nmachinery or driving.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>severe liver disease; pregnancy (avoid\r\npregnancy during and for 1 month after treatment; men should not father\r\nchildren within 6 months of treatment); porphyria; systemic\r\nlupus erythematosus (risk of exacerbation).</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Alcohol Possibly enhanced effects of alcohol\r\nCiclosporin Plasma ciclosporin concentration possibly reduced\r\n*Contraceptives, Oral Accelerated metabolism of estrogens and progestogens (reduced contraceptive effect)\r\n*Levonorgestrel Accelerated metabolism of levonorgestrel (reduced contraceptive effect)\r\n*Medroxyprogesterone Accelerated metabolism of medroxyprogesterone (does not\r\napply to injectable medroxyprogesterone acetate used for contraception)\r\n*Norethisterone Accelerated metabolism of norethisterone (reduced contraceptive effect)\r\nPhenobarbital Reduced absorption of griseofulvin (reduced effect)\r\n* Warfarin Reduced anticoagulant effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid (fetotoxicity and teratogenicity in animals); use\r\neffective contraception during and for at least\r\n1 month after administration (important:\r\neffectiveness of oral contraceptives reduced); also men should avoid fathering a child\r\nduring and for at least 6 months after administration</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>No information available; avoid</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid in severe liver disease</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(626, 'Haemophilus Influenzae type B Vaccine', 'Haemophilus Influenzae type B Vaccine\r\n\r\n<h5>Presentations</h5>\r\n<p>Haemophilus influenzae type b (Hib) causes serious infection such as bacterial pneumonia\r\nand meningitis, especially in young children. The bacteria are transmitted from person\r\nto person by droplets from nasopharyngeal secretions. WHO recommends the\r\ninclusion of Haemophilus influenzae type b vaccine in all routine infant\r\nimmunization programmes. The risk of infection decreases in older children and\r\ntherefore Hib vaccine is not generally offered to children over 2 years of age. However,\r\nolder children and adults at an increased risk of Hib infection should be vaccinated,\r\nincluding individuals with HIV or immunoglobulin deficiency, stem cell transplant\r\nrecipients, patients with malignant neoplasms receiving chemotherapy, and those with\r\nasplenia (for example, due to sickle-cell disease or splenectomy).\r\nFor primary immunization, a 3-dose series is generally given at the same time as the\r\nprimary series of diphtheria-tetanus-pertussis (DTP) vaccine. Combination preparations\r\ncontaining Haemophilus influenzae type b vaccine with either diphtheria-tetanus-pertussis,\r\nhepatitis B, or poliomyelitis vaccines are available.\r\nInjection, capsular polysaccharide of Haemophilus influenzae type b\r\nconjugated to a protein carrier\r\nNOTE. Liquid and freeze-dried preparations are available; excipients may vary between\r\nindividual products and reconstitution may be required before administration (consult\r\nmanufacturer’s information)</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Immunologicals</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>active immunization against Haemophilus influenzae type b.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Primary immunization against Haemophilus influenzae type b, by intramuscular\r\ninjection, INFANT 6 weeks–1 year of age, 3 doses, each of 0.5 ml, separated\r\nby 4–8 weeks; ADULT and CHILD over 1 year of age, 1 dose of 0.5 ml.\r\nBOOSTER DOSE. In some countries a booster dose is given between 12 and\r\n18 months of age.\r\nRECONSTITUTION. The vaccine should not be mixed in the vial or syringe with any\r\nother vaccine unless it is an approved use or manufactured as a combined product;\r\nconsult manufacturer’s literature for further information.\r\nADMINISTRATION. The vaccine should be given in the deltoid region in adults and\r\nolder children; anterolateral thigh is the preferred site in infants and young children; if\r\ngiven as a separate injection at the same time as other vaccines, it should be\r\nadministered at a different site.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>irritability</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(627, 'Haloperidol', 'Haloperidol\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 5 mg in 1-ml ampoule.\r\nTablet: 2 mg; 5 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Psychotherapeutic medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>schizophrenia and other psychotic disorders, mania, short-term\r\nadjunctive management of psychomotor agitation, violent behaviour, and\r\nsevere anxiety.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Schizophrenia and other psychoses, mania, short-term adjunctive management\r\nof psychomotor agitation, violent behaviour, and severe anxiety, by mouth,\r\nADULT, 1.5–3 mg 2–3 times daily (half of the adult dose in elderly or\r\ndebilitated patients; 3–5 mg 2–3 times daily in severely affected or resistant\r\npatients; up to 30 mg daily in resistant schizophrenia); CHILD,\r\n25–50 micrograms/kg daily in 2 divided doses (maximum, 10 mg daily).\r\nAcute psychotic conditions, by intramuscular injection, ADULT, initially 2–10 mg\r\n(half of the adult dose in elderly or debilitated patients; up to 18 mg in\r\nseverely affected patients); subsequent doses every 4–8 hours according to\r\nresponse (up to every hour if necessary) up to a maximum of 18 mg daily;\r\nCHILD, not recommended.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>as for Chlorpromazine (see above), but less sedative effects\r\nand fewer hypotensive and anticholinergic symptoms; rarely pigmentation\r\nand photosensitivity reactions rare; extrapyramidal symptoms are common,\r\nparticularly acute dystonia and akathisia (especially in thyrotoxic patients);\r\nrarely weight loss, and hypoglycaemia, inappropriate antidiuretic hormone\r\nsecretion.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>cardiovascular and cerebrovascular disorders, respiratory disease,\r\nparkinsonism, epilepsy, acute infections, pregnancy,\r\nbreastfeeding, renal and hepatic impairment (avoid if severe),\r\n history of jaundice, leukopenia (blood count required\r\nif unexplained fever or infection); hypothyroidism, myasthenia gravis,\r\nprostatic hypertrophy, angle-closure glaucoma; also subarachnoid\r\nhaemorrhage and metabolic disturbances such as hypokalaemia,\r\nhypocalcaemia, or hypomagnesaemia; the elderly (particularly in very hot or\r\nvery cold weather); children and adolescents; avoid abrupt withdrawal;\r\npatients should remain supine and the blood pressure monitored for\r\n30 minutes after intramuscular injection; interactions: Appendix 1.\r\nSKILLED TASKS. May impair ability to perform skilled tasks, for example operating\r\nmachinery or driving.</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>impaired consciousness due to central nervous system\r\ndepression; bone marrow depression; phaeochromocytoma; porphyria;\r\nbasal ganglia disease.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Alcohol Enhanced sedative effect\r\n*Amitriptyline Increased plasma amitriptyline concentration; possibly\r\nincreased risk of ventricular arrhythmias\r\nAmlodipine Enhanced hypotensive effect\r\n*Artemether +lumefantrine\r\nManufacturer of artemether + lumefantrine advises avoid concomitant use\r\nAtropine Possibly reduced effects of haloperidol\r\nBiperiden Possibly reduced effects of haloperidol\r\n*Carbamazepine Antagonism of anticonvulsant effect (convulsive threshold\r\nlowered); metabolism of haloperidol accelerated (reduced\r\nplasma concentration)\r\n*Clomipramine Increased plasma clomipramine concentration; possibly\r\nincreased risk of ventricular arrhythmias\r\nCodeine Enhanced sedative and hypotensive effect\r\nDiazepam Enhanced sedative effect\r\nDopamine Antagonism of hypertensive effect\r\nEnalapril Enhanced hypotensive effect\r\nEphedrine Antagonism of hypertensive effect\r\nEpinephrine Antagonism of hypertensive effect\r\n* Ethosuximide Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Fluoxetine Plasma concentration of haloperidol increased\r\n* Halothane Enhanced hypotensive effect\r\n* Ketamine Enhanced hypotensive effect\r\nLevodopa Antagonism of effects of levodopa\r\nLithium Increased risk of extrapyramidal effects and possibility of neurotoxicity\r\nMethadone Enhanced hypotensive and sedative effects\r\nMethyldopa Enhanced hypotensive effect; increased risk of extrapyramidal effects\r\nMetoclopramide Increased risk of extrapyramidal effects\r\nMorphine Enhanced hypotensive and sedative effects\r\nNifedipine Enhanced hypotensive effect\r\n* Nitrous oxide Enhanced hypotensive effect\r\n*Phenobarbital Antagonism of anticonvulsant effect (convulsive threshold\r\nlowered); metabolism of haloperidol accelerated (reduced plasma concentration)\r\n* Phenytoin Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\n* Procainamide Increased risk of ventricular arrhythmias\r\n* Quinidine Increased risk of ventricular arrhythmias\r\n*Rifampicin Accelerated metabolism of haloperidol (reduced plasma haloperidol concentration)\r\n* Ritonavir Plasma concentration possibly increased by ritonavir\r\n* Thiopental Enhanced hypotensive effect\r\n*Valproic acid Antagonism of anticonvulsant effect (convulsive threshold lowered)\r\nVerapamil Enhanced hypotensive effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: Extrapyramidal effects in neonate\r\noccasionally reported</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Amount present in milk probably too small to be\r\nharmful; continue breastfeeding; adverse effects\r\npossible; monitor infant for drowsiness</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Severe Start with small doses; increased\r\ncerebral sensitivity</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Can precipitate coma</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(628, 'Halothane', 'Halothane\r\n\r\n<h5>Presentations</h5>\r\n<p>Inhalation.\r\nVolatile liquid.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anaesthetics</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>induction and maintenance of anaesthesia.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Induction, using a specifically calibrated vaporizer, gradually increase inspired gas\r\nconcentration to 2–4% (ADULT) or 1.5–2% (CHILD), in oxygen or nitrous\r\noxide–oxygen; maintenance, ADULT and CHILD, 0.5–2%.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>arrhythmias; bradycardia; respiratory depression; hepatic\r\ndamage.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>anaesthetic history should be carefully taken to determine\r\nprevious exposure and previous reactions to halothane (at least 3 months\r\nshould be allowed to elapse between each re-exposure); avoid for dental\r\nprocedures in patients under 18 years unless treated in hospital (high risk of\r\narrhythmias); pregnancy and breastfeeding;\r\ninteractions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>history of unexplained jaundice or pyrexia following\r\nprevious exposure to halothane; family history of malignant hyperthermia;\r\nraised cerebrospinal fluid pressure; porphyria.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Enhanced hypotensive effect\r\nAlcuronium Effects of alcuronium enhanced\r\nAmiloride Enhanced hypotensive effect\r\nAmitriptyline Increased risk of arrhythmias and hypotension\r\nAmlodipine Enhanced hypotensive effect\r\nAtenolol Enhanced hypotensive effect\r\n*Chlorpromazine Enhanced hypotensive effect\r\nClomipramine Increased risk of arrhythmias and hypotension\r\nDiazepam Enhanced sedative effect\r\nEnalapril Enhanced hypotensive effect\r\n* Epinephrine Risk of arrhythmias\r\nErgometrine Reduced effect of ergometrine on parturient uterus\r\n* Fluphenazine Enhanced hypotensive effect\r\nFurosemide Enhanced hypotensive effect\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\n* Haloperidol Enhanced hypotensive effect\r\nHydralazine Enhanced hypotensive effect\r\nHydrochlorothiazide Enhanced hypotensive effect\r\nIsoniazid Possible potentiation of isoniazid hepatotoxicity\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\n* Levodopa Risk of arrhythmias\r\nMethyldopa Enhanced hypotensive effect\r\nNifedipine Enhanced hypotensive effect\r\nOxytocin Oxytocic effect possibly reduced; enhanced hypotensive effect and risk of arrhythmias\r\nPropranolol Enhanced hypotensive effect\r\nSodium nitroprusside Enhanced hypotensive effect\r\nSpironolactone Enhanced hypotensive effect\r\nSuxamethonium Enhanced effects of suxamethonium\r\nTimolol Enhanced hypotensive effect\r\nVancomycin Hypersensitivity-like reactions can occur with concomitant\r\nintravenous vancomycin\r\nVecuronium Enhanced effects of vecuronium\r\n* Verapamil Enhanced hypotensive effect and AV delay</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Third trimester: Depresses neonatal respiration</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Present in milk</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid if history of unexplained pyrexia or jaundice\r\nfollowing previous exposure to halothane</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(629, 'Heparin Sodium', 'Heparin Sodium\r\n\r\n<h5>Presentations</h5>\r\n<p>Injection: 1000 IU/ml; 5000 IU/ml; 20 000 IU/ml in 1-ml ampoule</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Medicines affecting the blood</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>treatment and prophylaxis of deep-vein thrombosis and pulmonary\r\nembolism; unstable angina; ischaemic stroke</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Treatment of deep-vein thrombosis and pulmonary embolism, by intravenous\r\ninjection, ADULT, loading dose of 5000 IU (10,000 IU in severe pulmonary\r\nembolism) followed by continuous intravenous infusion of\r\n15–25 IU/kg/hour or by subcutaneous injection of 15,000 IU every\r\n12 hours; laboratory monitoring is essential, preferably on a daily basis and\r\ndose adjusted accordingly; by intravenous injection, SMALL ADULT and CHILD,\r\nlower loading dose, then by continuous intravenous infusion, 15–25 IU/kg/hour\r\nor by subcutaneous injection, 250 IU/kg every 12 hours.\r\nProphylaxis in general surgery, by subcutaneous injection, ADULT, 5000 IU 2 hours\r\nbefore surgery, then every 8–12 hours for 7 days or until patient is ambulant\r\n(monitoring not needed); PREGNANT WOMAN, 5000–10,000 IU every\r\n12 hours.\r\nNOTE: Not intended to cover prosthetic heart valve management in pregnancy, which\r\nrequires specialist management).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>immune-mediated thrombocytopenia usually develops\r\n6–10 days after commencement of therapy (requires immediate withdrawal\r\nof heparin); haemorrhage, skin necrosis, hypersensitivity reactions including\r\nurticaria, angioedema, and anaphylaxis; osteoporosis after prolonged use\r\nand rarely alopecia.</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>hepatic impairment; renal failure; the\r\nelderly; hypersensitivity to low molecular weight heparins; spinal or epidural\r\nanaesthesia (risk of spinal haematoma); pregnancy; diabetes\r\nmellitus, acidosis, concomitant potassium-sparing drugs (increased risk of\r\nhyperkalaemia); interactions:</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>hypersensitivity to heparin; haemophilia and other\r\nhaemorrhagic disorders, thrombocytopenia, peptic ulcer, recent cerebral\r\nhaemorrhage, severe hypertension, severe liver or renal disease; after major\r\ntrauma or recent surgery (especially to eye or nervous system); acute\r\nbacterial endocarditis.</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(630, 'Hepatitis A Vaccine', 'Hepatitis A Vaccine \r\n\r\n<h5>Presentations</h5>\r\n<p>Hepatitis A is caused by hepatitis A virus. It is transmitted via the faecal–oral route\r\nfrom person to person through close physical contact and ingestion of contaminated\r\nfood and water. Those at increased risk of infection include parenteral drug abusers,\r\nindividuals who change sexual partners frequently, individuals exposed to untreated\r\nsewage, those living in closed communities, travellers to endemic countries, laboratory\r\nstaff working with the virus, patients with haemophilia treated with plasma-derived\r\nclotting factors, and individuals who work with primates. Patients with chronic liver\r\ndisease including chronic hepatitis B or chronic hepatitis C are at risk of severe liver\r\ndisease if infected with hepatitis A.\r\nIn highly endemic countries, exposure is almost universal before 10 years of age and\r\nlarge-scale immunization programmes should not be undertaken. In areas of\r\nintermediate endemicity with periodic outbreaks, control of hepatitis A may be\r\nachieved through widespread vaccination programmes, but is most successful in small,\r\nself-contained communities. In countries with low endemicity, vaccination for high-risk\r\npopulations may be recommended.\r\nSeveral vaccines, which provide long-lasting protection, are available but none are\r\nlicensed for use in children under 1 year of age; the dose of the vaccine and vaccination\r\nschedule varies between manufacturers. A single dose of vaccine provides a protective\r\nantibody response within a month; most manufacturers recommend a second dose 6–\r\n18 months later to ensure long-term protection.\r\nCombined vaccines are available, including inactivated hepatitis A with recombinant\r\nhepatitis B vaccine.\r\nInjection, inactivated hepatitis A virus</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Immunologicals</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>active immunization against hepatitis A</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Immunization against hepatitis A, by intramuscular injection, ADULT and CHILD\r\nover 1 year of age, single dose; a booster dose can be given 6–18 months\r\nafter the initial dose.\r\nNOTE. Various formulations of hepatitis A vaccines are available, which may contain\r\ndifferent adsorbents or concentrations of antigen. Consult manufacturer’s literature for\r\nfurther information about specific dosages, booster intervals, administration, and use in\r\nchildren.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>see presentation</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>see presentation</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>see presentation</p>\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(631, 'Hepatitis B Vaccine', 'Hepatitis B Vaccine \r\n\r\n<h5>Presentations</h5>\r\n<p>Hepatitis B is caused by hepatitis B virus. It is transmitted in blood and blood products,\r\nby sexual contact and by contact, with infectious body fluids. Persons at increased risk\r\nof infection because of their lifestyle, occupation or other factors, include parenteral\r\ndrug abusers, individuals who change sexual partners frequently, staff and inmates of\r\ncustodial institutions, health-care workers who are at risk of injury from blood-stained\r\nsharp instruments, dialysis patients, and haemophiliacs. Also at risk are babies born to\r\nmothers who are HbsAg-positive (hepatitis B virus surface antigen-positive), those\r\nhaving medical or dental procedures in countries with high prevalence, and travellers to\r\nendemic countries.\r\nWHO recommends hepatitis B vaccine is given as part of the national infant\r\nimmunization programme. Catch-up immunization should be considered for older age\r\ngroups, or high-risk individuals who have not been previously immunized in countries\r\nwith intermediate or low hepatitis B endemicity.\r\nTwo types of hepatitis B vaccines are available; plasma-derived and recombinant\r\nvaccines. Both types are highly effective but the recombinant vaccine is most\r\ncommonly used. Hepatitis B vaccine is available as a monovalent or a fixedcombination\r\npreparation with other antigens such as Haemophilus influenzae type b,\r\npoliomyelitis, diphtheria, pertussis, and tetanus. The monovalent vaccine should be\r\nused when immunizing infants at birth. Recommended schedules vary considerably\r\nbetween countries, but the minimum recommended interval between doses is 4 weeks.\r\nIn countries where a high proportion of hepatitis B infections are acquired perinatally, a\r\n3-dose or 4-dose schedule is recommended with the first dose given within 24 hours of\r\nbirth. The other doses are usually given at the same time as the diphtheria-tetanuspertussis\r\n(DTP) or other vaccines.\r\nA reduced immunogenicity of the vaccine may occur in individuals with\r\nimmunodeficiency including advanced HIV infection, diabetes, chronic liver disease or\r\nchronic renal failure.\r\nInjection, inactivated hepatitis B surface antigen adsorbed onto a mineral\r\ncarrier.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Immunologicals</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>active immunization against hepatitis B.</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Primary immunization of children against hepatitis B (3-dose schedule), by\r\nintramuscular injection, CHILD, 1 dose of 0.5 ml given between 6 weeks and\r\n15 years of age, followed by 2 doses, each of 0.5 ml given at intervals of\r\n4 weeks; alternatively, 1 dose of 0.5 ml at birth, followed by 2 doses, each of\r\n0.5 ml, given at 6 and 14 weeks of age.\r\nPrimary immunization of children against hepatitis B (4-dose schedule), by\r\nintramuscular injection, CHILD, 1 dose of 0.5 ml at birth, followed by 3 doses,\r\neach of 0.5 ml, at 6, 10, and 14 weeks of age.\r\nNOTE. Immunization with hepatitis B vaccine can be timed to correlate with the\r\ndiphtheria-tetanus-pertussis schedule; refer to current WHO advice for hepatitis B vaccine.\r\nImmunization of unimmunized high-risk persons against hepatitis B, by\r\nintramuscular injection, ADULT and CHILD over 15 years of age, 3 doses, each\r\nof 1 ml, with an interval of 1 month between the first and second dose and\r\n5–11 months between the second and third doses; CHILD under 15 years, 0.5 ml.\r\nNOTE. Different products may contain different concentrations of antigen. Consult\r\nmanufacturer’s literature for further information.\r\nADMINISTRATION. The vaccine should be given in the deltoid region in adults\r\nand older children; anterolateral thigh is the preferred site in infants and young\r\nchildren; it should not be injected into the buttock (vaccine efficacy is reduced).</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>see presentation</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>see introductory notes; also diabetes mellitus; chronic renal\r\nfailure; and chronic liver disease (reduced\r\nimmunogenicity).</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>see presentation</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(632, 'Hydralazine', 'Hydralazine\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 20 mg (hydrochloride) in ampoule.\r\nTablet: 25 mg; 50 mg (hydrochloride).</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Cardiovascular medicines</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>in combination therapy in moderate to severe hypertension,\r\nhypertensive crises; hypertension associated with pregnancy (including preeclampsia\r\nor eclampsia); heart failure</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Hypertension, by mouth, ADULT, 25 mg twice daily, increased if necessary to\r\nmaximum, 50 mg twice daily.\r\nHypertensive crisis (including during pregnancy), by slow intravenous injection,\r\nADULT, 5–10 mg diluted with 10 ml sodium chloride, 0.9%; if necessary\r\nmay be repeated after 20–30 minutes\r\nHypertensive crisis (including during pregnancy), by intravenous infusion, ADULT,\r\ninitially 200–300 micrograms/minute; usual maintenance dose\r\n50–150 micrograms/minute.\r\nHypertensive crisis (including during pregnancy), by intramuscular injection,\r\nADULT, 12.5 mg every 2 hours, repeated as necessary.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s\r\ndirections</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>tachycardia, palpitations, postural hypotension; fluid retention;\r\ngastrointestinal disturbances including anorexia, nausea, vomiting, diarrhoea,\r\nand rarely constipation; dizziness, flushing, headache; abnormal liver\r\nfunction, jaundice; systemic lupus erythematosus-like syndrome, particularly\r\nin women and slow acetylators; nasal congestion, agitation, anxiety,\r\npolyneuritis, peripheral neuritis, rash, fever, paraesthesia, arthralgia, myalgia,\r\nincreased lacrimation, dyspnoea; raised plasma creatinine, proteinuria,\r\nhaematuria; blood disorders including haemolytic anaemia, leukopenia, and\r\nthrombocytopenia</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>hepatic impairment; renal impairment (reduce dose);\r\ncoronary artery disease (may provoke angina; avoid after\r\nmyocardial infarction until stabilized); cerebrovascular disease; pregnancy\r\nand breastfeeding; occasionally over-rapid blood\r\npressure reduction even with low parenteral doses; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>idiopathic systemic lupus erythematosus, severe tachycardia,\r\nhigh output heart failure, myocardial insufficiency due to mechanical\r\nobstruction, cor pulmonale, dissecting aortic aneurysm, porphyria</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Enhanced hypotensive effect\r\nAlcohol Enhanced hypotensive effect\r\nAmiloride Enhanced hypotensive effect\r\nAmlodipine Enhanced hypotensive effect\r\nAtenolol Enhanced hypotensive effect\r\nChlorpromazine Enhanced hypotensive effect\r\nContraceptives, Oral Antagonism of hypotensive effect by estrogens\r\nDexamethasone Antagonism of hypotensive effect\r\nDiazepam Enhanced hypotensive effect\r\nEnalapril Enhanced hypotensive effect\r\nFluphenazine Enhanced hypotensive effect\r\nFurosemide Enhanced hypotensive effect\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\nHalothane Enhanced hypotensive effect\r\nHydrochlorothiazide Enhanced hypotensive effect\r\nHydrocortisone Antagonism of hypotensive effect\r\nIbuprofen Antagonism of hypotensive effect\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\nKetamine Enhanced hypotensive effect\r\nLevodopa Enhanced hypotensive effect\r\nMethyldopa Enhanced hypotensive effect\r\nNifedipine Enhanced hypotensive effect\r\nNitrous oxide Enhanced hypotensive effect\r\nPrednisolone Antagonism of hypotensive effect\r\nPropranolol Enhanced hypotensive effect\r\nSodium nitroprusside Enhanced hypotensive effect\r\nSpironolactone Enhanced hypotensive effect\r\nThiopental Enhanced hypotensive effect\r\nTimolol Enhanced hypotensive effect\r\nVerapamil Enhanced hypotensive effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Avoid during first and second trimesters; no reports\r\nof serious harm following use in third trimester</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Present in milk but not known to be harmful;\r\nmonitor infant</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild Reduce dose if creatinine clearance less\r\nthan 30 ml/minute</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Reduce dose</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(633, 'Hydrochlorothiazide', 'Hydrochlorothiazide\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet (scored): 25 mg.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Cardiovascular medicines; Diuretics</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>alone in mild hypertension, and in combination with other drugs in\r\nmoderate to severe hypertension; heart failure; oedema</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Hypertension, by mouth, ADULT, 12.5 mg daily, increased to 25–50 mg daily if\r\nnecessary.</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>fluid and electrolyte imbalance leading to dry mouth, thirst,\r\ngastrointestinal disturbances (including nausea, and vomiting), weakness,\r\nlethargy, drowsiness, seizures, headache, muscle pains or cramps,\r\nhypotension (including postural hypotension), oliguria, and arrhythmias;\r\nhypokalaemia, hypomagnesaemia, hyponatraemia, hypochloraemic alkalosis,\r\nhypercalcaemia; hyperglycaemia, hyperuricaemia, gout; rash,\r\nphotosensitivity; altered plasma lipid concentration; rarely impotence\r\n(reversible); blood disorders (including neutropenia, thrombocytopenia);\r\npancreatitis, intrahepatic cholestasis; acute renal failure; hypersensitivity\r\nreactions including pneumonitis, pulmonary oedema, and severe skin\r\nreactions</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>renal impairment; hepatic impairment;\r\npregnancy and breastfeeding; the elderly;\r\nelectrolytes may need to be monitored with high doses or in renal\r\nimpairment; may aggravate diabetes mellitus and gout; may exacerbate\r\nsystemic lupus erythematosus; porphyria; interactions</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>severe renal or severe hepatic impairment; hyponatraemia,\r\nhypercalcaemia, refractory hypokalaemia, symptomatic hyperuricaemia;\r\nAddison disease.</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Acetazolamide Increased risk of hypokalaemia\r\nAlcohol Enhanced hypotensive effect\r\nAllopurinol Increased risk of hypersensitivity, especially in renal impairment\r\nAmitriptyline Increased risk of postural hypotension\r\nAmlodipine Enhanced hypotensive effect\r\nAmphotericin B Increased risk of hypokalaemia\r\nAtenolol Enhanced hypotensive effect\r\nCalcium salts Increased risk of hypercalcaemia\r\nCarbamazepine Increased risk of hyponatraemia\r\nChlorpromazine Enhanced hypotensive effect\r\nCiclosporin Increased risk of nephrotoxicity and possibly hypermagnesaemia\r\nCisplatin Increased risk of nephrotoxicity and ototoxicity\r\nClomipramine Increased risk of postural hypotension\r\nContraceptives, Oral Antagonism of diuretic effect by estrogens\r\nDexamethasone Antagonism of diuretic effect; increased risk of hypokalaemia\r\nDiazepam Enhanced hypotensive effect\r\n*Digoxin Hypokalaemia caused by hydrochlorothiazide increases cardiac toxicity of digoxin\r\n* Enalapril Enhanced hypotensive effect\r\nErgocalciferol Increased risk of hypercalcaemia\r\nFluconazole Plasma concentration of fluconazole increased\r\nFluphenazine Enhanced hypotensive effect\r\nFurosemide Increased risk of hypokalaemia\r\nGlibenclamide Antagonism of hypoglycaemic effect\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\nHalothane Enhanced hypotensive effect\r\nHydralazine Enhanced hypotensive effect\r\nHydrocortisone Antagonism of diuretic effect; increased risk of hypokalaemia\r\nIbuprofen Risk of nephrotoxicity of ibuprofen increased; antagonism of diuretic effect\r\nInsulins Antagonism of hypoglycaemic effect\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\nKetamine Enhanced hypotensive effect\r\nLevodopa Enhanced hypotensive effect\r\nLidocaine Action of lidocaine antagonized by hypokalaemia caused by\r\nhydrochlorothiazide (interaction less likely when lidocaine used topically)\r\n*Lithium Reduced lithium excretion (increased plasma lithium\r\nconcentration and risk of toxicity); furosemide safer than hydrochlorothiazide\r\nMetformin Antagonism of hypoglycaemic effect\r\nMethyldopa Enhanced hypotensive effect\r\nNifedipine Enhanced hypotensive effect\r\nNitrous oxide Enhanced hypotensive effect\r\nPrednisolone Antagonism of diuretic effect; increased risk of hypokalaemia\r\nPropranolol Enhanced hypotensive effect\r\n*Quinidine Cardiac toxicity of quinidine increased by hypokalaemia caused by hydrochlorothiazide\r\nSalbutamol Increased risk of hypokalaemia with high doses of albutamol\r\nSodium nitroprusside Enhanced hypotensive effect\r\nThiopental Enhanced hypotensive effect\r\nTimolol Enhanced hypotensive effect\r\nVerapamil Enhanced hypotensive effect</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Not used to treat hypertension in pregnancy\r\nThird trimester: May cause neonatal\r\nthrombocytopenia</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Continue breastfeeding; may inhibit lactation</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Moderate Avoid; ineffective</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>Avoid in severe liver disease; hypokalaemia may\r\nprecipitate coma (potassium-sparing diuretic can\r\nprevent this); increased risk of hypomagnesaemia in\r\nalcoholic cirrhosis</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(634, 'Hydrocortisone', 'Hydrocortisone\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 100 mg (as sodium succinate) in vial.</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>???</p>\r\n\r\n\r\n<h5>Hepatic impairment</h5>\r\n<p>???</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(635, 'Imipenem + cilastatin', 'Imipenem + cilastatin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Powder for injection: 250 mg (as monohydrate) + 250 mg (as sodium salt); 500 mg (as monohydrate) + 500 mg (as sodium salt) in vial.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anti-infective medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"severe aerobic and anaerobic Gram-positive and Gram-negative\r\ninfections in hospital (not indicated for CNS infections), including\r\ninfections caused by resistant Pseudomonas and Acinetobacter spp."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"NOTE. All doses are in terms of imipenem.\r\nInfections due to susceptible organisms, by intravenous infusion, ADULT, 1–2 g daily in 3–4 divided doses; less susceptible organisms, ADULT, up to 50 mg/kg daily (maximum, 4 g daily) in 3–4 divided doses; CHILD over 3 months, 60 mg/kg daily (maximum, 2 g daily) in 4 divided doses; CHILD over 40 kg, adult dose.\r\nRECONSTITUTION AND ADMINISTRATION. According to manufacturer’s directions.\r\nThe intramuscular preparation must not be administered intravenously. The infusion preparation must not be administered intramuscularly."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"nausea, vomiting, and diarrhoea; antibiotic-associated colitis;\r\ntaste disturbances; tooth or tongue discoloration, hearing loss; blood\r\ndisorders, positive Coombs’ test; allergic reactions including rash, pruritus, urticaria, erythema multiforme (Stevens-Johnson syndrome), fever, and anaphylactic reactions; rarely toxic epidermal necrolysis, and exfoliative dermatitis; myoclonic activity, convulsions, confusion, and mental disturbances; slight increase in liver enzymes and bilirubin, rarely hepatitis; increases in serum creatinine and blood urea; red coloration of urine in children; erythema, pain and induration, and thrombophlebitis at injection\r\nsites."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"sensitivity to Beta Lactam antibacterials (avoid if history of\r\nimmediate hypersensitivity reaction; see introductory note above); renal impairment; central nervous system disorders, such as epilepsy; pregnancy ;breastfeeding; interactions."\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>Contraceptives, Oral Contraceptive effect of estrogens possibly reduced (risk probably small)\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Use only if potential benefit outweighs risk (toxicity in animal studies)\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Present in milk; manufacturer advises avoid\r\n</p>\r\n\r\n\r\n<h5>renal toxicity</h5>\r\n<p>Mild Reduce dose\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(636, 'Levodopa + carbidopa', 'Levodopa + carbidopa\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Tablet: 100 mg + 10 mg; 250 mg + 25 mg\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Antiparkinsonism medicines\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"Carbidopa is a representative peripheral dopadecarboxylase\r\ninhibitor. Various medicines can serve as alternatives.\r\nUses: all forms of parkinsonism other than drug-induced."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>"Parkinsonism, by mouth, ADULT, expressed in terms of levodopa, initially 100 mg (with carbidopa 10 mg) twice daily, increased by 100 mg (with carbidopa 10 mg) every few days as necessary, to a maximum of levodopa 1.5 g.                                                                              ADMINISTRATION. Optimum daily dose must be determined for each patient by careful monitoring and be taken after meals.\r\nNOTE. Carbidopa, 70–100 mg daily, is necessary for full inhibition of peripheral dopadecarboxylase."\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"nausea, anorexia, and vomiting, particularly at the start of\r\ntreatment; postural hypotension at the start of treatment, particularly in the elderly and those receiving antihypertensives; excessive drowsiness and sudden onset of sleep (warn patient of these effects); confusion, vivid dreams, dizziness, tachycardia, arrhythmias; reddish discoloration of body\r\nfluids; insomnia, headache, flushing, gastrointestinal bleeding, peripheral neuropathy; taste disturbances, pruritus, rash, liver enzyme changes; psychiatric symptoms including psychosis, depression, and hallucinations; delusions and neurological disturbances including dyskinesias (may be doselimiting);\r\npainful dystonic spasms (“end-of-dose” effects) and (“on-off”\r\neffects) after prolonged treatment (see note above); neuroleptic malignant syndrome (on sudden withdrawal); rarely hypersensitivity."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"pulmonary disease, peptic ulceration, cardiovascular disease\r\n(including previous myocardial infarction); diabetes mellitus, osteomalacia, open-angle glaucoma, history of melanoma (risk of activation), psychiatric illness (avoid if severe); close monitoring of hepatic, haematological, psychiatric, cardiovascular, and renal function required in long-term therapy; the elderly; avoid rapid dose increases; warn patients to resume normal activities gradually; avoid abrupt withdrawal"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>"concurrent use of monoamine oxidase inhibitors; angle closure\r\nglaucoma; confirmed or suspected malignant melanoma."\r\n</p>\r\n\r\n\r\n<h5>interactions</h5>\r\n<p>"Acetazolamide Enhanced hypotensive effect\r\nAmiloride Enhanced hypotensive effect\r\nAmlodipine Enhanced hypotensive effect\r\nAtenolol Enhanced hypotensive effect\r\nAtropine Absorption of levodopa possibly reduced\r\nBiperiden Absorption of levodopa possibly reduced\r\nChlorpromazine Antagonism of effects of levodopa\r\nDiazepam Possibly antagonism of levodopa effects\r\nEnalapril Enhanced hypotensive effect\r\nFerrous salts Absorption of levodopa may be reduced by oral ferrous salts\r\nFluphenazine Antagonism of effects of levodopa\r\nFurosemide Enhanced hypotensive effect\r\nGlyceryl trinitrate Enhanced hypotensive effect\r\nHaloperidol Antagonism of effects of levodopa\r\n* Halothane Risk of arrhythmias\r\nHydralazine Enhanced hypotensive effect\r\nHydrochlorothiazide Enhanced hypotensive effect\r\nIsosorbide dinitrate Enhanced hypotensive effect\r\nMethyldopa Enhanced hypotensive effect; antagonism of\r\nantiparkinsonism effect\r\nNifedipine Enhanced hypotensive effect\r\nPhenytoin Possibly reduced effects of levodopa\r\nPropranolol Enhanced hypotensive effect\r\nPyridoxine Antagonism of effects of levodopa unless carbidopa also given\r\nSodium nitroprusside Enhanced hypotensive effect\r\nSpironolactone Enhanced hypotensive effect\r\nTimolol Enhanced hypotensive effect\r\nVerapamil Enhanced hypotensive effect"\r\n</p>\r\n\r\n\r\n<h5>Pregnancy</h5>\r\n<p>Toxicity in animal studies\r\n</p>\r\n\r\n\r\n<h5>breastfeeding</h5>\r\n<p>Present in milk; levodopa may inhibit lactation\r\n</p>\r\n\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(637, 'Lidocaine + epinephrine (adrenaline)', 'Lidocaine + epinephrine (adrenaline)\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>"Dental cartridge: 2% (hydrochloride) + epinephrine 1:80 000.\r\nInjection: 1%; 2% (hydrochloride) + epinephrine 1:200 000 in vial"\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Anaesthetics\r\n</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"surface anaesthesia of mucous membranes; infiltration anaesthesia;\r\nperipheral and sympathetic nerve block; dental anaesthesia; spinal\r\nanaesthesia; intravenous regional anaesthesia; arrhythmias"\r\n</p>\r\n\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1);
INSERT INTO `drug` (`id_drug`, `drug_name`, `drug_description`, `time_created`, `brandname_id`, `drugclass_id`, `drugcategory_id`) VALUES
(638, 'Neomycin sulfate + bacitracin', 'Neomycin sulfate + bacitracin\r\n\r\n\r\n<h5>Presentations</h5>\r\n<p>Ointment: 5 mg neomycin sulfate + 250 IU bacitracin zinc/g.\r\n</p>\r\n\r\n\r\n<h5>class</h5>\r\n<p>Dermatological medicines (topical)</p>\r\n\r\n\r\n<h5>Indication(s)</h5>\r\n<p>"Bacitracin is a representative topical antibacterial. Various medicines can serve as alternatives.\r\nUses: superficial bacterial infections of the skin due to staphylococci and streptococci."\r\n</p>\r\n\r\n\r\n<h5>Dosage and administration</h5>\r\n<p>Bacterial skin infections (short-term use), ADULT and CHILD over 2 years, apply sparingly to the affected areas 3 times daily.\r\n</p>\r\n\r\n\r\n<h5>Adverse effects</h5>\r\n<p>"sensitization, especially to neomycin, causing reddening and\r\nscaling; anaphylaxis reported rarely; systemic absorption leading to\r\nirreversible ototoxicity, particularly in children, the elderly, and in those with renal impairment."\r\n</p>\r\n\r\n\r\n<h5>Precautions</h5>\r\n<p>"avoid application to substantial areas of skin or to broken skin\r\n(risk of significant systemic absorption); overgrowth of resistant organisms on prolonged use"\r\n</p>\r\n\r\n\r\n<h5>Contra-indications</h5>\r\n<p>neonates\r\n</p>\r\n\r\n', '2013-11-21 22:03:04', 1, NULL, 1),
(639, 'Aphrodisiac', 'Afro', '2014-01-22 11:03:36', 1, NULL, 2),
(640, 'Immunology', 'Immune system', '2014-01-22 19:39:09', 3, NULL, 3),
(641, 'Jedi Jedi', 'Sugar', '2014-01-22 19:50:33', 2, NULL, 6),
(642, 'Viagra', 'Viagra', '2014-01-22 19:53:09', 3, NULL, 3),
(643, 'indian hemp', 'lajdllaj', '2014-01-22 19:57:15', 3, NULL, 5),
(644, 'Good news', 'Goody', '2014-01-22 20:49:31', 4, NULL, 2),
(645, 'asdfadfasdf', 'asdfasfsadfsa', '2014-01-22 22:02:51', 4, NULL, 4),
(646, 'Vitamin C', 'Vitamin C', '2014-01-22 22:08:01', 3, NULL, 2),
(647, 'coartem', 'malaria drug', '2014-01-22 22:08:59', 1, NULL, 6),
(648, 'Piriton', 'Piriton for sleep', '2014-01-22 22:10:33', 4, NULL, 2),
(649, 'Strepsils', 'For cough and catarrh', '2014-02-05 10:33:48', 4, NULL, 3),
(650, 'ciprofloxacin', 'an antibiotic of the quinolone family. it is bactericidal.', '2014-02-10 22:24:25', 7, NULL, 3),
(651, 'CIPROTAB', 'CCfvgfggggfkjgff\nhhhhh\njjjjj\n', '2014-02-20 20:44:01', 8, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drugailment`
--

CREATE TABLE IF NOT EXISTS `drugailment` (
  `id_drugailment` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  `ailmentstageid_ailmentstage` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_drugailment`),
  KEY `FKdrugailmen819159` (`drugid_drug`),
  KEY `FKdrugailmen672913` (`ailmentstageid_ailmentstage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drugavailability`
--

CREATE TABLE IF NOT EXISTS `drugavailability` (
  `id_drugavailability` int(10) NOT NULL AUTO_INCREMENT,
  `pharmacyid_pharmacy` int(10) NOT NULL,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_drugavailability`),
  KEY `FKdrugavaila465729` (`pharmacyid_pharmacy`),
  KEY `FKdrugavaila63485` (`drugid_drug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `drugavailability`
--

INSERT INTO `drugavailability` (`id_drugavailability`, `pharmacyid_pharmacy`, `drugid_drug`) VALUES
(1, 1, 488),
(2, 2, 489),
(3, 3, 488),
(4, 3, 489),
(5, 5, 488),
(6, 6, 488),
(7, 7, 489),
(8, 8, 489),
(9, 9, 490),
(10, 9, 488),
(11, 12, 488),
(12, 18, 488),
(13, 13, 488),
(14, 24, 488),
(15, 35, 488),
(16, 35, 488),
(17, 39, 488),
(18, 36, 488),
(19, 40, 488),
(20, 25, 488),
(28, 1, 1),
(29, 1, 489),
(30, 1, 491);

-- --------------------------------------------------------

--
-- Table structure for table `drugcategory`
--

CREATE TABLE IF NOT EXISTS `drugcategory` (
  `id_drugcategory` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  `brandname_id` int(11) NOT NULL,
  PRIMARY KEY (`id_drugcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `drugcategory`
--

INSERT INTO `drugcategory` (`id_drugcategory`, `name`, `description`, `brandname_id`) VALUES
(1, 'Panadol', 'CARDIOVASCULAR/VASCULAR DISEASE', 1),
(2, 'Vita Tab', 'DENTAL/MAXILLOFACIAL SURGERIES', 3),
(3, 'Alomo Bitters', 'DERMATOLOGY', 2),
(4, 'Halfan', 'ENDOCRINOLOGY', 3),
(5, 'Maladox', 'GASTROENTEROLOGY', 1),
(6, 'Benylin', 'HEMATOLOGY', 5),
(7, 'Septrin', 'Yea its empty', 4),
(9, 'Aerosol', NULL, 1),
(10, 'Erythromycin', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `drugcategory_drug`
--

CREATE TABLE IF NOT EXISTS `drugcategory_drug` (
  `drugcategory_id` int(11) NOT NULL,
  `id_drugcategorydrug` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  PRIMARY KEY (`id_drugcategorydrug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `drugcategory_drug`
--

INSERT INTO `drugcategory_drug` (`drugcategory_id`, `id_drugcategorydrug`, `drug_id`) VALUES
(1, 1, 1),
(1, 2, 491),
(1, 3, 497),
(1, 4, 516),
(1, 5, 520),
(4, 6, 503),
(4, 7, 520),
(4, 8, 517),
(4, 9, 518),
(3, 10, 509),
(3, 11, 519),
(3, 12, 518),
(3, 13, 520),
(2, 14, 1),
(2, 15, 497),
(2, 16, 520),
(2, 18, 516),
(2, 19, 509),
(5, 21, 497),
(5, 22, 518),
(5, 23, 491),
(6, 24, 1),
(6, 25, 515),
(7, 26, 516),
(7, 27, 517),
(7, 28, 518),
(7, 29, 519),
(6, 30, 491),
(9, 31, 520),
(10, 32, 518),
(9, 33, 518),
(10, 34, 517),
(9, 36, 489),
(4, 37, 489),
(10, 38, 1),
(4, 39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drugclass`
--

CREATE TABLE IF NOT EXISTS `drugclass` (
  `id_drugclass` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_drugclass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `drugclass`
--

INSERT INTO `drugclass` (`id_drugclass`, `name`, `description`) VALUES
(3, 'Anti-infective medicines', 'Anti-infective medicines'),
(4, 'Ophthalmological preparations', 'Ophthalmological preparations'),
(5, 'Antidotes', 'Antidotes'),
(6, 'Analgesics', NULL),
(7, 'antipyretics', NULL),
(8, 'NSAIMs', NULL),
(9, 'DMARDs', NULL),
(10, 'Cardiovascular medicines', NULL),
(11, 'Muscle relaxants (peripherally-acting)', NULL),
(12, 'cholinesterase inhibitors', NULL),
(13, 'Dermatological medicines (topical)', NULL),
(14, 'Gastrointestinal medicines', NULL),
(15, 'Psychotherapeutic medicines', NULL),
(16, 'Immunologicals', NULL),
(17, 'Antimalarials', NULL),
(18, 'Vitamins and minerals', NULL),
(19, 'Steady and slow', 'head on head'),
(20, 'antimicrobial', '');

-- --------------------------------------------------------

--
-- Table structure for table `drugclass_drug`
--

CREATE TABLE IF NOT EXISTS `drugclass_drug` (
  `drugclassid_drugclass` int(10) NOT NULL,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`drugclassid_drugclass`,`drugid_drug`),
  KEY `FKdrugclass_643182` (`drugclassid_drugclass`),
  KEY `FKdrugclass_836699` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugclass_drug`
--

INSERT INTO `drugclass_drug` (`drugclassid_drugclass`, `drugid_drug`) VALUES
(3, 1),
(3, 486),
(3, 488),
(3, 490),
(3, 643),
(3, 644),
(3, 645),
(3, 649),
(3, 651),
(4, 489),
(4, 491),
(4, 515),
(5, 487),
(5, 642),
(5, 645),
(5, 649),
(6, 488),
(6, 643),
(6, 644),
(6, 645),
(6, 648),
(7, 488),
(7, 643),
(8, 488),
(9, 488),
(10, 488),
(15, 647),
(17, 645),
(17, 649),
(18, 646),
(18, 647),
(20, 650),
(20, 651);

-- --------------------------------------------------------

--
-- Table structure for table `drugcomment`
--

CREATE TABLE IF NOT EXISTS `drugcomment` (
  `id_drugcomment` int(10) NOT NULL AUTO_INCREMENT,
  `comment` mediumtext,
  `memberid_member` int(10) NOT NULL,
  `drugid_drug` int(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_drugcomment`),
  KEY `FKdrugcommen713059` (`memberid_member`),
  KEY `FKdrugcommen111423` (`drugid_drug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `drugcomment`
--

INSERT INTO `drugcomment` (`id_drugcomment`, `comment`, `memberid_member`, `drugid_drug`, `time_created`) VALUES
(1, 'this is just not right...', 6, 486, '2014-01-06 15:30:25'),
(2, 'This is not going to be funny', 6, 1, '2014-01-09 14:11:31'),
(3, 'this is so ridiculous', 18, 643, '2014-01-22 22:12:11'),
(4, 'lmaoooo....like seriously????', 18, 643, '2014-01-22 22:12:19'),
(5, 'They were probably joking', 18, 643, '2014-01-22 22:12:29'),
(6, 'this is getting more interesting', 18, 1, '2014-03-01 07:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `drugdosing`
--

CREATE TABLE IF NOT EXISTS `drugdosing` (
  `id_drugdosing` int(10) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  `dosingtypeid_dosingtype` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_drugdosing`),
  KEY `FKdrugdosing681264` (`drugid_drug`),
  KEY `FKdrugdosing826934` (`dosingtypeid_dosingtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drugindication`
--

CREATE TABLE IF NOT EXISTS `drugindication` (
  `id_drugindication` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id_drugindication`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `drugindication`
--

INSERT INTO `drugindication` (`id_drugindication`, `name`, `description`) VALUES
(1, 'Malaria', 'Curing malaria'),
(2, 'Typhoid', 'Typhooid'),
(3, 'Cholera', ''),
(4, 'HIV', '');

-- --------------------------------------------------------

--
-- Table structure for table `drugindication_drug`
--

CREATE TABLE IF NOT EXISTS `drugindication_drug` (
  `drugindication_id` int(11) NOT NULL,
  `id_drugindicationdrug` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  PRIMARY KEY (`id_drugindicationdrug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `drugindication_drug`
--

INSERT INTO `drugindication_drug` (`drugindication_id`, `id_drugindicationdrug`, `drug_id`) VALUES
(1, 1, 491),
(1, 2, 517),
(1, 3, 519),
(1, 4, 520),
(1, 5, 497),
(2, 6, 497),
(2, 7, 515),
(2, 8, 516),
(2, 9, 517),
(2, 10, 520),
(3, 11, 491),
(3, 12, 497),
(3, 13, 515),
(3, 14, 520),
(3, 15, 518),
(3, 16, 516),
(3, 17, 517),
(4, 18, 1),
(4, 19, 491),
(4, 20, 497),
(4, 21, 515),
(4, 22, 503),
(4, 23, 509),
(4, 24, 520),
(1, 25, 503),
(1, 26, 509),
(3, 27, 509),
(3, 28, 503);

-- --------------------------------------------------------

--
-- Table structure for table `drug_search`
--

CREATE TABLE IF NOT EXISTS `drug_search` (
  `id_drugsearch` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_drugsearch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=179 ;

--
-- Dumping data for table `drug_search`
--

INSERT INTO `drug_search` (`id_drugsearch`, `drug_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`, `user_id`) VALUES
(1, 618, '2014-02-04 20:32:37', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 5),
(2, 488, '2014-02-04 20:40:01', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 0),
(3, 490, '2014-02-04 20:40:25', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 0),
(4, 641, '2014-02-04 20:40:45', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 0),
(5, 502, '2014-02-04 20:40:50', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 0),
(6, 618, '2014-02-04 20:50:35', '192.26.32.88', 'Enugu', 3.56799, 9.82938, 18),
(7, 498, '2014-02-05 08:03:34', '::1', 'Enugu', 3.56799, 9.82938, 0),
(8, 618, '2014-02-05 08:08:17', NULL, 'Enugu', 3.56799, 9.82938, 0),
(9, 619, '2014-02-05 08:09:09', '::1', 'Enugu', 3.56799, 9.82938, 0),
(10, 618, '2014-02-05 10:12:49', '::1', ', [] -  () ', 0, 0, 0),
(11, 487, '2014-02-05 10:13:11', '::1', ', [] -  () ', 0, 0, 0),
(12, 487, '2014-02-05 10:14:42', '::1', ', [] -  () ', 0, 0, 0),
(13, 618, '2014-02-05 10:15:05', '::1', ', [] -  () ', 0, 0, 0),
(14, 596, '2014-02-05 10:16:07', '::1', ', [] -  () ', 0, 0, 0),
(15, 487, '2014-02-05 10:16:17', '::1', ', [] -  () ', 0, 0, 0),
(16, 492, '2014-02-05 10:21:22', '::1', 'Lagos', 3.8982, 6.98924, 0),
(17, 528, '2014-02-05 10:21:24', '::1', 'Lagos', 3.8982, 6.98924, 0),
(18, 649, '2014-02-05 10:34:34', '::1', 'Lagos', 3.8982, 6.98924, 0),
(19, 618, '2014-02-05 10:35:26', '192.168.1.24', '-, -[-] - - (-) ', 0, 0, 0),
(20, 571, '2014-02-05 10:38:34', '::1', 'Lagos', 3.8982, 6.98924, 0),
(21, 488, '2014-02-05 10:39:39', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(22, 493, '2014-02-05 10:41:09', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(23, 618, '2014-02-05 11:13:40', '::1', 'Lagos', 3.8982, 6.98924, 0),
(24, 618, '2014-02-05 11:14:15', '::1', 'Lagos', 3.8982, 6.98924, 0),
(25, 649, '2014-02-05 11:35:14', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(26, 488, '2014-02-05 11:36:23', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(27, 644, '2014-02-05 11:36:31', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(28, 504, '2014-02-05 11:36:41', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(29, 649, '2014-02-05 11:36:48', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(30, 500, '2014-02-05 11:37:36', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(31, 496, '2014-02-05 11:38:08', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(32, 619, '2014-02-05 11:40:03', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(33, 609, '2014-02-05 11:40:21', '192.168.1.24', '-, -[-] - - (-) -', 0, 0, 0),
(34, 590, '2014-02-05 16:38:46', '::1', 'Lagos', 3.8982, 6.98924, 0),
(35, 505, '2014-02-05 16:42:43', '::1', 'Lagos', 3.8982, 6.98924, 0),
(36, 487, '2014-02-05 16:43:15', '::1', 'Lagos', 3.8982, 6.98924, 18),
(37, 521, '2014-02-08 07:41:34', '::1', 'Lagos', 3.39583, 6.45306, 0),
(38, 487, '2014-02-10 21:20:15', '::1', 'Lagos', 3.39583, 6.45306, 0),
(39, 488, '2014-02-10 22:00:13', '::1', 'Lagos', 3.39583, 6.45306, 0),
(40, 549, '2014-02-10 22:24:48', '::1', 'Lagos', 3.39583, 6.45306, 0),
(41, 650, '2014-02-10 22:25:06', '::1', 'Lagos', 3.39583, 6.45306, 0),
(42, 618, '2014-02-14 14:42:19', '::1', 'Lagos', 3.39583, 6.45306, 0),
(43, 618, '2014-02-15 22:13:43', '::1', 'Lagos', 3.39583, 6.45306, 0),
(44, 618, '2014-02-15 22:38:14', '::1', 'Lagos', 3.39583, 6.45306, 0),
(45, 618, '2014-02-15 22:47:28', '::1', 'Lagos', 3.39583, 6.45306, 0),
(46, 618, '2014-02-15 22:48:10', '::1', 'Lagos', 3.39583, 6.45306, 0),
(47, 488, '2014-02-15 22:49:32', '::1', 'Lagos', 3.39583, 6.45306, 0),
(48, 618, '2014-02-15 22:59:51', '::1', 'Lagos', 3.39583, 6.45306, 0),
(49, 618, '2014-02-16 10:04:23', '::1', 'Lagos', 3.39583, 6.45306, 0),
(50, 618, '2014-02-16 10:05:45', '::1', 'Lagos', 3.39583, 6.45306, 0),
(51, 618, '2014-02-16 10:06:12', '::1', 'Lagos', 3.39583, 6.45306, 0),
(52, 1, '2014-02-16 10:06:49', '::1', 'Lagos', 3.39583, 6.45306, 0),
(53, 618, '2014-02-16 10:07:22', '::1', 'Lagos', 3.39583, 6.45306, 0),
(54, 1, '2014-02-16 10:07:49', '::1', 'Lagos', 3.39583, 6.45306, 0),
(55, 618, '2014-02-16 10:10:13', '::1', 'Lagos', 3.39583, 6.45306, 0),
(56, 523, '2014-02-16 12:41:49', '::1', 'Lagos', 3.39583, 6.45306, 0),
(57, 1, '2014-02-16 12:42:08', '::1', 'Lagos', 3.39583, 6.45306, 0),
(58, 649, '2014-02-16 12:42:17', '::1', 'Lagos', 3.39583, 6.45306, 0),
(59, 618, '2014-02-16 12:49:44', '::1', 'Lagos', 3.39583, 6.45306, 0),
(60, 489, '2014-02-16 12:50:29', '::1', 'Lagos', 3.39583, 6.45306, 0),
(61, 488, '2014-02-16 14:17:03', '::1', 'Lagos', 3.39583, 6.45306, 0),
(62, 618, '2014-02-16 16:37:31', '::1', 'Lagos', 3.39583, 6.45306, 0),
(63, 488, '2014-02-16 16:37:36', '::1', 'Lagos', 3.39583, 6.45306, 0),
(64, 641, '2014-02-16 16:37:42', '::1', 'Lagos', 3.39583, 6.45306, 0),
(65, 494, '2014-02-16 16:38:01', '::1', 'Lagos', 3.39583, 6.45306, 0),
(66, 498, '2014-02-16 16:41:36', '::1', 'Lagos', 3.39583, 6.45306, 0),
(67, 488, '2014-02-16 19:21:57', '::1', 'Lagos', 3.39583, 6.45306, 0),
(68, 618, '2014-02-17 05:11:07', '::1', 'Lagos', 3.39583, 6.45306, 0),
(69, 488, '2014-02-17 05:11:14', '::1', 'Lagos', 3.39583, 6.45306, 0),
(70, 502, '2014-02-17 05:11:26', '::1', 'Lagos', 3.39583, 6.45306, 0),
(71, 641, '2014-02-17 05:11:31', '::1', 'Lagos', 3.39583, 6.45306, 0),
(72, 641, '2014-02-17 05:12:03', '::1', 'Lagos', 3.39583, 6.45306, 0),
(73, 497, '2014-02-17 19:51:54', '::1', 'Lagos', 3.39583, 6.45306, 0),
(74, 491, '2014-02-17 19:51:59', '::1', 'Lagos', 3.39583, 6.45306, 0),
(75, 488, '2014-02-17 19:52:33', '::1', 'Lagos', 3.39583, 6.45306, 0),
(76, 618, '2014-02-17 19:53:12', '::1', 'Lagos', 3.39583, 6.45306, 0),
(77, 509, '2014-02-20 19:50:47', '::1', 'Lagos', 3.39583, 6.45306, 18),
(78, 651, '2014-02-20 20:44:44', '::1', 'Lagos', 3.39583, 6.45306, 0),
(79, 491, '2014-02-26 05:35:48', '::1', 'Lagos', 3.39583, 6.45306, 0),
(80, 1, '2014-02-26 05:35:57', '::1', 'Lagos', 3.39583, 6.45306, 0),
(81, 491, '2014-02-26 05:36:04', '::1', 'Lagos', 3.39583, 6.45306, 0),
(82, 491, '2014-02-26 05:44:53', '::1', 'Lagos', 3.39583, 6.45306, 0),
(83, 491, '2014-02-26 08:53:24', '::1', 'Lagos', 3.39583, 6.45306, 0),
(84, 491, '2014-02-26 08:53:50', '::1', 'Lagos', 3.39583, 6.45306, 0),
(85, 1, '2014-02-26 08:54:03', '::1', 'Lagos', 3.39583, 6.45306, 0),
(86, 491, '2014-02-26 16:27:43', '::1', 'Lagos', 3.39583, 6.45306, 0),
(87, 491, '2014-02-26 16:28:34', '::1', 'Lagos', 3.39583, 6.45306, 0),
(88, 491, '2014-02-26 16:29:44', '::1', 'Lagos', 3.39583, 6.45306, 0),
(89, 491, '2014-02-26 16:32:19', '::1', 'Lagos', 3.39583, 6.45306, 0),
(90, 491, '2014-02-26 16:32:57', '::1', 'Lagos', 3.39583, 6.45306, 0),
(91, 517, '2014-02-26 16:39:04', '::1', 'Lagos', 3.39583, 6.45306, 0),
(92, 1, '2014-02-26 16:39:40', '::1', 'Lagos', 3.39583, 6.45306, 0),
(93, 491, '2014-02-26 16:39:53', '::1', 'Lagos', 3.39583, 6.45306, 0),
(94, 517, '2014-02-26 16:39:58', '::1', 'Lagos', 3.39583, 6.45306, 0),
(95, 491, '2014-02-26 17:59:21', '::1', 'Lagos', 3.39583, 6.45306, 0),
(96, 491, '2014-02-26 18:01:33', '::1', 'Lagos', 3.39583, 6.45306, 0),
(97, 1, '2014-02-26 18:01:58', '::1', 'Lagos', 3.39583, 6.45306, 0),
(98, 497, '2014-02-26 18:02:07', '::1', 'Lagos', 3.39583, 6.45306, 0),
(99, 1, '2014-02-26 18:02:13', '::1', 'Lagos', 3.39583, 6.45306, 0),
(100, 518, '2014-02-26 18:02:20', '::1', 'Lagos', 3.39583, 6.45306, 0),
(101, 491, '2014-02-26 22:55:40', '::1', 'Lagos', 3.39583, 6.45306, 0),
(102, 509, '2014-02-26 22:55:55', '::1', 'Lagos', 3.39583, 6.45306, 0),
(103, 491, '2014-02-26 23:08:20', '::1', 'Lagos', 3.39583, 6.45306, 0),
(104, 1, '2014-02-26 23:08:40', '::1', 'Lagos', 3.39583, 6.45306, 0),
(105, 515, '2014-02-26 23:09:27', '::1', 'Lagos', 3.39583, 6.45306, 0),
(106, 491, '2014-02-26 23:10:44', '::1', 'Lagos', 3.39583, 6.45306, 0),
(107, 520, '2014-02-26 23:11:02', '::1', 'Lagos', 3.39583, 6.45306, 0),
(108, 491, '2014-02-27 07:29:48', '::1', 'Lagos', 3.39583, 6.45306, 0),
(109, 509, '2014-02-27 07:30:05', '::1', 'Lagos', 3.39583, 6.45306, 0),
(110, 1, '2014-02-27 07:30:17', '::1', 'Lagos', 3.39583, 6.45306, 0),
(111, 517, '2014-02-27 07:30:36', '::1', 'Lagos', 3.39583, 6.45306, 0),
(112, 515, '2014-02-27 07:31:52', '::1', 'Lagos', 3.39583, 6.45306, 0),
(113, 516, '2014-02-27 07:32:14', '::1', 'Lagos', 3.39583, 6.45306, 0),
(114, 491, '2014-02-27 07:35:40', '::1', 'Lagos', 3.39583, 6.45306, 0),
(115, 509, '2014-02-27 07:35:47', '::1', 'Lagos', 3.39583, 6.45306, 0),
(116, 503, '2014-02-27 07:37:17', '::1', 'Lagos', 3.39583, 6.45306, 0),
(117, 491, '2014-02-27 18:58:33', '::1', 'Lagos', 3.39583, 6.45306, 0),
(118, 515, '2014-02-27 19:01:57', '::1', 'Lagos', 3.39583, 6.45306, 0),
(119, 515, '2014-02-27 19:05:19', '::1', 'Lagos', 3.39583, 6.45306, 0),
(120, 491, '2014-02-27 19:17:39', '::1', 'Lagos', 3.39583, 6.45306, 0),
(121, 515, '2014-02-27 19:17:48', '::1', 'Lagos', 3.39583, 6.45306, 0),
(122, 509, '2014-02-27 19:17:55', '::1', 'Lagos', 3.39583, 6.45306, 0),
(123, 491, '2014-02-27 19:19:22', '::1', 'Lagos', 3.39583, 6.45306, 0),
(124, 491, '2014-02-27 19:19:29', '::1', 'Lagos', 3.39583, 6.45306, 0),
(125, 515, '2014-02-27 19:19:35', '::1', 'Lagos', 3.39583, 6.45306, 0),
(126, 491, '2014-02-27 19:28:52', '::1', 'Lagos', 3.39583, 6.45306, 0),
(127, 491, '2014-02-27 19:43:36', '::1', 'Lagos', 3.39583, 6.45306, 0),
(128, 491, '2014-02-27 20:31:12', '::1', 'Lagos', 3.39583, 6.45306, 0),
(129, 515, '2014-02-27 21:10:48', '::1', 'Lagos', 3.39583, 6.45306, 0),
(130, 515, '2014-02-27 21:12:12', '::1', 'Lagos', 3.39583, 6.45306, 0),
(131, 515, '2014-02-27 21:12:53', '::1', 'Lagos', 3.39583, 6.45306, 0),
(132, 1, '2014-02-27 21:38:11', '::1', 'Lagos', 3.39583, 6.45306, 0),
(133, 491, '2014-02-27 21:46:02', '::1', 'Lagos', 3.39583, 6.45306, 0),
(134, 491, '2014-02-27 21:47:55', '::1', 'Lagos', 3.39583, 6.45306, 0),
(135, 491, '2014-02-27 21:49:51', '::1', 'Lagos', 3.39583, 6.45306, 0),
(136, 515, '2014-02-27 21:50:03', '::1', 'Lagos', 3.39583, 6.45306, 0),
(137, 491, '2014-02-27 21:50:27', '::1', 'Lagos', 3.39583, 6.45306, 0),
(138, 515, '2014-02-27 21:56:42', '::1', 'Lagos', 3.39583, 6.45306, 0),
(139, 491, '2014-02-27 22:05:59', '::1', 'Lagos', 3.39583, 6.45306, 0),
(140, 489, '2014-02-27 22:06:05', '::1', 'Lagos', 3.39583, 6.45306, 0),
(141, 491, '2014-02-27 22:10:45', '::1', 'Lagos', 3.39583, 6.45306, 0),
(142, 489, '2014-02-27 22:10:55', '::1', 'Lagos', 3.39583, 6.45306, 0),
(143, 491, '2014-02-27 22:11:33', '::1', 'Lagos', 3.39583, 6.45306, 0),
(144, 489, '2014-02-27 22:12:00', '::1', 'Lagos', 3.39583, 6.45306, 0),
(145, 491, '2014-02-27 22:15:01', '::1', 'Lagos', 3.39583, 6.45306, 0),
(146, 491, '2014-02-27 22:15:39', '::1', 'Lagos', 3.39583, 6.45306, 0),
(147, 515, '2014-02-27 22:15:52', '::1', 'Lagos', 3.39583, 6.45306, 0),
(148, 489, '2014-02-27 22:17:41', '::1', 'Lagos', 3.39583, 6.45306, 0),
(149, 1, '2014-02-27 22:18:58', '::1', 'Lagos', 3.39583, 6.45306, 0),
(150, 1, '2014-02-27 22:19:18', '::1', 'Lagos', 3.39583, 6.45306, 0),
(151, 491, '2014-02-28 09:19:14', '::1', 'Lagos', 3.39583, 6.45306, 0),
(152, 1, '2014-02-28 09:19:18', '::1', 'Lagos', 3.39583, 6.45306, 0),
(153, 491, '2014-03-01 06:14:49', '::1', 'Lagos', 3.39583, 6.45306, 18),
(154, 1, '2014-03-01 06:15:13', '::1', 'Lagos', 3.39583, 6.45306, 18),
(155, 509, '2014-03-01 06:15:33', '::1', 'Lagos', 3.39583, 6.45306, 18),
(156, 515, '2014-03-01 06:15:53', '::1', 'Lagos', 3.39583, 6.45306, 18),
(157, 491, '2014-03-01 06:20:20', '::1', 'Lagos', 3.39583, 6.45306, 18),
(158, 491, '2014-03-01 06:21:02', '::1', 'Lagos', 3.39583, 6.45306, 18),
(159, 491, '2014-03-01 06:22:47', '::1', 'Lagos', 3.39583, 6.45306, 18),
(160, 491, '2014-03-01 06:27:58', '::1', 'Lagos', 3.39583, 6.45306, 18),
(161, 1, '2014-03-01 06:28:09', '::1', 'Lagos', 3.39583, 6.45306, 18),
(162, 520, '2014-03-01 06:28:25', '::1', 'Lagos', 3.39583, 6.45306, 18),
(163, 516, '2014-03-01 06:28:36', '::1', 'Lagos', 3.39583, 6.45306, 18),
(164, 515, '2014-03-01 06:28:43', '::1', 'Lagos', 3.39583, 6.45306, 18),
(165, 509, '2014-03-01 06:30:37', '::1', 'Lagos', 3.39583, 6.45306, 18),
(166, 517, '2014-03-01 06:30:49', '::1', 'Lagos', 3.39583, 6.45306, 18),
(167, 516, '2014-03-01 06:30:57', '::1', 'Lagos', 3.39583, 6.45306, 18),
(168, 515, '2014-03-01 06:31:03', '::1', 'Lagos', 3.39583, 6.45306, 18),
(169, 491, '2014-03-01 07:21:41', '::1', 'Lagos', 3.39583, 6.45306, 18),
(170, 491, '2014-03-01 07:31:40', '::1', 'Lagos', 3.39583, 6.45306, 18),
(171, 1, '2014-03-01 07:32:00', '::1', 'Lagos', 3.39583, 6.45306, 18),
(172, 491, '2014-03-01 08:52:46', '::1', 'Lagos', 3.39583, 6.45306, 0),
(173, 516, '2014-03-01 08:52:52', '::1', 'Lagos', 3.39583, 6.45306, 0),
(174, 491, '2014-03-08 08:12:13', '127.0.0.1', 'Lagos', 3.39583, 6.45306, 18),
(175, 516, '2014-03-14 22:43:26', '::1', 'Lagos', 3.39583, 6.45306, 0),
(176, 520, '2014-03-14 22:43:40', '::1', 'Lagos', 3.39583, 6.45306, 0),
(177, 519, '2014-03-14 22:43:55', '::1', 'Lagos', 3.39583, 6.45306, 0),
(178, 520, '2014-03-14 22:44:02', '::1', 'Lagos', 3.39583, 6.45306, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `forumid_forum` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_forum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_forum`, `name`, `description`, `timecreated`, `forumid_forum`) VALUES
(1, 'Medical Conditions', 'Medical Condition', '2013-10-24 09:49:52', NULL),
(2, 'Pharmacy Issues', 'Pharmacy Issues', '2013-10-24 10:00:16', NULL),
(3, 'Pharmacy Students Issues', 'Pharmacy Students Issues', '2013-10-24 10:00:16', NULL),
(4, 'Eye Defects', 'Eye defects', '2013-10-25 19:31:50', 1),
(5, 'ASUU Strike', 'ASUU Strike', '2013-10-25 19:31:50', 2),
(6, 'Long Sight', 'Long sightedness', '2013-10-25 19:37:52', 4),
(7, 'Increase In school fees', 'School fees increase', '2013-10-25 19:37:52', 5),
(8, 'Complicated Long sight', NULL, '2013-10-27 13:37:53', 6),
(9, 'Non complicated long sight', NULL, '2013-10-27 13:37:53', 6),
(10, 'Ex- coomplicated long sight', NULL, '2013-10-27 13:39:06', 9),
(11, 'Supra-complicated long sight', NULL, '2013-10-27 13:39:06', 10),
(16, 'Epison', 'Epison', '2014-01-14 10:36:17', NULL),
(17, 'Incessant growth', 'The region is affected', '2014-01-15 09:49:05', NULL),
(18, 'GEnesis', 'REvelation', '2014-01-15 10:00:47', NULL),
(19, 'Papa Begin', 'Yes', '2014-01-15 10:03:20', NULL),
(20, 'qsfgzfgdfd', 'adsfasdfdfsdf', '2014-01-15 10:03:51', NULL),
(21, 'skelewu', 'skele', '2014-01-15 10:09:50', NULL),
(22, 'skekeleelel', 'skelewu', '2014-01-15 10:11:19', 10),
(23, 'Skelewus', 'Slajljdlfasdf', '2014-01-15 10:12:01', NULL),
(24, NULL, 'Orange drugs', '2014-01-23 03:44:30', NULL),
(25, NULL, 'Swipha', '2014-01-23 03:45:11', NULL),
(26, NULL, 'Dana', '2014-01-23 03:45:39', NULL),
(27, 'Advert placement', 'For adverts and placing advertisements', '2014-01-24 03:47:22', NULL),
(28, 'Ego Management', 'This entails managing the ego of the client you are working with.', '2014-01-24 03:48:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forum_category`
--

CREATE TABLE IF NOT EXISTS `forum_category` (
  `id_forum` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_forum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forum_category`
--

INSERT INTO `forum_category` (`id_forum`, `name`, `description`, `timecreated`) VALUES
(1, 'medicals', 'Medicals', '2014-01-15 10:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `forum_category_forum_category`
--

CREATE TABLE IF NOT EXISTS `forum_category_forum_category` (
  `forum_categoryid_forum` int(10) NOT NULL,
  `forum_categoryid_forum2` int(10) NOT NULL,
  PRIMARY KEY (`forum_categoryid_forum`,`forum_categoryid_forum2`),
  KEY `FKforum_cate362643` (`forum_categoryid_forum`),
  KEY `FKforum_cate309233` (`forum_categoryid_forum2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_topic`
--

CREATE TABLE IF NOT EXISTS `forum_topic` (
  `id_topicforum` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `forumid_forum` int(10) NOT NULL,
  `forum_categoryid_forum` int(10) NOT NULL,
  PRIMARY KEY (`id_topicforum`),
  KEY `FKforum_topi487185` (`forumid_forum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `forum_topic`
--

INSERT INTO `forum_topic` (`id_topicforum`, `name`, `description`, `timecreated`, `forumid_forum`, `forum_categoryid_forum`) VALUES
(1, 'Astigmatism', 'This is a condition of the eye where a whitish substance covers the pupil', '2013-10-24 10:55:58', 1, 0),
(2, 'Cataract', 'This is a condition of the eye where a whitish substance covers the pupil', '2013-10-24 10:56:12', 1, 0),
(3, 'Conjuctivitis', 'This is a rare eye case observed in most european  nations.', '2013-11-05 07:30:40', 4, 0),
(4, 'Inadequate Library', 'The library of most pharmaceutical schools are already dilapidated.', '2013-11-05 07:30:40', 3, 0),
(5, 'Blue pupils', 'The pupil of most nigerians and africans as a whole has been increasing rapidly', '2013-11-05 07:30:40', 4, 0),
(6, 'Buldged eyes', 'There have been sever cases of buldging of the eyes recently in young people.', '2013-11-05 07:30:40', 4, 0),
(7, 'Internship Place', 'The pharmacists are complaining bitterly on the lack of internship positions', '2013-11-05 07:30:40', 3, 0),
(8, 'Color Blindness', 'This makes people not to be able to differentiate colors of objects', '2013-11-05 07:30:40', 11, 0),
(9, 'Regional Long Sight', 'The eastern region, western and south south are suffering from severe cases of long sight', '2013-11-05 07:30:40', 8, 0),
(10, 'Night Blindness', 'This issue has affected alot of people living in the northern part of the nation as they are blind stricken', '2013-11-05 07:30:40', 4, 0),
(11, 'Babcook Fees', 'The recent debate on the value of education impacted on the students of babcook as their fees skyrocket to over 3million per student', '2013-11-05 07:30:40', 7, 0),
(12, 'UNN DEMONSTRATION HALTED', 'The police of enugu state command yesterday stopped the peaceful demonstration by lecturers of UNN.', '2013-11-05 07:30:40', 5, 0),
(14, 'Sexual reproduction', 'Sexual reproduction', '2014-01-15 10:25:02', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `internship_firm`
--

CREATE TABLE IF NOT EXISTS `internship_firm` (
  `id_internshipfirm` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_internshipfirm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `internship_firm`
--

INSERT INTO `internship_firm` (`id_internshipfirm`, `name`, `longitude`, `latitude`) VALUES
(1, 'Fidson', 20, 5.989),
(2, 'Orange Drugs', 5.8932, 23.8392);

-- --------------------------------------------------------

--
-- Table structure for table `internship_opening`
--

CREATE TABLE IF NOT EXISTS `internship_opening` (
  `id_internshipopening` int(11) NOT NULL AUTO_INCREMENT,
  `location` mediumtext NOT NULL,
  `numberofapplicants` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expirydate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration` int(11) NOT NULL,
  `specialization` mediumtext NOT NULL,
  `location_id` int(11) NOT NULL,
  `internshipfirm_id` int(11) NOT NULL,
  PRIMARY KEY (`id_internshipopening`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `internship_opening`
--

INSERT INTO `internship_opening` (`id_internshipopening`, `location`, `numberofapplicants`, `timecreated`, `expirydate`, `duration`, `specialization`, `location_id`, `internshipfirm_id`) VALUES
(1, 'Agege Lagos', 5, '2014-02-17 20:52:48', '0000-00-00 00:00:00', 5, 'Pharmacognosy', 1, 1),
(2, 'Surulere Lagos', 10, '2014-02-17 20:52:48', '0000-00-00 00:00:00', 9, 'Clinicals', 2, 2),
(3, 'Enugu', 19, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 20, 'Clinical Pharmacy', 2, 3),
(4, 'Abakiliki', 8, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 12, 'Toxicology', 2, 1),
(5, 'Port Harcourt', 7, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 13, 'Toxicology', 3, 2),
(6, 'Abuja', 13, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 6, 'Pharmacognosy', 3, 2),
(7, 'Benin', 8, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 5, 'Clinicals', 2, 2),
(8, 'Awka', 22, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 5, 'Toxicology', 2, 1),
(9, 'Nsukka', 5, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 7, 'Pharmacology', 3, 1),
(10, 'Surulere', 5, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 2, 'Clinicals', 2, 1),
(11, 'Agege', 6, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 6, 'Clinicals', 3, 2),
(12, 'Lekki', 9, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 2, 'Toxicology', 3, 2),
(13, 'Ikorodu', 10, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 10, 'Clinicals', 4, 2),
(14, 'Palmgroove', 6, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 7, 'Clinicals', 4, 2),
(15, 'Kubwa', 16, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 4, 'Pharmacognosy', 2, 1),
(16, 'Obiagu', 4, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 6, 'Clinicals', 4, 3),
(17, 'Ikoyi', 5, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 10, 'Clinicals', 3, 1),
(18, 'Uwani', 15, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 2, 'Toxicology', 4, 2),
(19, 'Ajah', 8, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 3, 'Sales Rep', 5, 3),
(20, 'Maitama', 3, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 5, 'Sales Rep', 4, 2),
(21, 'Trans Ekulu', 6, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 2, 'Sales Rep', 3, 2),
(22, 'Surulere', 5, '2014-02-19 22:24:55', '0000-00-00 00:00:00', 2, 'Sales Rep', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id_location` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id_location`),
  UNIQUE KEY `id_location` (`id_location`),
  UNIQUE KEY `location_id_location` (`id_location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2356 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id_location`, `name`, `description`) VALUES
(1, 'Lagos', 'Lagos'),
(2, 'Ogun', 'Ogun State'),
(3, 'Abia', 'Abia State'),
(4, 'Abuja', 'Abuja FCT'),
(5, 'Ekiti', 'Ekiti State'),
(6, 'Enugu', 'Enugu State'),
(7, 'Anambra', 'Anambra'),
(8, 'Akwa Ibom', ''),
(9, 'Adamawa', ''),
(10, 'Bauchi', ''),
(11, 'Bayelsa', ''),
(12, 'Borno', ''),
(13, 'Cross River', ''),
(14, 'Delta', ''),
(15, 'Ebonyi', ''),
(16, 'Edo', ''),
(17, 'Gombe', ''),
(18, 'Imo', ''),
(19, 'Jigawa', ''),
(20, 'Kaduna', ''),
(21, 'Kano', ''),
(22, 'Kastina', ''),
(23, 'Kebbi', ''),
(24, 'Kogi', ''),
(25, 'Kwara', ''),
(26, 'Nasarawa', ''),
(27, 'Niger', ''),
(28, 'Ondo', ''),
(29, 'Osun', ''),
(30, 'Oyo', ''),
(31, 'Plateau', ''),
(32, 'Rivers', ''),
(33, 'Sokoto', ''),
(34, 'Taraba', ''),
(35, 'Yobe', ''),
(36, 'Zamfara', ''),
(37, 'Benue', 'Benue'),
(38, 'Nigeria', 'Nigeria'),
(1582, 'Aba North', 'Aba North'),
(1583, 'Aba South', 'Aba South'),
(1584, 'Arochukwu', 'Arochukwu'),
(1585, 'Bende', 'Bende'),
(1586, 'Ikwuano', 'Ikwuano'),
(1587, 'Isiala Ngwa North', 'Isiala Ngwa North'),
(1588, 'Isiala Ngwa South', 'Isiala Ngwa South'),
(1589, 'Isuikwuato', 'Isuikwuato'),
(1590, 'Obi Ngwa', 'Obi Ngwa'),
(1591, 'Ohafia', 'Ohafia'),
(1592, 'Osisioma', 'Osisioma'),
(1593, 'Ugwunagbo', 'Ugwunagbo'),
(1594, 'Ukwa East', 'Ukwa East'),
(1595, 'Ukwa West', 'Ukwa West'),
(1596, 'Umuahia North', 'Umuahia North'),
(1597, 'Umuahia South', 'Umuahia South'),
(1598, 'Umu Nneochi', 'Umu Nneochi'),
(1599, 'Demsa', 'Demsa'),
(1600, 'Fufure', 'Fufure'),
(1601, 'Ganye', 'Ganye'),
(1602, 'Grie', 'Grie'),
(1603, 'Gombi', 'Gombi'),
(1604, 'Gayuk', 'Gayuk'),
(1605, 'Hong', 'Hong'),
(1606, 'Jada', 'Jada'),
(1607, 'Larmurde', 'Larmurde'),
(1608, 'Madagali', 'Madagali'),
(1609, 'Maiha', 'Maiha'),
(1610, 'Mayo Belwa', 'Mayo Belwa'),
(1611, 'Michika', 'Michika'),
(1612, 'Mubi North', 'Mubi North'),
(1613, 'Mubi South', 'Mubi South'),
(1614, 'Numan', 'Numan'),
(1615, 'Shelleng', 'Shelleng'),
(1616, 'Song', 'Song'),
(1617, 'Toungo', 'Toungo'),
(1618, 'Yola North', 'Yola North'),
(1619, 'Yola South', 'Yola South'),
(1620, 'Abak', 'Abak'),
(1621, 'Eastern Obolo', 'Eastern Obolo'),
(1622, 'Eket', 'Eket'),
(1623, 'Esit Eket', 'Esit Eket'),
(1624, 'Essien Udim', 'Essien Udim'),
(1625, 'Etim Ekpo', 'Etim Ekpo'),
(1626, 'Etinan', 'Etinan'),
(1627, 'Ibeno', 'Ibeno'),
(1628, 'Ibesikpo Asutan', 'Ibesikpo Asutan'),
(1629, 'Ibiono-Ibom', 'Ibiono-Ibom'),
(1630, 'Ika', 'Ika'),
(1631, 'Ikono', 'Ikono'),
(1632, 'Ikot Abasi', 'Ikot Abasi'),
(1633, 'Ikot Ekpene', 'Ikot Ekpene'),
(1634, 'Ini', 'Ini'),
(1635, 'Itu', 'Itu'),
(1636, 'Mbo', 'Mbo'),
(1637, 'Mkpat-Enin', 'Mkpat-Enin'),
(1638, 'Nsit-Atai', 'Nsit-Atai'),
(1639, 'Nsit-Ibom', 'Nsit-Ibom'),
(1640, 'Nsit-Ubium', 'Nsit-Ubium'),
(1641, 'Obot Akara', 'Obot Akara'),
(1642, 'Okobo', 'Okobo'),
(1643, 'Onna', 'Onna'),
(1644, 'Oron', 'Oron'),
(1645, 'Oruk Anam', 'Oruk Anam'),
(1646, 'Udung-Uko', 'Udung-Uko'),
(1647, 'Ukanafun', 'Ukanafun'),
(1648, 'Uruan', 'Uruan'),
(1649, 'Urue-Offong/Oruko', 'Urue-Offong/Oruko'),
(1650, 'Uyo', 'Uyo'),
(1651, 'Aguata', 'Aguata'),
(1652, 'Anambra East', 'Anambra East'),
(1653, 'Anambra West', 'Anambra West'),
(1654, 'Anaocha', 'Anaocha'),
(1655, 'Awka North', 'Awka North'),
(1656, 'Awka South', 'Awka South'),
(1657, 'Ayamelum', 'Ayamelum'),
(1658, 'Dunukofia', 'Dunukofia'),
(1659, 'Ekwusigo', 'Ekwusigo'),
(1660, 'Idemili North', 'Idemili North'),
(1661, 'Idemili South', 'Idemili South'),
(1662, 'Ihiala', 'Ihiala'),
(1663, 'Njikoka', 'Njikoka'),
(1664, 'Nnewi North', 'Nnewi North'),
(1665, 'Nnewi South', 'Nnewi South'),
(1666, 'Ogbaru', 'Ogbaru'),
(1667, 'Onitsha North', 'Onitsha North'),
(1668, 'Onitsha South', 'Onitsha South'),
(1669, 'Orumba North', 'Orumba North'),
(1670, 'Orumba South', 'Orumba South'),
(1671, 'Oyi', 'Oyi'),
(1672, 'Alkaleri', 'Alkaleri'),
(1673, 'Bauchi', 'Bauchi'),
(1674, 'Bogoro', 'Bogoro'),
(1675, 'Damban', 'Damban'),
(1676, 'Darazo', 'Darazo'),
(1677, 'Dass', 'Dass'),
(1678, 'Gamawa', 'Gamawa'),
(1679, 'Ganjuwa', 'Ganjuwa'),
(1680, 'Giade', 'Giade'),
(1681, 'Itas/Gadau', 'Itas/Gadau'),
(1682, 'Jama''are', 'Jama''are'),
(1683, 'Kirfi', 'Kirfi'),
(1684, 'Misau', 'Misau'),
(1685, 'Ningi', 'Ningi'),
(1686, 'Shira', 'Shira'),
(1687, 'Tafawa Balewa', 'Tafawa Balewa'),
(1688, 'Toro', 'Toro'),
(1689, 'Warji', 'Warji'),
(1690, 'Zaki', 'Zaki'),
(1691, 'Katagum', 'Katagum'),
(1692, 'Brass', 'Brass'),
(1693, 'Ekeremor', 'Ekeremor'),
(1694, 'Kolokuma/Opokuma', 'Kolokuma/Opokuma'),
(1695, 'Nembe', 'Nembe'),
(1696, 'Ogbia', 'Ogbia'),
(1697, 'Sagbama', 'Sagbama'),
(1698, 'Southern Ijaw', 'Southern Ijaw'),
(1699, 'Yenagoa', 'Yenagoa'),
(1700, 'Ado', 'Ado'),
(1701, 'Agatu', 'Agatu'),
(1702, 'Apa', 'Apa'),
(1703, 'Buruku', 'Buruku'),
(1704, 'Gboko', 'Gboko'),
(1705, 'Guma', 'Guma'),
(1706, 'Gwer East', 'Gwer East'),
(1707, 'Gwer West', 'Gwer West'),
(1708, 'Katsina-Ala', 'Katsina-Ala'),
(1709, 'Konshisha', 'Konshisha'),
(1710, 'Kwande', 'Kwande'),
(1711, 'Logo', 'Logo'),
(1712, 'Makurdi', 'Makurdi'),
(1713, 'Obi', 'Obi'),
(1714, 'Ohimini', 'Ohimini'),
(1715, 'Oju', 'Oju'),
(1716, 'Okpokwu', 'Okpokwu'),
(1717, 'Oturkpo', 'Oturkpo'),
(1718, 'Tarka', 'Tarka'),
(1719, 'Ukum', 'Ukum'),
(1720, 'Ushongo', 'Ushongo'),
(1721, 'Vandeikya', 'Vandeikya'),
(1722, 'Ogbadibo', 'Ogbadibo'),
(1723, 'Abadam', 'Abadam'),
(1724, 'Askira/Uba', 'Askira/Uba'),
(1725, 'Bama', 'Bama'),
(1726, 'Bayo', 'Bayo'),
(1727, 'Biu', 'Biu'),
(1728, 'Chibok', 'Chibok'),
(1729, 'Damboa', 'Damboa'),
(1730, 'Dikwa', 'Dikwa'),
(1731, 'Gubio', 'Gubio'),
(1732, 'Guzamala', 'Guzamala'),
(1733, 'Gwoza', 'Gwoza'),
(1734, 'Hawul', 'Hawul'),
(1735, 'Jere', 'Jere'),
(1736, 'Kaga', 'Kaga'),
(1737, 'Kala/Balge', 'Kala/Balge'),
(1738, 'Konduga', 'Konduga'),
(1739, 'Kukawa', 'Kukawa'),
(1740, 'Kwaya Kusar', 'Kwaya Kusar'),
(1741, 'Mafa', 'Mafa'),
(1742, 'Magumeri', 'Magumeri'),
(1743, 'Maiduguri', 'Maiduguri'),
(1744, 'Marte', 'Marte'),
(1745, 'Mobbar', 'Mobbar'),
(1746, 'Monguno', 'Monguno'),
(1747, 'Ngala', 'Ngala'),
(1748, 'Nganzai', 'Nganzai'),
(1749, 'Shani', 'Shani'),
(1750, 'Abi', 'Abi'),
(1751, 'Akamkpa', 'Akamkpa'),
(1752, 'Akpabuyo', 'Akpabuyo'),
(1753, 'Bakassi', 'Bakassi'),
(1754, 'Bekwarra', 'Bekwarra'),
(1755, 'Biase', 'Biase'),
(1756, 'Boki', 'Boki'),
(1757, 'Calabar South', 'Calabar South'),
(1758, 'Calabar Municipal', 'Calabar Municipal'),
(1759, 'Etung', 'Etung'),
(1760, 'Ikom', 'Ikom'),
(1761, 'Obanliku', 'Obanliku'),
(1762, 'Obubra', 'Obubra'),
(1763, 'Obudu', 'Obudu'),
(1764, 'Odukpani', 'Odukpani'),
(1765, 'Ogoja', 'Ogoja'),
(1766, 'Yakuur', 'Yakuur'),
(1767, 'Yala', 'Yala'),
(1768, 'Aniocha North', 'Aniocha North'),
(1769, 'Aniocha South', 'Aniocha South'),
(1770, 'Bomadi', 'Bomadi'),
(1771, 'Burutu', 'Burutu'),
(1772, 'Ethiope East', 'Ethiope East'),
(1773, 'Ethiope West', 'Ethiope West'),
(1774, 'Ika North East', 'Ika North East'),
(1775, 'Ika South', 'Ika South'),
(1776, 'Isoko North', 'Isoko North'),
(1777, 'Isoko South', 'Isoko South'),
(1778, 'Ndokwa East', 'Ndokwa East'),
(1779, 'Ndokwa West', 'Ndokwa West'),
(1780, 'Okpe', 'Okpe'),
(1781, 'Oshimili North', 'Oshimili North'),
(1782, 'Oshimili South', 'Oshimili South'),
(1783, 'Patani', 'Patani'),
(1784, 'Sapele', 'Sapele'),
(1785, 'Udu', 'Udu'),
(1786, 'Ughelli North', 'Ughelli North'),
(1787, 'Ughelli South', 'Ughelli South'),
(1788, 'Ukwuani', 'Ukwuani'),
(1789, 'Uvwie', 'Uvwie'),
(1790, 'Warri North', 'Warri North'),
(1791, 'Warri South', 'Warri South'),
(1792, 'Warri South West', 'Warri South West'),
(1793, 'Abakaliki', 'Abakaliki'),
(1794, 'Afikpo North', 'Afikpo North'),
(1795, 'Afikpo South', 'Afikpo South'),
(1796, 'Ebonyi', 'Ebonyi'),
(1797, 'Ezza North', 'Ezza North'),
(1798, 'Ezza South', 'Ezza South'),
(1799, 'Ikwo', 'Ikwo'),
(1800, 'Ishielu', 'Ishielu'),
(1801, 'Ivo', 'Ivo'),
(1802, 'Izzi', 'Izzi'),
(1803, 'Ohaozara', 'Ohaozara'),
(1804, 'Ohaukwu', 'Ohaukwu'),
(1805, 'Onicha', 'Onicha'),
(1806, 'Akoko-Edo', 'Akoko-Edo'),
(1807, 'Egor', 'Egor'),
(1808, 'Esan Central', 'Esan Central'),
(1809, 'Esan North-East', 'Esan North-East'),
(1810, 'Esan South-East', 'Esan South-East'),
(1811, 'Esan West', 'Esan West'),
(1812, 'Etsako Central', 'Etsako Central'),
(1813, 'Etsako East', 'Etsako East'),
(1814, 'Etsako West', 'Etsako West'),
(1815, 'Igueben', 'Igueben'),
(1816, 'Ikpoba Okha', 'Ikpoba Okha'),
(1817, 'Oredo', 'Oredo'),
(1818, 'Orhionmwon', 'Orhionmwon'),
(1819, 'Ovia North-East', 'Ovia North-East'),
(1820, 'Ovia South-West', 'Ovia South-West'),
(1821, 'Owan East', 'Owan East'),
(1822, 'Owan West', 'Owan West'),
(1823, 'Uhunmwonde', 'Uhunmwonde'),
(1824, 'Ado Ekiti', 'Ado Ekiti'),
(1825, 'Gbonyin', 'Gbonyin'),
(1826, 'Efon', 'Efon'),
(1827, 'Ekiti East', 'Ekiti East'),
(1828, 'Ekiti South-West', 'Ekiti South-West'),
(1829, 'Ekiti West', 'Ekiti West'),
(1830, 'Emure', 'Emure'),
(1831, 'Ido Osi', 'Ido Osi'),
(1832, 'Ijero', 'Ijero'),
(1833, 'Ikere', 'Ikere'),
(1834, 'Ikole', 'Ikole'),
(1835, 'Ilejemeje', 'Ilejemeje'),
(1836, 'Irepodun/Ifelodun', 'Irepodun/Ifelodun'),
(1837, 'Ise/Orun', 'Ise/Orun'),
(1838, 'Moba', 'Moba'),
(1839, 'Oye', 'Oye'),
(1840, 'Aninri', 'Aninri'),
(1841, 'Awgu', 'Awgu'),
(1842, 'Enugu East', 'Enugu East'),
(1843, 'Enugu North', 'Enugu North'),
(1844, 'Enugu South', 'Enugu South'),
(1845, 'Ezeagu', 'Ezeagu'),
(1846, 'Igbo Etiti', 'Igbo Etiti'),
(1847, 'Igbo Eze North', 'Igbo Eze North'),
(1848, 'Igbo Eze South', 'Igbo Eze South'),
(1849, 'Isi Uzo', 'Isi Uzo'),
(1850, 'Nkanu East', 'Nkanu East'),
(1851, 'Nkanu West', 'Nkanu West'),
(1852, 'Nsukka', 'Nsukka'),
(1853, 'Oji River', 'Oji River'),
(1854, 'Udenu', 'Udenu'),
(1855, 'Udi', 'Udi'),
(1856, 'Uzo Uwani', 'Uzo Uwani'),
(1857, 'Abaji', 'Abaji'),
(1858, 'Municipal Area Council', 'Municipal Area Council'),
(1859, 'Bwari', 'Bwari'),
(1860, 'Gwagwalada', 'Gwagwalada'),
(1861, 'Kuje', 'Kuje'),
(1862, 'Kwali', 'Kwali'),
(1863, 'Akko', 'Akko'),
(1864, 'Balanga', 'Balanga'),
(1865, 'Billiri', 'Billiri'),
(1866, 'Dukku', 'Dukku'),
(1867, 'Funakaye', 'Funakaye'),
(1868, 'Gombe', 'Gombe'),
(1869, 'Kaltungo', 'Kaltungo'),
(1870, 'Kwami', 'Kwami'),
(1871, 'Nafada', 'Nafada'),
(1872, 'Shongom', 'Shongom'),
(1873, 'Yamaltu/Deba', 'Yamaltu/Deba'),
(1874, 'Aboh Mbaise', 'Aboh Mbaise'),
(1875, 'Ahiazu Mbaise', 'Ahiazu Mbaise'),
(1876, 'Ehime Mbano', 'Ehime Mbano'),
(1877, 'Ezinihitte', 'Ezinihitte'),
(1878, 'Ideato North', 'Ideato North'),
(1879, 'Ideato South', 'Ideato South'),
(1880, 'Ihitte/Uboma', 'Ihitte/Uboma'),
(1881, 'Ikeduru', 'Ikeduru'),
(1882, 'Isiala Mbano', 'Isiala Mbano'),
(1883, 'Isu', 'Isu'),
(1884, 'Mbaitoli', 'Mbaitoli'),
(1885, 'Ngor Okpala', 'Ngor Okpala'),
(1886, 'Njaba', 'Njaba'),
(1887, 'Nkwerre', 'Nkwerre'),
(1888, 'Nwangele', 'Nwangele'),
(1889, 'Obowo', 'Obowo'),
(1890, 'Oguta', 'Oguta'),
(1891, 'Ohaji/Egbema', 'Ohaji/Egbema'),
(1892, 'Okigwe', 'Okigwe'),
(1893, 'Orlu', 'Orlu'),
(1894, 'Orsu', 'Orsu'),
(1895, 'Oru East', 'Oru East'),
(1896, 'Oru West', 'Oru West'),
(1897, 'Owerri North', 'Owerri North'),
(1898, 'Owerri West', 'Owerri West'),
(1899, 'Owerri Municipal', 'Owerri Municipal'),
(1900, 'Unuimo', 'Unuimo'),
(1901, 'Auyo', 'Auyo'),
(1902, 'Babura', 'Babura'),
(1903, 'Biriniwa', 'Biriniwa'),
(1904, 'Birnin Kudu', 'Birnin Kudu'),
(1905, 'Buji', 'Buji'),
(1906, 'Dutse', 'Dutse'),
(1907, 'Gagarawa', 'Gagarawa'),
(1908, 'Garki', 'Garki'),
(1909, 'Gumel', 'Gumel'),
(1910, 'Guri', 'Guri'),
(1911, 'Gwaram', 'Gwaram'),
(1912, 'Gwiwa', 'Gwiwa'),
(1913, 'Hadejia', 'Hadejia'),
(1914, 'Jahun', 'Jahun'),
(1915, 'Kafin Hausa', 'Kafin Hausa'),
(1916, 'Kaugama', 'Kaugama'),
(1917, 'Kazaure', 'Kazaure'),
(1918, 'Kiri Kasama', 'Kiri Kasama'),
(1919, 'Kiyawa', 'Kiyawa'),
(1920, 'Maigatari', 'Maigatari'),
(1921, 'Malam Madori', 'Malam Madori'),
(1922, 'Miga', 'Miga'),
(1923, 'Ringim', 'Ringim'),
(1924, 'Roni', 'Roni'),
(1925, 'Sule Tankarkar', 'Sule Tankarkar'),
(1926, 'Taura', 'Taura'),
(1927, 'Yankwashi', 'Yankwashi'),
(1928, 'Birnin Gwari', 'Birnin Gwari'),
(1929, 'Chikun', 'Chikun'),
(1930, 'Giwa', 'Giwa'),
(1931, 'Igabi', 'Igabi'),
(1932, 'Ikara', 'Ikara'),
(1933, 'Jaba', 'Jaba'),
(1934, 'Jema''a', 'Jema''a'),
(1935, 'Kachia', 'Kachia'),
(1936, 'Kaduna North', 'Kaduna North'),
(1937, 'Kaduna South', 'Kaduna South'),
(1938, 'Kagarko', 'Kagarko'),
(1939, 'Kajuru', 'Kajuru'),
(1940, 'Kaura', 'Kaura'),
(1941, 'Kauru', 'Kauru'),
(1942, 'Kubau', 'Kubau'),
(1943, 'Kudan', 'Kudan'),
(1944, 'Lere', 'Lere'),
(1945, 'Makarfi', 'Makarfi'),
(1946, 'Sabon Gari', 'Sabon Gari'),
(1947, 'Sanga', 'Sanga'),
(1948, 'Soba', 'Soba'),
(1949, 'Zangon Kataf', 'Zangon Kataf'),
(1950, 'Zaria', 'Zaria'),
(1951, 'Ajingi', 'Ajingi'),
(1952, 'Albasu', 'Albasu'),
(1953, 'Bagwai', 'Bagwai'),
(1954, 'Bebeji', 'Bebeji'),
(1955, 'Bichi', 'Bichi'),
(1956, 'Bunkure', 'Bunkure'),
(1957, 'Dala', 'Dala'),
(1958, 'Dambatta', 'Dambatta'),
(1959, 'Dawakin Kudu', 'Dawakin Kudu'),
(1960, 'Dawakin Tofa', 'Dawakin Tofa'),
(1961, 'Doguwa', 'Doguwa'),
(1962, 'Fagge', 'Fagge'),
(1963, 'Gabasawa', 'Gabasawa'),
(1964, 'Garko', 'Garko'),
(1965, 'Garun Mallam', 'Garun Mallam'),
(1966, 'Gaya', 'Gaya'),
(1967, 'Gezawa', 'Gezawa'),
(1968, 'Gwale', 'Gwale'),
(1969, 'Gwarzo', 'Gwarzo'),
(1970, 'Kabo', 'Kabo'),
(1971, 'Kano Municipal', 'Kano Municipal'),
(1972, 'Karaye', 'Karaye'),
(1973, 'Kibiya', 'Kibiya'),
(1974, 'Kiru', 'Kiru'),
(1975, 'Kumbotso', 'Kumbotso'),
(1976, 'Kunchi', 'Kunchi'),
(1977, 'Kura', 'Kura'),
(1978, 'Madobi', 'Madobi'),
(1979, 'Makoda', 'Makoda'),
(1980, 'Minjibir', 'Minjibir'),
(1981, 'Nasarawa', 'Nasarawa'),
(1982, 'Rano', 'Rano'),
(1983, 'Rimin Gado', 'Rimin Gado'),
(1984, 'Rogo', 'Rogo'),
(1985, 'Shanono', 'Shanono'),
(1986, 'Sumaila', 'Sumaila'),
(1987, 'Takai', 'Takai'),
(1988, 'Tarauni', 'Tarauni'),
(1989, 'Tofa', 'Tofa'),
(1990, 'Tsanyawa', 'Tsanyawa'),
(1991, 'Tudun Wada', 'Tudun Wada'),
(1992, 'Ungogo', 'Ungogo'),
(1993, 'Warawa', 'Warawa'),
(1994, 'Wudil', 'Wudil'),
(1995, 'Bakori', 'Bakori'),
(1996, 'Batagarawa', 'Batagarawa'),
(1997, 'Batsari', 'Batsari'),
(1998, 'Baure', 'Baure'),
(1999, 'Bindawa', 'Bindawa'),
(2000, 'Charanchi', 'Charanchi'),
(2001, 'Dan Musa', 'Dan Musa'),
(2002, 'Dandume', 'Dandume'),
(2003, 'Danja', 'Danja'),
(2004, 'Daura', 'Daura'),
(2005, 'Dutsi', 'Dutsi'),
(2006, 'Dutsin Ma', 'Dutsin Ma'),
(2007, 'Faskari', 'Faskari'),
(2008, 'Funtua', 'Funtua'),
(2009, 'Ingawa', 'Ingawa'),
(2010, 'Jibia', 'Jibia'),
(2011, 'Kafur', 'Kafur'),
(2012, 'Kaita', 'Kaita'),
(2013, 'Kankara', 'Kankara'),
(2014, 'Kankia', 'Kankia'),
(2015, 'Katsina', 'Katsina'),
(2016, 'Kurfi', 'Kurfi'),
(2017, 'Kusada', 'Kusada'),
(2018, 'Mai''Adua', 'Mai''Adua'),
(2019, 'Malumfashi', 'Malumfashi'),
(2020, 'Mani', 'Mani'),
(2021, 'Mashi', 'Mashi'),
(2022, 'Matazu', 'Matazu'),
(2023, 'Musawa', 'Musawa'),
(2024, 'Rimi', 'Rimi'),
(2025, 'Sabuwa', 'Sabuwa'),
(2026, 'Safana', 'Safana'),
(2027, 'Sandamu', 'Sandamu'),
(2028, 'Zango', 'Zango'),
(2029, 'Aleiro', 'Aleiro'),
(2030, 'Arewa Dandi', 'Arewa Dandi'),
(2031, 'Argungu', 'Argungu'),
(2032, 'Augie', 'Augie'),
(2033, 'Bagudo', 'Bagudo'),
(2034, 'Birnin Kebbi', 'Birnin Kebbi'),
(2035, 'Bunza', 'Bunza'),
(2036, 'Dandi', 'Dandi'),
(2037, 'Fakai', 'Fakai'),
(2038, 'Gwandu', 'Gwandu'),
(2039, 'Jega', 'Jega'),
(2040, 'Kalgo', 'Kalgo'),
(2041, 'Koko/Besse', 'Koko/Besse'),
(2042, 'Maiyama', 'Maiyama'),
(2043, 'Ngaski', 'Ngaski'),
(2044, 'Sakaba', 'Sakaba'),
(2045, 'Shanga', 'Shanga'),
(2046, 'Suru', 'Suru'),
(2047, 'Wasagu/Danko', 'Wasagu/Danko'),
(2048, 'Yauri', 'Yauri'),
(2049, 'Zuru', 'Zuru'),
(2050, 'Adavi', 'Adavi'),
(2051, 'Ajaokuta', 'Ajaokuta'),
(2052, 'Ankpa', 'Ankpa'),
(2053, 'Bassa', 'Bassa'),
(2054, 'Dekina', 'Dekina'),
(2055, 'Ibaji', 'Ibaji'),
(2056, 'Idah', 'Idah'),
(2057, 'Igalamela Odolu', 'Igalamela Odolu'),
(2058, 'Ijumu', 'Ijumu'),
(2059, 'Kabba/Bunu', 'Kabba/Bunu'),
(2060, 'Kogi', 'Kogi'),
(2061, 'Lokoja', 'Lokoja'),
(2062, 'Mopa Muro', 'Mopa Muro'),
(2063, 'Ofu', 'Ofu'),
(2064, 'Ogori/Magongo', 'Ogori/Magongo'),
(2065, 'Okehi', 'Okehi'),
(2066, 'Okene', 'Okene'),
(2067, 'Olamaboro', 'Olamaboro'),
(2068, 'Omala', 'Omala'),
(2069, 'Yagba East', 'Yagba East'),
(2070, 'Yagba West', 'Yagba West'),
(2071, 'Asa', 'Asa'),
(2072, 'Baruten', 'Baruten'),
(2073, 'Edu', 'Edu'),
(2074, 'Ekiti', 'Ekiti'),
(2075, 'Ifelodun', 'Ifelodun'),
(2076, 'Ilorin East', 'Ilorin East'),
(2077, 'Ilorin South', 'Ilorin South'),
(2078, 'Ilorin West', 'Ilorin West'),
(2079, 'Irepodun', 'Irepodun'),
(2080, 'Isin', 'Isin'),
(2081, 'Kaiama', 'Kaiama'),
(2082, 'Moro', 'Moro'),
(2083, 'Offa', 'Offa'),
(2084, 'Oke Ero', 'Oke Ero'),
(2085, 'Oyun', 'Oyun'),
(2086, 'Pategi', 'Pategi'),
(2087, 'Agege', 'Agege'),
(2088, 'Ajeromi-Ifelodun', 'Ajeromi-Ifelodun'),
(2089, 'Alimosho', 'Alimosho'),
(2090, 'Amuwo-Odofin', 'Amuwo-Odofin'),
(2091, 'Apapa', 'Apapa'),
(2092, 'Badagry', 'Badagry'),
(2093, 'Epe', 'Epe'),
(2094, 'Eti Osa', 'Eti Osa'),
(2095, 'Ibeju-Lekki', 'Ibeju-Lekki'),
(2096, 'Ifako-Ijaiye', 'Ifako-Ijaiye'),
(2097, 'Ikeja', 'Ikeja'),
(2098, 'Ikorodu', 'Ikorodu'),
(2099, 'Kosofe', 'Kosofe'),
(2100, 'Lagos Island', 'Lagos Island'),
(2101, 'Lagos Mainland', 'Lagos Mainland'),
(2102, 'Mushin', 'Mushin'),
(2103, 'Ojo', 'Ojo'),
(2104, 'Oshodi-Isolo', 'Oshodi-Isolo'),
(2105, 'Shomolu', 'Shomolu'),
(2106, 'Surulere', 'Surulere, Lagos State'),
(2107, 'Akwanga', 'Akwanga'),
(2108, 'Awe', 'Awe'),
(2109, 'Doma', 'Doma'),
(2110, 'Karu', 'Karu'),
(2111, 'Keana', 'Keana'),
(2112, 'Keffi', 'Keffi'),
(2113, 'Kokona', 'Kokona'),
(2114, 'Lafia', 'Lafia'),
(2115, 'Obi', 'Obi'),
(2116, 'Toto', 'Toto'),
(2117, 'Wamba', 'Wamba'),
(2118, 'Nasarawa', 'Nasarawa'),
(2119, 'Nasarawa Egon', 'Nasarawa Egon'),
(2120, 'Agaie', 'Agaie'),
(2121, 'Agwara', 'Agwara'),
(2122, 'Bida', 'Bida'),
(2123, 'Borgu', 'Borgu'),
(2124, 'Bosso', 'Bosso'),
(2125, 'Chanchaga', 'Chanchaga'),
(2126, 'Edati', 'Edati'),
(2127, 'Gbako', 'Gbako'),
(2128, 'Gurara', 'Gurara'),
(2129, 'Katcha', 'Katcha'),
(2130, 'Kontagora', 'Kontagora'),
(2131, 'Lapai', 'Lapai'),
(2132, 'Lavun', 'Lavun'),
(2133, 'Magama', 'Magama'),
(2134, 'Mariga', 'Mariga'),
(2135, 'Mashegu', 'Mashegu'),
(2136, 'Mokwa', 'Mokwa'),
(2137, 'Moya', 'Moya'),
(2138, 'Paikoro', 'Paikoro'),
(2139, 'Rafi', 'Rafi'),
(2140, 'Rijau', 'Rijau'),
(2141, 'Shiroro', 'Shiroro'),
(2142, 'Suleja', 'Suleja'),
(2143, 'Tafa', 'Tafa'),
(2144, 'Wushishi', 'Wushishi'),
(2145, 'Abeokuta North', 'Abeokuta North'),
(2146, 'Abeokuta South', 'Abeokuta South'),
(2147, 'Ado-Odo/Ota', 'Ado-Odo/Ota'),
(2148, 'Egbado North', 'Egbado North'),
(2149, 'Egbado South', 'Egbado South'),
(2150, 'Ewekoro', 'Ewekoro'),
(2151, 'Ifo', 'Ifo'),
(2152, 'Ijebu East', 'Ijebu East'),
(2153, 'Ijebu North', 'Ijebu North'),
(2154, 'Ijebu North East', 'Ijebu North East'),
(2155, 'Ijebu Ode', 'Ijebu Ode'),
(2156, 'Ikenne', 'Ikenne'),
(2157, 'Imeko Afon', 'Imeko Afon'),
(2158, 'Ipokia', 'Ipokia'),
(2159, 'Obafemi Owode', 'Obafemi Owode'),
(2160, 'Odeda', 'Odeda'),
(2161, 'Odogbolu', 'Odogbolu'),
(2162, 'Ogun Waterside', 'Ogun Waterside'),
(2163, 'Remo North', 'Remo North'),
(2164, 'Shagamu', 'Shagamu'),
(2165, 'Akoko North-East', 'Akoko North-East'),
(2166, 'Akoko North-West', 'Akoko North-West'),
(2167, 'Akoko South-West', 'Akoko South-West'),
(2168, 'Akoko South-East', 'Akoko South-East'),
(2169, 'Akure North', 'Akure North'),
(2170, 'Akure South', 'Akure South'),
(2171, 'Ese Odo', 'Ese Odo'),
(2172, 'Idanre', 'Idanre'),
(2173, 'Ifedore', 'Ifedore'),
(2174, 'Ilaje', 'Ilaje'),
(2175, 'Ile Oluji/Okeigbo', 'Ile Oluji/Okeigbo'),
(2176, 'Irele', 'Irele'),
(2177, 'Odigbo', 'Odigbo'),
(2178, 'Okitipupa', 'Okitipupa'),
(2179, 'Ondo East', 'Ondo East'),
(2180, 'Ondo West', 'Ondo West'),
(2181, 'Ose', 'Ose'),
(2182, 'Owo', 'Owo'),
(2183, 'Aiyedaade', 'Aiyedaade'),
(2184, 'Aiyedire', 'Aiyedire'),
(2185, 'Atakunmosa East', 'Atakunmosa East'),
(2186, 'Atakunmosa West', 'Atakunmosa West'),
(2187, 'Boluwaduro', 'Boluwaduro'),
(2188, 'Boripe', 'Boripe'),
(2189, 'Ede North', 'Ede North'),
(2190, 'Ede South', 'Ede South'),
(2191, 'Egbedore', 'Egbedore'),
(2192, 'Ejigbo', 'Ejigbo'),
(2193, 'Ife Central', 'Ife Central'),
(2194, 'Ife East', 'Ife East'),
(2195, 'Ife North', 'Ife North'),
(2196, 'Ife South', 'Ife South'),
(2197, 'Ifedayo', 'Ifedayo'),
(2198, 'Ifelodun', 'Ifelodun'),
(2199, 'Ila', 'Ila'),
(2200, 'Ilesa East', 'Ilesa East'),
(2201, 'Ilesa West', 'Ilesa West'),
(2202, 'Irepodun', 'Irepodun'),
(2203, 'Irewole', 'Irewole'),
(2204, 'Isokan', 'Isokan'),
(2205, 'Iwo', 'Iwo'),
(2206, 'Obokun', 'Obokun'),
(2207, 'Odo Otin', 'Odo Otin'),
(2208, 'Ola Oluwa', 'Ola Oluwa'),
(2209, 'Olorunda', 'Olorunda'),
(2210, 'Oriade', 'Oriade'),
(2211, 'Orolu', 'Orolu'),
(2212, 'Osogbo', 'Osogbo'),
(2213, 'Afijio', 'Afijio'),
(2214, 'Akinyele', 'Akinyele'),
(2215, 'Atiba', 'Atiba'),
(2216, 'Atigbo', 'Atigbo'),
(2217, 'Egbeda', 'Egbeda'),
(2218, 'Ibadan North', 'Ibadan North'),
(2219, 'Ibadan North-East', 'Ibadan North-East'),
(2220, 'Ibadan North-West', 'Ibadan North-West'),
(2221, 'Ibadan South-East', 'Ibadan South-East'),
(2222, 'Ibadan South-West', 'Ibadan South-West'),
(2223, 'Ibarapa Central', 'Ibarapa Central'),
(2224, 'Ibarapa East', 'Ibarapa East'),
(2225, 'Ibarapa North', 'Ibarapa North'),
(2226, 'Ido', 'Ido'),
(2227, 'Irepo', 'Irepo'),
(2228, 'Iseyin', 'Iseyin'),
(2229, 'Itesiwaju', 'Itesiwaju'),
(2230, 'Iwajowa', 'Iwajowa'),
(2231, 'Kajola', 'Kajola'),
(2232, 'Lagelu', 'Lagelu'),
(2233, 'Ogbomosho North', 'Ogbomosho North'),
(2234, 'Ogbomosho South', 'Ogbomosho South'),
(2235, 'Ogo Oluwa', 'Ogo Oluwa'),
(2236, 'Olorunsogo', 'Olorunsogo'),
(2237, 'Oluyole', 'Oluyole'),
(2238, 'Ona Ara', 'Ona Ara'),
(2239, 'Orelope', 'Orelope'),
(2240, 'Ori Ire', 'Ori Ire'),
(2241, 'Oyo', 'Oyo'),
(2242, 'Oyo East', 'Oyo East'),
(2243, 'Saki East', 'Saki East'),
(2244, 'Saki West', 'Saki West'),
(2245, 'Surulere, Oyo State', 'Surulere, Oyo State'),
(2246, 'Barkin Ladi', 'Barkin Ladi'),
(2247, 'Bassa', 'Bassa'),
(2248, 'Bokkos', 'Bokkos'),
(2249, 'Jos East', 'Jos East'),
(2250, 'Jos North', 'Jos North'),
(2251, 'Jos South', 'Jos South'),
(2252, 'Kanam', 'Kanam'),
(2253, 'Kanke', 'Kanke'),
(2254, 'Langtang North', 'Langtang North'),
(2255, 'Langtang South', 'Langtang South'),
(2256, 'Mangu', 'Mangu'),
(2257, 'Mikang', 'Mikang'),
(2258, 'Pankshin', 'Pankshin'),
(2259, 'Qua''an Pan', 'Qua''an Pan'),
(2260, 'Riyom', 'Riyom'),
(2261, 'Shendam', 'Shendam'),
(2262, 'Wase', 'Wase'),
(2263, 'Abua/Odual', 'Abua/Odual'),
(2264, 'Ahoada East', 'Ahoada East'),
(2265, 'Ahoada West', 'Ahoada West'),
(2266, 'Akuku-Toru', 'Akuku-Toru'),
(2267, 'Andoni', 'Andoni'),
(2268, 'Asari-Toru', 'Asari-Toru'),
(2269, 'Bonny', 'Bonny'),
(2270, 'Degema', 'Degema'),
(2271, 'Eleme', 'Eleme'),
(2272, 'Emuoha', 'Emuoha'),
(2273, 'Etche', 'Etche'),
(2274, 'Gokana', 'Gokana'),
(2275, 'Ikwerre', 'Ikwerre'),
(2276, 'Khana', 'Khana'),
(2277, 'Obio/Akpor', 'Obio/Akpor'),
(2278, 'Ogba/Egbema/Ndoni', 'Ogba/Egbema/Ndoni'),
(2279, 'Ogu/Bolo', 'Ogu/Bolo'),
(2280, 'Okrika', 'Okrika'),
(2281, 'Omuma', 'Omuma'),
(2282, 'Opobo/Nkoro', 'Opobo/Nkoro'),
(2283, 'Oyigbo', 'Oyigbo'),
(2284, 'Port Harcourt', 'Port Harcourt'),
(2285, 'Tai', 'Tai'),
(2286, 'Binji', 'Binji'),
(2287, 'Bodinga', 'Bodinga'),
(2288, 'Dange Shuni', 'Dange Shuni'),
(2289, 'Gada', 'Gada'),
(2290, 'Goronyo', 'Goronyo'),
(2291, 'Gudu', 'Gudu'),
(2292, 'Gwadabawa', 'Gwadabawa'),
(2293, 'Illela', 'Illela'),
(2294, 'Isa', 'Isa'),
(2295, 'Kebbe', 'Kebbe'),
(2296, 'Kware', 'Kware'),
(2297, 'Rabah', 'Rabah'),
(2298, 'Sabon Birni', 'Sabon Birni'),
(2299, 'Shagari', 'Shagari'),
(2300, 'Silame', 'Silame'),
(2301, 'Sokoto North', 'Sokoto North'),
(2302, 'Sokoto South', 'Sokoto South'),
(2303, 'Tambuwal', 'Tambuwal'),
(2304, 'Tangaza', 'Tangaza'),
(2305, 'Tureta', 'Tureta'),
(2306, 'Wamako', 'Wamako'),
(2307, 'Wurno', 'Wurno'),
(2308, 'Yabo', 'Yabo'),
(2309, 'Ardo Kola', 'Ardo Kola'),
(2310, 'Bali', 'Bali'),
(2311, 'Donga', 'Donga'),
(2312, 'Gashaka', 'Gashaka'),
(2313, 'Gassol', 'Gassol'),
(2314, 'Ibi', 'Ibi'),
(2315, 'Jalingo', 'Jalingo'),
(2316, 'Karim Lamido', 'Karim Lamido'),
(2317, 'Kumi', 'Kumi'),
(2318, 'Lau', 'Lau'),
(2319, 'Sardauna', 'Sardauna'),
(2320, 'Takum', 'Takum'),
(2321, 'Ussa', 'Ussa'),
(2322, 'Wukari', 'Wukari'),
(2323, 'Yorro', 'Yorro'),
(2324, 'Zing', 'Zing'),
(2325, 'Bade', 'Bade'),
(2326, 'Bursari', 'Bursari'),
(2327, 'Damaturu', 'Damaturu'),
(2328, 'Fika', 'Fika'),
(2329, 'Fune', 'Fune'),
(2330, 'Geidam', 'Geidam'),
(2331, 'Gulani', 'Gulani'),
(2332, 'Jakusko', 'Jakusko'),
(2333, 'Karasuwa', 'Karasuwa'),
(2334, 'Machina', 'Machina'),
(2335, 'Nangere', 'Nangere'),
(2336, 'Nguru', 'Nguru'),
(2337, 'Potiskum', 'Potiskum'),
(2338, 'Tarmuwa', 'Tarmuwa'),
(2339, 'Yunusari', 'Yunusari'),
(2340, 'Yusufari', 'Yusufari'),
(2341, 'Gujba', 'Gujba'),
(2342, 'Anka', 'Anka'),
(2343, 'Bakura', 'Bakura'),
(2344, 'Birnin Magaji/Kiyaw', 'Birnin Magaji/Kiyaw'),
(2345, 'Bukkuyum', 'Bukkuyum'),
(2346, 'Bungudu', 'Bungudu'),
(2347, 'Gummi', 'Gummi'),
(2348, 'Gusau', 'Gusau'),
(2349, 'Kaura Namoda', 'Kaura Namoda'),
(2350, 'Maradun', 'Maradun'),
(2351, 'Maru', 'Maru'),
(2352, 'Shinkafi', 'Shinkafi'),
(2353, 'Talata Mafara', 'Talata Mafara'),
(2354, 'Chafe', 'Chafe'),
(2355, 'Zurmi', 'Zurmi');

-- --------------------------------------------------------

--
-- Table structure for table `location_ref`
--

CREATE TABLE IF NOT EXISTS `location_ref` (
  `id_locationref` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` int(11) NOT NULL,
  `super_locationid` int(11) NOT NULL,
  PRIMARY KEY (`id_locationref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1585 ;

--
-- Dumping data for table `location_ref`
--

INSERT INTO `location_ref` (`id_locationref`, `location_id`, `super_locationid`) VALUES
(1, 1, 38),
(2, 2, 38),
(3, 3, 38),
(4, 4, 38),
(5, 5, 38),
(6, 6, 38),
(7, 7, 38),
(8, 8, 38),
(9, 9, 38),
(10, 10, 38),
(11, 11, 38),
(12, 12, 38),
(13, 13, 38),
(14, 14, 38),
(15, 15, 38),
(16, 16, 38),
(17, 17, 38),
(18, 18, 38),
(19, 19, 38),
(20, 20, 38),
(21, 21, 38),
(22, 22, 38),
(23, 23, 38),
(24, 24, 38),
(25, 25, 38),
(26, 26, 38),
(27, 27, 38),
(28, 28, 38),
(29, 29, 38),
(30, 30, 38),
(31, 31, 38),
(32, 32, 38),
(33, 33, 38),
(34, 34, 38),
(35, 35, 38),
(36, 36, 38),
(37, 37, 38),
(811, 1582, 3),
(812, 1583, 3),
(813, 1584, 3),
(814, 1585, 3),
(815, 1586, 3),
(816, 1587, 3),
(817, 1588, 3),
(818, 1589, 3),
(819, 1590, 3),
(820, 1591, 3),
(821, 1592, 3),
(822, 1593, 3),
(823, 1594, 3),
(824, 1595, 3),
(825, 1596, 3),
(826, 1597, 3),
(827, 1598, 3),
(828, 1599, 9),
(829, 1600, 9),
(830, 1601, 9),
(831, 1602, 9),
(832, 1603, 9),
(833, 1604, 9),
(834, 1605, 9),
(835, 1606, 9),
(836, 1607, 9),
(837, 1608, 9),
(838, 1609, 9),
(839, 1610, 9),
(840, 1611, 9),
(841, 1612, 9),
(842, 1613, 9),
(843, 1614, 9),
(844, 1615, 9),
(845, 1616, 9),
(846, 1617, 9),
(847, 1618, 9),
(848, 1619, 9),
(849, 1620, 8),
(850, 1621, 8),
(851, 1622, 8),
(852, 1623, 8),
(853, 1624, 8),
(854, 1625, 8),
(855, 1626, 8),
(856, 1627, 8),
(857, 1628, 8),
(858, 1629, 8),
(859, 1630, 8),
(860, 1631, 8),
(861, 1632, 8),
(862, 1633, 8),
(863, 1634, 8),
(864, 1635, 8),
(865, 1636, 8),
(866, 1637, 8),
(867, 1638, 8),
(868, 1639, 8),
(869, 1640, 8),
(870, 1641, 8),
(871, 1642, 8),
(872, 1643, 8),
(873, 1644, 8),
(874, 1645, 8),
(875, 1646, 8),
(876, 1647, 8),
(877, 1648, 8),
(878, 1649, 8),
(879, 1650, 8),
(880, 1651, 7),
(881, 1652, 7),
(882, 1653, 7),
(883, 1654, 7),
(884, 1655, 7),
(885, 1656, 7),
(886, 1657, 7),
(887, 1658, 7),
(888, 1659, 7),
(889, 1660, 7),
(890, 1661, 7),
(891, 1662, 7),
(892, 1663, 7),
(893, 1664, 7),
(894, 1665, 7),
(895, 1666, 7),
(896, 1667, 7),
(897, 1668, 7),
(898, 1669, 7),
(899, 1670, 7),
(900, 1671, 7),
(901, 1672, 10),
(902, 1673, 10),
(903, 1674, 10),
(904, 1675, 10),
(905, 1676, 10),
(906, 1677, 10),
(907, 1678, 10),
(908, 1679, 10),
(909, 1680, 10),
(910, 1681, 10),
(911, 1682, 10),
(912, 1683, 10),
(913, 1684, 10),
(914, 1685, 10),
(915, 1686, 10),
(916, 1687, 10),
(917, 1688, 10),
(918, 1689, 10),
(919, 1690, 10),
(920, 1691, 10),
(921, 1692, 11),
(922, 1693, 11),
(923, 1694, 11),
(924, 1695, 11),
(925, 1696, 11),
(926, 1697, 11),
(927, 1698, 11),
(928, 1699, 11),
(929, 1700, 37),
(930, 1701, 37),
(931, 1702, 37),
(932, 1703, 37),
(933, 1704, 37),
(934, 1705, 37),
(935, 1706, 37),
(936, 1707, 37),
(937, 1708, 37),
(938, 1709, 37),
(939, 1710, 37),
(940, 1711, 37),
(941, 1712, 37),
(942, 1713, 37),
(943, 1714, 37),
(944, 1715, 37),
(945, 1716, 37),
(946, 1717, 37),
(947, 1718, 37),
(948, 1719, 37),
(949, 1720, 37),
(950, 1721, 37),
(951, 1722, 37),
(952, 1723, 12),
(953, 1724, 12),
(954, 1725, 12),
(955, 1726, 12),
(956, 1727, 12),
(957, 1728, 12),
(958, 1729, 12),
(959, 1730, 12),
(960, 1731, 12),
(961, 1732, 12),
(962, 1733, 12),
(963, 1734, 12),
(964, 1735, 12),
(965, 1736, 12),
(966, 1737, 12),
(967, 1738, 12),
(968, 1739, 12),
(969, 1740, 12),
(970, 1741, 12),
(971, 1742, 12),
(972, 1743, 12),
(973, 1744, 12),
(974, 1745, 12),
(975, 1746, 12),
(976, 1747, 12),
(977, 1748, 12),
(978, 1749, 12),
(979, 1750, 13),
(980, 1751, 13),
(981, 1752, 13),
(982, 1753, 13),
(983, 1754, 13),
(984, 1755, 13),
(985, 1756, 13),
(986, 1757, 13),
(987, 1758, 13),
(988, 1759, 13),
(989, 1760, 13),
(990, 1761, 13),
(991, 1762, 13),
(992, 1763, 13),
(993, 1764, 13),
(994, 1765, 13),
(995, 1766, 13),
(996, 1767, 13),
(997, 1768, 14),
(998, 1769, 14),
(999, 1770, 14),
(1000, 1771, 14),
(1001, 1772, 14),
(1002, 1773, 14),
(1003, 1774, 14),
(1004, 1775, 14),
(1005, 1776, 14),
(1006, 1777, 14),
(1007, 1778, 14),
(1008, 1779, 14),
(1009, 1780, 14),
(1010, 1781, 14),
(1011, 1782, 14),
(1012, 1783, 14),
(1013, 1784, 14),
(1014, 1785, 14),
(1015, 1786, 14),
(1016, 1787, 14),
(1017, 1788, 14),
(1018, 1789, 14),
(1019, 1790, 14),
(1020, 1791, 14),
(1021, 1792, 14),
(1022, 1793, 15),
(1023, 1794, 15),
(1024, 1795, 15),
(1025, 1796, 15),
(1026, 1797, 15),
(1027, 1798, 15),
(1028, 1799, 15),
(1029, 1800, 15),
(1030, 1801, 15),
(1031, 1802, 15),
(1032, 1803, 15),
(1033, 1804, 15),
(1034, 1805, 15),
(1035, 1806, 16),
(1036, 1807, 16),
(1037, 1808, 16),
(1038, 1809, 16),
(1039, 1810, 16),
(1040, 1811, 16),
(1041, 1812, 16),
(1042, 1813, 16),
(1043, 1814, 16),
(1044, 1815, 16),
(1045, 1816, 16),
(1046, 1817, 16),
(1047, 1818, 16),
(1048, 1819, 16),
(1049, 1820, 16),
(1050, 1821, 16),
(1051, 1822, 16),
(1052, 1823, 16),
(1053, 1824, 5),
(1054, 1825, 5),
(1055, 1826, 5),
(1056, 1827, 5),
(1057, 1828, 5),
(1058, 1829, 5),
(1059, 1830, 5),
(1060, 1831, 5),
(1061, 1832, 5),
(1062, 1833, 5),
(1063, 1834, 5),
(1064, 1835, 5),
(1065, 1836, 5),
(1066, 1837, 5),
(1067, 1838, 5),
(1068, 1839, 5),
(1069, 1840, 6),
(1070, 1841, 6),
(1071, 1842, 6),
(1072, 1843, 6),
(1073, 1844, 6),
(1074, 1845, 6),
(1075, 1846, 6),
(1076, 1847, 6),
(1077, 1848, 6),
(1078, 1849, 6),
(1079, 1850, 6),
(1080, 1851, 6),
(1081, 1852, 6),
(1082, 1853, 6),
(1083, 1854, 6),
(1084, 1855, 6),
(1085, 1856, 6),
(1086, 1857, 4),
(1087, 1858, 4),
(1088, 1859, 4),
(1089, 1860, 4),
(1090, 1861, 4),
(1091, 1862, 4),
(1092, 1863, 17),
(1093, 1864, 17),
(1094, 1865, 17),
(1095, 1866, 17),
(1096, 1867, 17),
(1097, 1868, 17),
(1098, 1869, 17),
(1099, 1870, 17),
(1100, 1871, 17),
(1101, 1872, 17),
(1102, 1873, 17),
(1103, 1874, 18),
(1104, 1875, 18),
(1105, 1876, 18),
(1106, 1877, 18),
(1107, 1878, 18),
(1108, 1879, 18),
(1109, 1880, 18),
(1110, 1881, 18),
(1111, 1882, 18),
(1112, 1883, 18),
(1113, 1884, 18),
(1114, 1885, 18),
(1115, 1886, 18),
(1116, 1887, 18),
(1117, 1888, 18),
(1118, 1889, 18),
(1119, 1890, 18),
(1120, 1891, 18),
(1121, 1892, 18),
(1122, 1893, 18),
(1123, 1894, 18),
(1124, 1895, 18),
(1125, 1896, 18),
(1126, 1897, 18),
(1127, 1898, 18),
(1128, 1899, 18),
(1129, 1900, 18),
(1130, 1901, 19),
(1131, 1902, 19),
(1132, 1903, 19),
(1133, 1904, 19),
(1134, 1905, 19),
(1135, 1906, 19),
(1136, 1907, 19),
(1137, 1908, 19),
(1138, 1909, 19),
(1139, 1910, 19),
(1140, 1911, 19),
(1141, 1912, 19),
(1142, 1913, 19),
(1143, 1914, 19),
(1144, 1915, 19),
(1145, 1916, 19),
(1146, 1917, 19),
(1147, 1918, 19),
(1148, 1919, 19),
(1149, 1920, 19),
(1150, 1921, 19),
(1151, 1922, 19),
(1152, 1923, 19),
(1153, 1924, 19),
(1154, 1925, 19),
(1155, 1926, 19),
(1156, 1927, 19),
(1157, 1928, 20),
(1158, 1929, 20),
(1159, 1930, 20),
(1160, 1931, 20),
(1161, 1932, 20),
(1162, 1933, 20),
(1163, 1934, 20),
(1164, 1935, 20),
(1165, 1936, 20),
(1166, 1937, 20),
(1167, 1938, 20),
(1168, 1939, 20),
(1169, 1940, 20),
(1170, 1941, 20),
(1171, 1942, 20),
(1172, 1943, 20),
(1173, 1944, 20),
(1174, 1945, 20),
(1175, 1946, 20),
(1176, 1947, 20),
(1177, 1948, 20),
(1178, 1949, 20),
(1179, 1950, 20),
(1180, 1951, 21),
(1181, 1952, 21),
(1182, 1953, 21),
(1183, 1954, 21),
(1184, 1955, 21),
(1185, 1956, 21),
(1186, 1957, 21),
(1187, 1958, 21),
(1188, 1959, 21),
(1189, 1960, 21),
(1190, 1961, 21),
(1191, 1962, 21),
(1192, 1963, 21),
(1193, 1964, 21),
(1194, 1965, 21),
(1195, 1966, 21),
(1196, 1967, 21),
(1197, 1968, 21),
(1198, 1969, 21),
(1199, 1970, 21),
(1200, 1971, 21),
(1201, 1972, 21),
(1202, 1973, 21),
(1203, 1974, 21),
(1204, 1975, 21),
(1205, 1976, 21),
(1206, 1977, 21),
(1207, 1978, 21),
(1208, 1979, 21),
(1209, 1980, 21),
(1210, 1981, 21),
(1211, 1982, 21),
(1212, 1983, 21),
(1213, 1984, 21),
(1214, 1985, 21),
(1215, 1986, 21),
(1216, 1987, 21),
(1217, 1988, 21),
(1218, 1989, 21),
(1219, 1990, 21),
(1220, 1991, 21),
(1221, 1992, 21),
(1222, 1993, 21),
(1223, 1994, 21),
(1224, 1995, 22),
(1225, 1996, 22),
(1226, 1997, 22),
(1227, 1998, 22),
(1228, 1999, 22),
(1229, 2000, 22),
(1230, 2001, 22),
(1231, 2002, 22),
(1232, 2003, 22),
(1233, 2004, 22),
(1234, 2005, 22),
(1235, 2006, 22),
(1236, 2007, 22),
(1237, 2008, 22),
(1238, 2009, 22),
(1239, 2010, 22),
(1240, 2011, 22),
(1241, 2012, 22),
(1242, 2013, 22),
(1243, 2014, 22),
(1244, 2015, 22),
(1245, 2016, 22),
(1246, 2017, 22),
(1247, 2018, 22),
(1248, 2019, 22),
(1249, 2020, 22),
(1250, 2021, 22),
(1251, 2022, 22),
(1252, 2023, 22),
(1253, 2024, 22),
(1254, 2025, 22),
(1255, 2026, 22),
(1256, 2027, 22),
(1257, 2028, 22),
(1258, 2029, 23),
(1259, 2030, 23),
(1260, 2031, 23),
(1261, 2032, 23),
(1262, 2033, 23),
(1263, 2034, 23),
(1264, 2035, 23),
(1265, 2036, 23),
(1266, 2037, 23),
(1267, 2038, 23),
(1268, 2039, 23),
(1269, 2040, 23),
(1270, 2041, 23),
(1271, 2042, 23),
(1272, 2043, 23),
(1273, 2044, 23),
(1274, 2045, 23),
(1275, 2046, 23),
(1276, 2047, 23),
(1277, 2048, 23),
(1278, 2049, 23),
(1279, 2050, 24),
(1280, 2051, 24),
(1281, 2052, 24),
(1282, 2053, 24),
(1283, 2054, 24),
(1284, 2055, 24),
(1285, 2056, 24),
(1286, 2057, 24),
(1287, 2058, 24),
(1288, 2059, 24),
(1289, 2060, 24),
(1290, 2061, 24),
(1291, 2062, 24),
(1292, 2063, 24),
(1293, 2064, 24),
(1294, 2065, 24),
(1295, 2066, 24),
(1296, 2067, 24),
(1297, 2068, 24),
(1298, 2069, 24),
(1299, 2070, 24),
(1300, 2071, 25),
(1301, 2072, 25),
(1302, 2073, 25),
(1303, 2074, 25),
(1304, 2075, 25),
(1305, 2076, 25),
(1306, 2077, 25),
(1307, 2078, 25),
(1308, 2079, 25),
(1309, 2080, 25),
(1310, 2081, 25),
(1311, 2082, 25),
(1312, 2083, 25),
(1313, 2084, 25),
(1314, 2085, 25),
(1315, 2086, 25),
(1316, 2087, 1),
(1317, 2088, 1),
(1318, 2089, 1),
(1319, 2090, 1),
(1320, 2091, 1),
(1321, 2092, 1),
(1322, 2093, 1),
(1323, 2094, 1),
(1324, 2095, 1),
(1325, 2096, 1),
(1326, 2097, 1),
(1327, 2098, 1),
(1328, 2099, 1),
(1329, 2100, 1),
(1330, 2101, 1),
(1331, 2102, 1),
(1332, 2103, 1),
(1333, 2104, 1),
(1334, 2105, 1),
(1335, 2106, 1),
(1336, 2107, 26),
(1337, 2108, 26),
(1338, 2109, 26),
(1339, 2110, 26),
(1340, 2111, 26),
(1341, 2112, 26),
(1342, 2113, 26),
(1343, 2114, 26),
(1344, 2115, 26),
(1345, 2116, 26),
(1346, 2117, 26),
(1347, 2118, 26),
(1348, 2119, 26),
(1349, 2120, 27),
(1350, 2121, 27),
(1351, 2122, 27),
(1352, 2123, 27),
(1353, 2124, 27),
(1354, 2125, 27),
(1355, 2126, 27),
(1356, 2127, 27),
(1357, 2128, 27),
(1358, 2129, 27),
(1359, 2130, 27),
(1360, 2131, 27),
(1361, 2132, 27),
(1362, 2133, 27),
(1363, 2134, 27),
(1364, 2135, 27),
(1365, 2136, 27),
(1366, 2137, 27),
(1367, 2138, 27),
(1368, 2139, 27),
(1369, 2140, 27),
(1370, 2141, 27),
(1371, 2142, 27),
(1372, 2143, 27),
(1373, 2144, 27),
(1374, 2145, 2),
(1375, 2146, 2),
(1376, 2147, 2),
(1377, 2148, 2),
(1378, 2149, 2),
(1379, 2150, 2),
(1380, 2151, 2),
(1381, 2152, 2),
(1382, 2153, 2),
(1383, 2154, 2),
(1384, 2155, 2),
(1385, 2156, 2),
(1386, 2157, 2),
(1387, 2158, 2),
(1388, 2159, 2),
(1389, 2160, 2),
(1390, 2161, 2),
(1391, 2162, 2),
(1392, 2163, 2),
(1393, 2164, 2),
(1394, 2165, 2),
(1395, 2166, 28),
(1396, 2167, 28),
(1397, 2168, 28),
(1398, 2169, 28),
(1399, 2170, 28),
(1400, 2171, 28),
(1401, 2172, 28),
(1402, 2173, 28),
(1403, 2174, 28),
(1404, 2175, 28),
(1405, 2176, 28),
(1406, 2177, 28),
(1407, 2178, 28),
(1408, 2179, 28),
(1409, 2180, 28),
(1410, 2181, 28),
(1411, 2182, 28),
(1412, 2183, 29),
(1413, 2184, 29),
(1414, 2185, 29),
(1415, 2186, 29),
(1416, 2187, 29),
(1417, 2188, 29),
(1418, 2189, 29),
(1419, 2190, 29),
(1420, 2191, 29),
(1421, 2192, 29),
(1422, 2193, 29),
(1423, 2194, 29),
(1424, 2195, 29),
(1425, 2196, 29),
(1426, 2197, 29),
(1427, 2198, 29),
(1428, 2199, 29),
(1429, 2200, 29),
(1430, 2201, 29),
(1431, 2202, 29),
(1432, 2203, 29),
(1433, 2204, 29),
(1434, 2205, 29),
(1435, 2206, 29),
(1436, 2207, 29),
(1437, 2208, 29),
(1438, 2209, 29),
(1439, 2210, 29),
(1440, 2211, 29),
(1441, 2212, 29),
(1442, 2213, 30),
(1443, 2214, 30),
(1444, 2215, 30),
(1445, 2216, 30),
(1446, 2217, 30),
(1447, 2218, 30),
(1448, 2219, 30),
(1449, 2220, 30),
(1450, 2221, 30),
(1451, 2222, 30),
(1452, 2223, 30),
(1453, 2224, 30),
(1454, 2225, 30),
(1455, 2226, 30),
(1456, 2227, 30),
(1457, 2228, 30),
(1458, 2229, 30),
(1459, 2230, 30),
(1460, 2231, 30),
(1461, 2232, 30),
(1462, 2233, 30),
(1463, 2234, 30),
(1464, 2235, 30),
(1465, 2236, 30),
(1466, 2237, 30),
(1467, 2238, 30),
(1468, 2239, 30),
(1469, 2240, 30),
(1470, 2241, 30),
(1471, 2242, 30),
(1472, 2243, 30),
(1473, 2244, 30),
(1474, 2245, 30),
(1475, 2246, 31),
(1476, 2247, 31),
(1477, 2248, 31),
(1478, 2249, 31),
(1479, 2250, 31),
(1480, 2251, 31),
(1481, 2252, 31),
(1482, 2253, 31),
(1483, 2254, 31),
(1484, 2255, 31),
(1485, 2256, 31),
(1486, 2257, 31),
(1487, 2258, 31),
(1488, 2259, 31),
(1489, 2260, 31),
(1490, 2261, 31),
(1491, 2262, 31),
(1492, 2263, 32),
(1493, 2264, 32),
(1494, 2265, 32),
(1495, 2266, 32),
(1496, 2267, 32),
(1497, 2268, 32),
(1498, 2269, 32),
(1499, 2270, 32),
(1500, 2271, 32),
(1501, 2272, 32),
(1502, 2273, 32),
(1503, 2274, 32),
(1504, 2275, 32),
(1505, 2276, 32),
(1506, 2277, 32),
(1507, 2278, 32),
(1508, 2279, 32),
(1509, 2280, 32),
(1510, 2281, 32),
(1511, 2282, 32),
(1512, 2283, 32),
(1513, 2284, 32),
(1514, 2285, 32),
(1515, 2286, 33),
(1516, 2287, 33),
(1517, 2288, 33),
(1518, 2289, 33),
(1519, 2290, 33),
(1520, 2291, 33),
(1521, 2292, 33),
(1522, 2293, 33),
(1523, 2294, 33),
(1524, 2295, 33),
(1525, 2296, 33),
(1526, 2297, 33),
(1527, 2298, 33),
(1528, 2299, 33),
(1529, 2300, 33),
(1530, 2301, 33),
(1531, 2302, 33),
(1532, 2303, 33),
(1533, 2304, 33),
(1534, 2305, 33),
(1535, 2306, 33),
(1536, 2307, 33),
(1537, 2308, 33),
(1538, 2309, 34),
(1539, 2310, 34),
(1540, 2311, 34),
(1541, 2312, 34),
(1542, 2313, 34),
(1543, 2314, 34),
(1544, 2315, 34),
(1545, 2316, 34),
(1546, 2317, 34),
(1547, 2318, 34),
(1548, 2319, 34),
(1549, 2320, 34),
(1550, 2321, 34),
(1551, 2322, 34),
(1552, 2323, 34),
(1553, 2324, 34),
(1554, 2325, 35),
(1555, 2326, 35),
(1556, 2327, 35),
(1557, 2328, 35),
(1558, 2329, 35),
(1559, 2330, 35),
(1560, 2331, 35),
(1561, 2332, 35),
(1562, 2333, 35),
(1563, 2334, 35),
(1564, 2335, 35),
(1565, 2336, 35),
(1566, 2337, 35),
(1567, 2338, 35),
(1568, 2339, 35),
(1569, 2340, 35),
(1570, 2341, 35),
(1571, 2342, 36),
(1572, 2343, 36),
(1573, 2344, 36),
(1574, 2345, 36),
(1575, 2346, 36),
(1576, 2347, 36),
(1577, 2348, 36),
(1578, 2349, 36),
(1579, 2350, 36),
(1580, 2351, 36),
(1581, 2352, 36),
(1582, 2353, 36),
(1583, 2354, 36),
(1584, 2355, 36);

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE IF NOT EXISTS `logindetails` (
  `id_logindetails` int(10) NOT NULL AUTO_INCREMENT,
  `username` tinytext,
  `password` tinytext,
  `status` tinytext,
  `datecreated` datetime DEFAULT NULL,
  `datemodified` datetime DEFAULT NULL,
  `memberid_member` int(10) NOT NULL,
  PRIMARY KEY (`id_logindetails`),
  KEY `FKlogindetai462569` (`memberid_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`id_logindetails`, `username`, `password`, `status`, `datecreated`, `datemodified`, `memberid_member`) VALUES
(1, 'princeyekaso@gmail.com', 'kaka', 'active', '2013-07-31 01:45:30', '2013-07-31 01:45:30', 6),
(2, 'princeyekaso@gmail.com', 'kaka', 'active', '2013-08-15 03:42:29', '2013-08-15 03:42:29', 7),
(3, 'oonwuzusss@swifta.com', 'kachi', 'active', '2013-08-16 12:17:14', '2013-08-16 12:17:14', 17),
(4, 'demelfordiac@gmail.com', 'dudu', 'active', '2013-08-16 20:32:02', '2013-08-16 20:32:02', 18),
(6, 'ade@yahoo.co.uk', 'kaka', 'active', '2013-09-26 15:33:52', '2013-09-26 15:33:52', 20),
(7, 'fmadueke@pharmarays.com', 'test', 'active', '2013-11-17 06:54:10', '2013-11-17 06:54:10', 21),
(8, 'eokoro@pharmarays.com', 'test', 'active', '2013-11-17 07:14:28', '2013-11-17 07:14:28', 22),
(9, 'mm@yahoo.com', 'kaka', 'TermsAndCondition', '2014-03-11 15:17:24', '2014-03-11 15:17:24', 30),
(10, 'yekaso@yahoo.com', 'kaka', 'TermsAndCondition', '2014-03-19 10:46:46', '2014-03-19 10:46:46', 31);

-- --------------------------------------------------------

--
-- Table structure for table `logindetails_userrole`
--

CREATE TABLE IF NOT EXISTS `logindetails_userrole` (
  `id_logindetails_userrole` int(11) NOT NULL AUTO_INCREMENT,
  `logindetailsuserrole_logindetailsid` int(11) NOT NULL,
  `logindetailsuserrole_userroleid` int(11) NOT NULL,
  `time_created` timestamp NULL DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_logindetails_userrole`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `logindetails_userrole`
--

INSERT INTO `logindetails_userrole` (`id_logindetails_userrole`, `logindetailsuserrole_logindetailsid`, `logindetailsuserrole_userroleid`, `time_created`, `last_updated`) VALUES
(1, 1, 1, '2014-01-09 10:14:52', '0000-00-00 00:00:00'),
(2, 1, 2, '2014-01-09 10:14:52', '2014-01-09 21:37:49'),
(3, 1, 3, '2014-03-04 23:00:00', '2014-03-03 23:00:00'),
(4, 10, 3, '2014-03-19 09:46:46', '2014-03-19 09:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(10) NOT NULL AUTO_INCREMENT,
  `firstname_member` varchar(100) NOT NULL,
  `surname_member` varchar(100) NOT NULL,
  `gender_member` tinyint(4) NOT NULL,
  `dateOfBirth_member` varchar(100) NOT NULL,
  `emailaddress_member` varchar(100) NOT NULL,
  `membertypeid_membertype` int(10) NOT NULL,
  PRIMARY KEY (`id_member`),
  KEY `FKmember786756` (`membertypeid_membertype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `firstname_member`, `surname_member`, `gender_member`, `dateOfBirth_member`, `emailaddress_member`, `membertypeid_membertype`) VALUES
(1, 'Onyekachi', 'onwuzu', 1, '25 oct 2001', 'oonwuzu@swifta.com', 1),
(2, 'Nwabueze', 'Obioma', 1, '12 July', 'zed@yahoo.com', 2),
(3, 'kayode', 'Adeoti', 1, '0', 'princeyekaso@gmail.com', 4),
(4, 'Samuel Okakpi', 'onwuzu', 1, '0', 'princeyekaso@gmail.com', 7),
(5, 'Opeyemi', 'Adetura', 1, '0', 'princeyekaso@gmail.com', 5),
(6, 'Elvis', 'onuorah', 1, '17-8-1917', 'princeyekaso@gmail.com', 3),
(7, 'onyekachi', 'onwuzu', 0, '10-3-1909', 'princeyekaso@gmail.com', 1),
(8, 'onyekachi', 'onwuzu', 0, '18-3-1915', 'nan@yahoo.com', 1),
(9, 'onyekachi', 'onwuzu', 0, '18-2-1913', 'nn@yahoo.com', 1),
(10, 'onyekachi', 'onwuzu', 0, '16-3-1917', 'nna@yahoo.com', 1),
(11, 'onyekachi', 'onwuzu', 0, '28-1-1915', 'princeyekaso1@gmail.com', 1),
(13, 'onyekachi', 'onwuzu', 0, '18-1-1915', 'nns@yahoo.com', 1),
(15, 'onyekachi', 'onwuzu', 0, '31-3-1914', 'oonwuzus@swifta.com', 1),
(16, 'onyekachi', 'onwuzu', 0, '18-2-1915', 'oonwuzuss@swifta.com', 1),
(17, 'onyekachi', 'onwuzu', 0, '18-2-1915', 'oonwuzusss@swifta.com', 1),
(18, 'onwuzu', 'melford', 0, '17-2-1989', 'demelfordiac@gmail.com', 1),
(20, 'adetura', 'adetura', 0, '16-3-1914', 'ade@yahoo.co.uk', 1),
(21, 'fabian', 'madueke', 0, '13-2-1982', 'fmadueke@pharmarays.com', 1),
(22, 'okoro', 'elvis', 0, '16-2-1916', 'eokoro@pharmarays.com', 1),
(30, 'onwuzu', 'onyekachi', 0, '11-2-2014', 'mm@yahoo.com', 2),
(31, 'onyekachi', 'onwuzu', 0, '19-2-2014', 'yekaso@yahoo.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `membertype`
--

CREATE TABLE IF NOT EXISTS `membertype` (
  `id_membertype` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  `default_image_name` tinytext,
  PRIMARY KEY (`id_membertype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `membertype`
--

INSERT INTO `membertype` (`id_membertype`, `name`, `description`, `default_image_name`) VALUES
(1, 'Ordinary Member', 'Ordinary Member', 'profilem'),
(2, 'Pharmacy Owner', 'Male Pharmacist', 'profilem2'),
(3, 'Male Doctor', 'Male Doctor', 'profilem1'),
(4, 'Male Nurse', 'Male Nurse', 'profilem'),
(5, 'Nafdac Official', 'Nafdac official', 'profilem2'),
(7, 'Student Member', 'Student Member', 'profile1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `enabled`) VALUES
(1, NULL),
(2, NULL),
(3, NULL),
(4, NULL),
(5, NULL),
(6, NULL),
(7, NULL),
(8, NULL),
(9, NULL),
(10, NULL),
(11, NULL),
(12, NULL),
(13, NULL),
(14, NULL),
(15, NULL),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newscomment`
--

CREATE TABLE IF NOT EXISTS `newscomment` (
  `id_newscomment` int(10) NOT NULL AUTO_INCREMENT,
  `comment` mediumtext,
  `memberid_member` int(10) NOT NULL,
  `newsid_news` int(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_newscomment`),
  KEY `FKnewscommen268634` (`newsid_news`),
  KEY `FKnewscommen279578` (`memberid_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsdrugmerger`
--

CREATE TABLE IF NOT EXISTS `newsdrugmerger` (
  `id_newsmerger` int(10) NOT NULL AUTO_INCREMENT,
  `newsid_news` int(10) NOT NULL,
  `drugcategoryid_drugcategory` int(10) NOT NULL,
  PRIMARY KEY (`id_newsmerger`),
  UNIQUE KEY `id_newsmerger` (`id_newsmerger`),
  UNIQUE KEY `newsdrugmerger_id_newsmerger` (`id_newsmerger`),
  KEY `FKnewsdrugme102215` (`newsid_news`),
  KEY `FKnewsdrugme879759` (`drugcategoryid_drugcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `newsdrugmerger`
--

INSERT INTO `newsdrugmerger` (`id_newsmerger`, `newsid_news`, `drugcategoryid_drugcategory`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 1),
(8, 8, 2),
(9, 9, 3),
(10, 10, 4),
(11, 11, 5),
(12, 12, 6),
(13, 13, 1),
(14, 14, 2),
(15, 15, 3),
(16, 16, 4),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 7),
(21, 21, 3),
(22, 22, 7),
(23, 23, 7),
(24, 24, 7),
(25, 25, 4),
(26, 26, 7),
(27, 27, 3),
(28, 28, 3),
(29, 29, 3),
(30, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_newsletter` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_newsletter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newslettercomment`
--

CREATE TABLE IF NOT EXISTS `newslettercomment` (
  `id_newslettercomment` int(10) NOT NULL AUTO_INCREMENT,
  `comment` longtext,
  `memberid_member` int(10) NOT NULL,
  `newsletterid_newsletter` int(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_newslettercomment`),
  KEY `FKnewsletter300764` (`newsletterid_newsletter`),
  KEY `FKnewsletter685166` (`memberid_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletterdrugmerger`
--

CREATE TABLE IF NOT EXISTS `newsletterdrugmerger` (
  `id_newslettermerger` int(10) NOT NULL AUTO_INCREMENT,
  `newsletterid_newsletter` int(10) NOT NULL,
  `drugcategoryid_drugcategory` int(10) NOT NULL,
  PRIMARY KEY (`id_newslettermerger`),
  UNIQUE KEY `id_newslettermerger` (`id_newslettermerger`),
  UNIQUE KEY `newsletterdrugmerger_id_newslettermerger` (`id_newslettermerger`),
  KEY `FKnewsletter138606` (`newsletterid_newsletter`),
  KEY `FKnewsletter123706` (`drugcategoryid_drugcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `otherindications`
--

CREATE TABLE IF NOT EXISTS `otherindications` (
  `id_otherindications` int(10) NOT NULL AUTO_INCREMENT,
  `description` tinytext,
  `drugid_drug` int(10) NOT NULL,
  PRIMARY KEY (`id_otherindications`),
  KEY `FKotherindic987530` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist_search`
--

CREATE TABLE IF NOT EXISTS `pharmacist_search` (
  `id_pharmacysearch` int(11) NOT NULL AUTO_INCREMENT,
  `pharmacy_id` int(11) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_pharmacysearch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pharmacist_search`
--

INSERT INTO `pharmacist_search` (`id_pharmacysearch`, `pharmacy_id`, `timecreated`, `ipaddress`, `location`, `user_id`, `longitude`, `latitude`) VALUES
(1, 1, '2014-02-05 15:16:16', '::1', 'Lagos', 1, 3.8982, 6.98924),
(2, 2, '2014-02-05 15:16:49', '::1', 'Lagos', 2, 3.8982, 6.98924),
(3, 3, '2014-02-05 16:36:15', '::1', 'Lagos', 18, 3.8982, 6.98924),
(4, 15, '2014-02-05 16:37:34', '::1', 'Lagos', 18, 3.8982, 6.98924),
(5, 14, '2014-02-05 16:38:55', '::1', 'Lagos', 18, 3.8982, 6.98924),
(6, 18, '2014-02-05 16:40:33', '::1', 'Lagos', 18, 3.8982, 6.98924),
(7, 2, '2014-02-05 16:42:38', '::1', 'Lagos', 18, 3.8982, 6.98924),
(8, 3, '2014-02-05 16:46:03', '::1', 'Lagos', 18, 3.8982, 6.98924),
(9, 6, '2014-02-05 16:50:18', '::1', 'Lagos', NULL, 3.8982, 6.98924),
(10, 18, '2014-02-10 22:00:19', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(11, 0, '2014-02-16 15:27:36', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(12, 0, '2014-02-16 16:36:09', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(13, 0, '2014-02-16 16:37:22', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(14, 2, '2014-02-16 16:38:10', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(15, 3, '2014-02-27 23:36:45', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(16, 1, '2014-03-01 05:44:22', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(17, 43, '2014-03-02 20:48:53', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(18, 5, '2014-03-02 21:21:05', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(19, 5, '2014-03-02 21:32:21', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(20, 5, '2014-03-02 21:33:32', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(21, 5, '2014-03-02 21:34:55', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(22, 5, '2014-03-02 21:35:14', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(23, 5, '2014-03-02 21:36:33', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(24, 5, '2014-03-02 21:39:08', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(25, 5, '2014-03-02 21:39:24', '::1', 'Lagos', NULL, 3.39583, 6.45306),
(26, 2, '2014-03-02 21:44:13', '::1', 'Lagos', 18, 3.39583, 6.45306),
(27, 9, '2014-03-17 12:26:58', '::1', 'Lagos', NULL, 3.39583, 6.45306);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacology`
--

CREATE TABLE IF NOT EXISTS `pharmacology` (
  `id_pharmacology` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  `pharmacologytypeid_pharmacologytype` int(10) NOT NULL,
  PRIMARY KEY (`id_pharmacology`),
  KEY `FKpharmacolo587705` (`pharmacologytypeid_pharmacologytype`),
  KEY `FKpharmacolo233045` (`drugid_drug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacologytype`
--

CREATE TABLE IF NOT EXISTS `pharmacologytype` (
  `id_pharmacologytype` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_pharmacologytype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `id_pharmacy` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `address` mediumtext,
  `telephone` mediumtext,
  `locationid_location` int(10) NOT NULL,
  PRIMARY KEY (`id_pharmacy`),
  UNIQUE KEY `id_pharmacy` (`id_pharmacy`),
  UNIQUE KEY `pharmacy_id_pharmacy` (`id_pharmacy`),
  KEY `FKpharmacy970718` (`locationid_location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id_pharmacy`, `name`, `address`, `telephone`, `locationid_location`) VALUES
(1, '4Tees Pharmacy', 'Suite 47, Dolphin Plaza, Dolphin Estate, Ikoyi Lagos.', '+234 1 7920163', 1),
(2, 'A-Z Pharmacy & Stores', '68 Oke-Ejigbo Street, Abeokuta, Ogun State.', '+234 39 240353, 240045\r\n', 1),
(3, 'Aabon Pharmacy', '99 Aba/Owerri Road, Aba, Abia State.', '+234 82 223256\r\n', 1),
(4, 'Abifad Pharmacy Limited', 'Plot 8B, Kigoma Street, Zone 7, Wuse, Abuja.', '+234 9 5235240\r\n', 1),
(5, 'ABJ Pharmacy', '13 Brown Road, Aguda, Surulere, Lagos.', '+234 1 4814480 , 0803-3029420, 0803-3362182,\r\n', 2106),
(6, 'Akpene Pharmacy Nigeria Limited', '302 Wharf Road, Apapa, Lagos.', '+234 1 5451035, 5453180', 1),
(7, 'Albedou Pharmacy', '4 Bolorunduro Street, Ikole, Ekiti State.', '+234 30 440028', 1),
(8, 'Albertson Pharmacy', 'No 37 Kingsway Road, Ikoyi, Lagos.', '+234 1 2680937', 1),
(9, 'All King Pharmacy', '39 Adebowale Street, Ojodu, Lagos.', '+234 1 4925109, 4711520, 256338', 1),
(10, 'Alpha Pharmacy & Stores Limited', '2B Alabi Street, Off Toyin Street, Ikeja, Lagos.', '+234 1 4961607, 4972902, 8119747; Fax: +234 1 4961607, 4972902', 1),
(11, 'Alrange Pharmacy', '20 Kadiri Street, Ojuelegba, Surulere, Lagos.', '+234 1 5451721', 2106),
(12, 'Amazon Pharmacy Limited', '49 Randle Street, Surulere, Lagos.', '+234 (0) 803-3303872', 2106),
(13, 'Arowolo Pharmacy', '7 Isheri Road, Idimu, Lagos.', '+234 1 4706732', 1),
(14, 'ATSI Pharmacy Nigeria Limited', 'Unit 6, 52 James Robertson Street, Masha, Surulere, Lagos', '+234 1 830853, 5851937; Fax: +234 1 4935849', 2106),
(15, 'Aventis Pasteur Nigeria', '7th Floor, Eleganza Biro Plaza, Plot 634, Adeyemo Alakija Street, Victoria Island, Lagos.', '+234 1 2647150, 2647151', 1),
(16, 'Barnado Pharmacy', 'Western Avenue, Ojuelegba, Lagos.', '+234 1 4528705, 7743342, 0803-3018022', 1),
(17, 'Batil Pharmacy & Stores Limited', '133 Idimu Road, Egbeda, Lagos.', '+234 1 4701292', 1),
(18, 'Becan Pharmacy & Stores', 'Suite A12, Sheriff Shopping Complex, Aminu Kano Crescent, Wuse 2, Abuja.', '+234 (0) 803-31191', 1),
(19, 'Belam Pharmacy', '56 Omoba Road, Aba, Abia State.', '+234 82 224062', 1),
(20, 'Beneze Pharmacy Limited', '4 Demurin Street, Ketu, Lagos.', '+234 1 4965505; Fax: +234 1 4965505\r\n', 1),
(21, 'Bernadds Pharmacy & Supermarket', '58 Western Avenue, Surulere, Lagos.', '+234 1 5848008, 2644521', 2106),
(22, 'Bernados Pharmacy', '66, Ishaga Idi Araba Road, Surulere, Lagos.', '+234 1 7743342, 4528705, 0803-3018022,', 2106),
(23, 'Beta Pharmacy & Chemist', 'Shop 2, Shopping Centre, Area 2, Garki, Abuja.', '+234 9 23440365', 1),
(24, 'Big John Pharmacy', 'Park & Shop Complex, Victoria Island, Lagos.', '+234 1 2616971', 1),
(25, 'Binklor Pharmacy & Store Limited', '8 Pelewura Crescent, Apapa, Lagos.', '+234 1 5879912', 1),
(26, 'Biyi Pharmacy', 'Plot 2, Cornershop, Zone 6, Wuse, Abuja.', '234 9 5234411', 1),
(27, 'Boj Pharmacy & Stores Limited', 'Shop 23 & 24, Post Office Complex, Area 10, Garki, Abuja.', '+234 9 2346450', 1),
(28, 'Bolar Pharmaceuticals Ltd', '9, Kodesoh Street, Ikeja, Lagos.', '+234 1 4930100', 1),
(29, 'Bolax Pharma Products Ltd', ' 6, Kolawole Odunsi Street, Off Unity Road, P.O. Box 9924, Ikeja, Lagos.', '+234 1 4962708, 4967408; Fax: +234 1 4936875', 1),
(30, 'Boluke Pharmacy Limited', '16 Iju Road, Agege, Lagos.', '+234 1 4923117', 1),
(31, 'Brigs Pharmacy Limited', '1 Irewole Avenue, Opebi, Lagos.', '+234 1 4978024', 1),
(32, 'Brite Pharmacy & Store Limited', '129 Abeokuta Expressway, Adealu Bus Stop, Iyana Ipaja, Lagos.', '+234 1 4924970', 1),
(33, 'Cantol Pharmacy & Stores', '56 Opebi Road, By Salvation BusStop, Ikeja, Lagos.', '+234 1 4932556', 1),
(34, 'Capricon Pharmacy & Stores', '17A Nicholas Street, Aba, Abia State.', '+234 1 82 227076\r\n', 1),
(35, 'Capstone Pharmacy and Stores', '163, Akilo Road (Marketing B/Stop), Ikeja Lagos.', '+234 (0) 802 3435779', 1),
(36, 'Carelink Pharmacy', 'Ground Floor, Centage Plaza, 14 Allen Avenue, Ikeja, Lagos.', '+234 1 4938152', 1),
(37, 'ChezPharma Nigeria Ltd', '70, Sir Mobolaji Bank Anthony Way, Ikeja, Lagos.', '+234 1 2630997, 4967523\r\n', 1),
(38, 'CHI Pharmaceuticals Ltd', 'Plot 20, Chief Benson Anorue Street, Ajao Estate, Apakun Oshodi, Lagos.', '+234 1 4520626-32, 4520592, 4520877, 4520965, 7740383; Fax: +234 1 4520980, 4975280.', 1),
(39, 'Chrisnolly Pharmacy & Kiddies Corner', 'Shop G3, Nicon Noga Hilton Hotel, Maitama, Abuja.', '+234 9 4131811, 4134857', 1),
(40, 'Chyzob Pharmacy', '168 Awolowo Road, Ikoyi Lagos.', '+234 1 2694545', 1),
(41, 'Koon', 'Abakpa, Ugbene Enugu State', '08063305711', 1),
(42, 'Igondu pharmacy', 'Ebelebe', '0807987972934', 1),
(43, 'Kov Pharmacy', 'Abakpa', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `preglactation`
--

CREATE TABLE IF NOT EXISTS `preglactation` (
  `id_preglactation` int(10) NOT NULL AUTO_INCREMENT,
  `description` mediumtext,
  `drugid_drug` int(10) NOT NULL,
  `pregnancycategoryid_pregnancycategory` int(10) NOT NULL,
  PRIMARY KEY (`id_preglactation`),
  KEY `FKpreglactat285955` (`drugid_drug`),
  KEY `FKpreglactat381228` (`pregnancycategoryid_pregnancycategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pregnancycategory`
--

CREATE TABLE IF NOT EXISTS `pregnancycategory` (
  `id_pregnancycategory` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_pregnancycategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rolemapper`
--

CREATE TABLE IF NOT EXISTS `rolemapper` (
  `id_rolemapper` int(10) NOT NULL AUTO_INCREMENT,
  `memberid_member` int(10) NOT NULL,
  `userroleid_userrole` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_rolemapper`),
  KEY `FKrolemapper930068` (`memberid_member`),
  KEY `FKrolemapper612128` (`userroleid_userrole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topic_comment`
--

CREATE TABLE IF NOT EXISTS `topic_comment` (
  `id_topiccomment` int(10) NOT NULL AUTO_INCREMENT,
  `comment` mediumtext,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `memberid_member` int(10) NOT NULL,
  `forum_topicid_topicforum` int(10) NOT NULL,
  PRIMARY KEY (`id_topiccomment`),
  KEY `FKtopic_comm85598` (`memberid_member`),
  KEY `FKtopic_comm771590` (`forum_topicid_topicforum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `topic_comment`
--

INSERT INTO `topic_comment` (`id_topiccomment`, `comment`, `timecreated`, `memberid_member`, `forum_topicid_topicforum`) VALUES
(1, 'check this comment now....', '2013-10-24 13:14:12', 6, 1),
(2, 'This is just not right...I have had this for a very long time that it drives me crazy', '2013-10-24 13:14:47', 6, 1),
(3, 'this is not just right', '2013-10-24 13:21:05', 6, 1),
(4, 'abi', '2013-10-24 13:21:09', 6, 1),
(5, 'let''s make this happen', '2013-10-24 13:21:19', 6, 1),
(6, 'we are in it together right?', '2013-10-24 13:21:29', 6, 1),
(7, 'Ada mma', '2013-10-24 13:24:11', 6, 1),
(8, 'Ada no dey lack oooh', '2013-10-24 13:24:20', 6, 1),
(9, 'Yes its very fresh ooo', '2013-10-24 13:24:31', 6, 1),
(10, 'The first to comment always wins', '2013-10-24 13:24:39', 6, 1),
(11, 'Yes....we just reached the mark', '2013-10-24 13:24:49', 6, 1),
(12, 'But this is not what was planned for na', '2013-10-24 13:24:59', 6, 1),
(13, 'Richard don finish himself with Ola', '2013-10-26 09:35:26', 6, 1),
(14, 'oijulkhkjhkjhkjkjh', '2013-11-04 02:12:15', 0, 2),
(15, 'es', '2013-11-04 02:12:29', 0, 1),
(16, 'the condition of the eye', '2013-11-05 07:15:05', 6, 2),
(17, 'this prevents it from working well', '2013-11-05 07:15:18', 6, 2),
(18, 'The police are mad', '2013-11-05 07:31:24', 6, 12),
(19, 'Silly students', '2013-11-05 07:31:33', 6, 11),
(20, 'I''m not sure i want to really think about this case', '2013-11-05 07:32:02', 6, 10),
(21, 'The eyes can buldge eeeeh', '2013-11-05 07:32:28', 6, 6),
(22, 'is this why am here?', '2013-11-17 05:54:34', 0, 1),
(23, 'this didn''t work oooo', '2013-11-17 05:54:54', 0, 1),
(24, 'hiiiii', '2013-11-17 05:55:24', 0, 1),
(25, 'hi', '2013-11-17 06:03:44', 21, 1),
(26, 'elvis in the building', '2013-11-17 06:15:08', 22, 1),
(27, 'this case is not just right', '2014-01-06 15:36:58', 0, 12),
(28, 'hehehe...these students are jokers', '2014-01-06 15:37:51', 0, 11),
(29, 'we have to go now', '2014-01-06 15:53:06', 0, 1),
(30, 'hello', '2014-01-06 15:59:38', 6, 1),
(31, 'this is not just right na', '2014-01-06 16:00:16', 6, 1),
(32, 'they are really silly students', '2014-01-06 16:00:29', 6, 11),
(33, 'why on earth will you pay such exuberant amount of money as fees', '2014-01-06 16:01:05', 6, 11),
(34, 'the building also collapsed', '2014-01-09 14:11:48', 6, 1),
(35, 'Na lie', '2014-01-11 08:38:48', 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE IF NOT EXISTS `userrole` (
  `id_userrole` int(10) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` mediumtext,
  PRIMARY KEY (`id_userrole`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id_userrole`, `name`, `description`) VALUES
(1, 'User', 'User'),
(2, 'Admin', 'Admin'),
(3, 'Pharmacy Owner', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userrole_pharmacy`
--

CREATE TABLE IF NOT EXISTS `userrole_pharmacy` (
  `id_userrolepharmacy` int(11) NOT NULL AUTO_INCREMENT,
  `pharmacy_id` int(11) NOT NULL,
  `loginuserrole_id` int(11) NOT NULL,
  `status` varchar(256) NOT NULL,
  PRIMARY KEY (`id_userrolepharmacy`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userrole_pharmacy`
--

INSERT INTO `userrole_pharmacy` (`id_userrolepharmacy`, `pharmacy_id`, `loginuserrole_id`, `status`) VALUES
(1, 1, 3, 'APPROVED'),
(4, 13, 4, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE IF NOT EXISTS `vacancy` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` tinytext,
  `jobdescription` tinytext,
  `yearsofexperience` int(10) DEFAULT NULL,
  `VacancyGroupvacancygroup_id` int(11) NOT NULL,
  `VacancyTypevacancytype_id` int(11) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `closingdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`vacancy_id`),
  KEY `FKVacancy9444` (`VacancyGroupvacancygroup_id`),
  KEY `FKVacancy885951` (`VacancyTypevacancytype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vacancygroup`
--

CREATE TABLE IF NOT EXISTS `vacancygroup` (
  `vacancygroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` tinytext,
  PRIMARY KEY (`vacancygroup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vacancytype`
--

CREATE TABLE IF NOT EXISTS `vacancytype` (
  `vacancytype_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `description` tinytext,
  PRIMARY KEY (`vacancytype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adverseeffects`
--
ALTER TABLE `adverseeffects`
  ADD CONSTRAINT `FKadverseeff649841` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FKarticle874410` FOREIGN KEY (`newsid_news`) REFERENCES `news` (`id_news`),
  ADD CONSTRAINT `FKarticle885354` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `FKarticle899694` FOREIGN KEY (`newsletterid_newsletter`) REFERENCES `newsletter` (`id_newsletter`);

--
-- Constraints for table `cautions`
--
ALTER TABLE `cautions`
  ADD CONSTRAINT `FKcautions692964` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `contraindications`
--
ALTER TABLE `contraindications`
  ADD CONSTRAINT `FKcontraindi864295` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `drug`
--
ALTER TABLE `drug`
  ADD CONSTRAINT `FKdrug496552` FOREIGN KEY (`brandname_id`) REFERENCES `brandname` (`id_brandname`),
  ADD CONSTRAINT `FKdrug539221` FOREIGN KEY (`drugclass_id`) REFERENCES `drugclass` (`id_drugclass`),
  ADD CONSTRAINT `FKdrug586190` FOREIGN KEY (`drugcategory_id`) REFERENCES `drugcategory` (`id_drugcategory`);

--
-- Constraints for table `drugailment`
--
ALTER TABLE `drugailment`
  ADD CONSTRAINT `FKdrugailmen672913` FOREIGN KEY (`ailmentstageid_ailmentstage`) REFERENCES `ailmentstage` (`id_ailmentstage`),
  ADD CONSTRAINT `FKdrugailmen819159` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `drugavailability`
--
ALTER TABLE `drugavailability`
  ADD CONSTRAINT `FKdrugavaila465729` FOREIGN KEY (`pharmacyid_pharmacy`) REFERENCES `pharmacy` (`id_pharmacy`),
  ADD CONSTRAINT `FKdrugavaila63485` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `drugclass_drug`
--
ALTER TABLE `drugclass_drug`
  ADD CONSTRAINT `FKdrugclass_643182` FOREIGN KEY (`drugclassid_drugclass`) REFERENCES `drugclass` (`id_drugclass`),
  ADD CONSTRAINT `FKdrugclass_836699` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `drugcomment`
--
ALTER TABLE `drugcomment`
  ADD CONSTRAINT `FKdrugcommen111423` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`),
  ADD CONSTRAINT `FKdrugcommen713059` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `drugdosing`
--
ALTER TABLE `drugdosing`
  ADD CONSTRAINT `FKdrugdosing681264` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`),
  ADD CONSTRAINT `FKdrugdosing826934` FOREIGN KEY (`dosingtypeid_dosingtype`) REFERENCES `dosingtype` (`id_dosingtype`);

--
-- Constraints for table `forum_category_forum_category`
--
ALTER TABLE `forum_category_forum_category`
  ADD CONSTRAINT `FKforum_cate309233` FOREIGN KEY (`forum_categoryid_forum2`) REFERENCES `forum_category` (`id_forum`),
  ADD CONSTRAINT `FKforum_cate362643` FOREIGN KEY (`forum_categoryid_forum`) REFERENCES `forum_category` (`id_forum`);

--
-- Constraints for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD CONSTRAINT `FKlogindetai462569` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `FKmember786756` FOREIGN KEY (`membertypeid_membertype`) REFERENCES `membertype` (`id_membertype`);

--
-- Constraints for table `newscomment`
--
ALTER TABLE `newscomment`
  ADD CONSTRAINT `FKnewscommen268634` FOREIGN KEY (`newsid_news`) REFERENCES `news` (`id_news`),
  ADD CONSTRAINT `FKnewscommen279578` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `newsdrugmerger`
--
ALTER TABLE `newsdrugmerger`
  ADD CONSTRAINT `FKnewsdrugme102215` FOREIGN KEY (`newsid_news`) REFERENCES `news` (`id_news`),
  ADD CONSTRAINT `FKnewsdrugme879759` FOREIGN KEY (`drugcategoryid_drugcategory`) REFERENCES `drugcategory` (`id_drugcategory`);

--
-- Constraints for table `newslettercomment`
--
ALTER TABLE `newslettercomment`
  ADD CONSTRAINT `FKnewsletter300764` FOREIGN KEY (`newsletterid_newsletter`) REFERENCES `newsletter` (`id_newsletter`),
  ADD CONSTRAINT `FKnewsletter685166` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `newsletterdrugmerger`
--
ALTER TABLE `newsletterdrugmerger`
  ADD CONSTRAINT `FKnewsletter123706` FOREIGN KEY (`drugcategoryid_drugcategory`) REFERENCES `drugcategory` (`id_drugcategory`),
  ADD CONSTRAINT `FKnewsletter138606` FOREIGN KEY (`newsletterid_newsletter`) REFERENCES `newsletter` (`id_newsletter`);

--
-- Constraints for table `otherindications`
--
ALTER TABLE `otherindications`
  ADD CONSTRAINT `FKotherindic987530` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`);

--
-- Constraints for table `pharmacology`
--
ALTER TABLE `pharmacology`
  ADD CONSTRAINT `FKpharmacolo233045` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`),
  ADD CONSTRAINT `FKpharmacolo587705` FOREIGN KEY (`pharmacologytypeid_pharmacologytype`) REFERENCES `pharmacologytype` (`id_pharmacologytype`);

--
-- Constraints for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD CONSTRAINT `FKpharmacy970718` FOREIGN KEY (`locationid_location`) REFERENCES `location` (`id_location`);

--
-- Constraints for table `preglactation`
--
ALTER TABLE `preglactation`
  ADD CONSTRAINT `FKpreglactat285955` FOREIGN KEY (`drugid_drug`) REFERENCES `drug` (`id_drug`),
  ADD CONSTRAINT `FKpreglactat381228` FOREIGN KEY (`pregnancycategoryid_pregnancycategory`) REFERENCES `pregnancycategory` (`id_pregnancycategory`);

--
-- Constraints for table `rolemapper`
--
ALTER TABLE `rolemapper`
  ADD CONSTRAINT `FKrolemapper612128` FOREIGN KEY (`userroleid_userrole`) REFERENCES `userrole` (`id_userrole`),
  ADD CONSTRAINT `FKrolemapper930068` FOREIGN KEY (`memberid_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `FKVacancy885951` FOREIGN KEY (`VacancyTypevacancytype_id`) REFERENCES `vacancytype` (`vacancytype_id`),
  ADD CONSTRAINT `FKVacancy9444` FOREIGN KEY (`VacancyGroupvacancygroup_id`) REFERENCES `vacancygroup` (`vacancygroup_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
