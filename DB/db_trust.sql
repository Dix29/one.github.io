-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2022 at 11:17 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_trust`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `aid` int(1) NOT NULL AUTO_INCREMENT,
  `a_content` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aid`, `a_content`) VALUES
(1, 'vsgs wwsr bdbeth gs;mfndslkn lnhvklsdn lkncklznv aohakdbv aohaos aohfowefnw vsgs wwsr bdbeth gs;mfndslkn lnhvklsdn lkncklznv aohakdbv aohaos aohfowefnw vsgs wwsr bdbeth gs;mfndslkn lnhvklsdn lkncklznv aohakdbv aohaos aohfowefnw \r\n\r\n\r\n \r\n\r\n\r\nsadfdcfa </b>fafafasdf</div>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login_date` date NOT NULL,
  `last_login_time` time NOT NULL,
  `login_try` int(1) NOT NULL,
  `next_login_date` date NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `mobile`, `email`, `photo`, `user_id`, `password`, `last_login_date`, `last_login_time`, `login_try`, `next_login_date`, `flag`) VALUES
(2, 'Dixit Vithani', '7778984617', 'pateldixit590@gmail.com', 'oneplus.png', 'dixit02', 'bcbe3365e6ac95ea2c0343a2395834dd', '2022-06-20', '06:09:00', 2, '2022-08-05', 0),
(3, 'Bhaskar Zinzuvadiya', '9510305393', 'bhaskarzinzuvadiya295@gma', 'vivo_2.jpg', 'bhaskar03', '333', '2022-06-16', '05:46:00', 0, '2022-06-16', 0),
(4, 'Uday Gadhiya', '8866229903', 'udayphp2009@gmail.com', 'samsung_2.jpg', 'uday04', '444', '2022-03-15', '04:15:00', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `ci_id` int(3) NOT NULL AUTO_INCREMENT,
  `co_id` int(3) NOT NULL,
  `sid` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`ci_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ci_id`, `co_id`, `sid`, `name`) VALUES
(1, 1, 1, 'Bhavnagar'),
(2, 2, 3, 'Nor'),
(3, 1, 1, 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `co_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`co_id`, `name`) VALUES
(1, 'India'),
(2, 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `d_id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `d_file` varchar(100) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`d_id`, `title`, `d_file`) VALUES
(1, 'ngfhg', '4th sem Online_Exam_Form(BCA).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `do_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `receipt_no` int(4) NOT NULL,
  `ammount` varchar(9) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`do_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`do_id`, `name`, `receipt_no`, `ammount`, `description`, `date`) VALUES
(1, 'Ram Dave', 101, '5000', '<h5>rgfdsgfdsfdfgdfgdfgdfgdgfsdfsdfsdfs</h5>', '2022-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `future_event`
--

CREATE TABLE IF NOT EXISTS `future_event` (
  `u_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `chief_guest` text NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `future_event`
--

INSERT INTO `future_event` (`u_id`, `name`, `description`, `date`, `time`, `chief_guest`) VALUES
(3, 'Rakshabandhan', 'Celebration on 5th August', '2022-08-05', '09:00:00', 'Jitubhai Vaghani');

-- --------------------------------------------------------

--
-- Table structure for table `future_project`
--

CREATE TABLE IF NOT EXISTS `future_project` (
  `pr_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `estimation` varchar(9) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `future_project`
--

INSERT INTO `future_project` (`pr_id`, `name`, `description`, `estimation`) VALUES
(1, 'ASDASDAS', 'AADASD\r\nASD\r\nASD\r\nASD\r\nAdgr', '30000'),
(2, 'm,', 'jijm', 'j,j'),
(3, 'm,k', ',kop', ',ko');

-- --------------------------------------------------------

--
-- Table structure for table `guest_photo`
--

CREATE TABLE IF NOT EXISTS `guest_photo` (
  `gp_id` int(3) NOT NULL AUTO_INCREMENT,
  `g_title` varchar(15) NOT NULL,
  `g_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`gp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `guest_photo`
--

INSERT INTO `guest_photo` (`gp_id`, `g_title`, `g_photo`) VALUES
(2, 'Ram Sharma', '112-1128445_osh-guest-house-logo-for-guest-house.png'),
(3, 'Bhaskar', '15.jpg'),
(4, 'Electrification', '5.jpg'),
(5, 'Dixit', 'book - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `hid` int(1) NOT NULL AUTO_INCREMENT,
  `h_content` text NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hid`, `h_content`) VALUES
(1, '<div id="txtHint">\r\n\r\n\r\n \r\n\r\n\r\nasdfdf\r\n</div><div id="txtHint">sdfsfd</div><div id="txtHint"><ol><li>sdasd</li><li>as</li><li>asd</li><li>asdasd</li></ol></div>');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `q_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`q_id`, `name`, `mobile`, `email`, `subject`) VALUES
(3, 'Jay', '5549846131', 'jay@gmail.com', 'What is your next event ?'),
(5, '', '', '', ''),
(6, 'Ram Sharma', '9510305393', 'ram@gmail.com', 'fhwiugfyw ');

-- --------------------------------------------------------

--
-- Table structure for table `multipages`
--

CREATE TABLE IF NOT EXISTS `multipages` (
  `m_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `multipages`
--


-- --------------------------------------------------------

--
-- Table structure for table `past_event`
--

CREATE TABLE IF NOT EXISTS `past_event` (
  `c_id` int(3) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `photo_1` varchar(100) NOT NULL,
  `photo_2` varchar(100) NOT NULL,
  `photo_3` varchar(100) NOT NULL,
  `video` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `past_event`
--

INSERT INTO `past_event` (`c_id`, `event_title`, `event_date`, `event_time`, `photo_1`, `photo_2`, `photo_3`, `video`) VALUES
(1, 'Rakshabandhan', '2022-07-15', '18:12:00', '12496.jpg', 'Royal_National_College_for_the_Blind_logo.png', 'attachment_116968265.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/gsBJAq08PSk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `past_project`
--

CREATE TABLE IF NOT EXISTS `past_project` (
  `f_id` int(3) NOT NULL AUTO_INCREMENT,
  `pr_id` int(3) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_desc` text NOT NULL,
  `photo_1` varchar(100) NOT NULL,
  `photo_2` varchar(100) NOT NULL,
  `photo_3` varchar(100) NOT NULL,
  `video` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `past_project`
--

INSERT INTO `past_project` (`f_id`, `pr_id`, `project_title`, `project_desc`, `photo_1`, `photo_2`, `photo_3`, `video`) VALUES
(3, 0, 'dghjdgh', 'dgjhdfhio', 'img0.jpg', 'img1.jpg', 'img2.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/snVXfyMdu9g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE IF NOT EXISTS `photo_gallery` (
  `p_id` int(3) NOT NULL AUTO_INCREMENT,
  `photo_title` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `p_category` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`p_id`, `photo_title`, `photo`, `p_category`) VALUES
(1, 'ngfm', '1.jpg', 'new'),
(2, 'ngfm', '1.jpg', ''),
(3, 'ngfm', '1.jpg', ''),
(4, 'ngfm', '1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_data`
--

CREATE TABLE IF NOT EXISTS `staff_data` (
  `s_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `id_proof_type` varchar(15) NOT NULL,
  `id_proof_photo` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login_date` date NOT NULL,
  `last_login_time` time NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staff_data`
--

INSERT INTO `staff_data` (`s_id`, `name`, `gender`, `mobile`, `email`, `address`, `qualification`, `id_proof_type`, `id_proof_photo`, `photo`, `user_id`, `password`, `last_login_date`, `last_login_time`) VALUES
(7, 'Ram Varma', 'female', '4663132444', 'paramdave97@gmail.com', 'nkjsffhiwufh', 'Graduate', 'Aadhar Card', 'download (6).jfif', 'ram.jpg', 'ram', 'ram', '2022-07-11', '06:28:00'),
(8, 'Sita', 'female', '8989999999', 'paramdave97@gmail.com', 'fhwhiwhgw', 'Graduate', 'Voter ID Card', '3.jpg', '5.jpeg', 'sita', 'sita', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(3) NOT NULL AUTO_INCREMENT,
  `co_id` int(3) NOT NULL,
  `sname` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `co_id`, `sname`) VALUES
(1, 1, 'Gujarat'),
(2, 1, 'Maharashtra'),
(3, 2, 'London');

-- --------------------------------------------------------

--
-- Table structure for table `trustee_data`
--

CREATE TABLE IF NOT EXISTS `trustee_data` (
  `t_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `designation` varchar(30) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `trustee_data`
--

INSERT INTO `trustee_data` (`t_id`, `name`, `gender`, `mobile`, `email`, `photo`, `designation`) VALUES
(2, 'Param Dave ', 'male', '4663132444', 'paramdave34@gmail.com', '10.jpeg', 'vgf bnk'),
(9, 'dfsd', 'male', '564654', 'asasd', '20.jpg', 'fdhfs');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE IF NOT EXISTS `video_gallery` (
  `v_id` int(3) NOT NULL AUTO_INCREMENT,
  `v_title` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `video_link` text NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`v_id`, `v_title`, `description`, `video_link`) VALUES
(1, 'bbdksajb', 'ldjsdlfjs w;;gjospdoj \r\njgjosgj sjsldvkj wsjvzlkjv ljczxlj wlglvjvljs oojsvls', '<iframe width="560" height="315" src="https://www.youtube.com/embed/D5nyp1yKzpg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
(2, 'ksbcfja', 'khfdsjkhba svvhdsklh skhvdsjkd ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/snVXfyMdu9g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `vid` int(6) NOT NULL AUTO_INCREMENT,
  `v_ip` varchar(15) NOT NULL,
  `v_date` date NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`vid`, `v_ip`, `v_date`) VALUES
(1, '127.0.0.1', '2022-05-31'),
(2, '127.0.0.1', '2022-06-01'),
(3, '127.0.0.1', '2022-06-04'),
(4, '127.0.0.1', '2022-06-06'),
(5, '127.0.0.1', '2022-06-09'),
(6, '127.0.0.1', '2022-06-10'),
(7, '127.0.0.1', '2022-06-11'),
(8, '127.0.0.1', '2022-06-13'),
(9, '127.0.0.1', '2022-06-16'),
(10, '127.0.0.1', '2022-06-17'),
(11, '127.0.0.1', '2022-06-20'),
(12, '127.0.0.1', '2022-06-27'),
(13, '127.0.0.1', '2022-07-02'),
(14, '127.0.0.1', '2022-07-04'),
(15, '127.0.0.1', '2022-07-07'),
(16, '127.0.0.1', '2022-07-08'),
(17, '127.0.0.1', '2022-07-11'),
(18, '127.0.0.1', '2022-07-12'),
(19, '127.0.0.1', '2022-07-14'),
(20, '127.0.0.1', '2022-07-14'),
(21, '127.0.0.1', '2022-07-15'),
(22, '127.0.0.1', '2022-07-16'),
(23, '127.0.0.1', '2022-07-18'),
(24, '127.0.0.1', '2022-07-25'),
(25, '127.0.0.1', '2022-07-28'),
(26, '127.0.0.1', '2022-08-05');
