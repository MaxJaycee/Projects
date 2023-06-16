SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `languages` (
  `lan_id` int(100) NOT NULL,
  `fullname` varchar(10) NOT NULL,
  `about` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `languages` (`lan_id`, `fullname`, `about`, `votecount`) VALUES
(1, 'BJP', 'BJP at', 3),
(2, 'CONGRESS', 'CONGRESS at', 0),
(3, 'AAP', 'AAP at', 2),
(4, 'BSP', 'BSP at', 0),
(5, 'None', 'None at', 0);



CREATE TABLE `loginusers` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'voter',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `loginusers` (`id`, `username`, `password`, `rank`, `status`) VALUES
(84, 'abcd', 'e10adc3949ba59abbe56e057f20f883e', 'voter', 'ACTIVE'),
(83, 'ajendra', 'e10adc3949ba59abbe56e057f20f883e', 'voter', 'ACTIVE'),
(82, 'usera', 'e10adc3949ba59abbe56e057f20f883e', 'voter', 'ACTIVE'),
(81, 'asdf', '1a1dc91c907325c69271ddf0c944bc72', 'voter', 'ACTIVE');



CREATE TABLE `voters` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  `voted` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `voters` (`firstname`, `lastname`, `username`, `status`, `voted`) VALUES
('aaaa', 'ssss', 'abcd', 'NOTVOTED', NULL),
('Ajendra', 'Singh', 'ajendra', 'VOTED', 'BJP');


ALTER TABLE `languages`
  ADD PRIMARY KEY (`lan_id`);


ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);


ALTER TABLE `voters`
  ADD UNIQUE KEY `username` (`username`);


ALTER TABLE `languages`
  MODIFY `lan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `loginusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;