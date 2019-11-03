-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 10:30 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artsy`
--

-- --------------------------------------------------------

--
-- Table structure for table `aregistration`
--

CREATE TABLE `aregistration` (
  `areg` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `mbno` varchar(12) NOT NULL,
  `address` varchar(150) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `img` varchar(300) NOT NULL,
  `status` int(5) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aregistration`
--

INSERT INTO `aregistration` (`areg`, `us_id`, `fname`, `lname`, `gender`, `dob`, `mbno`, `address`, `country`, `state`, `city`, `img`, `status`, `email`) VALUES
(51, 81, 'athira     ', 'gopinath     ', 'female         ', '1995-07-11', '2147483647', 'pranavam     ', 'hgjhjjj', 'hjhjhjh', 'Alappuzha  ', 'photo/1506356800ch.jpg', 0, 'sunny@gmail.com'),
(60, 103, 'Silpa', 'Johny', 'Female', '1997-05-03', '2147483647', 'chavarapuzha house', '1', '1', 'Idukki', 'photo/150669604520140216_105150-1.jpg', 0, 'silpajohn@gmail.com'),
(61, 105, 'sruthi ', 'Dev', 'Female ', '1995-03-18', '908765432', 'Thottathil(H)AnakkaraKumily ', '2', '8', 'kumily ', 'photo/1507471655IMG_4926.JPG', 0, 'sruthithomas@gmail.com'),
(62, 108, 'maria ', 'mathew ', 'Female', '1988-06-14', '987654378', '         gfgfgfgghgh', '1', '1', 'idukki ', 'photo/1507719396aart.png', 0, 'mariamathew@gmail.com'),
(63, 111, 'Silla        ', 'Johny       ', 'Female', '1995-02-12', '9446794799  ', 'Chavarapuzha(H)        ', '1', '1', 'Kumily     ', 'photo/1507834157P1020393 (2).JPG', 0, 'sillajohn@gmail.com'),
(64, 113, 'Anagha ', 'Joseph ', 'Female', '1995-07-19', '2147483647', 'Arackal(H) ', '6', '19', 'Besilika ', 'photo/1507865691918237947296.jpg', 0, 'anaghajoseph@gmail.com'),
(66, 117, 'Albin', 'Tom', 'Male', '1996-06-18', '2147483647', 'chjshcjhjcb', '1', '1', 'hhjh', 'photo/150832562973da6f23433daf5f8382766ed05ec7d7--famous-people-with-ocd-about-leo.jpg', 0, 'albin@gmail.com'),
(67, 120, 'Boby', 'Jacob', 'Male', '2007-01-01', '2465465489', 'viswam', '6', '19', 'beselica', 'photo/1508390380hairstyles-for-men-with-short-hair-and-glasses-hairstyles-for-people-with-short-hair-short-haircuts-for-normal-people.jpg', 0, 'boby@gmail.com'),
(68, 121, 'Neethu', 'Antony', 'Female', '1998-07-22', '8967542316', 'Chirayil', '1', '1', 'Kottayam', 'photo/1508394040people_2_large.jpg', 0, 'neethu@gmail.com'),
(69, 122, 'Amal', 'Dev', 'Male', '2006-12-12', '8976341294', 'Panmthottathil', '1', '1', 'kochi', 'photo/1508394272empire-daniel-radcliffe.jpg', 0, 'amal@gmail.com'),
(76, 138, 'Amala ', 'Thomas ', 'Female', '2006-12-19', '9875678903 ', 'Thottil ', '9', '27', 'Alhje ', 'photo/1511370216maxresdefault (2).jpg', 0, 'amalat@gmail.com'),
(77, 139, 'Anju ', 'Sabu ', 'Female', '1995-11-18', '9876543213 ', 'Chethimattam ', '6', '20', 'Peru ', 'photo/1511408814IMG_20141004_133004.jpg', 0, 'anju@gmail.com'),
(78, 140, 'wwqwnbn', 'wejhjhjhjhj', 'Female', '2006-07-19', '0123456789', 'pranavam', '1', '1', 'mmnk', 'photo/1511411709IMG_20141124_103442-1.jpg', 0, 'gf@gmail.com'),
(79, 141, 'Alfiya', 'Shanavas', 'Female', '1995-02-12', '9087456743', 'Shanavashouse', '6', '20', 'vadakku', 'photo/151624844117-vindicated-kate-sagal.w190.h190.jpg', 0, 'alfiya@gmail.com'),
(80, 143, 'achu', 'achu', 'Male', '2006-11-27', '9446924829', 'thottathil', '1', '1', 'idukki', 'photo/151625151673da6f23433daf5f8382766ed05ec7d7--famous-people-with-ocd-about-leo.jpg', 0, 'achu@gmail.com'),
(81, 144, 'ffff', 'ffff', 'Male', '2006-11-27', '9988774455', 'kkkihhhhuuhuohou', '1', '1', 'jjkkk', 'photo/151625220873da6f23433daf5f8382766ed05ec7d7--famous-people-with-ocd-about-leo.jpg', 0, 'fff@fff.fff'),
(82, 146, 'silla', 'johny', 'Male', '2006-11-26', '0808672933', 'hhhhhhhhh', '1', '1', 'Kumily', 'photo/1516253456ab3.jpg', 0, 'sill@live.in'),
(83, 148, 'thush', 'fghj', 'Male', '1999-07-14', '9887654567', 'fdghjk', '8', '25', 'fhghjhj', 'photo/1516263029ab4.jpg', 0, 'thush@gmail.com'),
(84, 151, 'Aruun', 'jose', 'Female', '1995-06-20', '9877556477', 'ghgrhgehg', '6', '20', 'dvfb', 'photo/151626386117-vindicated-kate-sagal.w190.h190.jpg', 0, 'arya@gmail.com'),
(85, 153, 'muthu', 'kuttty', 'Female', '2006-11-09', '6786578785', 'hhhhuhuh', '4', '17', 'uhhh', 'photo/151687480717-vindicated-kate-sagal.w190.h190.jpg', 0, 'muthu@gmail.com'),
(86, 154, 'ravi', 'rtgh', 'Female', '2006-11-17', '9876543233', 'hbfhjhfh', '4', '17', 'ggy', 'photo/1516875023hairstyles-for-men-with-short-hair-and-glasses-hairstyles-for-people-with-short-hair-short-haircuts-for-normal-people.jpg', 0, 'ravi@gmail.com'),
(87, 156, 'Johny', 'Kutty', 'Female', '2006-12-13', '9446974799', 'chavarapuzaha', '6', '21', 'kutram', 'photo/1517208452maxresdefault (1).jpg', 0, 'john@gmail.com'),
(88, 161, 'rinni', 'jose', 'Female', '1995-06-13', '8769065432', 'Thekkel', '6', '20', 'kochi', 'photo/1517290273haircuts-for-normal-women.jpg', 0, 'rinnu@gmail.com'),
(89, 162, 'Rithu', 'Mariyam', 'Female', '1995-06-14', '7689054368', 'kottaym', '1', '1', 'Puthupally', 'photo/1517291375haircuts-for-normal-women.jpg', 0, 'rithu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `art_id` int(11) NOT NULL,
  `artname` varchar(30) NOT NULL,
  `artdetails` varchar(200) NOT NULL,
  `artimg` varchar(300) NOT NULL,
  `size` varchar(40) NOT NULL,
  `price` varchar(30) NOT NULL,
  `artcat_id` int(11) NOT NULL,
  `status` int(5) NOT NULL,
  `ureg` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`art_id`, `artname`, `artdetails`, `artimg`, `size`, `price`, `artcat_id`, `status`, `ureg`) VALUES
(86, 'Dancing', 'Dancing girls', 'artimg/1517288758ab4.jpg', '678x345', '7000', 5, 0, 33),
(87, 'Twoeyes', 'Good Doing', 'artimg/1517288864ab5.jpg', '567x890', '7890', 6, 1, 33),
(88, 'lonely', 'chummma erikuva', 'artimg/1517289126ab2.jpg', '789x567', '8900', 7, 0, 32),
(89, 'HatGirl', 'Bainu sitting n a rock', 'artimg/1517289239ab1.jpg', '678x234', '4500', 8, 0, 32),
(90, 'Sun', 'Sun raices', 'artimg/1517289987co1.jpg', '789x345', '7000', 12, 0, 34),
(91, 'CuteGirl', 'Cute Girl', 'artimg/1517292222sk1.jpg', '587x365', '6700', 12, 0, 35),
(92, 'PotGirl', 'Girl with pot', 'artimg/1517292299co3.jpg', '456x321', '7890', 9, 0, 35),
(93, 'thhh', 'fgghbh', 'artimg/1517294740ab6.jpg', '679x234', '6789', 10, 0, 35);

-- --------------------------------------------------------

--
-- Table structure for table `artcategory`
--

CREATE TABLE `artcategory` (
  `artcat_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artcategory`
--

INSERT INTO `artcategory` (`artcat_id`, `category`, `status`) VALUES
(5, 'Oil Art', 1),
(6, 'Abstract art', 1),
(7, 'Contemporary Art', 1),
(8, 'Modern Art', 1),
(9, 'Traditional Art', 1),
(10, 'Sculpture Art', 1),
(11, 'Landscape Art', 1),
(12, 'Sketches Art', 1),
(13, '34567', 1),
(14, '234567', 1),
(15, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auctionart`
--

CREATE TABLE `auctionart` (
  `auctionart_id` int(11) NOT NULL,
  `ureg` int(11) NOT NULL,
  `art_id` varchar(100) NOT NULL,
  `auction_price` varchar(150) NOT NULL,
  `auction_date` varchar(300) NOT NULL,
  `sys_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auctionart`
--

INSERT INTO `auctionart` (`auctionart_id`, `ureg`, `art_id`, `auction_price`, `auction_date`, `sys_date`, `status`) VALUES
(37, 33, '80', '7890', '2018-01-30', '2018-01-29 16:41:34', 1),
(38, 32, '81', '8000', '2018-01-22', '2018-01-30 03:31:28', 0),
(39, 32, '81', '78900', '2018-01-31', '2018-01-30 03:41:30', 0),
(40, 32, '82', '9000', '2018-01-30', '2018-01-30 03:46:25', 0),
(41, 32, '83', '9000', '2018-01-30', '2018-01-30 04:39:22', 0),
(42, 32, '84', '6789', '2018-01-30', '2018-01-30 04:45:04', 0),
(43, 32, '85', '4567', '2018-01-31', '2018-01-30 04:47:12', 0),
(44, 33, '87', '5000', '2018-01-31', '2018-01-30 05:08:16', 0),
(45, 32, '88', '6000', '2018-01-30', '2018-01-30 05:14:33', 1),
(46, 35, '92', '8900', '2018-01-31', '2018-01-30 06:05:25', 0),
(47, 35, '93', '4500', '2018-01-30', '2018-01-30 06:46:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bid_id` int(11) NOT NULL,
  `ureg` int(11) NOT NULL,
  `areg` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `art_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `ureg`, `areg`, `amount`, `date`, `art_id`, `status`) VALUES
(51, 32, 88, '7000', '2018-01-30 05:32:59', 88, 2),
(52, 35, 89, '6000', '2018-01-30 06:48:06', 93, 2);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `con_id` int(15) NOT NULL,
  `con_name` varchar(40) NOT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`con_id`, `con_name`, `status`) VALUES
(1, 'India', 1),
(2, 'England', 1),
(4, 'Australia', 1),
(6, 'Russia', 1),
(7, 'China', 1),
(8, 'Korea', 1),
(9, 'Usa', 1),
(10, '212', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `us_id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`us_id`, `email`, `pass`, `role_id`, `status`) VALUES
(104, 'admin@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 1),
(109, 'reshmad@gmail.com', '1234', 3, 1),
(110, 'ammu@gmail.com', '1234', 3, 1),
(111, 'sillajohn@gmail.com', '1234', 2, 1),
(112, 'christhomas@gmail.com', '1234', 3, 1),
(113, 'anaghajoseph@gmail.com', '1234', 2, 1),
(114, 'jenipherjohn@gmail.com', '12345', 3, 1),
(115, 'adamjohn@gmail.com', '1234', 3, 1),
(116, 'sruthithomas@gmail.com', '1234', 2, 1),
(117, 'albin@gmail.com', '12345', 2, 1),
(118, 'manu@gmail.com', '1234', 3, 1),
(119, 'lachu@gmail.com', '1234', 3, 1),
(121, 'neethu@gmail.com', '1234', 2, 1),
(122, 'amal@gmail.com', '1234', 2, 1),
(123, 'cindrella@gmail.com', '1234', 3, 1),
(124, 'raphel@gmail.com', '1234', 3, 1),
(125, 'anjuk@gmail.com', '1234', 2, 1),
(126, 'jetty@gmail.com', 'jetty1234', 3, 1),
(134, 'hh@gmail.com', '1234', 3, 1),
(135, 'ashi@gmail.com', '1234', 2, 1),
(136, 'musi@gmail.com', '1234', 3, 1),
(137, 'ani@gmail.com', '1234', 3, 1),
(138, 'amalat@gmail.com', '1234', 2, 1),
(139, 'anju@gmail.com', '12345', 2, 1),
(140, 'gf@gmail.com', '1234', 2, 1),
(141, 'alfiya@gmail.com', 'nGMxe/VCqcKxgMTVFMQSFO0IU', 2, 1),
(142, 'cc@gmail.vom', '1234', 3, 1),
(143, 'achu@gmail.com', 'nGMxe/VCqcKxgMTVFMQSFO0IU', 2, 1),
(144, 'fff@fff.fff', 'jjkkk', 2, 1),
(145, 'aaaa@ffff.hhh', 'uuyiuyiuy', 3, 1),
(146, 'sill@live.in', 'nGMxe/VCqcKxgMTVFMQSFO0IUevB9JHi22JFtvtl/H8=', 2, 1),
(147, 'annakutty@gmail.com', 'nGMxe/VCqcKxgMTVFMQSFO0IUevB9JHi22JFtvtl/H8=', 3, 1),
(148, 'thush@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1),
(149, 'tt@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, 1),
(150, 'subi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, 1),
(151, 'arya@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1),
(152, 'linju@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, 1),
(153, 'muthu@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1),
(154, 'ravi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1),
(155, 'alice@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, 1),
(156, 'john@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1),
(159, 'alby@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, 1),
(160, 'bainul45@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, 1),
(161, 'rinnu@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1),
(162, 'rithu@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1),
(163, 'annet@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `cart_id` int(11) NOT NULL,
  `ureg` int(11) NOT NULL,
  `art_id` int(11) NOT NULL,
  `areg` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `status1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`cart_id`, `ureg`, `art_id`, `areg`, `status`, `status1`) VALUES
(1, 32, 78, 84, 2, 0),
(2, 33, 87, 89, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `status`) VALUES
(1, 'admin', 1),
(2, 'user', 1),
(3, 'artist', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(40) NOT NULL,
  `status` int(5) NOT NULL,
  `con_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `status`, `con_id`) VALUES
(1, 'Kerala', 1, 1),
(2, 'Goa', 1, 1),
(3, 'Tamilnadu', 1, 1),
(4, 'delhi', 1, 0),
(9, 'rajashan', 1, 1),
(10, 'Northern Ireland', 1, 2),
(11, 'Scotland', 1, 2),
(12, 'Wales (Cymru)', 1, 2),
(13, 'New South Wales', 1, 4),
(14, 'Northern Territory', 1, 4),
(15, 'Queensland', 1, 4),
(17, 'South Australia', 1, 4),
(18, 'Victoria', 1, 4),
(19, 'Moscow', 1, 6),
(20, 'Saint Petersburg', 1, 6),
(21, 'Novosibirsk', 1, 6),
(22, 'Macau', 1, 7),
(23, 'Beijing', 1, 7),
(24, 'Busan', 1, 8),
(25, 'Daejeon', 1, 8),
(26, 'Incheon', 1, 8),
(27, 'Washington', 1, 9),
(28, 'Springfield', 1, 9),
(29, 'Bristol', 1, 0),
(30, 'Punjab', 1, 1),
(31, 'ke', 1, 1),
(32, 'hj', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `uregistration`
--

CREATE TABLE `uregistration` (
  `ureg` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `fnam` varchar(25) NOT NULL,
  `lnam` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mbno` varchar(12) NOT NULL,
  `address` varchar(150) NOT NULL,
  `edu` varchar(200) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `img` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uregistration`
--

INSERT INTO `uregistration` (`ureg`, `us_id`, `fnam`, `lnam`, `gender`, `dob`, `mbno`, `address`, `edu`, `country`, `state`, `city`, `img`, `status`, `email`) VALUES
(14, 109, 'Reshma', 'Dev', 'Female', '1993-06-15', '9875678903', 'Thadathil House\r\nChakkupallam', 'Mca,Bca', '1', '3', 'Chennai', 'photo1/1507784780ch3.jpg', 0, 'reshmad@gmail.com'),
(15, 110, 'Carlin', 'Jose ', 'Female ', '1991-07-24', '9076894363 ', 'Chakkupallam ', 'MBBS,BDS ', '4', '15', 'Avanger ', 'photo1/1507831136haircuts-for-normal-women.jpg', 0, 'ammu@gmail.com'),
(16, 112, 'Chris     ', 'Mathew  ', 'Male     ', '1975-07-17', '7890876548  ', 'Chakkalakkali     ', 'Btech     ', '6', '20', 'Makkaa ', 'photo1/1507834693ar2.jpg', 0, 'christhomas@gmail.com'),
(17, 114, 'Jenipher     ', 'John     ', 'Female    ', '1993-06-17', '9867564357  ', 'Tharivana(H)    ', 'Msc in  Psycology     ', '4', '17', 'Melbon', 'photo1/1507870169jhs.jpg', 0, 'jenipherjohn@gmail.com'),
(18, 115, 'Adam', 'John', 'Male', '1987-07-16', '9067564328', 'Varikkani House', 'Ms in Physics', '1', '1', 'Pala', 'photo1/1507870775handsome-635832_960_720.jpg', 0, 'adamjohn@gmail.com'),
(19, 118, 'Manu', 'Joseph', 'Male', '1994-07-19', '9087654532', 'Arakkal', 'Mca', '2', '10', 'Peru', 'photo1/1508341343download.jpg', 0, 'manu@gmail.com'),
(21, 123, 'Cindrella', 'Thomas', 'Female', '1984-06-19', '9489543214', 'Arakkal', 'Mca', '1', '1', 'Kochin', 'photo1/150847375717-vindicated-kate-sagal.w190.h190.jpg', 0, 'cindrella@gmail.com'),
(22, 124, 'Raphel  ', 'Antony  ', 'Female  ', '1987-06-17', '8756435896  ', 'Thottathil ', 'ttc', '1', '3', 'Chennai  ', 'photo1/1508474377people_2_large.jpg', 0, 'raphel@gmail.com'),
(24, 136, 'Muhsinaa', 'Rafii', 'Female', '2003-06-10', '9876543213', 'thottathi', 'MBA', '4', '14', 'hohtjoan', 'photo1/1511341554maxresdefault.jpg', 0, 'musi@gmail.com'),
(25, 137, 'Aneeshaa ', 'Fathima ', 'female  ', '2006-12-06', '9876544442 ', 'Aracakl ', 'M.com ', '2', '10', 'lovaha ', 'photo1/1511369666Perimenopause.jpg', 0, 'ani@gmail.com'),
(30, 150, 'subin', 'john', 'Female', '1995-01-31', '9087654568', 'gdghjgjhef', 'ghh', '4', '14', 'ggfggr', 'photo1/151626363573da6f23433daf5f8382766ed05ec7d7--famous-people-with-ocd-about-leo.jpg', 0, 'subi@gmail.com'),
(31, 152, 'Linju', 'Thomas', 'Male', '2000-06-13', '9800456789', 'chavarapuzgha', 'mba', '6', '19', 'kakkanadu', 'photo1/1516787219empire-daniel-radcliffe.jpg', 0, 'linju@gmail.com'),
(32, 155, 'Alice', 'Johny', 'Female', '2005-05-18', '9400295678', 'Chavarapuzha', 'MMB', '6', '19', 'Molokko', 'photo1/1517207975preview-7979960-650x341-98-1480927512.jpg', 0, 'alice@gmail.com'),
(33, 159, 'Alby ', 'Tom ', 'Male ', '1998-06-16', '9746173332 ', 'chotta', 'MBBS ', '1', '1', 'Kannur ', 'photo1/1517218205o3.jpg', 0, 'alby@gmail.com'),
(34, 160, 'Bainul', 'Nushiyaa', 'Female', '2000-06-13', '9067543455', 'Chavarapuzha', 'MCA', '6', '20', 'kollam', 'photo1/1517289745maxresdefault (2).jpg', 0, 'bainul45@gmail.com'),
(35, 163, 'Annet', 'Danial', 'Female', '1998-06-16', '9746173333', 'kannur', 'mbbs', '6', '19', 'Irutty', 'photo1/1517291998Autumn-and-winter-dress-suit-suit-occupation-installed-Ms-interview-suit-OL-work-clothes-female-Leggings.jpg', 0, 'annet@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aregistration`
--
ALTER TABLE `aregistration`
  ADD PRIMARY KEY (`areg`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `artcategory`
--
ALTER TABLE `artcategory`
  ADD PRIMARY KEY (`artcat_id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `auctionart`
--
ALTER TABLE `auctionart`
  ADD PRIMARY KEY (`auctionart_id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`con_id`),
  ADD UNIQUE KEY `con_name` (`con_name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`us_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD UNIQUE KEY `state_name` (`state_name`);

--
-- Indexes for table `uregistration`
--
ALTER TABLE `uregistration`
  ADD PRIMARY KEY (`ureg`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aregistration`
--
ALTER TABLE `aregistration`
  MODIFY `areg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `artcategory`
--
ALTER TABLE `artcategory`
  MODIFY `artcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `auctionart`
--
ALTER TABLE `auctionart`
  MODIFY `auctionart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `con_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `uregistration`
--
ALTER TABLE `uregistration`
  MODIFY `ureg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
