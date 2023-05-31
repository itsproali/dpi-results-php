-- phpMyAdmin SQL Dump
    -- version 5.2.1
    -- https://www.phpmyadmin.net/
    --

    -- Host: 127.0.0.1
    -- Generation Time: May 31, 2023 at 05:14 AM
    -- Server version: 10.4.28-MariaDB
    -- PHP Version: 8.2.4
SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION
    ;
SET
    time_zone = "+00:00";
    /*!40101
SET
    @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
    /*!40101
SET
    @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
    /*!40101
SET
    @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
    /*!40101
SET NAMES
    utf8mb4 */;
    --

    -- Database: `marksheet`
    --

    -- --------------------------------------------------------
    --

    -- Table structure for table `marksheet`
    --

CREATE TABLE `marksheet`(
    `ID` INT(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `roll` VARCHAR(255) NOT NULL,
    `registration` VARCHAR(50) NOT NULL,
    `java` VARCHAR(80) NOT NULL,
    `surveillance` VARCHAR(25) NOT NULL,
    `logic_system` VARCHAR(12) NOT NULL,
    `web` VARCHAR(12) NOT NULL,
    `pcb` VARCHAR(12) NOT NULL,
    `operating` VARCHAR(12) NOT NULL,
    `total` VARCHAR(12) NOT NULL,
    `percentage` FLOAT NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--

-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet`(
    `ID`,
    `name`,
    `roll`,
    `registration`,
    `java`,
    `surveillance`,
    `logic_system`,
    `web`,
    `pcb`,
    `operating`,
    `total`,
    `percentage`
)
VALUES(
    1,
    'Mohammad Ali',
    '559804',
    '1234567890',
    '55',
    '27',
    '82',
    '95',
    '92',
    '51',
    '405',
    92.045
);
--

-- Indexes for dumped tables
--

--

-- Indexes for table `marksheet`
--

ALTER TABLE
    `marksheet` ADD PRIMARY KEY(`ID`);
    --

    -- AUTO_INCREMENT for dumped tables
    --

    --

    -- AUTO_INCREMENT for table `marksheet`
    --

ALTER TABLE
    `marksheet` MODIFY `ID` INT(255) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 8;
COMMIT
    ;
    /*!40101
SET
    CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
    /*!40101
SET
    CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
    /*!40101
SET
    COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;