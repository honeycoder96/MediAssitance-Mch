-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2015 at 03:08 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_file`
--

CREATE TABLE IF NOT EXISTS `patient_file` (
  `p_id` varchar(10) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `disease` varchar(40) NOT NULL,
  `p_file` longblob NOT NULL,
  `ph_name` varchar(40) NOT NULL,
  `sreport` longblob NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `status` mediumtext NOT NULL,
  `d_name` varchar(25) NOT NULL,
  `ddept` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_file`
--

INSERT INTO `patient_file` (`p_id`, `p_name`, `gender`, `dob`, `disease`, `p_file`, `ph_name`, `sreport`, `comment`, `status`, `d_name`, `ddept`, `timestamp`) VALUES
('24342', 'prabhat singh', 'Male', '25-10-1991', 'hernia', 0x53616d706c655f5265706f72745f4c756d6261725f5370696e652e706466, ' Rural Health Training Centre', 0x707265736372697074696f6e3030312e6a7067, 'Eat less...', 'Active', 'DR. Pankaj Singh', 'NEUROLOGY', '2015-11-22 08:28:02'),
('23443654', 'Aman Verma', 'Male', '15-04-1975', 'cloting', 0x53616d706c655f5265706f72745f4c6566745f4b6e65652e706466, 'Janchetna Hospital', '', '', 'Pending', '', '', '2015-11-22 08:06:38'),
('12312', 'sheela dixit', 'Female', '97-07-1988', 'Dengue', 0x785261795f302e6a7067, 'Janchetna Hospital', '', '', 'Pending', '', '', '2015-11-22 08:04:45'),
('12415', 'shiv verma', 'Male', '09-09-1999', 'dengue', 0x6563675f31326c6561643031322e676966, ' Rao tula ram hospital', '', '', 'Pending', '', '', '2015-11-22 08:02:06'),
('345666', 'Ram Kumar', 'Male', '09-05-1990', 'bone fracture', 0x785261795f30332e4a5047, ' Rao tula ram hospital', '', '', 'Pending', '', '', '2015-11-22 06:12:17'),
('325244', 'Mohan yadav', 'Male', '23-12-1988', 'malaria', 0x505245534352495054494f4e20464f524d2052696368696520427261636520526576204465632032303130642e646f63, ' Rao tula ram hospital', '', '', 'Pending', '', '', '2015-11-22 06:27:05');



-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2015 at 03:11 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_main`
--

CREATE TABLE IF NOT EXISTS `user_main` (
  `usermain` varchar(80) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(150) NOT NULL,
  UNIQUE KEY `username` (`usermain`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_main`
--

INSERT INTO `user_main` (`usermain`, `password`, `address`) VALUES
('Safdarjung Hospital', 'abc123', 'Ring Road, Opposite AIMS Hospital, Ansari Nagar West, Safdarjung, New Delhi, Delhi 110029'),
('Deen Dayal Upadhyay Hospital', 'abc123', 'Hari Nagar, Ghanta Ghar, Clock Tower, New Delhi, Delhi 110064'),
('Acharya Shree Bhikshu Hospital', 'abc123', 'Moti Nagar, New Delhi, Delhi 110015'),
('CGHS Hospital', 'abc123', 'Tamil Sangam Marg, Sector 6, R.K. Puram, New Delhi, Delhi 110022'),
('Dr. Baba Saheb Ambedkar Hospital', 'abc123', 'Sector 6, Rohini, Near Rohini West Metro Station, New Delhi, Delhi 110085'),
('Rajiv Gandhi Super Speciality Hospital', 'abc123', ' Tahirpur, New Delhi, Delhi 110093'),
('Delhi State Cancer Institute', 'abc123', '8, GTB Hospital Complex, Dilshad Garden, New Delhi, Delhi 110095');



-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2015 at 03:12 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_primary`
--

CREATE TABLE IF NOT EXISTS `user_primary` (
  `username` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mhosname` varchar(80) NOT NULL,
  `password` varchar(40) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_primary`
--

INSERT INTO `user_primary` (`username`, `address`, `mhosname`, `password`) VALUES
('Janchetna Hospital', 'xyz,abc road,new delhi', 'CGHS Hospital', 'abc123'),
(' Rao tula ram hospital', 'Jaffarpur Kalan, New Delhi', 'Safdarjung Hospital', 'abc123'),
(' Rural Health Training Centre', 'Najafgarh, New Delhi', 'Safdarjung Hospital', 'abc123'),
('DEEPAN HOSPITAL', 'Kapashera Village, New Delhi', 'Safdarjung Hospital', 'abc123'),
('Babu Jagjivan Ram Hospital', 'E Block,Bhalswa Jahangirpuri', 'Deen Dayal Upadhyay Hospital', 'abc123'),
('Swasthya Vibhag', 'Circle Number 13, Delhi Nagar Palika Parishad, Pandit Bhagwan Sahay Vats Vitthi, Block D, East Kidwai Nagar, Kidwai Nagar, New Delhi, Delhi 110023', 'Deen Dayal Upadhyay Hospital', 'abc123'),
('Delhi Government Dispensary', 'D-2/61, Jeevan Park, Pankha Road, Bindapur, New Delhi, Delhi 110059', 'CGHS Hospital', 'abc123'),
(' Incharge,Sanjay Gandhi Memorial Hospita', 'Mangol Puri,Delhi-83 ', 'Acharya Shree Bhikshu Hospital', 'abc123'),
(' MC-FW', 'Dakshinpuri & Tigri Dakshinpuri,New Delhi-62 ', 'Rajiv Gandhi Super Speciality Hospital', 'abc123'),
(' M & CW Centre Mat. Home', 'Kabir Nagar,Delhi-7 ', 'Rajiv Gandhi Super Speciality Hospital', 'abc123'),
(' MCH Centre,Sarai Mohalla', 'Sarai Mohalla,Inside MPL Primary School,Shahdara ', 'Rajiv Gandhi Super Speciality Hospital', 'abc123'),
('Hindu Rao Hospital', 'North Delhi Muncipal Corporation, Malka Ganj, New Delhi, Delhi 110007', 'Dr. Baba Saheb Ambedkar Hospital', 'abc123'),
('Girdhari Lal Maternity Hospital', 'Jawaharlal Nehru Marg, New Delhi, Delhi 110002', 'Dr. Baba Saheb Ambedkar Hospital', 'abc123'),
('Lok Nayak Hospital', ' 2, Near Delhi Gate, JN Marg, New Delhi, Delhi 110002', 'Acharya Shree Bhikshu Hospital', 'abc123'),
('Dharamshila Hospital And Research Centre', 'Vasundhara Enclave, Dharamshila Road, Near New Ashok Nagar Metro Station, New Delhi, Delhi 110096', 'Delhi State Cancer Institute', 'abc123'),
('Indian Cancer Society', '86/1 GF, Shahpur Jat, Siri Fort, New Delhi, Delhi 110049', 'Delhi State Cancer Institute', 'abc123');
