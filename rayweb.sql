-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2015 at 12:20 PM
-- Server version: 5.1.73
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rayweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `co_name` varchar(250) NOT NULL,
  `co_type` varchar(250) NOT NULL,
  `co_owner` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `fax` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `date` bigint(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `co_name`, `co_type`, `co_owner`, `phone`, `fax`, `mobile`, `address`, `answer`, `date`) VALUES
(1, 'شمس', 'ثبت شرکت', '', '', '', '', '', 'نخواست', 1405506282),
(2, 'نارمک', 'ثبت شرکت', '', '77809372', '', '', '', 'نخواستن', 1405506967),
(3, 'سعادت آباد', 'ثبت شرکت', 'خانم ادی', '88563796', '09125436931', '', '', 'بر نداشت', 1405582971),
(4, '', 'ثبت شرکت', '', '44014542', '', '', '', 'گفت داریم', 1405506983),
(5, '', 'ثبت شرکت', 'خانم فراهانی', '88644245', '', '', '', 'با مهرداد هماهنگ بشه\r\nهمکارش گفت با شماره 88643981 خانوم عبدهری تماس بگیر', 1405506992),
(6, 'هدف', 'ثبت شرکت', 'بحرینی', '88888635', '', '', '', 'رفتیم، اوکی داد، پیگیری شود', 1405507008),
(7, '', 'ثبت شرکت', '', '88927229', '', '', '', 'نخواست', 1405507016),
(8, 'فارس', 'ثبت شرکت', '', '88971587-8', '', '', '', 'نخواست', 1405507026),
(9, 'انقلاب', 'ثبت شرکت', 'خانم زمانی', '66122970-2', '09127076134', '', '', 'گفتن تماس میگیرن ولی باید تماس بگیریم', 1406195075),
(10, 'حسابداری', 'ثبت شرکت', '', '88047662', '09369034524', '', '', '', 1405583033),
(11, 'غرب', 'ثبت شرکت', '', '88246638', '', '', '', 'گفتن تماس میگیرن پویا زنگید', 1405507056),
(12, 'نیک', 'ثبت شرکت', '', '88620460', '', '', '', '', 1405506595),
(13, 'اندیشه عدالت خواه', 'ثبت شرکت', 'مقربان', '66756001', '', '', 'ضلع شمالی پارک شهر جنب دادسرای ناحیه 12\r\n', 'پیگیری شود', 1405506674),
(14, 'پیشرو', 'ثبت شرکت', 'خانم الماسیان', '88562596', '', '', '', 'پیگیری شود-صحبت میکنه زنگ میزنه', 1405507133),
(15, 'پایتخت', 'ثبت شرکت', 'خانم زمانی', '', '', '', '', 'پیگیری شود', 1405507178),
(16, 'دردانه کویر', 'ثبت شرکت', 'خانم سارویی', '88746344', '', '', '', 'پیگیری شود\r\n', 1405507207),
(17, 'یکتا', 'ثبت شرکت', 'آماده خیر', '88853026', '', '', '', 'پیگیری شود\r\nاحتیاج نداریم', 1405507234),
(18, 'فرمانیه', 'ثبت شرکت', 'ستاری', '26104091', '', '', '', 'پیگیری شود\r\n2 تا 3 هفته بعذ', 1405507259),
(19, 'موسسه حقوقی حق گذاران میثاق', 'ثبت شرکت', 'خزایی', '', '09103095426', '', '', 'هماهنگ شود برای جلسه حضوری\r\nجواب داد گفت من میام اونجا', 1405584381),
(20, 'ژیهات', 'ثبت شرکت', 'پروینی', '44451409', '', '', '', 'پیگیری شود', 1405507327),
(21, 'هفت تیر', 'ثبت شرکت', 'رشید زاده', '88592766', '', '', '', 'pedram.rashidzadeh@gmail.com\r\nنمونه کار فرستاده شود و پیگیری شود', 1405507357),
(22, 'ذهن برتر راه عدالت', 'ثبت شرکت', 'عزیز خانی', '88934578', '', '', 'ضلع شمال غربی میدان ولیعصر خ اداره پست - پ 1682-ط 4 واحد 1', '4شنبه قرار داد امضا میشه', 1405507396),
(23, 'برتر', 'ثبت شرکت', 'کریمی', '66597960', '', '', '', 'پیگیری شود\r\nهفته دیگه میاد', 1405507420),
(24, 'پرستو فرازان طوس', 'ثبت شرکت', 'غلامیان', '66067622', '09128670096', '', 'خیابان استاد معین 21 متری ج بن بست رسالت پلاک 9 طبقه 3', 'قرارداد رو میخونه', 1405584393),
(25, 'پایتخت', 'ثبت شرکت', 'علیزاده', '55741078', '', '', '', 'پیگیری شود', 1405507472),
(26, 'مدبر', 'ثبت شرکت', 'نبی', '88047662', '', '', '', 'پیگیری شود', 1405507494),
(27, 'رشا', 'ثبت شرکت', 'محمودی', '88676848', '', '', '', 'پیگیری شود - با خانم یوسفی صحبت شده است.\r\nپشیمون شدن', 1405507519),
(28, 'ساحل', 'ثبت شرکت', 'رضایی', '44288649', '', '', '', 'پیگیری شود', 1405507541),
(29, 'نگار', 'ثبت شرکت', 'خوش نویسان', '66925626', '', '', 'میدان انقلاب کارگر جنوبی پلاک 722 واحد 7 ', 'هماهنگی برای جلسه حضوری\r\nدوباره زنگیدیم شماره گرفت\r\nفردا باید بریم', 1406028894),
(30, 'مشاوره پیام', 'ثبت شرکت', 'کلهر', '77958014', '', '', '', 'پیگیری شود', 1405507597),
(31, 'نگار ثمین', 'ثبت شرکت', 'حیدری', '44003473', '', '', '', 'پیگیری شود\r\nهم سایت داره هم معرفی می کنه :D', 1405507617),
(32, 'غرب', 'ثبت شرکت', 'عظیمی', '44016621', '', '', '', 'پیگیری شود', 1405507639),
(33, 'بامداد', 'ثبت شرکت', 'چابک', '88704900', '', '', '', 'پیگیری شود', 1405507657),
(34, 'ایده', 'ثبت شرکت', 'سلجوقی', '77930051', '', '', '', 'مرداد ماه مراجعه شود ', 1405507677),
(35, 'اندیشه', 'ثبت شرکت', 'نصیری', '66513926', '09122264892', '', 'خ ستارخان نرسیده به تهران ویلا ابن=تدای باغبان پ 13 واحد 10', 'group.andisheh@yahoo.com\r\nهمامنگ شود\r\nبه موبایل زنگ بزنین\r\nفردا ', 1405584432),
(36, 'غرب', 'ثبت شرکت', 'یکتا آرام', '44961880', '', '', '', 'پیگیری شود \r\nپتانسیل دارد', 1405507726),
(37, 'تابناک', 'ثبت شرکت', 'خانم شجاعی', '22900287', '', '', '', '4شنیه زنگ بزنیم قرار بذاریم', 1405507753),
(38, 'مشاورین برتر', 'ثبت شرکت', 'ساعی', '77453036', '09126466225', '', '', 'پیگیری شود \r\nمدیر بد قلق است', 1405584448),
(39, 'آرمان', 'ثبت شرکت', '', ' ', '', ' 88771387', '', 'نمونه کار و قرارداد رو فکس کنید', 1405584756),
(40, 'ملاصدرا', 'ثبت شرکت', 'مومن', '', '', '', '', 'قراردادو میخونه', 1405507823),
(41, 'طنین عدالت', 'ثبت شرکت', 'آقای فلکی', '', '09127133802', '', '', 'قراردادو میخونه', 1407750483),
(42, 'استدیو', 'ثبت شرکت', 'آقای ملکی', '', '09190646440', '', '', 'بعد از ماه رمضون زنگ بزنیم', 1405584473),
(43, 'دارالترجمه مهام', 'ثبت شرکت', '', '', '09199039209', '', '', 'منتظر زنگ اول :D', 1405584490),
(44, '', 'ثبت شرکت', '', '', '09128883947', '', '', 'زنگ اول', 1405584505),
(45, 'روزنه امید(ترک اعتیاد)', 'ثبت شرکت', '', '', '09195005215', '', '', 'منتظر پویا و مهرداد\r\nزنگ اول واسه ترک!', 1405584518),
(46, '', 'ثبت شرکت', 'حمید سقه سری(وکیل)', '', '09121711782', '', '', 'زنگ اول', 1405584549),
(47, 'ثبت مطهری', 'ثبت شرکت', 'آراد ', '88175435', '', '', '', 'پیگیری شود \r\nسایتش نیاز به اصلاح دارد', 1405507997),
(48, 'سفیر ', 'ثبت شرکت', '', '66563643', '', '', '', 'فعلا نه...', 1405508018),
(49, 'تندیس', 'ثبت شرکت', 'صداقت', '88550837', '', '', '', 'پیگیری شود', 1405508040),
(50, 'ویونا', 'ثبت شرکت', '', '88773267', '', '', '', 'برنداشت', 1405508054),
(51, 'دفتر فنی دانشجو', 'ثبت شرکت', 'احمدی', '66988116', '', '', '', 'سایت و نمونه کارها رو ببیند\r\nتماس می گیرد', 1405508071),
(52, 'پارت', 'ثبت شرکت', 'صوفی', '88974385', '09122131165', '', '', 'گفته می زنگه خودش', 1405584573),
(53, 'فکر بکر', 'ثبت شرکت', 'قربانی', '22228350', '09121372352', '', '', 'هفته بعد 2شنبه بریم\r\nقبلش باید زنگ بزنیم', 1405584585),
(54, 'آراکس', 'ثبت شرکت', 'آقای اصغری', '22916486', '09122273603', '', '', 'هفته بعد تماس بگیرید\r\n2شنبه', 1405584607),
(55, 'پویا میرداماد', 'ثبت شرکت', '', '22922982', '09126970715', '', '', 'زنگ اول', 1405584626),
(56, 'پارس من آریو', 'ثبت شرکت', 'سلیمانی', '', '09128857285', '', '', 'گقت می زنگه  ', 1405692556),
(57, 'صام', 'ثبت شرکت', 'خانم غریب دوست', '77611859', '09371128018', '', '', 'سایتو اس کرد', 1405584652),
(58, 'محن کاران', 'ثبت شرکت', 'آقای کاظمی', '', '09123078602', '', '', 'آدرسو اس کردیم باید بیاید\r\nشرکت نداره', 1405584667),
(59, '', 'ثبت شرکت', 'آقای کریمی', '88009189', '09128389682', '', '', 'یک شنبه پیگیری شود', 1405584683),
(60, '', 'ثبت شرکت', 'بادفر', '', '', '09122007456', '', '', 1405856568);

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE IF NOT EXISTS `hire` (
`id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `category` varchar(250) NOT NULL,
  `ability` text NOT NULL,
  `resume` text NOT NULL,
  `register_date` bigint(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`id`, `full_name`, `mobile`, `email`, `address`, `category`, `ability`, `resume`, `register_date`) VALUES
(13, '', '09127240622', '', 'a', '', '', 'a', 1408281155),
(14, 'امیر موسوی', '09386014433', 'amirmousavi_90@yahoo.com', 'تهران', 'منشی', 'زیاد', 'زیاد', 0),
(15, 'امیر موسوی', 'tyk', 'amirmousavi_90@yahoo.com', 'ytk', 'منشی', 'tyk', 'tyk', 0),
(16, 'امیر موسوی', 'tyk', 'amirmousavi_90@yahoo.com', 'ytk', 'منشی', 'tyk', 'tyk', 1411631592),
(17, '', '', '', '', '', '', '', 1411632546),
(18, '', '', '', '', '', '', '', 1411632575),
(19, '', '', '', '', '', '', '', 1411632621),
(20, 'امیر موسوی', '09121234567', 'amirmousavi_90@yahoo.com', 'asd', 'گرافیست', 'adsf', 'afaeraFR', 1411632731);

-- --------------------------------------------------------

--
-- Table structure for table `hire_category`
--

CREATE TABLE IF NOT EXISTS `hire_category` (
`id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hire_category`
--

INSERT INTO `hire_category` (`id`, `type`) VALUES
(1, 'طراح صفحات وب'),
(2, 'برنامه نویس صفحات وب'),
(3, 'منشی'),
(4, 'طراح گرافیک');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `site_type` varchar(250) NOT NULL,
  `site_description` varchar(250) NOT NULL,
  `date` bigint(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `first_name`, `last_name`, `phone`, `mobile`, `email`, `site_type`, `site_description`, `date`) VALUES
(1, 'mohsen', 'taheri', '09124214285', '09124214285', 'moh3en.taheri@yahoo.com', 'شرکتی', 'سایت در مورد شبکه ،پشتیبانی شبکه ، دوربین مداربسته \r\nسایت بیشتر معرفی خودمان و خدماتی  هستش تا فروش', 1415515061),
(2, 's', 's', 'sd', 'sd', 'sd', 'شرکتی', 'sdsd', 1416338187),
(3, 'jhjhjhjkglhgjhjhhgfghfhggfdfdrettyuiiuiuiuiou88uy878787878787', 'll', '', '', '', 'شرکتی', '', 1416743988);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`id` int(11) NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `project_address` varchar(250) NOT NULL,
  `project_type` varchar(250) NOT NULL,
  `project_service` varchar(250) NOT NULL,
  `client` varchar(250) NOT NULL,
  `Technology` varchar(250) NOT NULL,
  `completion_date` bigint(20) NOT NULL,
  `project_description` varchar(250) NOT NULL,
  `confirmation` varchar(250) NOT NULL,
  `project_image` varchar(250) NOT NULL,
  `detail_image` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_address`, `project_type`, `project_service`, `client`, `Technology`, `completion_date`, `project_description`, `confirmation`, `project_image`, `detail_image`) VALUES
(16, 'سانی کارت', 'http://scards.ir', 'سرمایه گذاری', 'طراحی وب سایت - پنل مدیریت - SEO', 'شرکت سرمایه گذاران قوی سپید یکتا', 'HTML5, CSS3, Bootstrap, PHP 5', 0, 'سرمایه گذاری', '', 'scards.jpg', 'scards_big.jpg'),
(17, 'گروه ویستا', 'http://vistagroups.ir', 'شرکتی', 'طراحی وب سایت - پنل مدیریت', 'شرکت فخر نیکان ویستا', 'HTML5, CSS3, Bootstrap, PHP 5', 0, 'ارائه دهنده پودر کاکائو کارگیل هلند', '', 'vistagroups.jpg', 'vistagroups_big.jpg'),
(18, 'پروژه RFID مجتمع تجاری اداری بوستان', '#', 'پرتال', 'طراحی سیستم مدیریت مجتمع بوستان', 'مجتمع تجاری اداری بوستان', 'C#- PHP5 - RFID', 0, 'مجتمع تجاری اداری', '', 'boostan.jpg', 'boostan_big.jpg'),
(19, 'صفحه شخصی میثم نوری زاده', 'http://meysamnourizadeh.com', 'شخصی', 'طراحی وب سایت', 'میثم نوری زاده', 'bootstrap3 - html - css3', 0, 'طراحی تخم مرغ های مشبک - خواننده', '', 'nourizadeh.jpg', 'nourizadeh_big.jpg'),
(20, 'شرکت حمل و نقل آتیه', 'http://rayweb.ir/atieh', 'شرکتی', 'طراحی وب سایت', 'شرکت حمل و نقل آتیه', 'html5 - css3 - jquery', 0, 'حمل و نقل بین المللی', '', 'atieh.jpg', 'atieh_big.jpg'),
(21, 'گروه توسعه و ساخت آنو', 'http://tavgroup.ir', 'شرکتی', 'طراحی وب سایت - پنل مدیریت', 'گروه توسعه و ساخت آنو', 'bootstrap3 - html5 - css3 -jquery', 0, 'ساخت و ساز برج های مسکونی و تجاری', '', 'ano.jpg', 'ano_big.jpg'),
(22, 'صفحه شخصی پویا صبرآموز', 'http://sabramooz.ir', 'شخصی', 'طراحی وب سایت', 'پویا صبرآموز', 'bootstrap3 - html5 - css3 -jquery', 0, 'طراحی وب سایت - برنامه نویسی', '', 'sabramooz.jpg', 'sabramooz_big.jpg'),
(23, 'گاردین بورس', 'http://guardianbourse.ir', 'سرمایه گذاری', 'طراحی وب سایت - پنل مدیریت - SEO', 'شرکت سرمایه گذاری گاردین بورس', 'bootstrap3 - html5 - css3 -jquery', 0, 'مشاوره بورس', '', 'guardianbourse.jpg', 'guardianbourse_big.jpg'),
(24, 'بازار سنتی', 'http://bazarsonnati.com', 'فروشگاهی', 'طراحی وب سایت - پنل مدیریت', '', 'HTML5, CSS3, Bootstrap, PHP 5', 0, 'فروشگاه اینترنتی محصولات سنتی ایرانی', '', 'bazarsonnati.jpg', 'bazarsonnati_big.jpg'),
(25, 'مزون طناز', 'http://tannazmezon.ir', 'هنری', 'طراحی وب سایت - پنل مدیریت - SEO', 'مزون طناز  ', 'bootstrap3 - html5 - css3 -jquery - PHP', 0, 'طراحی لباس', '', 'tannazmezon_small.jpg', 'tannazmezon_big.jpg'),
(26, 'ثبت شرکت تدبیر اندیشان', 'http://rayweb.ir/tadbir', 'شرکتی', 'طراحی وب سایت - پنل مدیریت - SEO', 'ثبت شرکت تدبیر اندیشان ', 'html5 - css3 - jquery - PHP', 0, 'ثبت شرکت - ثبت برند و ...', '', 'tadbir_small.jpg', 'tadbir_big.jpg'),
(27, 'تهویه سازان وطن', 'http://tahviehvatan.com', 'شرکتی', 'طراحی وب سایت - پنل مدیریت', 'شرکت تهویه سازان وطن', 'html5 - css3 - jquery - PHP - Bootstrap3', 0, 'وارد کننده سیستم های تهویه', '', 'tahvieh_small.jpg', 'tahvieh_big.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sms_temp`
--

CREATE TABLE IF NOT EXISTS `sms_temp` (
`id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sms_temp`
--

INSERT INTO `sms_temp` (`id`, `text`) VALUES
(2, 'جناب آقای\r\nبا سلام\r\nورود شما را به طرح بزرگ رای وب خوش آمد می گوییم.\r\nبا تشکر\r\nشرکت رای وب'),
(3, ''),
(4, 'سرکار خانم\r\nبا سلام\r\nورود شما را به طرح بزرگ رای وب خوش آمد می گوییم.\r\nبا تشکر\r\nشرکت رای وب');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_category`
--
ALTER TABLE `hire_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_temp`
--
ALTER TABLE `sms_temp`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `hire_category`
--
ALTER TABLE `hire_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `sms_temp`
--
ALTER TABLE `sms_temp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
