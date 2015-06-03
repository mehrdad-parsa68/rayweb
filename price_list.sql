-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2015 at 08:47 PM
-- Server version: 5.1.73
-- PHP Version: 5.5.21

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
-- Table structure for table `price_list`
--

CREATE TABLE IF NOT EXISTS `price_list` (
`id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`id`, `title`, `price`, `status`) VALUES
(1, 'قالب اولیه', 500000, ''),
(2, 'طراحی واکنشگرا', 700000, ''),
(3, 'گالری تصاویر', 200000, ''),
(4, 'جستجو پیشرفته', 150000, ''),
(5, 'جستجو معمولی', 100000, ''),
(6, 'سیستم نظرسنجی اختصاصی', 200000, ''),
(7, 'نمایش ارز و سکه', 150000, ''),
(8, 'آمار بازدید اختصاصی', 100000, ''),
(9, 'امکان عضوگیری', 300000, ''),
(10, 'آخرین اخبار', 450000, ''),
(11, 'بنر اسلاید شو', 200000, ''),
(12, 'نمودار', 200000, ''),
(13, 'امکان دانلود فایل', 100000, ''),
(14, 'سیستم لایک و کامنت', 400000, ''),
(15, 'امکان ارسال ایمیل گروهی', 200000, ''),
(16, 'انجمن (فروم)', 150000, ''),
(17, 'پنل اس ام اس', 50000, ''),
(18, 'طراحی صفحات جداگانه داینامیک', 250000, ''),
(19, 'طراحی صفحات جداگانه استاتیک', 100000, ''),
(20, 'طراحی صفحه اول به طور جداگانه', 50000, ''),
(21, 'فروشگاه اینترنتی', 1800000, ''),
(22, 'امکان ارتباط کاربر با مدیر سایت (ایمیل)', 25000, ''),
(23, 'سطوح دسترسی متفاوت پنل ادمین', 300000, ''),
(24, 'امکان حذف یا اضافه محصولات', 300000, ''),
(25, 'امکان تغییر تصاویر اسلایدشو', 100000, ''),
(26, 'ایجاد صفحه جدید', 500000, ''),
(27, 'فرم ساز', 350000, ''),
(28, 'درج سایت در گوگل', 50000, ''),
(29, 'خبر خوان', 50000, ''),
(30, 'خبرنامه', 50000, ''),
(31, 'خروجی PDF', 50000, ''),
(32, 'شبکه اجتماعی هر کدام', 50000, ''),
(33, 'بک آپ گیری ماهانه', 50000, ''),
(34, 'سیستم چت با اپراتور', 50000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
