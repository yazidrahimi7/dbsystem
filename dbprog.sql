-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 12:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprog`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addnewvehicle` (IN `Vehicle_ID` INT(10), IN `Policy_ID` INT(10), IN `Driver_ID` INT(10), IN `Year` INT(10), IN `Model` VARCHAR(50), IN `PlateNo` VARCHAR(10), IN `Active` VARCHAR(10))  BEGIN
    INSERT INTO vehicle(
        Vehicle_ID,
        Policy_ID,
        Driver_ID,
        Year,
        Model,
        PlateNo,
        Active
    )
VALUES(
    Vehicle_ID,
    Policy_ID,
    Driver_ID,
    Year,
    Model,
    PlateNo,
    Active
);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listvehicle` (`id` INT(10))  BEGIN
	DECLARE v_vehicleID int(10);
    DECLARE v_DriverID int(10);
    DECLARE v_PolicyID int(10);
    DECLARE v_year int(10);
    DECLARE v_model varchar(50);
    DECLARE v_plateno varchar(50);
    DECLARE v_active varchar(50); 
        
        
	DECLARE cur_listvehicle CURSOR FOR SELECT Vehicle_ID, Driver_ID, Policy_ID, Year, Model, PlateNo, Active FROM vehicle;
    OPEN cur_listvehicle;
   
    	FETCH cur_listvehicle INTO v_vehicleID, v_DriverID, v_PolicyID, v_year, v_model, v_plateno, v_active;
   		
        SELECT Vehicle_ID, Driver_ID, Policy_ID, Year, Model, PlateNo, Active FROM vehicle where Driver_ID = id;
    CLOSE cur_listvehicle;

END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `disc` (`payopt` VARCHAR(50)) RETURNS DECIMAL(10,1) BEGIN
    	DECLARE v_disc decimal(10,1);
        
        IF payopt = 'MONTHLY' THEN SET v_disc = 0.3;
        ELSEIF payopt = 'ANNUALLY' THEN SET v_disc = 0.2;
        ELSE SET v_disc = 0.1;
        
    	END IF;
        RETURN(v_disc);
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `stat` (`bal` INT(10)) RETURNS INT(10) BEGIN
    	DECLARE v_stat int(10);
        
    IF bal >= 1 AND bal < 100 THEN SET v_stat = 1;
    ELSEIF bal >= 100 THEN SET v_stat = 2;
    ELSE SET v_stat = 3;
    END IF;
    
       RETURN(v_stat);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `Bill_ID` int(11) NOT NULL,
  `Policy_ID` int(11) NOT NULL,
  `DueDate` date NOT NULL,
  `MinPay` int(11) NOT NULL,
  `Balance` int(11) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `Bill_ID`, `Policy_ID`, `DueDate`, `MinPay`, `Balance`, `Status`) VALUES
(1, 901, 1, '2021-01-31', 280, 80, 'NOT PAID'),
(2, 902, 5, '2021-01-31', 350, 180, 'NOT PAID'),
(3, 903, 3, '2020-09-30', 70, 50, 'NOT PAID'),
(4, 904, 7, '2020-09-30', 88, 0, 'PAID'),
(5, 905, 6, '2022-12-22', 175, 100, 'NOT PAID'),
(6, 906, 9, '2020-12-22', 550, 0, 'PAID'),
(7, 907, 8, '2020-07-31', 29, 0, 'PAID'),
(8, 908, 2, '2020-01-01', 140, 140, 'NOT PAID'),
(9, 909, 4, '2020-07-31', 15, 15, 'NOT PAID'),
(10, 910, 10, '2021-01-31', 275, 200, 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `driaddr`
--

CREATE TABLE `driaddr` (
  `id` int(11) NOT NULL,
  `DriAdd_ID` int(11) NOT NULL,
  `Driver_ID` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zipcode` int(10) NOT NULL,
  `Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driaddr`
--

INSERT INTO `driaddr` (`id`, `DriAdd_ID`, `Driver_ID`, `Address`, `City`, `State`, `Zipcode`, `Country`) VALUES
(1, 1001, 101, '23 Jalan Maluri', 'Subang Jaya', 'Selangor', 68000, '68000,'),
(2, 1002, 102, '55 Jalan Bangsar', 'Ayer Keroh', 'Perak', 75350, 'Malaysia'),
(3, 1003, 103, '11 Bintang Walk', 'Ipoh', 'Perak', 30000, 'Malaysia'),
(4, 1004, 104, '14 Jalan Petaling', 'Ampang', 'Selangor', 68000, 'Malaysia'),
(5, 1005, 105, '2 Fenix Villa', 'Johor Bahru', 'Johor', 80200, 'Malaysia'),
(6, 1006, 106, '77 Jalan Mutiara', 'Kota Bharu', 'Kelantan', 15674, 'Malaysia'),
(7, 1007, 107, '6 Taman Mewah', 'Alor Setar', 'Kedah', 5460, 'Malaysia'),
(8, 1008, 108, '66 Kampung Arau', 'Arau', 'Perlis', 2600, 'Malaysia'),
(9, 1009, 109, '10 Alexander Avenue', 'Bangi', 'Selangor', 43600, 'Malaysia'),
(10, 1010, 110, '8 Taman Setia Tropika', 'Penang Hill', 'Penang', 11300, 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `Driver_ID` int(20) NOT NULL,
  `Policy_ID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `LicenseNumber` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `Driver_ID`, `Policy_ID`, `firstName`, `lastName`, `DOB`, `PhoneNumber`, `LicenseNumber`, `Gender`) VALUES
(1, 101, 1, 'Jaafar', 'Yahya', '1985-12-13', '011-34648315', 901, 'Male'),
(2, 102, 2, 'Aisyah', 'Fatihah', '1999-09-17', '011-44511248', 902, 'Female'),
(3, 103, 3, 'Roslan', 'Mustafa', '1986-06-22', '011-33266594', 994, 'Male'),
(4, 104, 4, 'Haron', 'Azhar', '1994-07-26', '011-54266895', 934, 'Male'),
(5, 105, 5, 'Hasnah', 'Maznah', '1995-10-20', '011-77548865', 967, 'Female'),
(6, 106, 6, 'Maryam', 'Issabella', '1975-12-03', '011-66583265', 909, 'Female'),
(7, 107, 7, 'Jack', 'Aaron', '1997-05-09', '011-55486247', 941, 'Male'),
(8, 108, 8, 'Anuar', 'Musa', '2020-03-27', '011-98563247', 931, 'Male'),
(9, 109, 9, 'Azmin', 'Ali', '1997-12-31', '011-69853147', 970, 'Male'),
(10, 110, 10, 'Mazlan', 'Osman', '1989-12-28', '011-5426894', 988, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `Policy_ID` int(11) NOT NULL,
  `PolicyType` varchar(30) NOT NULL,
  `PolicyExp` date NOT NULL,
  `PayOpt` varchar(20) NOT NULL,
  `Total` int(11) NOT NULL,
  `Active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `Policy_ID`, `PolicyType`, `PolicyExp`, `PayOpt`, `Total`, `Active`) VALUES
(1, 1, 'Third Party', '2023-12-31', 'ANNUALLY', 280, 'YES'),
(2, 2, 'Third Party', '2023-12-31', 'SEMI-ANNUALLY', 140, 'YES'),
(3, 3, 'Third Party', '2023-12-31', 'QUARTERLY', 70, 'YES'),
(4, 4, 'Third Party', '2023-12-31', 'MONTHLY', 15, 'YES'),
(5, 5, 'Third Party,Fire and Theft', '2023-12-31', 'ANNUALLY', 350, 'YES'),
(6, 6, 'Third Party,Fire and Theft', '2023-12-31', 'SEMI-ANNUALLY', 175, 'YES'),
(7, 7, 'Third Party,Fire and Theft', '2023-12-31', 'QUARTERLY', 88, 'YES'),
(8, 8, 'Third Party,Fire and Theft', '2023-12-31', 'MONTHLY', 29, 'YES'),
(9, 9, 'Comprehensive Cover', '2023-12-31', 'ANNUALLY', 550, 'YES'),
(10, 10, 'Comprehensive Cover', '2023-12-31', 'SEMI-ANNUALLY', 275, 'YES'),
(11, 11, 'Comprehensive Cover', '2023-12-31', 'QUARTERLY', 138, 'YES'),
(12, 12, 'Comprehensive Cover', '2023-12-31', 'MONTHLY', 46, 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `Vehicle_ID` int(11) NOT NULL,
  `Driver_ID` int(11) NOT NULL,
  `Policy_ID` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `PlateNo` varchar(10) NOT NULL,
  `Active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `Vehicle_ID`, `Driver_ID`, `Policy_ID`, `Year`, `Model`, `PlateNo`, `Active`) VALUES
(1, 10001, 101, 1, 2017, 'NISSAN', 'BMX 2310', 'YES'),
(2, 10002, 102, 2, 2020, 'PERODUA', 'ABS 9856', 'YES'),
(3, 10003, 103, 3, 2015, 'PROTON', 'ABC 9246', 'YES'),
(4, 10004, 104, 4, 2019, 'BMW', 'WWE 5455', 'YES'),
(5, 10005, 105, 5, 2018, 'MERCEDES-BENZ', 'JDA 9998', 'YES'),
(6, 10006, 106, 6, 2020, 'JAGUAR', 'DEM 3333', 'YES'),
(7, 10007, 107, 7, 2015, 'AUDI', 'KDE 8543', 'YES'),
(8, 10008, 108, 8, 2013, 'MAZDA', 'RNR 6534', 'YES'),
(9, 10009, 109, 9, 2020, 'MITSUBISHI', 'WPE 7777', 'YES'),
(10, 10010, 110, 10, 2019, 'SUBARU', 'PRE 5798', 'YES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driaddr`
--
ALTER TABLE `driaddr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driaddr`
--
ALTER TABLE `driaddr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
