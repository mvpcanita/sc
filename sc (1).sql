-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 03:03 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sc`
--
CREATE DATABASE IF NOT EXISTS `sc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sc`;

-- --------------------------------------------------------

--
-- Table structure for table `sc`
--

CREATE TABLE IF NOT EXISTS `sc` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(100) NOT NULL,
  `credits` varchar(100) NOT NULL,
  `prerequisite` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `outcomes` varchar(5000) NOT NULL,
  `requiredreading` varchar(1000) NOT NULL,
  `suggestedreading` varchar(1000) NOT NULL,
  `courserequirements` varchar(3000) NOT NULL,
  `gradingsystem` varchar(5000) NOT NULL,
  `policy` varchar(5000) NOT NULL,
  `consultationhours` varchar(50) NOT NULL,
  `dateofeffectivity` date NOT NULL,
  `code1` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc`
--

INSERT INTO `sc` (`id`, `time`, `code`, `credits`, `prerequisite`, `description`, `outcomes`, `requiredreading`, `suggestedreading`, `courserequirements`, `gradingsystem`, `policy`, `consultationhours`, `dateofeffectivity`, `code1`, `title`) VALUES
(4, '2015-05-02 00:06:32', '<p>CSCOMP1</p>', '<p>3 units</p>', '<p>C1A1Y</p>', '<p>Course Description: It is a three-unit course covering introduction to the Visual BASIC.NET programming language, including the preparation, coding, and testing of console and windows applications. The focus of this course includes an introduction to programming concepts and methods with problem analysis and problem-solving techniques included.</p>', '<p>At the end of this course, the learner will be able to:</p><ol><li>Discuss Visual Basic .Net programming concepts</li><li>Adapt to the environment of Microsoft Visual Basic .Net</li><li>Perform problem analysis and problem-solving techniques using Visual Basic .Net</li><li>Create a Visual Basic .Net application programs.</li></ol>', '<p>Zak, Diane (2012). <em>Programming with Microsoft Visual Basic 2010 5th ed.</em> Boston, MA: Cengage Learning c2012.</p>', '<p>Paul Deitel; Harvey Deitel: Abbey Deitel (2013). Simply visual basic 2010: an app-driven approach. Boston : Pearson Education Ltd., c2013.</p><p>Wendelyn Allaga and Jemma Development Group (2012). Visual Basic. Manila : Jemma, Inc., c2012.</p>', '<p>Attendance in Class<br>- The students are allowed but only 20% of the total number of hours in a semester for absences.<br>Major Examinations, Case Study (Projects), Quizzes (written / on-line), Hands-on Quizzes, Programming Exercises, Assignments, and Seatwork</p>', '<table border="1" cellspacing="0" cellpadding="0" style="width:624px"><tbody><tr><td style="width:361px"><p>Evaluation and Grading System</p></td><td colspan="3" style="width:260px"><p>Grade Point Equivalent</p></td></tr><tr><td style="width:361px"><p>Class Standing, C. S.</p></td><td style="width:82px"><p>Transmuted Grade</p></td><td style="width:102px"><p>Decimal Equivalent</p></td><td style="width:76px"><p>Literal Equivalent</p></td></tr><tr><td style="width:361px"><ul><li>Programing Exercises / Assignments / Seat works â€“ 50%</li></ul></td><td style="width:82px"><p>95 â€“ 100</p></td><td style="width:102px"><p>4.00</p></td><td style="width:76px"><p>A</p></td></tr><tr><td style="width:361px"><ul><li>Quizzes (written / on-line) / Hands-on Quizzes&nbsp;&nbsp;&nbsp;&nbsp; â€“ 50%</li></ul></td><td style="width:82px"><p>89 â€“ 94</p></td><td style="width:102px"><p>3.50</p></td><td style="width:76px"><p>B+</p></td></tr><tr><td style="width:361px"><p>Major Exam (Prelims, Midterms, Finals) / Case Study (Projects)</p></td><td style="width:82px"><p>83 â€“ 88</p></td><td style="width:102px"><p>3.00</p></td><td style="width:76px"><p>B</p></td></tr><tr><td style="width:361px"><p>&nbsp;&nbsp;&nbsp;&nbsp; Prelim Grade = [2(CS) + Prelim Exam]/3</p></td><td style="width:82px"><p>77 â€“ 82</p></td><td style="width:102px"><p>2.50</p></td><td style="width:76px"><p>C+</p></td></tr><tr><td style="width:361px"><p>&nbsp;&nbsp;&nbsp;&nbsp; Class Average, C. A. = [2(CS) + Midterm Exam]/3</p></td><td style="width:82px"><p>71 â€“ 76</p></td><td style="width:102px"><p>2.00</p></td><td style="width:76px"><p>C</p></td></tr><tr><td style="width:361px"><p>&nbsp;&nbsp;&nbsp;&nbsp; Midterm Grade = [2(CA) + Prelim Grade]/3</p></td><td style="width:82px"><p>65 â€“ 70</p></td><td style="width:102px"><p>1.50</p></td><td style="width:76px"><p>D+</p></td></tr><tr><td style="width:361px"><p>&nbsp;&nbsp;&nbsp;&nbsp; CA = [2(CS) + Final Exam]/3</p></td><td style="width:82px"><p>60 â€“ 64</p></td><td style="width:102px"><p>1.00</p></td><td style="width:76px"><p>D</p></td></tr><tr><td style="width:361px"><p>&nbsp;&nbsp;&nbsp;&nbsp; Final Grade = [2(CA) + Midterm Grade]/3</p></td><td style="width:82px"><p>59 â€“ below</p></td><td style="width:102px"><p><br></p></td><td style="width:76px"><p>F</p></td></tr></tbody></table>', '<p><strong>POLICY ON ACADEMIC INTEGRITY</strong></p><p>Anchored on the core values of Fortitude, Excellence and Uprightness, Far Eastern University (FEU) believes that its students, administration, faculty and staff should demonstrate academic integrity at all times.&nbsp; Academic integrity means that the members of the entire academic community adhere to the fundamental values of honesty, hard work, originality, respect and responsibility.&nbsp; FEU students are expected to always adhere to the highest standards of academic excellence.</p><p>FEU students are expected to demonstrate beliefs, attitudes and behaviors associated with academic honesty.&nbsp; Thus, all acts of academic dishonesty in FEU are not tolerated.&nbsp; Academic dishonesty comes largely in two forms: cheating and plagiarism.&nbsp; It is considered a major offense subject to disciplinary actions if students cheat or plagiarize their work.</p><p><strong>Cheating</strong> is broadly defined as getting unauthorized help on an assignment, quiz or examination. The following are considered as acts of cheating:</p><ul><li>Copying from another student during a test or examination, with or without his/her knowledge;</li><li>Allowing another student to copy his/her work;</li><li>Using unpermitted notes during a test or examination;</li><li>Having in oneâ€™s possession written notes or electronic devices during a test or examination;</li><li>Getting questions or answers from someone else who has already taken a test or examination;&nbsp;&nbsp;&nbsp;</li><li>Turning in work done by someone else;</li><li>Taking a test or examination for another student;</li><li>Writing or providing an assignment for another student.</li></ul><p><strong>Plagiarism</strong> is another form of academic dishonesty.&nbsp; All FEU students are expected to turn in work that is a product of their own e</p>', '<p>MWF 8:00 - 5:00</p>', '2011-01-01', 'CSCOMP1', ''),
(5, '2015-05-03 09:19:31', '<p>code2</p>', '<p>3 units</p>', '<p>prereq</p>', '<p>some description</p>', '<p>some outcomes</p>', '<p>req</p>', '<p>suggested</p>', '<p>requirements</p>', '<p>grading</p>', '<p>policy</p>', '<p>consultation</p>', '2015-05-01', 'code2', ''),
(11, '2015-05-04 08:39:23', '<p>course code</p>', '<p>3 units</p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '0000-00-00', 'course code', ''),
(12, '2015-05-04 08:45:33', '<p>CSCOMP2</p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '<p><br></p>', '0000-00-00', 'CSCOMP2', ''),
(13, '2015-05-04 08:50:32', 'CSOBJECTS', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 'CSOBJECTS', ''),
(24, '2015-05-04 12:59:31', 'CODE3', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 'CODE3', ''),
(27, '2015-05-04 13:00:13', 'CSTRENDS', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 'CSTRENDS', '');

-- --------------------------------------------------------

--
-- Table structure for table `sd`
--

CREATE TABLE IF NOT EXISTS `sd` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `weeknumber` varchar(100) NOT NULL,
  `learningoutcomes` varchar(5000) NOT NULL,
  `methodology` varchar(5000) NOT NULL,
  `resources` varchar(5000) NOT NULL,
  `assessments` varchar(5000) NOT NULL,
  `topics` varchar(5000) NOT NULL,
  `weekdescription` varchar(100) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sd`
--

INSERT INTO `sd` (`id`, `sid`, `weeknumber`, `learningoutcomes`, `methodology`, `resources`, `assessments`, `topics`, `weekdescription`, `period`) VALUES
(1, 4, '<p>1</p>', '<p>At the end of this lesson the student will be able to:</p><ul><li>Identify flowchart symbols</li><li>Analyze programming scenario</li><li>Create a program flow chart</li></ul>', '<ul><li>Lecture</li><li>Discussion on how to use flowchart</li><li>Activities about flowcharting</li></ul>', '<ul><li>LCD Projector</li><li>Computer / Laptop</li><li>Pen / Paper&nbsp;</li><li>LMS</li></ul>', '<ul><li>Activity on applying flowchart to solve an algorithm</li><li>Assignment about flowchart</li><li>Quiz about flowcharting</li></ul>', '<ul><li>Flow Charting</li></ul>', 'wk1', ''),
(2, 4, '<p>2</p>', '<ul><li>Identify the parts of VB. Net interface</li><li>Work with the environment of the VB .Net</li><li>Discuss the console application of VB.net</li><li>Identify Data Types</li><li>Use operators in creating equations</li></ul>', '<ul><li>Lecture</li><li>Discussion on how to use data types and operators in a program</li><li>Activities about data types and operators</li></ul>', '<ul><li>LCD Projector</li><li>Computer / Laptop</li><li>Pen / Paper</li><li>LMS</li><li>Visual Studio .Net</li></ul>', '<ul><li>Activities about using operators in creating equations</li></ul>', '<ul><li>Vb.net interface and environment</li><li>Data Types</li><li>Operators</li></ul>', 'wk2', ''),
(3, 4, '<p>3-6</p>', '<ul><li>Differentiate sequence, control and repetition structures.</li><li>Create programs using sequential structures</li><li>Create programs using conditional structures</li><li>Create programs using repetition structures</li></ul>', '<ul><li>Lecture</li><li>Discussion on applying the programming structures in solving programming scenarios</li><li>Program simulation about program structures</li><li>Programming exercise</li></ul>', '<ul><li>LCD Projector</li><li>Computer / Laptop</li><li>Pen / Paper</li><li>LMS</li><li>Visual Studio .Net</li></ul>', '<ul><li>Hands-on and written quiz about program structures</li><li>Program simulation activity about program structures</li><li>Programming exercises about program structures</li></ul>', '<p>Conditional statements</p><ul><li>if/then</li><li>if/then/else</li><li>Multiple selection (select case)</li></ul><p>Repetition statements</p><ul><li>while/when</li><li>do while/loop</li><li>do until/loop</li><li>for/next</li><li>do/loop while</li><li>do/loop until</li></ul>', 'wk3', 'Prelim'),
(4, 4, '', '', '', '', '', '', 'wk4', ''),
(5, 4, 'week 5', 'week 5 learning outcomes', 'week 5 methodology', 'week 5 resosurces', 'week 5 assessments', 'week 5 topics', 'wk5', ''),
(6, 4, '<p>week 6<br></p>', '<p>learning outcomes 6<br></p>', '<p>method 6<br></p>', '<p>resources 6<br></p>', '<p>assessments 6<br></p>', '<p>topics 6<br></p>', 'wk6', ''),
(7, 4, '<p>week 7<br></p>', '<p>learning resources 7<br></p>', '<p>methods 7<br></p>', '<p>resources 7<br></p>', '<p>assessments 7<br></p>', '<p>topics 77<br></p>', 'wk7', ''),
(8, 4, '<p>week 8<br></p>', '<p>learning resources 8<br></p>', '<p>method 8<br></p>', '<p>resources 8<br></p>', '<p>assessments 8<br></p>', '<p>topics 8<br></p>', 'wk8', ''),
(9, 4, '<p>week 9<br></p>', '<p>learning resources 9<br></p>', '<p>secr9<br></p>', '<p>resources 9<br></p>', '<p>assessments 9<br></p>', '<p>topics 9<br></p>', 'wk9', ''),
(10, 4, '<p>week 10<br></p>', '<p>learning resources 10<br></p>', '<p>methodology 10<br></p>', '<p>resources 10<br></p>', '<p>assessments 10<br></p>', '<p>topics 10<br></p>', 'wk10', ''),
(11, 4, '<p>week 11<br></p>', '<p>learning outcomes 11<br></p>', '<p>methods 11<br></p>', '<p>resources 11<br></p>', '<p>assessments 11<br></p>', '<p>topics 11<br></p>', 'wk11', ''),
(12, 4, '<p>week 12<br></p>', '<p>learning 12<br></p>', '<p>methods 12<br></p>', '<p>resources 12<br></p>', '<p>assessments 12<br></p>', '<p>tpoics 12<br></p>', 'wk12', ''),
(13, 4, '<p>week 13<br></p>', '<p>learning 13<br></p>', '<p>methods 13<br></p>', '<p>resources 13<br></p>', '<p>assessments 13<br></p>', '<p>tpoics 13<br></p>', 'wk13', ''),
(14, 4, '<p>week 14<br></p>', '<p>learning14<br></p>', 'methodology14', 'resources 14', 'assessments 14', '<p>topics14<br></p>', 'wk14', ''),
(15, 4, 'week 15', 'learning 15', 'methods 15', 'resources 15', 'assessments 15', 'topics 15', 'wk15', ''),
(16, 4, 'week 16', 'learning otucomes 16', 'methods 16', 'resources&nbsp; 16', 'assessments 16', 'topics 16', 'wk16', ''),
(17, 4, 'week 17', 'learning outcomes 17', 'methodlogy17', 'resources 17', 'assessments 17', 'topics 17', 'wk17', ''),
(18, 4, '18<br>', '18', '18', '18', '18', '18', 'wk18', ''),
(19, 5, '<p>week 1</p>', '<p>1</p>', '<p>1</p>', '<p>1</p>', '<p>1</p>', '<p>1</p>', 'wk1', ''),
(20, 5, '<p>week 2</p>', '<p>2</p>', '<p>2</p>', '<p>2</p>', '<p>2</p>', '<p>2</p>', 'wk2', ''),
(21, 5, '<p>week&nbsp;3</p>', '<p>3</p>', '<p>3</p>', '<p>3</p>', '<p>3</p>', '<p>3</p>', 'wk3', ''),
(22, 5, '<p>week 4</p>', '<p>4</p>', '<p>4</p>', '<p>4</p>', '<p>4</p>', '<p>4</p>', 'wk4', ''),
(23, 5, '5', '5', '5', '5', '5', '5', 'wk5', ''),
(24, 5, '6', '6', '6', '6', '6', '6', 'wk6', ''),
(25, 5, '7', '7', '7', '7', '7', '7', 'wk7', ''),
(26, 5, '8', '8', '8', '8', '8', '8', 'wk8', ''),
(27, 5, '9', '9', '9', '9', '9', '9', 'wk9', ''),
(28, 5, '10', '10', '10', '10', '10', '10', 'wk10', ''),
(29, 5, '11', '11', '11', '11', '11', '11', 'wk11', ''),
(30, 5, 'wk8', '', '', '', '', '', 'wk12', ''),
(31, 5, 'wk9', '', '', '', '', '', 'wk13', ''),
(32, 5, 'wk10', '', '', '', '', '', 'wk14', ''),
(33, 5, 'wk11', '', '', '', '', '', 'wk15', ''),
(34, 5, 'wk12', '', '', '', '', '', 'wk16', ''),
(35, 5, '', '', '', '', '', '', 'wk17', ''),
(36, 5, '<p>week 18</p>', '', '', '', '', '', 'wk18', ''),
(91, 11, '<p>week 1</p>', '<p>week 1</p>', '', '', '', '', 'wk1', ''),
(92, 11, '<p>week 2</p>', '', '', '', '', '', 'wk2', ''),
(93, 11, '', '', '', '', '', '', 'wk3', ''),
(94, 11, '', '', '', '', '', '', 'wk4', ''),
(95, 11, '', '', '', '', '', '', 'wk5', ''),
(96, 11, '', '', '', '', '', '', 'wk6', ''),
(97, 11, '', '', '', '', '', '', 'wk7', ''),
(98, 11, '', '', '', '', '', '', 'wk8', ''),
(99, 11, '', '', '', '', '', '', 'wk9', ''),
(100, 11, '', '', '', '', '', '', 'wk10', ''),
(101, 11, '', '', '', '', '', '', 'wk11', ''),
(102, 11, '', '', '', '', '', '', 'wk12', ''),
(103, 11, '', '', '', '', '', '', 'wk13', ''),
(104, 11, '', '', '', '', '', '', 'wk14', ''),
(105, 11, '', '', '', '', '', '', 'wk15', ''),
(106, 11, '', '', '', '', '', '', 'wk16', ''),
(107, 11, '', '', '', '', '', '', 'wk17', ''),
(108, 11, '', '', '', '', '', '', 'wk18', ''),
(109, 12, '', '', '', '', '', '', 'wk1', ''),
(110, 12, '', '', '', '', '', '', 'wk2', ''),
(111, 12, '', '', '', '', '', '', 'wk3', ''),
(112, 12, '', '', '', '', '', '', 'wk4', ''),
(113, 12, '', '', '', '', '', '', 'wk5', ''),
(114, 12, '', '', '', '', '', '', 'wk6', ''),
(115, 12, '', '', '', '', '', '', 'wk7', ''),
(116, 12, '', '', '', '', '', '', 'wk8', ''),
(117, 12, '', '', '', '', '', '', 'wk9', ''),
(118, 12, '', '', '', '', '', '', 'wk10', ''),
(119, 12, '', '', '', '', '', '', 'wk11', ''),
(120, 12, '', '', '', '', '', '', 'wk12', ''),
(121, 12, '', '', '', '', '', '', 'wk13', ''),
(122, 12, '', '', '', '', '', '', 'wk14', ''),
(123, 12, '', '', '', '', '', '', 'wk15', ''),
(124, 12, '', '', '', '', '', '', 'wk16', ''),
(125, 12, '', '', '', '', '', '', 'wk17', ''),
(126, 12, '', '', '', '', '', '', 'wk18', ''),
(127, 13, '', '', '', '', '', '', 'wk1', ''),
(128, 13, '', '', '', '', '', '', 'wk2', ''),
(129, 13, '', '', '', '', '', '', 'wk3', ''),
(130, 13, '', '', '', '', '', '', 'wk4', ''),
(131, 13, '', '', '', '', '', '', 'wk5', ''),
(132, 13, '', '', '', '', '', '', 'wk6', ''),
(133, 13, '', '', '', '', '', '', 'wk7', ''),
(134, 13, '', '', '', '', '', '', 'wk8', ''),
(135, 13, '', '', '', '', '', '', 'wk9', ''),
(136, 13, '', '', '', '', '', '', 'wk10', ''),
(137, 13, '', '', '', '', '', '', 'wk11', ''),
(138, 13, '', '', '', '', '', '', 'wk12', ''),
(139, 13, '', '', '', '', '', '', 'wk13', ''),
(140, 13, '', '', '', '', '', '', 'wk14', ''),
(141, 13, '', '', '', '', '', '', 'wk15', ''),
(142, 13, '', '', '', '', '', '', 'wk16', ''),
(143, 13, '', '', '', '', '', '', 'wk17', ''),
(144, 13, '', '', '', '', '', '', 'wk18', ''),
(145, 24, '', '', '', '', '', '', 'wk1', ''),
(146, 24, '', '', '', '', '', '', 'wk2', ''),
(147, 24, '', '', '', '', '', '', 'wk3', ''),
(148, 24, '', '', '', '', '', '', 'wk4', ''),
(149, 24, '', '', '', '', '', '', 'wk5', ''),
(150, 24, '', '', '', '', '', '', 'wk6', ''),
(151, 24, '', '', '', '', '', '', 'wk7', ''),
(152, 24, '', '', '', '', '', '', 'wk8', ''),
(153, 24, '', '', '', '', '', '', 'wk9', ''),
(154, 24, '', '', '', '', '', '', 'wk10', ''),
(155, 24, '', '', '', '', '', '', 'wk11', ''),
(156, 24, '', '', '', '', '', '', 'wk12', ''),
(157, 24, '', '', '', '', '', '', 'wk13', ''),
(158, 24, '', '', '', '', '', '', 'wk14', ''),
(159, 24, '', '', '', '', '', '', 'wk15', ''),
(160, 24, '', '', '', '', '', '', 'wk16', ''),
(161, 24, '', '', '', '', '', '', 'wk17', ''),
(162, 24, '', '', '', '', '', '', 'wk18', ''),
(163, 27, '', '', '', '', '', '', 'wk1', ''),
(164, 27, '', '', '', '', '', '', 'wk2', ''),
(165, 27, '', '', '', '', '', '', 'wk3', ''),
(166, 27, '', '', '', '', '', '', 'wk4', ''),
(167, 27, '', '', '', '', '', '', 'wk5', ''),
(168, 27, '', '', '', '', '', '', 'wk6', ''),
(169, 27, '', '', '', '', '', '', 'wk7', ''),
(170, 27, '', '', '', '', '', '', 'wk8', ''),
(171, 27, '', '', '', '', '', '', 'wk9', ''),
(172, 27, '', '', '', '', '', '', 'wk10', ''),
(173, 27, '', '', '', '', '', '', 'wk11', ''),
(174, 27, '', '', '', '', '', '', 'wk12', ''),
(175, 27, '', '', '', '', '', '', 'wk13', ''),
(176, 27, '', '', '', '', '', '', 'wk14', ''),
(177, 27, '', '', '', '', '', '', 'wk15', ''),
(178, 27, '', '', '', '', '', '', 'wk16', ''),
(179, 27, '', '', '', '', '', '', 'wk17', ''),
(180, 27, '', '', '', '', '', '', 'wk18', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sc`
--
ALTER TABLE `sc`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `code` (`code`), ADD UNIQUE KEY `code1` (`code1`);

--
-- Indexes for table `sd`
--
ALTER TABLE `sd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sc`
--
ALTER TABLE `sc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `sd`
--
ALTER TABLE `sd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
