-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 04:27 PM
-- Server version: 5.6.16
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uhas_mida`
--

-- --------------------------------------------------------

--
-- Table structure for table `baseline_blood`
--

CREATE TABLE `baseline_blood` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `base1msdata52` double NOT NULL,
  `base1msdata50` double NOT NULL,
  `base1msdata53` double NOT NULL,
  `base2msdata52` double NOT NULL,
  `base2msdata50` double NOT NULL,
  `base2msdata53` double NOT NULL,
  `base3msdata52` double NOT NULL,
  `base3msdata50` double NOT NULL,
  `base3msdata53` double NOT NULL,
  `base50CrSpike` double NOT NULL,
  `basewtblood` double NOT NULL,
  `basehct` double NOT NULL,
  `dorc` double NOT NULL,
  `dop` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `baseline_preview`
--

CREATE TABLE `baseline_preview` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `cor_base1msdata52` double NOT NULL,
  `cor_base1msdata50` double NOT NULL,
  `cor_base1msdata53` double NOT NULL,
  `cor_base2msdata52` double NOT NULL,
  `cor_base2msdata50` double NOT NULL,
  `cor_base2msdata53` double NOT NULL,
  `cor_base3msdata52` double NOT NULL,
  `cor_base3msdata50` double NOT NULL,
  `cor_base3msdata53` double NOT NULL,
  `amt_base1msdata52` double NOT NULL,
  `amt_base1msdata50` double NOT NULL,
  `amt_base1msdata53` double NOT NULL,
  `amt_base2msdata52` double NOT NULL,
  `amt_base2msdata50` double NOT NULL,
  `amt_base2msdata53` double NOT NULL,
  `amt_base3msdata52` double NOT NULL,
  `amt_base3msdata50` double NOT NULL,
  `amt_base3msdata53` double NOT NULL,
  `bcor_base1msdata53` double NOT NULL,
  `bcor_base2msdata53` double NOT NULL,
  `bcor_base3msdata53` double NOT NULL,
  `vol_base` double NOT NULL,
  `base1RBC53Cr` double NOT NULL,
  `base2RBC53Cr` double NOT NULL,
  `base3RBC53Cr` double NOT NULL,
  `basemeanRBC53Cr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `weight` double NOT NULL,
  `hct_blood` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `final_preview`
--

CREATE TABLE `final_preview` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `review_infusateVol` double NOT NULL,
  `review_injhct_inf` double NOT NULL,
  `review_vol_redInfusate` double NOT NULL,
  `review_vwb` double NOT NULL,
  `review_hct_blood` double NOT NULL,
  `review_blood_volume` double NOT NULL,
  `review_cor_blood_volume` double NOT NULL,
  `review_vwb_over_wt` double NOT NULL,
  `review_vol_over_wt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `injected`
--

CREATE TABLE `injected` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `inj1msdata52` double NOT NULL,
  `inj1msdata50` double NOT NULL,
  `inj1msdata53` double NOT NULL,
  `inj2msdata52` double NOT NULL,
  `inj2msdata50` double NOT NULL,
  `inj2msdata53` double NOT NULL,
  `inj3msdata52` double NOT NULL,
  `inj3msdata50` double NOT NULL,
  `inj3msdata53` double NOT NULL,
  `inj50CrSpike` double NOT NULL,
  `injwtblood` double NOT NULL,
  `infusateVol` double NOT NULL,
  `injhct_inf` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `injected_preview`
--

CREATE TABLE `injected_preview` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `cor_inj1msdata52` double NOT NULL,
  `cor_inj1msdata50` double NOT NULL,
  `cor_inj1msdata53` double NOT NULL,
  `cor_inj2msdata52` double NOT NULL,
  `cor_inj2msdata50` double NOT NULL,
  `cor_inj2msdata53` double NOT NULL,
  `cor_inj3msdata52` double NOT NULL,
  `cor_inj3msdata50` double NOT NULL,
  `cor_inj3msdata53` double NOT NULL,
  `amt_inj1msdata52` double NOT NULL,
  `amt_inj1msdata50` double NOT NULL,
  `amt_inj1msdata53` double NOT NULL,
  `amt_inj2msdata52` double NOT NULL,
  `amt_inj2msdata50` double NOT NULL,
  `amt_inj2msdata53` double NOT NULL,
  `amt_inj3msdata52` double NOT NULL,
  `amt_inj3msdata50` double NOT NULL,
  `amt_inj3msdata53` double NOT NULL,
  `bcor_inj1msdata53` double NOT NULL,
  `bcor_inj2msdata53` double NOT NULL,
  `bcor_inj3msdata53` double NOT NULL,
  `vol_inj` double NOT NULL,
  `inj1RBC53Cr` double NOT NULL,
  `inj2RBC53Cr` double NOT NULL,
  `inj3RBC53Cr` double NOT NULL,
  `injmeanRBC53Cr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inverse_matrix`
--

CREATE TABLE `inverse_matrix` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `r1c1` double NOT NULL,
  `r1c2` double NOT NULL,
  `r1c3` double NOT NULL,
  `r2c1` double NOT NULL,
  `r2c2` double NOT NULL,
  `r2c3` double NOT NULL,
  `r3c1` double NOT NULL,
  `r3c2` double NOT NULL,
  `r3c3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matrix`
--

CREATE TABLE `matrix` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `m1r1` double NOT NULL,
  `m1r2` double NOT NULL,
  `m1r3` double NOT NULL,
  `m2r1` double NOT NULL,
  `m2r2` double NOT NULL,
  `m2r3` double NOT NULL,
  `m3r1` double NOT NULL,
  `m3r2` double NOT NULL,
  `m3r3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_label`
--

CREATE TABLE `post_label` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `post1msdata52` double NOT NULL,
  `post1msdata50` double NOT NULL,
  `post1msdata53` double NOT NULL,
  `post2msdata52` double NOT NULL,
  `post2msdata50` double NOT NULL,
  `post2msdata53` double NOT NULL,
  `post3msdata52` double NOT NULL,
  `post3msdata50` double NOT NULL,
  `post3msdata53` double NOT NULL,
  `postCrSpike` double NOT NULL,
  `postwtblood` double NOT NULL,
  `posthct` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_preview`
--

CREATE TABLE `post_preview` (
  `id` int(11) NOT NULL,
  `PID` varchar(10) NOT NULL,
  `cor_post1msdata52` double NOT NULL,
  `cor_post1msdata50` double NOT NULL,
  `cor_post1msdata53` double NOT NULL,
  `cor_post2msdata52` double NOT NULL,
  `cor_post2msdata50` double NOT NULL,
  `cor_post2msdata53` double NOT NULL,
  `cor_post3msdata52` double NOT NULL,
  `cor_post3msdata50` double NOT NULL,
  `cor_post3msdata53` double NOT NULL,
  `amt_post1msdata52` double NOT NULL,
  `amt_post1msdata50` double NOT NULL,
  `amt_post1msdata53` double NOT NULL,
  `amt_post2msdata52` double NOT NULL,
  `amt_post2msdata50` double NOT NULL,
  `amt_post2msdata53` double NOT NULL,
  `amt_post3msdata52` double NOT NULL,
  `amt_post3msdata50` double NOT NULL,
  `amt_post3msdata53` double NOT NULL,
  `bcor_post1msdata53` double NOT NULL,
  `bcor_post2msdata53` double NOT NULL,
  `bcor_post3msdata53` double NOT NULL,
  `vol_post` double NOT NULL,
  `post1RBC53Cr` double NOT NULL,
  `post2RBC53Cr` double NOT NULL,
  `post3RBC53Cr` double NOT NULL,
  `postmeanRBC53Cr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baseline_blood`
--
ALTER TABLE `baseline_blood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`);

--
-- Indexes for table `baseline_preview`
--
ALTER TABLE `baseline_preview`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`);

--
-- Indexes for table `final_preview`
--
ALTER TABLE `final_preview`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`);

--
-- Indexes for table `injected`
--
ALTER TABLE `injected`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`) USING BTREE;

--
-- Indexes for table `injected_preview`
--
ALTER TABLE `injected_preview`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`) USING BTREE;

--
-- Indexes for table `inverse_matrix`
--
ALTER TABLE `inverse_matrix`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`);

--
-- Indexes for table `matrix`
--
ALTER TABLE `matrix`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`) USING BTREE;

--
-- Indexes for table `post_label`
--
ALTER TABLE `post_label`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`) USING BTREE;

--
-- Indexes for table `post_preview`
--
ALTER TABLE `post_preview`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PID` (`PID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baseline_blood`
--
ALTER TABLE `baseline_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baseline_preview`
--
ALTER TABLE `baseline_preview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final_preview`
--
ALTER TABLE `final_preview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `injected`
--
ALTER TABLE `injected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `injected_preview`
--
ALTER TABLE `injected_preview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inverse_matrix`
--
ALTER TABLE `inverse_matrix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matrix`
--
ALTER TABLE `matrix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_label`
--
ALTER TABLE `post_label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_preview`
--
ALTER TABLE `post_preview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
