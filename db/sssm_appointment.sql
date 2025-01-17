-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 11:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dj_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `sssm_appointment`
--

CREATE TABLE `sssm_appointment` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Contact` varchar(15) DEFAULT NULL,
  `EventDate` datetime DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `CreatedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sssm_appointment`
--
ALTER TABLE `sssm_appointment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sssm_appointment`
--
ALTER TABLE `sssm_appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


DELIMITER $$
CREATE PROCEDURE `usp_A_GetAppointment`(IN `PageSize` INT, IN `CurrentPage` INT, IN `_FirstName` VARCHAR(200), IN `Status_search` INT)
    NO SQL
BEGIN
IF(_FirstName = '') THEN SET _FirstName =NULL; END IF; 
IF(Status_search = -1 ) THEN SET Status_search =NULL; END IF; 

IF(PageSize = -1) THEN
    SELECT 
      IFNULL(c.ID,0) AS ID,
      IFNULL(c.Name,'') AS Name,
      IFNULL(c.Email,'') AS Email,
      IFNULL(c.Contact,'') AS Contact,
      IFNULL(c.Message,'') AS Message,
      IFNULL(c.EventDate,'') AS EventDate,
      IFNULL(c.Status,0) AS Status
    FROM sssm_appointment c
  WHERE
      c.FirstName = IFNULL(_FirstName,c.FirstName)
      ORDER BY c.UserID;
ELSE
 SET @rownum:=0;
 SELECT AA.*,@rownum AS rowcount FROM (
        SELECT V.*, @rownum := @rownum + 1 AS Rno
        FROM ( 
              SELECT 
        IFNULL(c.ID,0) AS ID,
      IFNULL(c.Name,'') AS Name,
      IFNULL(c.Email,'') AS Email,
      IFNULL(c.Contact,'') AS Contact,
      IFNULL(c.Message,'') AS Message,
      IFNULL(c.EventDate,'') AS EventDate,
      IFNULL(c.Status,0) AS Status
        FROM sssm_appointment c
        WHERE
        c.FirstName = IFNULL(_FirstName,c.FirstName) 
        ORDER BY c.UserID
             ) V   ORDER BY V.UserID             
        ) AA
        WHERE Rno BETWEEN (((CurrentPage*PageSize) - PageSize)+1) AND (CurrentPage*PageSize);

END IF;

END$$
DELIMITER ;