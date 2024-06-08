-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2019 at 11:01 AM
-- Server version: 5.6.41-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(50) NOT NULL,
  `a_flag` int(5) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_flag`, `a_name`, `a_email`, `a_pass`) VALUES
(1, 1, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `bid_his`
--

CREATE TABLE `bid_his` (
  `bd_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `bd_price` bigint(15) NOT NULL,
  `bd_time` varchar(100) NOT NULL,
  `bd_flag` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_his`
--

INSERT INTO `bid_his` (`bd_id`, `p_id`, `u_id`, `bd_price`, `bd_time`, `bd_flag`) VALUES
(1, 2, 2, 13000, '1551728955', 1),
(2, 2, 1, 13100, '1551728992', 1),
(3, 2, 2, 13990, '1551729018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `b_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `a_id` int(50) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`b_id`, `c_id`, `a_id`, `b_name`, `b_desc`) VALUES
(1, 1, 1, 'Mobile', 'test'),
(2, 1, 1, 'laptop', 'test'),
(3, 1, 1, 'Television', 'test'),
(4, 1, 1, 'Camera', 'test'),
(5, 2, 1, 'Refrigirator', 'test'),
(6, 2, 1, 'Air Condition', 'test'),
(7, 2, 1, 'Water Purifiler', 'test'),
(8, 3, 1, 'Men Clothing', 'test'),
(9, 3, 1, 'Men Footwear', 'test'),
(10, 3, 1, 'Smart Watchs', 'test'),
(11, 4, 1, 'Women Clothing', 'test'),
(12, 4, 1, 'Women Footwear', 'test'),
(13, 4, 1, 'Jewellery', 'test'),
(14, 4, 1, 'Beauty & Groomings', 'test'),
(15, 6, 1, 'four wheeler', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cr_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `cr_flag` smallint(5) NOT NULL,
  `ca_dt` varchar(200) NOT NULL,
  `o_code` varchar(100) NOT NULL,
  `cr_qty` int(10) NOT NULL,
  `cr_tot` varchar(100) NOT NULL,
  `on_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cr_id`, `u_id`, `p_id`, `cr_flag`, `ca_dt`, `o_code`, `cr_qty`, `cr_tot`, `on_id`) VALUES
(1, 1, 2, 2, '1551992447', '2019ord-1', 1, '12990', 1),
(3, 1, 7, 2, '1551992638', '2019ord-2', 1, '9499', 2),
(5, 5, 2, 2, '1552045323', '2019ord-1', 1, '12990', 3),
(6, 5, 2, 2, '1552045420', '2019ord-2', 1, '12990', 4),
(7, 5, 7, 2, '1552045519', '2019ord-2', 1, '9499', 4),
(8, 5, 1, 2, '1552045629', '2019ord-3', 1, '4999', 5),
(9, 7, 2, 2, '1552057818', '2019ord-1', 2, '25980', 7),
(10, 5, 2, 2, '1552124233', '2019ord-4', 1, '12990', 8),
(11, 5, 2, 2, '1552229172', '2019ord-5', 1, '12990', 9),
(12, 8, 3, 2, '1552394865', '2019ord-1', 1, '6990', 10),
(14, 10, 2, 2, '1552550075', '2019ord-1', 1, '12990', 11),
(15, 10, 5, 2, '1552550414', '2019ord-2', 1, '1699', 12),
(16, 11, 5, 2, '1552651124', '2019ord-1', 2, '3398', 13),
(18, 12, 5, 2, '1552821419', '2019ord-1', 3, '5097', 14),
(19, 12, 7, 2, '1552821432', '2019ord-1', 1, '9499', 14),
(20, 12, 1, 2, '1552821507', '2019ord-1', 1, '4999', 14),
(21, 12, 15, 2, '1552822866', '2019ord-2', 2, '56398', 15),
(22, 1, 3, 2, '1553700263', '2019ord-3', 3, '20970', 16),
(23, 5, 34, 2, '1554299593', '2019ord-6', 1, '22999', 21),
(24, 5, 21, 2, '1554354988', '2019ord-7', 1, '100000', 26),
(25, 5, 29, 2, '1554355118', '2019ord-8', 1, '860', 28),
(26, 5, 37, 2, '1554355170', '2019ord-9', 1, '1999', 29),
(27, 10, 32, 2, '1554798297', '2019ord-3', 1, '1400', 30),
(29, 10, 34, 1, '1554798452', '2019ord-4', 1, '22999', 0),
(30, 12, 20, 2, '1554809813', '2019ord-3', 1, '599', 31),
(31, 12, 17, 2, '1554809838', '2019ord-3', 1, '399', 31),
(32, 12, 2, 2, '1554809991', '2019ord-4', 1, '12990', 32);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(255) NOT NULL,
  `a_id` int(50) NOT NULL,
  `c_nm` varchar(255) NOT NULL,
  `c_desc` varchar(500) NOT NULL,
  `c_parent` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `a_id`, `c_nm`, `c_desc`, `c_parent`) VALUES
(1, 1, 'Electronics', 'Electronics ', 0),
(2, 1, 'Appliances', 'Appliances', 0),
(3, 1, 'Men', 'Men', 0),
(4, 1, 'Women', 'Women', 0),
(5, 1, 'Home & Furniture', 'Home & Furniture', 0),
(6, 1, 'Cars & bikes', 'Cars & bikes', 0),
(7, 1, 'other', 'service provider', 0),
(8, 0, 'bags', 'bags', 0),
(9, 0, 'sunglasses', 'sunglasses', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `d_id` int(100) NOT NULL,
  `o_id` int(100) NOT NULL,
  `a_id` int(50) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_addr` varchar(255) NOT NULL,
  `d_contact` bigint(15) NOT NULL,
  `d_altcnt` bigint(20) NOT NULL,
  `d_protype` varchar(255) NOT NULL,
  `d_proid` varchar(255) NOT NULL,
  `d_email` varchar(255) NOT NULL,
  `d_pass` varchar(500) NOT NULL,
  `d_flag` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`d_id`, `o_id`, `a_id`, `d_name`, `d_addr`, `d_contact`, `d_altcnt`, `d_protype`, `d_proid`, `d_email`, `d_pass`, `d_flag`) VALUES
(1, 0, 1, 'sell', 'solapur', 8007026979, 9823040456, '', '', 'sell@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 0, 1, 'flipcart', 'solapur', 9876543211, 5453765432, '', '', 'flip@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obill`
--

CREATE TABLE `obill` (
  `o_id` int(10) NOT NULL,
  `o_code` varchar(100) NOT NULL,
  `h_id` varchar(200) NOT NULL,
  `u_id` int(10) NOT NULL,
  `o_flag` int(10) NOT NULL,
  `o_tot` varchar(100) NOT NULL,
  `o_auth` varchar(500) NOT NULL,
  `o_addr` varchar(500) NOT NULL,
  `ob_dt` varchar(200) NOT NULL,
  `sts_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obill`
--

INSERT INTO `obill` (`o_id`, `o_code`, `h_id`, `u_id`, `o_flag`, `o_tot`, `o_auth`, `o_addr`, `ob_dt`, `sts_flag`) VALUES
(1, '2019ord-1', '', 1, 1, '12990', 'ba34690066e95694b84f95bd459417d1', '296 A ekta nagar solapur', '1551992488', 0),
(2, '2019ord-2', '', 1, 1, '9499', '1e7b651c0263b25e9c90b844002b68ee', '296 A ekta nagar solapur', '1551992911', 0),
(3, '2019ord-1', '', 5, 1, '12990', '16da6da4f8c98908d53e87417f28d21e', '370,west mangalwar peth,solapur', '1552045338', 0),
(4, '2019ord-2', '', 5, 1, '22489', 'a5e00e78f623957a5bccef64694e39a8', '370,west mangalwar peth,solapur', '1552045530', 0),
(5, '2019ord-3', '', 5, 1, '4999', 'd227aded881ffdb75f2f729d125998b2', '370,west mangalwar peth,solapur', '1552045644', 0),
(6, '2019ord-1', '', 7, 1, '25980', '86f0926bbd40a16cc582ba58d9a08bd9', '177/A Ekta nagar,solapur', '1552058903', 0),
(7, '2019ord-1', '', 7, 1, '25980', '86f0926bbd40a16cc582ba58d9a08bd9', '177/A Ekta nagar,solapur', '1552058909', 0),
(8, '2019ord-4', '', 5, 1, '12990', '9a959b1a533d6eec76e11890ed9772b2', '370,west mangalwar peth,solapur', '1552124244', 0),
(9, '2019ord-5', '', 5, 1, '12990', '671148997584849cb1ca303b48201455', '370,west mangalwar peth,solapur', '1552229183', 0),
(10, '2019ord-1', '', 8, 1, '6990', '3ed0635d119de4c735013cbbbd7c23f2', 'Solapur', '1552394895', 0),
(11, '2019ord-1', '', 10, 1, '12990', '2a358d8707e6e428a191001cb34def22', 'A27, Shri shail nagar, solapur', '1552550112', 0),
(12, '2019ord-2', '', 10, 1, '1699', '94006fbfa9158c85fb0665984fc5872f', 'A27, Shri shail nagar, solapur', '1552550426', 0),
(13, '2019ord-1', '', 11, 1, '1699', 'b13a10b42d0546b3979f16e7cdd32bc2', 'Ekt solapur', '1552651154', 0),
(14, '2019ord-1', '', 12, 1, '16197', '376494c47c44fcfec12cb52f12efd231', 'Solapur', '1552821534', 0),
(15, '2019ord-2', '', 12, 1, '28199', 'e5f66c3758dfaa6670c484e226b0543b', 'Solapur', '1552822879', 0),
(16, '2019ord-3', '', 1, 1, '6990', '8311cbd1784ebfcd8c87348028641a2c', '296 A ekta nagar solapur', '1553700298', 0),
(17, '2019ord-6', '', 5, 1, '22999', '126442baaa0452ddffc8177356e67754', '370,west mangalwar peth,solapur', '1554299620', 0),
(18, '2019ord-6', '', 5, 1, '22999', '126442baaa0452ddffc8177356e67754', '370,west mangalwar peth,solapur', '1554299620', 0),
(19, '2019ord-6', '', 5, 1, '22999', '126442baaa0452ddffc8177356e67754', '370,west mangalwar peth,solapur', '1554299620', 0),
(20, '2019ord-6', '', 5, 1, '22999', '126442baaa0452ddffc8177356e67754', '370,west mangalwar peth,solapur', '1554299621', 0),
(21, '2019ord-6', '', 5, 1, '22999', '126442baaa0452ddffc8177356e67754', '370,west mangalwar peth,solapur', '1554299621', 0),
(22, '2019ord-7', '', 5, 1, '100000', 'ac67a3fa89ead7fc692c4b5128ba9205', '370,west mangalwar peth,solapur', '1554355003', 0),
(23, '2019ord-7', '', 5, 1, '100000', 'ac67a3fa89ead7fc692c4b5128ba9205', '370,west mangalwar peth,solapur', '1554355003', 0),
(24, '2019ord-7', '', 5, 1, '100000', 'ac67a3fa89ead7fc692c4b5128ba9205', '370,west mangalwar peth,solapur', '1554355004', 0),
(25, '2019ord-7', '', 5, 1, '100000', 'ac67a3fa89ead7fc692c4b5128ba9205', '370,west mangalwar peth,solapur', '1554355004', 0),
(26, '2019ord-7', '', 5, 1, '100000', 'ac67a3fa89ead7fc692c4b5128ba9205', '370,west mangalwar peth,solapur', '1554355005', 0),
(27, '2019ord-8', '', 5, 1, '860', '70ee6120356dde9ce5fbf3c15fdc6012', '370,west mangalwar peth,solapur', '1554355141', 0),
(28, '2019ord-8', '', 5, 1, '860', '70ee6120356dde9ce5fbf3c15fdc6012', '370,west mangalwar peth,solapur', '1554355141', 0),
(29, '2019ord-9', '', 5, 1, '1999', 'eb0bb6a18817272ab2679a979d38b5da', '370,west mangalwar peth,solapur', '1554355181', 0),
(30, '2019ord-3', '', 10, 1, '1400', '96174d230efda2a0d8cd0776d1e17915', 'A27, Shri shail nagar, solapur', '1554798315', 0),
(31, '2019ord-3', '', 12, 1, '998', '093e4c790dc21e3546e8ac47051cf020', 'Solapur', '1554809875', 0),
(32, '2019ord-4', '', 12, 1, '12990', 'ab511309d60ba22a1e041c5b32c6e528', 'Solapur', '1554810011', 0);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `o_id` int(100) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `o_contact` bigint(15) NOT NULL,
  `o_addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(100) NOT NULL,
  `b_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `a_id` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_manufacturerdate` varchar(500) NOT NULL,
  `p_expirytdate` varchar(500) NOT NULL,
  `p_price` bigint(15) NOT NULL,
  `up_price` bigint(10) NOT NULL,
  `p_brand` varchar(255) NOT NULL,
  `p_desc` varchar(500) NOT NULL,
  `p_netwt` int(10) NOT NULL,
  `p_proimg` varchar(255) NOT NULL,
  `token` varchar(500) NOT NULL,
  `p_time` varchar(100) NOT NULL,
  `p_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `b_id`, `c_id`, `a_id`, `u_id`, `p_name`, `p_manufacturerdate`, `p_expirytdate`, `p_price`, `up_price`, `p_brand`, `p_desc`, `p_netwt`, `p_proimg`, `token`, `p_time`, `p_flag`) VALUES
(1, 10, 3, 1, 0, 'Fossil BQ2125 FLYNN Watch - For Men', '2019-02-27', '2019-02-15', 4999, 4999, '', 'Water Resistant (50 mm)\r\nDisplay Type: Analog\r\nStrap: Brown, Leather\r\nChronograph\r\nServices\r\n2 Years\r\n30 Day Return Policy\r\nCash on Delivery available', 200, '1550062107tes.jpeg', 'a622ba91b567a47236714bf5de555d9f', '1550062107', 0),
(2, 1, 1, 1, 2, 'Redmi Note 6 Pro (Black, 64 GB)  (4 GB RAM)', '2019-02-16', '2019-02-15', 12990, 13990, '', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB\r\n15.9 cm (6.26 inch) FHD+ Display\r\n12MP + 5MP | 20MP + 2MP Dual Front Camera\r\n4000 mAh Li-polymer Battery\r\nQualcomm Snapdragon 636 Processor\r\nNo cost EMI starting from  rs 2,167/month\r\nCash on Delivery\r\n', 400, '1550062263tessss.jpeg', 'c5da5ff9b31299ae484c80b581131a1f', '1550062263', 0),
(3, 1, 1, 1, 0, 'Redmi 6 (Rose Gold, 32 GB)  (3 GB RAM)', '2019-02-08', '2019-03-01', 6990, 6990, '', '3 GB RAM | 32 GB ROM | Expandable Upto 256 GB\r\n13.84 cm (5.45 inch) HD+ Display\r\n12MP + 5MP | 5MP Front Camera\r\n3000 mAh Lithium-polymer Battery\r\n2.0 GHz Mediatek P22 Octacore Processor', 400, '1550063424tweerwe.jpeg', '5d034f0e719bab0136cba526529d2ba6', '1550063424', 0),
(4, 1, 1, 1, 0, 'Redmi Y2 (Blue, 32 GB)  (3 GB RAM)', '2019-02-28', '2019-02-19', 8990, 8990, '', '3 GB RAM | 32 GB ROM | Expandable Upto 256 GB\r\n15.21 cm (5.99 inch) HD+ Display\r\n12MP + 5MP | 16MP Front Camera\r\n3080 mAh Li Polymer Battery\r\nQualcomm Snapdragon 625 Processor', 400, '1550063591y2.jpeg', 'd9e8852c8d738185d524f3ba3576dc5f', '1550063591', 0),
(5, 10, 3, 1, 0, 'Fastrack NG3099SL02C Sports Watch - For Men', '2019-02-08', '2019-02-13', 1699, 1699, '', 'Water Resistant (30 m)\r\nDisplay Type: Analog\r\nStrap: Black, Leather\r\n1 Year Manufacturing Warranty and 6 Months Battery Warranty', 200, '1550063705sss.jpeg', 'f22c8ed543389fc648b4133181e0abeb', '1550063705', 0),
(6, 14, 4, 1, 1, 'Lakme True Wear Nail Color 416', '2019-02-12', '2019-02-20', 1000, 100, '', 'Finish Glitter\r\nColor: Purple\r\n9 ml\r\nThe packaging of this product may slightly vary from what is shown in the image as it is sourced in mixed batches', 200, '15504906469-truewear-lakme-original-imaer3kreg8gyfgn.jpeg', '910252c93703e2b6bb7c81fe7c695940', '1550490646', 0),
(7, 1, 1, 1, 0, 'Realme 2 (Diamond Black, 32 GB)  (3 GB RAM)', '2019-03-06', '2019-03-13', 9499, 0, '', '3 GB RAM | 32 GB ROM | Expandable Upto 256 GB\r\n15.75 cm (6.2 inch) HD+ Display |\r\n13MP + 2MP | 8MP Front Camera\r\n4230 mAh Li-ion Battery\r\nQualcomm Snapdragon 450 Octa Core 1.8 GHz Processor', 2, '1551779394realme-2-rmx805-original-imaf8hxyjcncbxpw.jpeg', 'c9ce26ab57136674400e4d8ddd9b749f', '1551779394', 0),
(8, 1, 1, 1, 0, 'POCO F1 by Xiaomi (Graphite Black, 128 GB)  (6 GB RAM)', '2019-03-13', '2019-03-28', 22999, 0, '', '6 GB RAM | 128 GB ROM | Expandable Upto 256 GB\r\n15.7 cm (6.18 inch) FHD+ Display\r\n12MP + 5MP | 20MP Front Camera\r\n4000 mAh Li-polymer Battery\r\nQualcomm Snapdragon 845 Processor', 5, '1552055850xiaomi-pocophone-f1-na-original-imaf8afgrdbqtsta.jpeg', 'eab2a79bdc1e09687185488540b644db', '1552055850', 1),
(9, 2, 8, 1, 0, 'Fizz Sch Bag 32 L Backpack  (Black, Grey)', '34/12/3333', '14/12/2222', 999, 0, '', 'backpack', 100, '1552095686abv.jpg', '4c821ab23ca096eeb13d9d6cdfb884d7', '1552095686', 1),
(10, 13, 3, 1, 0, 'Ray-Ban Half Rim Round Frame  (47 mm)', '12/01/1222', '12/02/1233', 3999, 0, '', 'sunglasses', 22, '1552096392ab.jpg', '24ffa01212bc596fa168885485a5ff03', '1552096392', 1),
(11, 2, 1, 1, 0, 'Acer Predator Helios 300 Core i7 8th Gen - (8 GB/1 TB HDD/128 GB SSD/Windows 10 Home/4 GB Graphics) PH315-51 Gaming Laptop  (15.6 inch, Black, 2.7 kg) 4', '2019-03-19', '2019-03-31', 127999, 0, '', 'NVIDIA Geforce GTX 1050Ti for Desktop Level Performance\r\n15.6 inch Full HD LED Backlit IPS Display (with 144 Hz Ultra Fast Refresh Rate)\r\nLight Laptop without Optical Disk Drive\r\nPre-installed Genuine Windows 10 OS\r\n', 3, '1552108591acer-na-original-imaf9ffacqgcvjzd.jpeg', '48f50f9359514a879b80345bb8876ed5', '1552108591', 1),
(12, 13, 4, 1, 0, 'Alloy Jewel Set  (Gold)', '2019-03-01', '2019-03-25', 499, 0, '', 'Model Number\r\nybnk_cb_0007s\r\nBase Material\r\nAlloy\r\nColor\r\nGold\r\nType\r\nEarring & Necklace Set\r\nIdeal For\r\nGirls, Women\r\nSales Package\r\n1 Necklace , 1 Earrings Pair\r\nCollection\r\nEthnic\r\nOccasion\r\nWedding & Engagement\r\nSilver Weight\r\nNA g\r\nDiamond Shape\r\nNA', 5, '1552109612ybnk-cb-0007s-you-bella-original-imafa3ufzywet2ug.jpeg', '174a5f18fd591a98672787260210d6f1', '1552109612', 1),
(13, 13, 4, 1, 0, 'Sukkhi  Alloy Jewel Set  (diamond)', '2019-03-22', '2019-03-03', 499, 0, '', 'Model Number\r\nN71928GLDPH092017\r\nBase Material\r\nAlloy\r\nColor\r\nGold\r\nType\r\nEarring & Necklace Set\r\nIdeal For\r\nWomen, Girls\r\nPlating\r\nGold-plated\r\nSales Package\r\n1 Necklace, 2 Earring\r\nCollection\r\nEthnic', 5, '1552109836n71928gldph092017-sukkhi-original-imafa3hfbxqf3cbf.jpeg', '886cadd8565618a3528fef08e9279c07', '1552109836', 1),
(14, 13, 4, 1, 0, 'Sukkhi  Alloy Jewel Set  (Gold)', '2019-03-07', '2019-03-27', 599, 0, '', 'Model Number\r\nN71928GLDPH092017\r\nBase Material\r\nAlloy\r\nColor\r\nGold\r\nType\r\nEarring & Necklace Set\r\nIdeal For\r\nWomen, Girls\r\nPlating\r\nGold-plated\r\nSales Package\r\n1 Necklace, 2 Earring\r\nCollection\r\nEthnic', 10, '1552109971n71928gldph092017-sukkhi-original-imafa3hfbxqf3cbf.jpeg', 'ff8e1292597cb801b40f6e2e627f4a32', '1552109971', 1),
(16, 9, 3, 1, 0, 'Men BlackRed Sandals', '2019-01-31', '2019-02-01', 768, 0, '', 'Closure\r\nVelcro\r\nType for Flats\r\nSandal\r\nColor\r\nBlack, Red\r\nPack of\r\n1\r\nSole Material\r\nTPR\r\nInsole Material\r\nTPR\r\nGeneric Name\r\nSandal', 150, '1554290877ss0447g-8-sparx-blackred-original-imafa2rateaw8jgd.jpeg', 'b886ca53e6c280388a078f7ba7116ca5', '1554290877', 1),
(17, 8, 3, 1, 0, 'Yellow T-shirt ', '2019-04-03', '2019-06-12', 399, 0, '', 'High quality premium printed t-s', 200, '1554291027l-q41-26-friskers-original-imafdf9gejnavxdy.jpeg', '2e75adc5afa8fb33e485b178ac7e51ea', '1554291027', 0),
(18, 9, 3, 1, 0, 'Provogue  PRO-CAP-AW1016 Boots For Men  (Brown)', '2019-04-01', '2019-04-30', 900, 0, '', '\r\nColor\r\nBrown\r\nInner Material\r\nSynthetic\r\nOuter Material\r\nSynthetic Leather\r\nModel Name\r\nPRO-CAP-AW1016\r\nIdeal For\r\nMen\r\nOccasion\r\nCasual\r\nSole Material\r\nAirmix\r\nSeason\r\nSS 18', 100, '1554291266pro-cap-aw1016-8-provogue-brown-original-imaf828neefqmsga.jpeg', 'a6e05200c1f82cfc33db389080f65e74', '1554291266', 1),
(19, 14, 5, 1, 0, 'Perfect Homes 3 Seater Sofa', '2019-03-04', '2019-06-19', 192190, 0, '', 'Polycotton\r\nRight Facing\r\nFilling Material: Foam\r\nW x H x D: 191.83 cm x 86.36 cm x 77.44 cm (6 ft 3 in x 2 ft 10 in x 2 ft 6 in)\r\nDIY - Basic assembly to be done with simple tools, comes with instructions', 46, '1554291572purple-polycotton-ph0073-flipkart-perfect-homes-purple-original-imaf96kedz6amzvb.jpeg', '76991ac14a5d6620bd43598a80015c09', '1554291572', 1),
(20, 8, 3, 1, 0, 'Mens red cotton shirts', '2019-04-03', '2019-05-18', 599, 0, '', 'Pure Cotton shirt ', 300, '1554291772m-me-t2-red-gulchharrey-original-imaf5fwfn72wuszz.jpeg', '5ca199d48a0324ac70b9c448cabe9cce', '1554291772', 0),
(21, 5, 2, 1, 0, 'BPL 564 L Frost Free Side-by-Side Refrigerator(BRS564H, Silver)', '2019-04-01', '2019-04-30', 100000, 0, '', 'Frost Free, Side-by-Side: Auto defrost to stop ice-build up with toughened glass shelf\r\nCapacity 564 L: Suitable for families with 5 or more members\r\nWarranty: 1 year on product, 5 years on compressor\r\nPower Consumption: ~ 1.1 units/day\r\n', 500, '1554291880refrigerator.jpg', '1de3d9aedb53e72289ba3c6fcb016334', '1554291880', 0),
(22, 0, 5, 1, 0, 'Perfect Homes 3 Seater Sofa', '2019-03-21', '2019-06-27', 192190, 0, '', 'Polycotton\r\nRight Facing\r\nFilling Material: Foam\r\nW x H x D: 191.83 cm x 86.36 cm x 77.44 cm (6 ft 3 in x 2 ft 10 in x 2 ft 6 in)\r\nDIY - Basic assembly to be done with simple tools, comes with instructions', 46, '1554291908purple-polycotton-ph0066-perfect-homes-by-flipkart-purple-original-imaf6jx3svph5tvg.jpeg', '1453eaf6b1c9d7286ec9d22f78a387af', '1554291908', 0),
(23, 5, 2, 1, 0, 'IFB 20-L microwave oven(silver)', '2019-04-03', '2019-04-03', 10000, 0, '', 'Touch keypad ', 1000, '1554292146ifb-20sc2-original-imae4ty4t2wyw5mh.jpeg', '52ab75bafd281cc517f35565cb26b7ae', '1554292146', 1),
(24, 15, 6, 1, 0, 'Audi A4', '2019-04-01', '2019-04-30', 0, 0, '', '\r\nFuel Type :	Petrol / Diesel\r\nMileage :	17 Kmpl to 18 Kmpl\r\nEngine :	1395 CC to 1968 CC\r\nTransmission :	Automatic', 5000, '1554292465audi_a42016_600x300.jpg', 'd71f68a07a7d45cb5919e8a8048785be', '1554292465', 1),
(25, 8, 8, 1, 0, 'Mountain bag', '2019-04-03', '2019-04-03', 4000, 0, '', 'Waterproof ', 222, '1554292568climate-proof-mountain-hiking-trekking-campaign-bag-backpack-original-imaf9gs4e4nzpnc5.jpeg', 'f1f2b225536d39b56e5637b754c364b2', '1554292568', 1),
(26, 15, 6, 1, 0, 'Audi A4', '2019-04-01', '2019-04-30', 47, 0, '', 'Fuel Type :	Petrol / Diesel\r\nMileage :	17 Kmpl to 18 Kmpl\r\nEngine :	1395 CC to 1968 CC\r\nTransmission :	Automatic\r\n', 500, '1554292652audi_a42016_600x300 (1).jpg', 'afed38bb56f662c4b1dc445a91f6ca3d', '1554292652', 1),
(27, 3, 1, 1, 0, 'Mi LED TV 4 PRO 138.8 cm (55)', '2019-03-04', '2019-06-20', 47999, 0, '', '55 4K HDR frameless display\r\n\r\nWorldâ€™s thinnest LED TV (4.9mm)\r\n\r\n700,000+ hours of content\r\n\r\nPatchWall: Revolutionary TV experience\r\n\r\nOne remote - control set-top box and TV& more', 13, '1554292691F012857E-D664-1C61-963A-A2F004894577.jpg', '43dbe92276162ed150ab99a023ecaf6e', '1554292691', 1),
(28, 1, 1, 1, 0, 'MI power bank ', '2019-04-18', '2021-05-12', 840, 0, '', '10000mAh\r\nTwo way quick charge\r\n14.2 thin mm', 200, '1554293235power (1).jpeg', '7464ed48b0279a3e3276c98fa2fbb6d9', '1554293235', 1),
(29, 1, 1, 1, 0, 'MI power bank ', '2019-05-15', '2024-06-21', 860, 0, '', '10000mAh\r\nTwo way quick charge \r\n14.2 mm', 200, '1554293408images (1).jpeg', '8d501716cd95259b22d68586c3b300f5', '1554293408', 0),
(30, 3, 5, 1, 0, 'Furniture ', '2019-04-03', '2019-04-03', 10000, 0, '', 'Pure wood', 5000, '1554293789pexels-photo-1173651.jpeg', '1992de6561bd8b9c020b34c0ab417fb9', '1554293789', 1),
(31, 3, 5, 1, 0, 'Furniture ', '2019-04-03', '2019-04-03', 10000, 0, '', 'Pure wood', 5000, '1554293838pexels-photo-1173651.jpeg', '4dc06d91f38c5d8d2fbe95420a00465b', '1554293838', 1),
(32, 14, 3, 1, 0, 'Marvel sky bag', '2019-04-17', '2046-01-17', 1400, 0, '', 'Waterproof\r\nTheft-internal back pack\r\n3 compartments ', 100, '1554293840images (2).jpeg', '8e630237967ef4d0674fc74ba1104034', '1554293840', 0),
(33, 1, 1, 1, 0, 'Vivo V15 (Frozen Black, 6GB RAM, 64GB Storage) with Offer', '2019-04-17', '2021-02-25', 23000, 0, '', 'Display: 16.59cm (6.53) FHD+ Ultra FullView with 5th Generation Corning Gorilla Glass\r\nPop-Up Selfie Camera: 32MP Pop-Up Selfie Camera with impressive features like Face Beauty, Portrait Bokeh, and much more\r\nTriple Rear Camera: 12MP Dual Pixel Sensor + 8MP + 5MP AI Triple Rear Camera with AI Super Wide-Angle, AI Body Shaping, and many more\r\nPowerful Performance: MediaTek P70 processor\r\n1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including ba', 100, '1554295916Vivo_V15_Pro_1550735227807.jpg', '545f0f39e1447224f2553a528cc87a02', '1554295916', 1),
(34, 1, 1, 1, 0, 'Poco F1', '2019-04-03', '2019-04-03', 22999, 0, '', '6 GB ram/128 GB', 5000, '1554295978xiaomi-pocophone-f1-na-original-imaf8afka7srhfwq.jpeg', 'e8abda444072d779062c1a2300a9a29b', '1554295978', 0),
(35, 3, 2, 1, 0, 'Philips induction cooker', '2019-04-03', '2019-04-03', 2299, 0, '', 'Black keypad ', 1000, '1554296677philips-hd4928-hd4928-01-original-imaf95d6gupffzr9.jpeg', '88947d05c55970fff943b35a0505dd1e', '1554296677', 0),
(36, 6, 2, 1, 0, 'Haier 6.5 kg Semi-Automatic Top Loading Washing Machine (HTW65-113S-1, Ruby Red) by Haier', '2019-04-16', '2021-08-21', 8560, 0, '', 'This product comes ready to use and does NOT require installation or demo. All product features are presented in the user manual that comes with the product.\r\nSemi-automatic top-loading washing machine\r\nCapacity 6.5 kg: Suitable for families with 3 to 4 members\r\nWarranty: 1 year on product and 5 years on motor\r\nSpecial features: Efficient motor, bubble wash technology, overload protection\r\nEasy Returns: This product is eligible for full refund within 10 days of delivery in case of any product de', 500, '155429680441NBhosG70L.jpg', '4779110652d5f17109b109e1cb289c5f', '1554296804', 1),
(37, 5, 2, 1, 0, 'Mixer Grinder', '2019-04-03', '2019-04-03', 1999, 0, '', 'White', 300, '1554296886singer-chefy-original-imaewghzpsvumy7h.jpeg', 'edd92c3c202ade2ddb358ea589f4a499', '1554296886', 0);

-- --------------------------------------------------------

--
-- Table structure for table `providertype`
--

CREATE TABLE `providertype` (
  `spt_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `a_id` int(50) NOT NULL,
  `o_id` int(50) NOT NULL,
  `spt_typeheading` varchar(255) NOT NULL,
  `spt_desc` varchar(500) NOT NULL,
  `spt_logo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `providertype`
--

INSERT INTO `providertype` (`spt_id`, `c_id`, `a_id`, `o_id`, `spt_typeheading`, `spt_desc`, `spt_logo`) VALUES
(1, 2, 1, 1, 'Plumber', 'In this competitive world we all need an edge.', 'fa fa-home'),
(2, 2, 1, 1, ' Electronics & Appliances', 'Has your AC kaput! No need to fret and fume as help is just a click/call away.', 'fa fa-laptop'),
(3, 2, 1, 1, 'Car Repair & Services', 'Fly anywhere in the world or to any destination within the country in any airlines.', 'fa fa-car'),
(4, 2, 1, 1, 'Bike Repair & Services', 'Whatever your electronic equipment may be, whichever brand it may belong to there is no guarantee that one day when it will not stop working will not come.', 'fa fa-motorcycle'),
(5, 2, 1, 1, 'Pest Control Service', 'We have the power to lead a successful happy life in our hands.', 'fa fa-shield'),
(6, 2, 1, 1, 'Beauty salon Services', 'Beauty Treatment. Yes, it is something that everyone needs.', 'fa fa-asterisk'),
(7, 2, 1, 1, 'furniture Service', 'Stranded somewhere on the road!', 'fa fa-wheelchair'),
(8, 2, 1, 1, 'CCTV and Home Security', 'Want a new look for your home/office?', 'fa fa-gamepad'),
(9, 2, 1, 1, 'Newspeper and Magsines', 'It is better to be safe than sorry. From keeping an eye indoors (eg. Domestic helps at home and to enhance employeeâ€™s productivity at office)', 'fa fa-book'),
(10, 2, 1, 1, 'Pet Seller', 'Yes, a fan or a tube or a switchboard or any electrical appliance suddenly refusing to be switched on can get on your nerves.', 'fa fa-paw'),
(11, 2, 1, 1, 'Wedding Planner and House Party', 'From birthdays to reunions to weddings and anniversaries, these memorable occasions call for unforgettable planning.', 'fa fa-birthday-cake'),
(12, 2, 1, 1, 'Home Tution And Classes', 'we want our children to be the best. Itâ€™s a cut throat competition out there. The question is not just of the schooling and colleges but of professional studies as well.', 'fa fa-users');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `s_id` int(50) NOT NULL,
  `a_id` int(50) NOT NULL,
  `spt_id` int(50) NOT NULL,
  `s_name` varchar(250) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_contact` bigint(15) NOT NULL,
  `s_alternatecnt` bigint(15) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_desc` varchar(255) NOT NULL,
  `s_minvisit` int(50) NOT NULL,
  `s_landmark` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `s_latlong` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`s_id`, `a_id`, `spt_id`, `s_name`, `s_address`, `s_contact`, `s_alternatecnt`, `s_email`, `s_desc`, `s_minvisit`, `s_landmark`, `reg_date`, `s_latlong`) VALUES
(1, 1, 2, 'Aishwarya', 'B/58,kadadi nagar, solapur', 9561798874, 9404043673, 'aish123@gmail.com', 'Electrician', 1000, 'Kinara Hotel', '2017-03-02', 1111),
(2, 1, 1, 'Pooja', 'plot 289,kumtha  naka ,solapur', 7768930209, 9689651233, 'pooja@gmail.com', 'Dress Designer', 1000, 'sai hospital', '2017-03-02', 237),
(3, 1, 1, 'Jagruti Mata', 'Nehru Nagar, Bijapur Road, Bijapur Road Sholapur, Solapur - 413002,', 8446478494, 8446434494, 'Jagruti@gmail.com', 'Your requirement is sent to the selected relevant businesses', 234, 'solapur', '2017-03-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_addr` varchar(255) NOT NULL,
  `u_contact` bigint(15) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(500) NOT NULL,
  `u_flag` int(5) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_addr`, `u_contact`, `u_email`, `u_pass`, `u_flag`, `pincode`) VALUES
(1, 'rajesh', '296 A ekta nagar solapur', 8007026979, 'r@g.c', 'e10adc3949ba59abbe56e057f20f883e', 1, 443223),
(2, 'amol katare', '296 A ekta nagar solapur', 9823040456, 'a@g.c', 'e10adc3949ba59abbe56e057f20f883e', 1, 413006),
(3, 'rekhakatare', 'solapur', 9923384529, 'rekhakatare@gmail.om', '25d55ad283aa400af464c76d713c07ad', 1, 413005),
(4, 'aishwarya', 'railway lines', 7765497542, 'aishwarya@gmail.com', '57ac36adc5258c1b8048a7d7bd966a73', 1, 413001),
(5, 'Ratnesh', '370,west mangalwar peth,solapur', 7588262027, 'ratneshladda2@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 413002),
(6, '125e6', 'New pacvha peth', 0, 'gavaye@mail.com', '0659c7992e268962384eb17fafe88364', 1, 0),
(7, 'yash', '177/A Ekta nagar,solapur', 8855048478, 'yashwantg143143@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 413006),
(8, 'Supriya', 'Solapur', 7588323354, 's@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 413000),
(9, 'Supriya', 'Solapur', 7588323358, 's@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 413000),
(10, 'Shruti Kshirsagar', 'A27, Shri shail nagar, solapur', 8390919912, 'shrutikshirsagar24@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 413002),
(11, 'Amol', 'Ekt solapur', 1234567891, 'adk@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 413004),
(12, 'Mahesh', 'Solapur', 8788292660, 'maheshmaccha@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 413006),
(13, 'Farukh shaikh', '98,Kalyan Nagar-3,Aasra,Jule Solapur,Solapur', 9503478571, 'farukh19feb@gmail.com', '973ed546bb2f62dd29ebd727383ee173', 1, 413003),
(14, 'sak', 'abz 123', 7507404040, 'sak@gmail.com', 'ef73781effc5774100f87fe2f437a435', 1, 413002),
(15, 'Abhi', 'Solapur', 9156081298, 'abhirajchoudhari1999@gmail.c', 'f5f091a697cd91c4170cda38e81f4b1a', 1, 413006),
(16, 'Onkar Kshirsagar', 'Somwar peth solapur', 9049195335, '123@gmail.com', '161fbf47ada9d7f0336f6e9baf1b6b6e', 1, 413002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bid_his`
--
ALTER TABLE `bid_his`
  ADD PRIMARY KEY (`bd_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `obill`
--
ALTER TABLE `obill`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `providertype`
--
ALTER TABLE `providertype`
  ADD PRIMARY KEY (`spt_id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid_his`
--
ALTER TABLE `bid_his`
  MODIFY `bd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `b_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obill`
--
ALTER TABLE `obill`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `o_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `providertype`
--
ALTER TABLE `providertype`
  MODIFY `spt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
