-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2019 at 07:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resident`
--
CREATE DATABASE IF NOT EXISTS `resident` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `resident`;

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE IF NOT EXISTS `birth` (
  `brid` varchar(20) NOT NULL,
  `fatherfulname` varchar(30) NOT NULL,
  `motherfulname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `placeofbirth` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `register` date NOT NULL,
  PRIMARY KEY (`brid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`brid`, `fatherfulname`, `motherfulname`, `firstname`, `middlname`, `lastname`, `age`, `sex`, `placeofbirth`, `date`, `register`) VALUES
('1', 'getaneh tilahun', 'amarch byhonegn', 'able', 'getaneh', 'tilahun', 1, 'Female', '01', '2018-06-12', '2018-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE IF NOT EXISTS `clearance` (
  `IdNumber` varchar(15) NOT NULL DEFAULT '',
  `FirstName` varchar(15) DEFAULT NULL,
  `middleName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `age` varchar(15) DEFAULT NULL,
  `Sex` varchar(15) DEFAULT NULL,
  `Reason_Of_Clearance` varchar(100) DEFAULT NULL,
  `Date_of_Taken` date DEFAULT NULL,
  `job` varchar(22) NOT NULL,
  `profile` blob NOT NULL,
  `prepard_by` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`IdNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`IdNumber`, `FirstName`, `middleName`, `LastName`, `age`, `Sex`, `Reason_Of_Clearance`, `Date_of_Taken`, `job`, `profile`, `prepard_by`, `username`) VALUES
('', '', ' ', '', '', '', 'Withdrawal from the kebele.', '2019-06-27', '', '', 'rahiel birhanie', ''),
('3', 'ayale', 'mogese  ', 'zenbu', '23', 'Female', 'Withdrawal from the kebele.', '2018-06-21', 'Student', 0x36202831292e6a7067, 'mahider.dawit', 'ayale.mogese'),
('5', 'tilahun', 'mengistu', 'yemier', '19', 'Male', 'gfbn', '2019-05-30', 'Farmer', '', 'rahiel birhanie', ''),
('9', 'yordanos', 'getie  ', 'alene', '34', 'Male', 'Withdrawal from the kebele.', '2019-06-27', 'Doctor', '', 'rahiel birhanie', 'yordanos.getie');

-- --------------------------------------------------------

--
-- Table structure for table `clearance_requset`
--

CREATE TABLE IF NOT EXISTS `clearance_requset` (
  `id_number` varchar(50) NOT NULL DEFAULT '0',
  `send` varchar(20) NOT NULL,
  `reciver` varchar(20) NOT NULL,
  `polce_cerifcate` blob NOT NULL,
  `smll_cirtifcate` blob NOT NULL,
  `content` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `seen` int(11) NOT NULL,
  PRIMARY KEY (`id_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance_requset`
--

INSERT INTO `clearance_requset` (`id_number`, `send`, `reciver`, `polce_cerifcate`, `smll_cirtifcate`, `content`, `date`, `seen`) VALUES
('1', 'ayale.mogese', 'Chairman', 0x494d475f32303135313132395f3137313435342e6a7067, 0x494d475f32303135313132395f3137313435342e6a7067, 'widrawl from the kebele.', '2018-06-18', 1),
('10', 'tinbebe.ayalaw', 'Chairman', 0x726963682e7068702e747874, 0x72722e7068702e747874, 'widrawl from the kebele.', '2019-06-27', 1),
('3', 'ayale.mogese', 'Chairman', 0x436f756e73656c6c696e672e706466, 0x436f756e73656c6c696e672e706466, 'widrawl from the kebele.', '2018-06-21', 1),
('4', 'tilahun.mengistu', 'Chairman', 0x436f756e73656c696e672e706466, 0x70726f706f73616c206e65772e646f6378, 'widrawl from the kebele.', '2018-06-21', 1),
('9', 'yordanos.getie', 'Chairman', 0x72722e7068702e747874, 0x72722e7068702e747874, 'widrawl from the kebele.', '2019-06-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(15) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Comment` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE IF NOT EXISTS `death` (
  `drid` varchar(30) NOT NULL,
  `kebeleid` varchar(30) NOT NULL,
  `placeofdeath` varchar(30) NOT NULL,
  `placeofgrave` varchar(30) NOT NULL,
  `reasonofdeath` varchar(300) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `register` date NOT NULL,
  `dateofb` date NOT NULL,
  PRIMARY KEY (`drid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`drid`, `kebeleid`, `placeofdeath`, `placeofgrave`, `reasonofdeath`, `age`, `sex`, `kebele`, `job`, `date`, `register`, `dateofb`) VALUES
('23', 'getaneh tilahun', 'Angacha', 'dfgdgfgf', 'fgfgh', 21, 'Female', 'durame', 'Doctor', '2018-06-21', '2018-06-21', '1997-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE IF NOT EXISTS `house` (
  `OwnerId` varchar(15) NOT NULL DEFAULT '',
  `HouseNumber` varchar(15) NOT NULL DEFAULT '',
  `Kebele` varchar(15) DEFAULT NULL,
  `Region` varchar(15) DEFAULT NULL,
  `House_Type` varchar(15) DEFAULT NULL,
  `DateOfRegistration` date DEFAULT NULL,
  PRIMARY KEY (`HouseNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`OwnerId`, `HouseNumber`, `Kebele`, `Region`, `House_Type`, `DateOfRegistration`) VALUES
('2', '2', '01', '5-9', 'Kebele House', '2018-06-19'),
('2', '3', '01', '5-9', 'Private house', '2018-06-19'),
('1', '4', '01', '35-78', 'Kebele House', '2018-06-21'),
('12', '5', '01', '20', 'Private house', '2019-05-29'),
('5', '6', '01', '4', 'Private house', '2019-05-29'),
('6', '7', '01', '2', 'Kebele House', '2019-05-29'),
('4', '8', '01', '32', 'Kebele House', '2019-06-26'),
('10', '877', '01', '24', 'Kebele House', '2019-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `idcard`
--

CREATE TABLE IF NOT EXISTS `idcard` (
  `id_number` varchar(15) NOT NULL DEFAULT '',
  `HouseNumber` varchar(15) NOT NULL DEFAULT '',
  `FirstName` varchar(15) DEFAULT NULL,
  `middleName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `age` varchar(3) DEFAULT NULL,
  `Sex` varchar(10) DEFAULT NULL,
  `Kebele` varchar(15) DEFAULT NULL,
  `Job` varchar(15) DEFAULT NULL,
  `PlaceOfBirth` varchar(15) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `DateOfTaken` date NOT NULL,
  `Nationality` varchar(15) DEFAULT NULL,
  `renewed_date` date NOT NULL,
  `UploadPicture` varchar(300) DEFAULT NULL,
  `exipred_date` date NOT NULL,
  PRIMARY KEY (`id_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idcard`
--

INSERT INTO `idcard` (`id_number`, `HouseNumber`, `FirstName`, `middleName`, `LastName`, `age`, `Sex`, `Kebele`, `Job`, `PlaceOfBirth`, `DateOfBirth`, `DateOfTaken`, `Nationality`, `renewed_date`, `UploadPicture`, `exipred_date`) VALUES
('', '5', 'bbb', 'aaa ', 'xxx', '39', 'Male', '01', 'Doctor', 'ghjg', '1980-01-02', '2019-06-28', 'Ethiopia', '2019-06-28', '', '2022-06-28'),
('1', '2', 'amanual', 'asires ', 'alemu', '19', 'Female', '18', 'Doctor', 'durame', '1999-06-12', '2018-06-21', 'Ethiopia', '2018-06-21', '3.jpg', '2021-06-21'),
('10', '3', 'tinbebe', 'ayalaw ', 'getu', '40', 'Female', '01', 'Student', 'Angacha', '1978-10-11', '2019-06-27', 'Ethiopia', '2019-06-27', '', '2022-06-27'),
('2', '3', 'getaneh', 'tilahun ', 'mengstu', '21', 'Female', '18', 'Doctor', 'Angacha', '1997-06-05', '2018-06-21', 'Ethiopia', '2018-06-21', '', '2021-06-21'),
('3', '3', 'ayale', 'mogese ', 'zenbu', '23', 'Female', '18', 'Student', 'durame', '1995-06-07', '2018-06-21', 'Ethiopia', '2018-06-21', '1 (4).jpg', '2021-06-21'),
('4', '2', 'mahider', 'dawit ', 'abatu', '21', 'Female', '18', 'Teacher', 'aa', '1997-06-20', '2018-06-22', 'Ethiopia', '2018-06-22', '', '2021-06-22'),
('5', '2', 'tilahun', 'mengistu ', 'yemier', '19', 'Male', '18', 'Farmer', 'Angacha', '1999-06-12', '2018-06-22', 'Ethiopia', '2018-06-22', '', '2021-06-22'),
('6', '3', 'ayehu', 'atali ', 'alemu', '30', 'Male', '18', 'Student', 'durame', '1988-11-09', '2019-06-26', 'Ethiopia', '2019-06-26', '', '2022-06-26'),
('7', '6', 'aster', 'nigusie ', 'kefyalewu', '24', 'Female', '01', 'Master', 'durame', '1995-05-07', '2019-06-04', 'Ethiopia', '2019-06-04', 'image.docx', '2022-06-04'),
('8', '4', 'xxx', 'yyy ', 'gfhftgh', '38', 'Male', '0', 'Farmer', 'fgd', '1980-12-31', '2019-06-26', 'Ethiopia', '2019-06-26', 'calendar.js', '2022-06-26'),
('9', '3', 'yordanos', 'getie ', 'alene', '34', 'Male', '01', 'Doctor', 'Angacha', '1985-02-02', '2019-06-27', 'Ethiopia', '2019-06-27', 'rr.php.txt', '2022-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `marrage_idcard`
--

CREATE TABLE IF NOT EXISTS `marrage_idcard` (
  `id` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `job` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `content` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `kebele` int(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `cirtficate` blob NOT NULL,
  `profil` blob NOT NULL,
  `houseno` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `sender` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marrage_idcard`
--

INSERT INTO `marrage_idcard` (`id`, `fname`, `mname`, `lname`, `job`, `birthdate`, `sex`, `nationality`, `content`, `age`, `kebele`, `address`, `cirtficate`, `profil`, `houseno`, `status`, `sender`) VALUES
('1002', 'yordanos', 'getie', 'alene', 'Phd', '1988-01-02', 'Male', 'Ethiopia', ' for new registration', 24, 0, 'Angacha', 0x726963682e7068702e747874, 0x706963747572653030342e6a7067, '5', 1, 'yordanos getie'),
('1003', 'eleni', 'birhane', 'gggg', 'Doctor', '1989-01-02', 'Female', 'Ethiopia', ' for new registration', 23, 0, 'durame', 0x72722e7068702e747874, '', '7', 1, 'eleni birhane'),
('1004', 'abebe', 'alemu', 'kebede', 'Student', '1988-12-02', 'Male', 'Ethiopia', ' for new registration', 23, 0, 'durame', 0x72722e7068702e747874, '', '3', 1, 'abebe alemu'),
('101', 'yordanos', 'getie', 'alene', 'Doctor', '1985-02-02', 'Male', 'Ethiopia', ' for new registration', 26, 0, 'Angacha', 0x322e68746d6c, '', '3', 1, 'yordanos getie'),
('111', 'ayehu', 'atali', 'alemu', 'Student', '1988-11-09', 'Male', 'Ethiopia', ' for new registration', 24, 18, 'durame', 0x7867632e504e47, '', '3', 1, 'ayehu atali'),
('1122', 'ccc', 'ddd', 'www', 'Student', '1986-01-02', 'Male', 'Ethiopia', ' for new registration', 0, 0, 'gtf', 0x706963747572653031332e6a7067, '', '3', 1, 'ccc ddd'),
('1188', 'sadiya', 'muhammed', 'nur', 'Doctor', '1995-02-08', 'Female', 'Ethiopia', ' for new registration', 22, 18, 'durame', 0x436f756e73656c696e672e706466, 0x312e706e67, '3', 1, 'sadiya muhammed'),
('1212', 'selam', 'bela', 'belay', 'Master', '1996-07-02', 'Female', 'Ethiopia', ' for new registration', 33, 18, 'durame', 0x6170706c69636174696f6e5f7064662e706e67, 0x686f6d655f312e706e67, '3', 1, 'selam bela'),
('1220', 'yihnew', 'assefa', 'wudajnew', 'Student', '1982-02-12', 'Male', 'Ethiopia', ' for new registration', 25, 0, 'Angacha', 0x706963747572653030392e6a7067, '', '7', 0, 'yihnew assefa'),
('1221', 'q', 'a', 'z', 'Student', '2019-06-02', 'Male', 'Ethiopia', ' for new registration', 12, 0, 'dfrdf', 0x6c6f672e504e47, '', '5', 1, 'q a'),
('122324', 'xxx', 'yyy', 'gfhftgh', 'Farmer', '1980-12-31', 'Male', 'Ethiopia', ' for new registration', 35, 0, 'fgd', 0x322e68746d6c, '', '4', 1, 'xxx yyy'),
('1223324', 'cdsv', 'asd', 'xcxc', 'Teacher', '2019-06-20', 'Male', 'Ethiopia', ' for new registration', 21, 0, 'x cx', 0x70657265736974656e742e504e47, 0x70657265736974656e742e504e47, '5', 1, 'cdsv asd'),
('1231', 'bbb', 'aaa', 'xxx', 'Doctor', '1980-01-02', 'Male', 'Ethiopia', ' for new registration', 22, 0, 'ghjg', 0x706963747572653031342e6a7067, '', '5', 1, 'bbb aaa'),
('12345', 'xxxx', 'yyy', 'zzz', 'Student', '1988-01-02', 'Male', 'Ethiopia', ' for new registration', 45, 0, 'ggggggg', 0x706963747572653031342e6a7067, '', '5', 1, 'xxxx yyy'),
('1321', 'endelbu', 'tegegn', 'dfgdg', 'Farmer', '2018-06-05', 'Male', 'Ethiopia', ' for new registration', 33, 18, 'ddwd', 0x436f756e73656c6c696e672e706466, 0x36202831292e6a7067, '4', 1, 'endelbu tegegn'),
('13212', 'zemenu', 'minuye', 'enyw', 'Teacher', '1982-02-02', 'Male', 'Ethiopia', ' for new registration', 32, 0, 'durame', 0x436170747572652e4a5047, '', '5', 1, 'zemenu minuye'),
('210', 'abw', 'father', 'mother', 'Farmer', '1995-03-12', 'Male', 'Ethiopia', ' for new registration', 24, 0, 'frbt', 0x73722e706870, 0x726963682e7068702e747874, '5', 1, 'abw father'),
('2113', 'tsige', 'birhane', 'gyoh', 'Student', '1982-06-11', 'Female', 'Ethiopia', ' for new registration', 27, 0, 'a.a', 0x706963747572653030342e6a7067, 0x706963747572653030342e6a7067, '4', 1, 'tsige birhane'),
('221', 'tsehay', 'girma', 'cdvfvf', 'Student', '0000-00-00', 'Female', 'Ethiopia', ' for new registration', 23, 0, 'durame', 0x7867632e504e47, '', '3', 1, 'tsehay girma'),
('23', 'ayehu', 'atali', 'vjkgbj', 'Student', '1987-11-03', 'Male', 'Ethiopia', ' for new registration', 24, 18, 'durame', 0x7867632e504e47, '', '4', 1, 'ayehu atali'),
('2323', 'aaaa', 'bbbb', 'cccc', 'Teacher', '1978-03-03', 'Female', 'Ethiopia', ' for new registration', 0, 0, 'arada', 0x706963747572653031342e6a7067, '', '6', 1, 'aaaa bbbb'),
('334', 'yonatan', 'amesal', 'mike', 'Phd', '2018-06-20', 'Male', 'Ethiopia', 'For register and to prepare Idcard for my firend', 21, 18, 'Angacha', 0x436f756e73656c6c696e672e706466, 0x31202832292e6a7067, '2', 1, 'ayale.mogese'),
('42', 'tinbebe', 'ayalaw', 'getu', 'Student', '1978-10-11', 'Female', 'Ethiopia', ' for new registration', 45, 0, 'Angacha', 0x72722e7068702e747874, 0x726963682e7068702e747874, '3', 1, 'tinbebe ayalaw'),
('444', 'wudu', 'goshu', 'wudaj', 'Student', '1980-03-22', 'Male', 'Ethiopia', ' for new registration', 0, 0, 'Angacha', 0x706963747572653030382e6a7067, '', '8', 1, 'wudu goshu'),
('455', 'tilahun', 'mengistu', 'xfgg', 'Teacher', '2018-06-20', 'Male', 'Ethiopia', ' for new registration', 23, 18, 'fdsfg', 0x436f756e73656c696e672e706466, 0x31202832292e6a7067, '3', 1, 'tilahun mengistu'),
('456', 'nnn', 'mmm', 'kkk', 'Student', '1980-08-09', 'Female', 'Ethiopia', ' for new registration', 0, 0, 'jk;lk', 0x706963747572653031352e6a7067, 0x706963747572653031342e6a7067, '6', 1, 'nnn mmm'),
('54', 'jkhlj', 'jjhhb', 'gjgjhgjk', 'Farmer', '2019-06-04', 'Male', 'Ethiopia', ' for new registration', 56, 0, 'nnnmm', 0x70657265736974656e742e504e47, '', '4', 1, 'jkhlj jjhhb'),
('54321', 'aaa', 'bbb', 'ccc', 'Student', '1986-12-12', 'Male', 'Ethiopia', ' for new registration', 23, 0, 'ghjfg', 0x706963747572653031342e6a7067, '', '4', 1, 'aaa bbb'),
('5645', 'zara', 'yenuse', 'getaneh', 'Teacher', '2018-06-21', 'Female', 'Please Choose nation', ' for new registration', 45, 18, 'fgdsd', 0x436f756e73656c6c696e672e706466, 0x36202831292e6a7067, '3', 1, 'zara yenuse');

-- --------------------------------------------------------

--
-- Table structure for table `newnoti`
--

CREATE TABLE IF NOT EXISTS `newnoti` (
  `id` varchar(11) NOT NULL,
  `Sender_name` varchar(20) NOT NULL,
  `purpose` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `send` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newnoti`
--

INSERT INTO `newnoti` (`id`, `Sender_name`, `purpose`, `date`, `send`) VALUES
('1004', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-27', 'ayehu'),
('1122', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-28', 'ayehu'),
('1231', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-28', 'ayehu'),
('12345', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-27', 'ayehu'),
('2113', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-27', 'ayehu'),
('2323', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-28', 'ayehu'),
('444', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-28', 'ayehu'),
('456', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-28', 'ayehu'),
('54321', 'ayehu', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2019-06-28', 'ayehu'),
('876', 'amanual.asires', 'The requeste for register is Accepted.using first name.middle name you can login and password is kebele', '2018-06-22', 'amanual');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `NewsId` int(15) NOT NULL,
  `Subject` varchar(200) DEFAULT NULL,
  `NewsContent` varchar(500) DEFAULT NULL,
  `TimesOfSent` date DEFAULT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsId`, `Subject`, `NewsContent`, `TimesOfSent`) VALUES
(22, 'Annual meeting', 'The annual progress meeting will be held on the 21st of july.', '2019-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `noti`
--

CREATE TABLE IF NOT EXISTS `noti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(20) NOT NULL,
  `content` varchar(500) NOT NULL,
  `send` varchar(500) NOT NULL,
  `seen` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `noti`
--

INSERT INTO `noti` (`id`, `from`, `content`, `send`, `seen`, `date`, `username`) VALUES
(107, 'mahder.dawit', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', 'tigist.adugn', 0, '2018-06-16', 'none'),
(108, 'mahder.dawit', 'The clerance is prepared.please bring your photo or upload then you can came and take:', 'amarch.getaneh', 1, '2018-06-17', ''),
(109, 'mahder.dawit', 'Please Deactivate this user account.', ' charman', 1, '2018-06-17', 'amarch.getaneh'),
(110, 'ayale.mogese', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-18', 'none'),
(111, 'ayale.mogese', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-18', 'none'),
(112, 'ayale.mogese', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-18', 'none'),
(113, 'ayale.mogese', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-18', 'none'),
(114, 'ayale.mogese', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-18', 'none'),
(115, 'ayale.mogese', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-18', 'none'),
(116, 'ayale.mogese', 'Please Deactivate this user account.', ' charman', 1, '2018-06-18', 'mahder.dawit'),
(118, 'amanual.asirse', 'Please Deactivate this user account.', ' charman', 1, '2018-06-18', 'ayale.mogese'),
(121, 'amanual.asirse', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-18', 'none'),
(125, 'amanual.asirse', 'The requst for id prepare is accepted.please fee the mony and take:', '', 1, '2018-06-18', ''),
(127, 'amanual.asirse', 'The requst for id prepare is accepted.please fee the mony and take:', '', 1, '2018-06-18', ''),
(129, 'amanual.asirse', 'The requst for id prepare is accepted.please fee the mony and take:', '', 1, '2018-06-18', ''),
(132, 'amanual.asirse', 'The request for id prepare is not accepted.', 'ayale.mogese', 0, '2018-06-19', 'none'),
(133, 'amanual.asirse', 'Please Deactivate this user account.', ' charman', 1, '2018-06-19', 'ayale.mogese'),
(134, 'mahder.dawit', 'Please Deactivate this user account.', ' charman', 1, '2018-06-19', 'amanual.asirse'),
(135, 'mahder.dawit', 'Please Deactivate this user account.', ' charman', 1, '2018-06-19', 'Admin'),
(136, 'mahder.dawit', 'Please Deactivate this user account.', ' charman', 1, '2018-06-19', 'Admin'),
(137, 'amanual.asirse', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-19', 'none'),
(138, 'amanual.asirse', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-20', 'none'),
(139, 'amanual.asirse', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-20', 'none'),
(140, 'amanual.asirse', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-20', 'none'),
(141, 'mahider.dawit', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', '', 0, '2018-06-21', 'none'),
(142, 'mahider.dawit', 'The clerance is prepared.please bring your photo or upload then you can came and take:', 'ayale.mogese', 1, '2018-06-21', ''),
(143, 'mahider.dawit', 'Please Deactivate this user account.', ' charman', 1, '2018-06-21', 'ayale.mogese'),
(147, 'mahider.dawit', 'Please Deactivate this user account.', ' charman', 1, '2018-06-22', 'Admin'),
(148, 'rich', 'Please Deactivate this user account.', ' charman', 1, '2019-05-30', 'tilahun.mengistu'),
(149, 'rich', 'The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.', 'ayehu', 0, '2019-06-26', 'none'),
(150, 'rich', 'The clerance is prepared.please bring your photo or upload then you can came and take:', 'yordanos.getie', 1, '2019-06-27', ''),
(151, 'rich', 'Please Deactivate this user account.', ' charman', 1, '2019-06-27', 'yordanos.getie'),
(152, 'rich', 'The clerance is prepared.please bring your photo or upload then you can came and take:', '', 1, '2019-06-27', ''),
(153, 'rich', 'Please Deactivate this user account.', ' charman', 1, '2019-06-27', ''),
(154, 'rich', 'The clerance is prepared.please bring your photo or upload then you can came and take:', 'tinbebe.ayalaw', 1, '2019-06-27', ''),
(155, 'rich', 'Please Deactivate this user account.', ' charman', 1, '2019-06-27', 'tinbebe.ayalaw'),
(156, 'rich', 'The request for id prepare is not accepted.', 'aster.nigusie', 0, '2019-06-27', 'none'),
(157, 'rich', 'The clerance is prepared.please bring your photo or upload then you can came and take:', 'yordanos.getie', 0, '2019-06-27', ''),
(158, 'rich', 'Please Deactivate this user account.', ' charman', 0, '2019-06-27', 'yordanos.getie');

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE IF NOT EXISTS `population` (
  `id` varchar(100) NOT NULL,
  `HouseNumber` varchar(15) NOT NULL DEFAULT '',
  `FirstName` varchar(15) DEFAULT NULL,
  `middleName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `age` varchar(3) DEFAULT NULL,
  `Sex` varchar(10) DEFAULT NULL,
  `Kebele` varchar(15) DEFAULT NULL,
  `Job` varchar(15) DEFAULT NULL,
  `PlaceOfBirth` varchar(15) DEFAULT NULL,
  `DateOfBirth` date NOT NULL,
  `DateOfRegistration` date DEFAULT NULL,
  `Nationality` varchar(15) DEFAULT NULL,
  `UploadPicture` longblob,
  `status` int(11) NOT NULL,
  `des` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `HouseNumber` (`HouseNumber`),
  KEY `HouseNumber_2` (`HouseNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `population`
--

INSERT INTO `population` (`id`, `HouseNumber`, `FirstName`, `middleName`, `LastName`, `age`, `Sex`, `Kebele`, `Job`, `PlaceOfBirth`, `DateOfBirth`, `DateOfRegistration`, `Nationality`, `UploadPicture`, `status`, `des`) VALUES
('001', '2', 'ser', 'keb', 'abatu', '85', 'Male', '01', 'Master', 'adiszemen', '1962-01-01', '2018-06-22', 'Ethiopia', 0x31202834292e6a7067, 0, 0),
('1', '3', 'ayale', 'mogese', 'zenbu', '23', 'Female', '01', 'Student', 'durame', '1995-06-07', '2018-06-21', 'Ethiopia', 0x494d475f32303135313131395f3133333334322e6a7067, 1, 0),
('1002', '5', 'yordanos', 'getie', 'alene', '24', 'Male', '0', 'Phd', 'Angacha', '1988-01-02', '2019-06-27', 'Ethiopia', 0x706963747572653030342e6a7067, 0, 0),
('1003', '7', 'eleni', 'birhane', 'gggg', '23', 'Female', '0', 'Doctor', 'durame', '1989-01-02', '2019-06-27', 'Ethiopia', '', 0, 0),
('1004', '3', 'abebe', 'alemu', 'kebede', '23', 'Male', '0', 'Student', 'durame', '1988-12-02', '2019-06-27', 'Ethiopia', '', 0, 0),
('101', '3', 'yordanos', 'getie', 'alene', '26', 'Male', '0', 'Doctor', 'Angacha', '1985-02-02', '2019-06-26', 'Ethiopia', '', 1, 0),
('1010', '3', 'yordanos', 'getie', 'alene', '24', 'Male', '01', 'Phd', 'Angacha', '1988-01-02', '2019-06-27', 'Ethiopia', '', 0, 0),
('11', '3', 'zemenu', 'minuye', 'enyew', '12', 'Male', '01', 'Student', 'durame', '2007-01-09', '2019-05-12', 'Ethiopia', 0x782e504e47, 0, 0),
('111', '3', 'ayehu', 'atali', 'alemu', '24', 'Male', '01', 'Student', 'durame', '1988-11-09', '2019-05-19', 'Ethiopia', '', 1, 0),
('1122', '3', 'ccc', 'ddd', 'www', '0', 'Male', '0', 'Student', 'gtf', '1986-01-02', '2019-06-28', 'Ethiopia', '', 0, 0),
('1188', '3', 'sadiya', 'muhammed', 'nur', '22', 'Female', '01', 'Doctor', 'durame', '1995-02-08', '2018-06-21', 'Ethiopia', 0x312e706e67, 0, 0),
('1212', '3', 'selam', 'bela', 'belay', '33', 'Female', '01', 'Master', 'durame', '1996-07-02', '2018-06-21', 'Ethiopia', 0x686f6d655f312e706e67, 0, 0),
('122324', '4', 'xxx', 'yyy', 'gfhftgh', '35', 'Male', '0', 'Farmer', 'fgd', '1980-12-31', '2019-06-26', 'Ethiopia', '', 1, 0),
('1231', '5', 'bbb', 'aaa', 'xxx', '22', 'Male', '0', 'Doctor', 'ghjg', '1980-01-02', '2019-06-28', 'Ethiopia', '', 1, 0),
('12345', '5', 'xxxx', 'yyy', 'zzz', '45', 'Male', '0', 'Student', 'ggggggg', '1988-01-02', '2019-06-27', 'Ethiopia', '', 0, 0),
('13', '2', 'amanual', 'asires', 'alemu', '23', 'Female', '01', 'Doctor', 'durame', '1999-06-12', '2018-06-21', 'Ethiopia', 0x34375f726f6e696e5f667265616b2d74312e6a7067, 1, 0),
('1321', '4', 'endelbu', 'tegegn', 'dfgdg', '33', 'Male', '01', 'Farmer', 'ddwd', '2018-06-05', '2018-06-22', 'Ethiopia', 0x36202831292e6a7067, 0, 0),
('13212', '5', 'zemenu', 'minuye', 'enyw', '32', 'Male', '0', 'Teacher', 'durame', '1982-02-02', '2019-06-26', 'Ethiopia', '', 0, 0),
('14', '2', 'mahider', 'dawit', 'abatu', '21', 'Female', '01', 'Teacher', 'aa', '1997-06-20', '2018-06-21', 'Ethiopia', 0x494d475f32303135313131385f3139343232332e6a7067, 1, 0),
('17', '5', 'almaz', 'ayle', 'alemu', '30', 'Female', '01', 'Master', 'dera', '1981-04-05', '2019-06-27', 'Ethiopia', 0x726963682e7068702e747874, 0, 0),
('21', '4', 'rahiel', 'birhanie', 'gebre', '20', 'Male', '01', 'Student', 'aa', '1999-01-05', '2019-05-12', 'Ethiopia', '', 0, 0),
('210', '5', 'abw', 'father', 'mother', '24', 'Male', '0', 'Farmer', 'frbt', '1995-03-12', '2019-06-27', 'Ethiopia', 0x726963682e7068702e747874, 0, 0),
('2113', '4', 'tsige', 'birhane', 'gyoh', '27', 'Female', '0', 'Student', 'a.a', '1982-06-11', '2019-06-27', 'Ethiopia', 0x706963747572653030342e6a7067, 0, 0),
('22', '2', 'zeleke', 'guangul', 'kitaw', '23', 'Male', '01', 'Student', 'durame', '2019-05-12', '2019-05-12', 'Ethiopia', 0x57494e5f32303139303531325f30385f30375f35335f50726f2e6a7067, 0, 0),
('2312', '5', 'alex', 'kebede', 'bfdg', '34', 'Male', '01', 'Teacher', 'dfvgdb', '1988-05-14', '2019-05-29', 'Ethiopia', '', 0, 0),
('2323', '6', 'aaaa', 'bbbb', 'cccc', '0', 'Female', '0', 'Teacher', 'arada', '1978-03-03', '2019-06-28', 'Ethiopia', '', 0, 0),
('3', '2', 'ayehu', 'atali', 'abeneb', '25', 'Male', '01', 'Student', 'durame', '1986-12-12', '2019-06-26', 'Ethiopia', '', 0, 0),
('321', '5', 'abebe', 'alemu', 'cxv', '21', 'Male', '01', 'Student', 'durame', '2019-05-13', '2019-05-29', 'Ethiopia', '', 0, 0),
('42', '3', 'tinbebe', 'ayalaw', 'getu', '45', 'Female', '0', 'Student', 'Angacha', '1978-10-11', '2019-06-27', 'Ethiopia', 0x726963682e7068702e747874, 1, 0),
('444', '8', 'wudu', 'goshu', 'wudaj', '0', 'Male', '0', 'Student', 'Angacha', '1980-03-22', '2019-06-28', 'Ethiopia', '', 0, 0),
('4444', '6', 'aster', 'nigusie', 'kefyalewu', '23', 'Female', '01', 'Master', 'durame', '1995-05-07', '2019-05-29', 'Ethiopia', '', 1, 0),
('456', '6', 'nnn', 'mmm', 'kkk', '0', 'Female', '0', 'Student', 'jk;lk', '1980-08-09', '2019-06-28', 'Ethiopia', 0x706963747572653031342e6a7067, 0, 0),
('54321', '4', 'aaa', 'bbb', 'ccc', '23', 'Male', '0', 'Student', 'ghjfg', '1986-12-12', '2019-06-28', 'Ethiopia', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registernoti`
--

CREATE TABLE IF NOT EXISTS `registernoti` (
  `id` varchar(100) NOT NULL,
  `sendto` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `HouseNumber` int(100) NOT NULL,
  `date` date NOT NULL,
  `seen` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registernoti`
--

INSERT INTO `registernoti` (`id`, `sendto`, `from`, `content`, `HouseNumber`, `date`, `seen`) VALUES
('1002', 'admin', 'ayehu', 'please creat account for yordanos', 5, '2019-06-27', 1),
('1003', 'admin', 'ayehu', 'please creat account for eleni', 7, '2019-06-27', 1),
('1004', 'admin', 'ayehu', 'please creat account for abebe', 3, '2019-06-27', 0),
('101', 'admin', 'amanual.asires', 'please creat account for cccc', 4, '2018-06-22', 1),
('1010', 'admin', 'ayehu', 'please creat account for yordanos', 3, '2019-06-27', 0),
('111', 'admin', 'zemenu', 'please creat account for ayehu', 3, '2019-05-19', 1),
('1122', 'admin', 'ayehu', 'please creat account for ccc', 3, '2019-06-28', 1),
('1188', 'admin', 'amanual.asires', 'please creat account for sadiya', 3, '2018-06-21', 1),
('12', 'admin', 'amanual.asires', 'please creat account for belte', 4, '2018-06-21', 1),
('1212', 'admin', 'amanual.asires', 'please creat account for selam', 3, '2018-06-21', 1),
('122324', 'admin', 'ayehu', 'please creat account for xxx', 4, '2019-06-26', 1),
('1231', 'admin', 'ayehu', 'please creat account for bbb', 5, '2019-06-28', 1),
('12345', 'admin', 'ayehu', 'please creat account for xxxx', 5, '2019-06-27', 1),
('1321', 'admin', 'amanual.asires', 'please creat account for endelbu', 4, '2018-06-22', 1),
('13212', 'admin', 'ayehu', 'please creat account for zemenu', 5, '2019-06-26', 1),
('210', 'admin', 'ayehu', 'please creat account for abw', 5, '2019-06-27', 1),
('2113', 'admin', 'ayehu', 'please creat account for tsige', 4, '2019-06-27', 1),
('221', 'admin', 'zemenu', 'please creat account for tsehay', 3, '2019-05-19', 1),
('2312', 'admin', 'zemenu', 'please creat account for alex', 5, '2019-05-29', 1),
('2323', 'admin', 'ayehu', 'please creat account for aaaa', 6, '2019-06-28', 0),
('234567', 'admin', 'amanual.asires', 'please creat account for tilahun', 2, '2018-06-22', 1),
('26', 'admin', 'amanual.asires', 'please creat account for abrham', 3, '2018-06-21', 1),
('321', 'admin', 'zemenu', 'please creat account for abebe', 5, '2019-05-29', 1),
('335', 'admin', 'amanual.asires', 'please creat account for amanu', 3, '2018-06-21', 1),
('42', 'admin', 'ayehu', 'please creat account for tinbebe', 3, '2019-06-27', 1),
('444', 'admin', 'ayehu', 'please creat account for wudu', 8, '2019-06-28', 1),
('4444', 'admin', 'zemenu', 'please creat account for aster', 6, '2019-05-29', 1),
('455', 'admin', 'amanual.asires', 'please creat account for tilahun', 3, '2018-06-21', 1),
('456', 'admin', 'ayehu', 'please creat account for nnn', 6, '2019-06-28', 1),
('54321', 'admin', 'ayehu', 'please creat account for aaa', 4, '2019-06-28', 1),
('5645', 'admin', 'amanual.asires', 'please creat account for zara', 3, '2018-06-22', 1),
('876', 'admin', 'amanual.asires', 'please creat account for aaaa', 4, '2018-06-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `replay`
--

CREATE TABLE IF NOT EXISTS `replay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `charmanname` varchar(300) NOT NULL,
  `content` varchar(200) NOT NULL,
  `seen` int(11) DEFAULT NULL,
  `idnum` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `replay`
--

INSERT INTO `replay` (`id`, `username`, `charmanname`, `content`, `seen`, `idnum`) VALUES
(73, 'mahder.dawit', 'ayale mogese', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:2', 0, '2'),
(74, 'amanual.asirse', 'ayale mogese', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:2', 0, '2'),
(78, 'kifi', 'amanual asirse', 'The request is not accept becuaese the age is less than 18', 0, 'none'),
(79, 'kifi', 'amanual asirse', 'The request is not accept becuaese the age is less than 18', 0, 'none'),
(80, 'kifi', 'amanual asirse', 'The request is not accept becuaese the age is less than 18', 0, 'none'),
(82, 'Admin', 'mahider dawit', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:2', 0, '2'),
(83, 'ayale.mogese', 'mahider dawit', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:3', 0, '3'),
(87, 'ayehu.atali', 'rahiel birhanie', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:6', 0, '6'),
(88, 'aster.nigusie', 'rahiel birhanie', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:7', 0, '7'),
(89, 'zemenu', 'rahiel birhanie', 'The request is not accept becuaese the age is less than 18', 0, 'none'),
(90, 'xxx.yyy', 'rahiel birhanie', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:8', 0, '8'),
(91, 'yordanos.getie', 'rahiel birhanie', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:9', 0, '9'),
(92, 'tinbebe.ayalaw', 'rahiel birhanie', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:10', 0, '10'),
(93, '.', 'rahiel birhanie', 'The request is not accept becuaese the age is less than 18', 0, 'none'),
(94, 'bbb.aaa', 'rahiel birhanie', 'The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `SenderHouseNumber` varchar(20) NOT NULL,
  `content` varchar(400) NOT NULL,
  `date` date NOT NULL,
  `seen` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `SenderHouseNumber`, `content`, `date`, `seen`) VALUES
(36, 'amanual.asires', '2', 'Please prepare Id card of this user', '2018-06-21', 1),
(40, 'tilahun.mengistu', '3', 'I need Idcard to get service.', '2018-06-21', 1),
(41, 'tilahun.mengistu', '2', 'I need Idcard to get service.', '2018-06-22', 1),
(42, 'ayehu.atali', '3', 'I need Idcard to get service.', '2019-05-26', 1),
(43, 'xxx.yyy', '4', 'I need Idcard to get service.', '2019-06-26', 1),
(44, 'yordanos.getie', '3', 'I need Idcard to get service.', '2019-06-27', 1),
(45, 'tinbebe.ayalaw', '3', 'I need Idcard to get service.', '2019-06-27', 1),
(46, 'abw.father', '5', 'I need Idcard to get service.', '2019-06-27', 1),
(47, 'abw.father', '5', 'I need Idcard to get service.', '2019-06-27', 1),
(48, 'abw.father', '5', 'I need Idcard to get service.', '2019-06-27', 1),
(49, 'tsige.birhane', '4', 'I need Idcard to get service.', '2019-06-27', 1),
(50, 'tsige.birhane', '4', 'I need Idcard to get service.', '2019-06-27', 1),
(51, 'xxxx.yyy', '12345', 'I need Idcard to get service.', '2019-06-27', 1),
(52, 'aaa.bbb', '54321', 'I need Idcard to get service.', '2019-06-28', 1),
(53, 'bbb.aaa', '1231', 'I need Idcard to get service.', '2019-06-28', 1),
(54, 'ccc.ddd', '1122', 'I need Idcard to get service.', '2019-06-28', 1),
(55, 'tsige.birhane', '2113', 'I need Idcard to get service.', '2019-06-28', 1),
(56, 'wudu.goshu', '444', 'I need Idcard to get service.', '2019-06-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requestr`
--

CREATE TABLE IF NOT EXISTS `requestr` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `sendername` varchar(20) NOT NULL,
  `SenderidNumber` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Purpose` varchar(300) NOT NULL,
  `seen` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `requestr`
--

INSERT INTO `requestr` (`id`, `sendername`, `SenderidNumber`, `Date`, `Purpose`, `seen`) VALUES
(33, 'ayehu', '6', '2019-06-26', 'missing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sendto` varchar(100) NOT NULL,
  `file` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `sendto`, `file`) VALUES
(3, 'ayale.mogese', 0x4c697374206f66205061737365722e706466),
(9, 'tilahun.mengistu', 0x742e706466),
(10, 'yordanos.getie', ''),
(11, '2019-06-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL,
  `frist_name` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `Position` varchar(20) DEFAULT NULL,
  `Username` varchar(20) NOT NULL DEFAULT '',
  `Password` varchar(800) NOT NULL,
  `status` int(5) NOT NULL,
  `profile` blob NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `frist_name`, `mname`, `lname`, `Position`, `Username`, `Password`, `status`, `profile`) VALUES
(0, '', '', '', 'resident', '.', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(54321, 'aaa', 'bbb', 'ccc', 'resident', 'aaa.bbb', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(321, 'abebe', 'alemu', 'cxv', 'resident', 'abebe.alemu', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(210, 'abw', 'father', 'mother', 'resident', 'abw.father', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(2312, 'alex', 'kebede', 'bfdg', 'resident', 'alex.kebede', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(17, 'almaz', 'ayle', 'alemu', 'Chairman', 'almaz', 'd2db19e5f1218261fffba11d0515bce2', 0, 0x726963682e7068702e747874),
(4444, 'aster', 'nigusie', 'kefyalewu', 'resident', 'aster.nigusie', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(3, 'ayehu', 'atali', 'abeneb', 'Record Officer', 'ayehu', 'aba18772fc70c8cbf79a79f413ef102b', 1, ''),
(111, 'ayehu', 'atali', 'alemu', 'resident', 'ayehu.atali', 'c2ee175b6bd46569a2cb5c1f01759a11', 1, ''),
(1231, 'bbb', 'aaa', 'xxx', 'resident', 'bbb.aaa', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(1122, 'ccc', 'ddd', 'www', 'resident', 'ccc.ddd', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(1003, 'eleni', 'birhane', 'gggg', 'resident', 'eleni.birhane', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(1321, 'endelbu', 'tegegn', 'dfgdg', 'resident', 'endelbu.tegegn', 'c2ee175b6bd46569a2cb5c1f01759a11', 1, ''),
(456, 'nnn', 'mmm', 'kkk', 'resident', 'nnn.mmm', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(21, 'rahiel', 'birhanie', 'gebre', 'Chairman', 'rich', 'f232f88c51d489732ab3dc32d25beed2', 1, ''),
(234567, 'tilahun', 'mengistu', 'yemier', 'resident', 'tilahun.mengistu', 'c2ee175b6bd46569a2cb5c1f01759a11', 0, ''),
(42, 'tinbebe', 'ayalaw', 'getu', 'resident', 'tinbebe.ayalaw', '4b2edae57266f32d8c557417815e67f9', 0, ''),
(221, 'tsehay', 'girma', 'cdvfvf', 'resident', 'tsehay.girma', 'c2ee175b6bd46569a2cb5c1f01759a11', 1, ''),
(2113, 'tsige', 'birhane', 'gyoh', 'resident', 'tsige.birhane', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(444, 'wudu', 'goshu', 'wudaj', 'resident', 'wudu.goshu', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(122324, 'xxx', 'yyy', 'gfhftgh', 'resident', 'xxx.yyy', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(12345, 'xxxx', 'yyy', 'zzz', 'resident', 'xxxx.yyy', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(1002, 'yordanos', 'getie', 'alene', 'resident', 'yordanos.getie', '4b2edae57266f32d8c557417815e67f9', 1, ''),
(5645, 'zara', 'yenuse', 'getaneh', 'resident', 'zara.yenuse', 'c2ee175b6bd46569a2cb5c1f01759a11', 1, ''),
(22, 'zeleke', 'guangul', 'kitaw', 'Administrator', 'zeleqe', 'e9fac7def09d23bf784151acf513a31e', 1, ''),
(11, 'zemenu', 'minuye', 'enyew', 'Record Officer', 'zemenu', '5b66c79e4719f17047cdcf3436bf4c35', 1, 0x494d475f32303139303432385f3136313234355b315d2e6a7067),
(13212, 'zemenu', 'minuye', 'enyw', 'resident', 'zemenu.minuye', '4b2edae57266f32d8c557417815e67f9', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
