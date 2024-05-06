-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 05:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phamasoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `loan_fee_payment`
--

CREATE TABLE `loan_fee_payment` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `paid_fee` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_transaction`
--

CREATE TABLE `tbl_account_transaction` (
  `trans_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `account_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_account_transaction`
--

INSERT INTO `tbl_account_transaction` (`trans_id`, `comp_id`, `account_name`) VALUES
(139, 39, 'cash'),
(143, 39, 'm-pesa'),
(144, 39, 'TIGO PESA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_type`
--

CREATE TABLE `tbl_account_type` (
  `account_id` int(11) NOT NULL,
  `account_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account_type`
--

INSERT INTO `tbl_account_type` (`account_id`, `account_name`) VALUES
(1, 'LOAN_ACCOUNT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ac_company`
--

CREATE TABLE `tbl_ac_company` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `comp_balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ac_company`
--

INSERT INTO `tbl_ac_company` (`id`, `comp_id`, `trans_id`, `comp_balance`) VALUES
(71, 39, 118, 500000),
(72, 39, 133, 5609281),
(73, 39, 135, 1689),
(74, 39, 134, 80509),
(75, 39, 138, 80),
(76, 39, 139, 1100),
(77, 39, 143, 500),
(78, 39, 144, 750);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_privillage`
--

CREATE TABLE `tbl_admin_privillage` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `privillage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attachment`
--

CREATE TABLE `tbl_attachment` (
  `attach_id` int(11) NOT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `cont_attachment` text DEFAULT NULL,
  `oficer` text DEFAULT NULL,
  `phone_oficer` text DEFAULT NULL,
  `region_oficer` text DEFAULT NULL,
  `district_oficer` text DEFAULT NULL,
  `ward_oficer` text DEFAULT NULL,
  `street_oficer` text DEFAULT NULL,
  `oficer_position` text DEFAULT NULL,
  `attach_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blanch`
--

CREATE TABLE `tbl_blanch` (
  `blanch_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `blanch_name` text DEFAULT NULL,
  `blanch_no` text DEFAULT NULL,
  `blanch_amount` int(11) DEFAULT NULL,
  `balanch_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blanch`
--

INSERT INTO `tbl_blanch` (`blanch_id`, `comp_id`, `region_id`, `blanch_name`, `blanch_no`, `blanch_amount`, `balanch_date`) VALUES
(248, 39, 1, 'test', '0753871034', NULL, '2024-04-30 20:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blanch_account`
--

CREATE TABLE `tbl_blanch_account` (
  `ac_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `receive_trans_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `blanch_capital` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blanch_account`
--

INSERT INTO `tbl_blanch_account` (`ac_id`, `comp_id`, `receive_trans_id`, `blanch_id`, `blanch_capital`) VALUES
(223, 39, 118, 248, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blanch_capital_interest`
--

CREATE TABLE `tbl_blanch_capital_interest` (
  `int_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `int_status` text DEFAULT NULL,
  `capital_interest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blanch_capital_principal`
--

CREATE TABLE `tbl_blanch_capital_principal` (
  `princ_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `princ_status` text DEFAULT NULL,
  `principal_balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_capital`
--

CREATE TABLE `tbl_capital` (
  `capital_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `share_id` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `recept` text DEFAULT NULL,
  `chaque_no` text DEFAULT NULL,
  `pay_method` text NOT NULL,
  `capital_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_capital`
--

INSERT INTO `tbl_capital` (`capital_id`, `comp_id`, `trans_id`, `share_id`, `amount`, `recept`, `chaque_no`, `pay_method`, `capital_day`) VALUES
(263, 39, NULL, 1, '800000', NULL, NULL, '139', '2024-05-05 07:06:03'),
(264, 39, NULL, 2, '200000', NULL, NULL, '139', '2024-05-05 07:41:50'),
(265, 39, NULL, 2, '100000', NULL, NULL, '139', '2024-05-05 13:29:03'),
(266, 39, NULL, 3, '500000', NULL, NULL, '143', '2024-05-05 13:29:46'),
(267, 39, NULL, 3, '750000', NULL, NULL, '144', '2024-05-05 13:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cash_inhand`
--

CREATE TABLE `tbl_cash_inhand` (
  `hand_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `cash_amount` int(11) DEFAULT NULL,
  `cash_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chargers`
--

CREATE TABLE `tbl_chargers` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `trans_id` varchar(11) DEFAULT NULL,
  `with_chargers` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collelateral`
--

CREATE TABLE `tbl_collelateral` (
  `col_id` int(11) NOT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file_name` text DEFAULT NULL,
  `co_condition` text DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `col_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `comp_id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `comp_name` text DEFAULT NULL,
  `comp_phone` text DEFAULT NULL,
  `adress` text DEFAULT NULL,
  `comp_number` text DEFAULT NULL,
  `comp_email` text DEFAULT NULL,
  `comp_logo` text DEFAULT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'admin',
  `password` text DEFAULT NULL,
  `comp_status` varchar(11) NOT NULL DEFAULT 'open',
  `code` text DEFAULT NULL,
  `sms_status` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`comp_id`, `region_id`, `comp_name`, `comp_phone`, `adress`, `comp_number`, `comp_email`, `comp_logo`, `role`, `password`, `comp_status`, `code`, `sms_status`, `created`) VALUES
(39, 2, 'SAMSTAR COMPANY LIMITED ', '0753871034', 'P.O.BOX 36 Mbeya ', '121416', 'samweldamian12@gmail.com', 'round_one.jpg', 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'open', NULL, 'YES', '2024-04-17 14:00:44'),
(135, 21, ' MICROFINANCE LIMITED', '0767224747', 'MOROGORO', '123456', 'bajamatinde19@gmail.com', 'male1.jpeg', 'admin', 'b930abe9a091776e3bcdfe6fde8e3c6d063885b1', 'open', NULL, 'YES', '2024-04-17 14:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `customer_code` text DEFAULT NULL,
  `f_name` text DEFAULT NULL,
  `m_name` text DEFAULT NULL,
  `l_name` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `date_birth` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `district` text DEFAULT NULL,
  `ward` text DEFAULT NULL,
  `street` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `customer_status` varchar(11) NOT NULL DEFAULT 'open',
  `member_status` text DEFAULT NULL,
  `reg_date` text DEFAULT NULL,
  `otp` varchar(20) DEFAULT NULL,
  `customer_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `comp_id`, `blanch_id`, `empl_id`, `customer_code`, `f_name`, `m_name`, `l_name`, `gender`, `date_birth`, `phone_no`, `region_id`, `district`, `ward`, `street`, `age`, `customer_status`, `member_status`, `reg_date`, `otp`, `customer_day`) VALUES
(15531, 39, 248, 463, 'C20240515531', 'james', 'joseph', 'mwakalinga', 'male', '2024-04-05', '25507498889', 2, 'kjj', 'jjj', 'jjj', '0', 'open', NULL, '2024-05-01', NULL, '2024-04-30 22:21:23'),
(15532, 39, 248, 462, 'C20240515532', 'james', 'j', 'mwakalinga', 'male', '2024-05-25', '2557898789988', 1, 'iii', 'jji', 'jjjiuiuui', '0', 'pending', NULL, '2024-05-01', NULL, '2024-04-30 23:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_report`
--

CREATE TABLE `tbl_customer_report` (
  `rep_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `recevable_amount` int(11) DEFAULT NULL,
  `pending_amount` int(11) DEFAULT NULL,
  `penart_amount` int(11) DEFAULT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `rep_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deducted_fee`
--

CREATE TABLE `tbl_deducted_fee` (
  `deducted_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `deducted_balance` int(11) DEFAULT NULL,
  `deducted_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deduction`
--

CREATE TABLE `tbl_deduction` (
  `deduction_id` int(11) NOT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ded_status` varchar(11) NOT NULL DEFAULT 'open',
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deduction_data`
--

CREATE TABLE `tbl_deduction_data` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `fee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `deduct_balance` int(11) DEFAULT NULL,
  `date_deduct` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deduction_day`
--

CREATE TABLE `tbl_deduction_day` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `deduct_balance` int(11) DEFAULT NULL,
  `date_deduct` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_depost`
--

CREATE TABLE `tbl_depost` (
  `dep_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `empl_username` text DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `depost` int(11) DEFAULT NULL,
  `sche_interest` int(11) DEFAULT NULL,
  `sche_principal` int(11) DEFAULT NULL,
  `depost_method` text DEFAULT NULL,
  `dep_status` text DEFAULT NULL,
  `depost_day` date DEFAULT NULL,
  `double_amont` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `deposit_day` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_depost_out`
--

CREATE TABLE `tbl_depost_out` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `customer_name` text DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_depost_recod`
--

CREATE TABLE `tbl_depost_recod` (
  `rec_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `depost_amount` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `rec_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_double`
--

CREATE TABLE `tbl_double` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `double_amount` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `double_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_send`
--

CREATE TABLE `tbl_email_send` (
  `email_id` int(11) NOT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `send_email` text DEFAULT NULL,
  `massage` text DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `empl_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `empl_name` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `empl_sex` text DEFAULT NULL,
  `empl_no` text DEFAULT NULL,
  `empl_email` text DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `pays` text DEFAULT NULL,
  `pay_nssf` text DEFAULT NULL,
  `bank_account` text DEFAULT NULL,
  `account_no` text DEFAULT NULL,
  `empl_status` varchar(11) NOT NULL DEFAULT 'open',
  `ac_status` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `empl_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`empl_id`, `comp_id`, `blanch_id`, `empl_name`, `username`, `empl_sex`, `empl_no`, `empl_email`, `position_id`, `salary`, `pays`, `pay_nssf`, `bank_account`, `account_no`, `empl_status`, `ac_status`, `password`, `empl_day`) VALUES
(462, 39, 248, 'demo', 'demo', 'male', '0712345678', 'jamesmtungi2013@gmail.com', 1, '500000', 'no', 'no', 'NMB', '1233456', 'open', 'empl', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2024-04-30 20:27:13'),
(463, 39, 248, 'test', 'tests', 'male', '123456', 'jamesmtungi2013@gmail.com', 1, '1500000', 'yes', 'no', 'CRDB', '000', 'open', 'empl', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2024-04-30 21:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_empl_priv`
--

CREATE TABLE `tbl_empl_priv` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `privillage` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_empl_priv`
--

INSERT INTO `tbl_empl_priv` (`id`, `comp_id`, `empl_id`, `privillage`) VALUES
(314, 39, 462, 'customer'),
(315, 39, 462, 'expenses'),
(316, 39, 462, 'loan'),
(317, 39, 462, 'teller'),
(318, 39, 462, 'report');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expenses`
--

CREATE TABLE `tbl_expenses` (
  `ex_id` int(11) NOT NULL,
  `ex_name` text DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee_category`
--

CREATE TABLE `tbl_fee_category` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `fee_category` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fee_category`
--

INSERT INTO `tbl_fee_category` (`id`, `comp_id`, `fee_category`) VALUES
(35, 39, 'GENERAL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee_record`
--

CREATE TABLE `tbl_fee_record` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `fee_amount` int(11) DEFAULT NULL,
  `fee_paid` int(11) DEFAULT NULL,
  `date_fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee_type`
--

CREATE TABLE `tbl_fee_type` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fee_type`
--

INSERT INTO `tbl_fee_type` (`id`, `comp_id`, `type`) VALUES
(29, 39, 'MONEY VALUE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee_value`
--

CREATE TABLE `tbl_fee_value` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `fee_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `fee_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_float_branch`
--

CREATE TABLE `tbl_float_branch` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `from_blanch` int(11) DEFAULT NULL,
  `from_blanch_account` int(11) DEFAULT NULL,
  `from_amount` int(11) DEFAULT NULL,
  `to_branch` int(11) DEFAULT NULL,
  `to_branch_account` int(11) DEFAULT NULL,
  `to_amount` int(11) DEFAULT NULL,
  `charger_fee` int(11) DEFAULT NULL,
  `date_trans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_formular_setting`
--

CREATE TABLE `tbl_formular_setting` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `formular_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_formular_setting`
--

INSERT INTO `tbl_formular_setting` (`id`, `comp_id`, `formular_name`) VALUES
(100, 39, 'SIMPLE'),
(101, 39, 'FLAT RATE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_froat_blanch_comp`
--

CREATE TABLE `tbl_froat_blanch_comp` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `from_blanch_id` int(11) DEFAULT NULL,
  `from_blanch_account` int(11) DEFAULT NULL,
  `to_comp_account` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `charger` int(11) DEFAULT NULL,
  `date_transfor` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `group_id` int(11) NOT NULL,
  `group_name` text DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_member`
--

CREATE TABLE `tbl_group_member` (
  `member_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `member_name` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `date_birth` text DEFAULT NULL,
  `martial_status` text DEFAULT NULL,
  `member_phone` text DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `district` text DEFAULT NULL,
  `ward` text DEFAULT NULL,
  `street` text DEFAULT NULL,
  `nature_setlement` text DEFAULT NULL,
  `busines_name` text DEFAULT NULL,
  `busines_place` text DEFAULT NULL,
  `member_position` text DEFAULT NULL,
  `member_status` varchar(11) NOT NULL DEFAULT 'open',
  `date_reg` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income`
--

CREATE TABLE `tbl_income` (
  `inc_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `inc_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `leave_id` int(11) NOT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `stat_date` text DEFAULT NULL,
  `end_date` text DEFAULT NULL,
  `remaks` text DEFAULT NULL,
  `leave_status` varchar(11) NOT NULL DEFAULT 'open',
  `leave_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loans`
--

CREATE TABLE `tbl_loans` (
  `loan_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `loan_code` text DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `how_loan` int(11) DEFAULT NULL,
  `day` text DEFAULT NULL,
  `session` text DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `loan_status` varchar(50) NOT NULL DEFAULT 'open',
  `rate` text DEFAULT NULL,
  `method` text DEFAULT NULL,
  `penat_status` text DEFAULT NULL,
  `fee_status` text DEFAULT NULL,
  `loan_aprove` int(11) DEFAULT NULL,
  `loan_int` int(11) DEFAULT NULL,
  `with_amount` int(11) DEFAULT NULL,
  `restration` int(11) DEFAULT NULL,
  `region_id` text DEFAULT NULL,
  `disburse_day` date DEFAULT NULL,
  `dis_date` text DEFAULT NULL,
  `return_date` text DEFAULT NULL,
  `date_show` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `renew_loan` int(11) DEFAULT NULL,
  `dep_status` varchar(11) NOT NULL DEFAULT 'open',
  `loan_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan_category`
--

CREATE TABLE `tbl_loan_category` (
  `category_id` int(11) NOT NULL,
  `loan_name` text DEFAULT NULL,
  `loan_price` text DEFAULT NULL,
  `loan_perday` text DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `fee_category_type` text DEFAULT NULL,
  `fee_value` int(11) DEFAULT NULL,
  `interest_formular` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_loan_category`
--

INSERT INTO `tbl_loan_category` (`category_id`, `loan_name`, `loan_price`, `loan_perday`, `comp_id`, `fee_category_type`, `fee_value`, `interest_formular`) VALUES
(248, 'wajasiamali loan', '50000', '500000', 39, NULL, NULL, '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan_fee`
--

CREATE TABLE `tbl_loan_fee` (
  `fee_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `fee_interest` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_loan_fee`
--

INSERT INTO `tbl_loan_fee` (`fee_id`, `comp_id`, `description`, `fee_interest`) VALUES
(120, 39, 'fomu', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan_pending`
--

CREATE TABLE `tbl_loan_pending` (
  `pend_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `total_loan` text DEFAULT NULL,
  `return_day` text DEFAULT NULL,
  `return_total` text DEFAULT NULL,
  `pend_date` date NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `action_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `full_name` text DEFAULT NULL,
  `member_no` text DEFAULT NULL,
  `adress` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_miamala`
--

CREATE TABLE `tbl_miamala` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `provider` text DEFAULT NULL,
  `agent` text DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `ref_no` text DEFAULT NULL,
  `time` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'open',
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_allownce`
--

CREATE TABLE `tbl_new_allownce` (
  `alow_id` int(11) NOT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `new_amount` text DEFAULT NULL,
  `remaks_allow` text DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_non_deduct_day`
--

CREATE TABLE `tbl_non_deduct_day` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `non_deduct_balance` int(11) DEFAULT NULL,
  `non_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outstand`
--

CREATE TABLE `tbl_outstand` (
  `out_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `loan_stat_date` date DEFAULT NULL,
  `loan_end_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outstand_loan`
--

CREATE TABLE `tbl_outstand_loan` (
  `outstand_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `remain_amount` int(11) DEFAULT NULL,
  `paid_amount` int(11) DEFAULT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `out_status` varchar(11) NOT NULL DEFAULT 'open',
  `outstand_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outsystem_day`
--

CREATE TABLE `tbl_outsystem_day` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_out_system`
--

CREATE TABLE `tbl_out_system` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `out_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay`
--

CREATE TABLE `tbl_pay` (
  `pay_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `fee_id` int(11) DEFAULT NULL,
  `emply` text DEFAULT NULL,
  `fee_desc` text DEFAULT NULL,
  `fee_percentage` text DEFAULT NULL,
  `symbol` text DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `depost` text DEFAULT NULL,
  `withdrow` text DEFAULT NULL,
  `balance` text DEFAULT NULL,
  `rem_debt` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `pay_status` text DEFAULT NULL,
  `p_method` text DEFAULT NULL,
  `stat` text DEFAULT NULL,
  `interest_loan` text DEFAULT NULL,
  `date_pay` date NOT NULL,
  `auto_date` date DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `date_data` date DEFAULT NULL,
  `p_today` date DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `pay_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_method`
--

CREATE TABLE `tbl_payment_method` (
  `payment_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `method` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay_penart`
--

CREATE TABLE `tbl_pay_penart` (
  `pen_id` int(11) NOT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `inc_id` int(11) DEFAULT NULL,
  `penart_paid` int(11) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `penart_date` text DEFAULT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penart_category`
--

CREATE TABLE `tbl_penart_category` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `penart_category` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penart_check`
--

CREATE TABLE `tbl_penart_check` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `loan_id` int(11) NOT NULL,
  `status_check` varchar(20) NOT NULL DEFAULT 'close',
  `date_check` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penart_leason`
--

CREATE TABLE `tbl_penart_leason` (
  `reason_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `reason_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penart_value`
--

CREATE TABLE `tbl_penart_value` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `penart_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penat`
--

CREATE TABLE `tbl_penat` (
  `penalt_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `action_penart` text DEFAULT NULL,
  `penart` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pending_total`
--

CREATE TABLE `tbl_pending_total` (
  `total_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `total_pend` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `position_id` int(11) NOT NULL,
  `position` text DEFAULT NULL,
  `position_status` varchar(11) NOT NULL DEFAULT 'open',
  `position_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`position_id`, `position`, `position_status`, `position_day`) VALUES
(1, 'BRANCH MANAGER', 'open', '2024-04-30 21:06:00'),
(2, 'TELLER', 'open', '2024-04-30 21:06:00'),
(6, 'LOAN OFFICER', 'open', '2024-04-30 21:06:00'),
(17, 'ACCOUNTANT', 'open', '2024-04-30 21:06:00'),
(20, 'HUMAN RESOURCE', 'open', '2024-04-30 21:06:00'),
(21, 'GENERAL MANAGER', 'open', '2024-04-30 21:06:00'),
(22, 'ADMIN', 'open', '2024-04-30 21:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prepaid`
--

CREATE TABLE `tbl_prepaid` (
  `prepaid_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `prepaid_amount` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `prepaid_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prev_lecod`
--

CREATE TABLE `tbl_prev_lecod` (
  `prev_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `total_loan` int(11) DEFAULT NULL,
  `double_dep` int(11) DEFAULT NULL,
  `total_int` text DEFAULT NULL,
  `depost` int(11) DEFAULT NULL,
  `withdraw` int(11) DEFAULT NULL,
  `lecod_day` date NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `time_rec` text DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `loan_aprov` int(11) DEFAULT NULL,
  `restrations` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `with_trans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_principal_int_transfor`
--

CREATE TABLE `tbl_principal_int_transfor` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `from_payment` text DEFAULT NULL,
  `loan_type` text DEFAULT NULL,
  `from_account` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `date_trans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privellage`
--

CREATE TABLE `tbl_privellage` (
  `priv_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receive_deducted`
--

CREATE TABLE `tbl_receive_deducted` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `deducted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receive_non_deducted`
--

CREATE TABLE `tbl_receive_non_deducted` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `non_balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receive_outsystem`
--

CREATE TABLE `tbl_receive_outsystem` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `amount_receive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receive_out_date`
--

CREATE TABLE `tbl_receive_out_date` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `total_balance` int(11) DEFAULT NULL,
  `date_out` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receive_sms`
--

CREATE TABLE `tbl_receive_sms` (
  `id` int(11) NOT NULL,
  `customer_number` int(11) NOT NULL,
  `sms_description` text NOT NULL,
  `sms_status` varchar(11) NOT NULL DEFAULT '0',
  `sms_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receve`
--

CREATE TABLE `tbl_receve` (
  `receved_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `inc_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `empl` text DEFAULT NULL,
  `receve_amount` text DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `receve_day` date DEFAULT NULL,
  `receve_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receve_outstand`
--

CREATE TABLE `tbl_receve_outstand` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `out_balance` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region`
--

CREATE TABLE `tbl_region` (
  `region_id` int(11) NOT NULL,
  `region_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_region`
--

INSERT INTO `tbl_region` (`region_id`, `region_name`) VALUES
(1, 'Mbeya'),
(2, 'Mwanza'),
(3, 'Chato'),
(4, 'Geita'),
(5, 'Dar es salaam'),
(6, 'Ruvuma'),
(7, 'Unguja South'),
(8, 'Unguja North'),
(9, 'Tanga'),
(10, 'Tabora'),
(11, 'Songwe'),
(12, 'Singida'),
(13, 'Simiyu '),
(14, 'Shinyanga'),
(15, 'Rukwa'),
(16, 'Pwani'),
(17, 'Pemba South'),
(18, 'Pemba North'),
(19, 'Njombe'),
(20, 'Mtwara'),
(21, 'Morogoro'),
(22, 'Mjini Magharibi'),
(23, 'Mara'),
(24, 'Manyara'),
(25, 'Lindi'),
(26, 'Kilimanjaro'),
(27, 'Kigoma'),
(28, 'Katavi'),
(29, 'Kagera'),
(30, 'Iringa'),
(31, 'Dodoma'),
(32, 'Arusha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reminder`
--

CREATE TABLE `tbl_reminder` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sms_type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_renew`
--

CREATE TABLE `tbl_renew` (
  `renew_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `renew_amount` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `status_renew` varchar(11) NOT NULL DEFAULT 'open',
  `method_renew` int(11) DEFAULT NULL,
  `date_renew` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_exp`
--

CREATE TABLE `tbl_request_exp` (
  `req_id` int(11) NOT NULL,
  `ex_id` int(11) DEFAULT NULL,
  `deduct_type` text DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `req_description` text DEFAULT NULL,
  `req_comment` text DEFAULT NULL,
  `req_amount` text DEFAULT NULL,
  `req_date` date DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `req_status` varchar(11) NOT NULL DEFAULT 'open',
  `created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riba`
--

CREATE TABLE `tbl_riba` (
  `riba_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `riba` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_share_holder`
--

CREATE TABLE `tbl_share_holder` (
  `share_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `share_name` text DEFAULT NULL,
  `share_mobile` text DEFAULT NULL,
  `share_email` text DEFAULT NULL,
  `share_sex` text DEFAULT NULL,
  `share_dob` text DEFAULT NULL,
  `share_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_share_holder`
--

INSERT INTO `tbl_share_holder` (`share_id`, `comp_id`, `share_name`, `share_mobile`, `share_email`, `share_sex`, `share_dob`, `share_day`) VALUES
(1, 39, 'test', '0712345678', 'jamesmtungi2013@gmail.com', 'male', '2024-05-10', '2024-04-30 22:15:43'),
(2, 39, 'james', '07123455', NULL, NULL, NULL, '2024-05-01 20:45:20'),
(3, 39, 'jonson james joseph', '0712345678', NULL, NULL, NULL, '2024-05-05 06:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_count`
--

CREATE TABLE `tbl_sms_count` (
  `sms_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `sms_number` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sponser`
--

CREATE TABLE `tbl_sponser` (
  `sp_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `sp_region` int(11) DEFAULT NULL,
  `sp_name` text DEFAULT NULL,
  `sp_mname` text DEFAULT NULL,
  `sp_lname` text DEFAULT NULL,
  `sp_phone_no` text DEFAULT NULL,
  `sp_nation` text DEFAULT NULL,
  `nature` text DEFAULT NULL,
  `sp_relation` text DEFAULT NULL,
  `sp_district` text DEFAULT NULL,
  `sp_ward` text DEFAULT NULL,
  `sp_street` text DEFAULT NULL,
  `sp_bussines_area` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stoo`
--

CREATE TABLE `tbl_stoo` (
  `stoo_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `stoo_amount` int(11) DEFAULT NULL,
  `from_account` int(11) DEFAULT NULL,
  `stoo_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store_out`
--

CREATE TABLE `tbl_store_out` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `out_amount` int(11) DEFAULT NULL,
  `date_out` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store_penalt`
--

CREATE TABLE `tbl_store_penalt` (
  `store_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total_penart` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `penart_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_customer`
--

CREATE TABLE `tbl_sub_customer` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `famous_area` text DEFAULT NULL,
  `martial_status` text DEFAULT NULL,
  `work_status` text DEFAULT NULL,
  `id_type` text DEFAULT NULL,
  `natinal_identity` text DEFAULT NULL,
  `bussiness_type` text DEFAULT NULL,
  `number_dependents` text DEFAULT NULL,
  `place_imployment` text DEFAULT NULL,
  `month_income` text DEFAULT NULL,
  `passport` text DEFAULT NULL,
  `signature` text DEFAULT NULL,
  `code` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sub_customer`
--

INSERT INTO `tbl_sub_customer` (`id`, `customer_id`, `account_id`, `famous_area`, `martial_status`, `work_status`, `id_type`, `natinal_identity`, `bussiness_type`, `number_dependents`, `place_imployment`, `month_income`, `passport`, `signature`, `code`) VALUES
(1, NULL, 1, 'KKK', 'Married', 'Government Employee', 'voter ID', '8899', 'KKKI', '30000', 'jjj', '9000000', NULL, NULL, NULL),
(2, 15532, 1, 'nnj', 'Married', 'Government Employee', 'voter ID', 'hhh', 'jjj', '7', 'jjj', '800000', 'assets/upload/663182d529cd4.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_super_admin`
--

CREATE TABLE `tbl_super_admin` (
  `admin_id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_super_admin`
--

INSERT INTO `tbl_super_admin` (`admin_id`, `email`, `password`) VALUES
(2, 'jamesmtungi2013@gmail.com', '3aa8a823bfe6302749baed016d22156cdf1e310e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL,
  `date` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobno` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test_date`
--

CREATE TABLE `tbl_test_date` (
  `id` int(11) NOT NULL,
  `loan_id` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date_status` text DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_total_fee`
--

CREATE TABLE `tbl_total_fee` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `total_fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfor`
--

CREATE TABLE `tbl_transfor` (
  `trans_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `from_trans_id` int(11) DEFAULT NULL,
  `to_trans_id` int(11) DEFAULT NULL,
  `charger` int(11) DEFAULT NULL,
  `blanch_amount` text DEFAULT NULL,
  `trans_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transfor`
--

INSERT INTO `tbl_transfor` (`trans_id`, `comp_id`, `blanch_id`, `from_trans_id`, `to_trans_id`, `charger`, `blanch_amount`, `trans_day`) VALUES
(1, 39, 248, 118, 118, 0, '500000', '2024-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfor_blanch_blanch`
--

CREATE TABLE `tbl_transfor_blanch_blanch` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `deduct_type` text DEFAULT NULL,
  `from_blanch_id` int(11) DEFAULT NULL,
  `from_mount` int(11) DEFAULT NULL,
  `to_blanch_id` int(11) DEFAULT NULL,
  `to_blach_account_id` int(11) DEFAULT NULL,
  `trans_fee` int(11) DEFAULT NULL,
  `user_trans` text DEFAULT NULL,
  `date_transfor` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfor_blanch_company`
--

CREATE TABLE `tbl_transfor_blanch_company` (
  `id` int(11) NOT NULL,
  `deduct_type` text DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `from_blanch` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `to_comp_account` int(11) DEFAULT NULL,
  `trans_fee` int(11) DEFAULT NULL,
  `trans_user` text DEFAULT NULL,
  `trans_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfor_stoo`
--

CREATE TABLE `tbl_transfor_stoo` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `amount_trans` int(11) DEFAULT NULL,
  `trans_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trans_out`
--

CREATE TABLE `tbl_trans_out` (
  `id` int(11) NOT NULL,
  `trans_type` text DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `blanch_id` int(11) DEFAULT NULL,
  `empl_id` int(11) DEFAULT NULL,
  `from_trans_id` int(11) DEFAULT NULL,
  `to_trans_id` int(11) DEFAULT NULL,
  `amount_trans` int(11) DEFAULT NULL,
  `trans_fee` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan_fee_payment`
--
ALTER TABLE `loan_fee_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_account_transaction`
--
ALTER TABLE `tbl_account_transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `tbl_account_type`
--
ALTER TABLE `tbl_account_type`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tbl_ac_company`
--
ALTER TABLE `tbl_ac_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_privillage`
--
ALTER TABLE `tbl_admin_privillage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attachment`
--
ALTER TABLE `tbl_attachment`
  ADD PRIMARY KEY (`attach_id`);

--
-- Indexes for table `tbl_blanch`
--
ALTER TABLE `tbl_blanch`
  ADD PRIMARY KEY (`blanch_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_blanch_account`
--
ALTER TABLE `tbl_blanch_account`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `tbl_blanch_capital_interest`
--
ALTER TABLE `tbl_blanch_capital_interest`
  ADD PRIMARY KEY (`int_id`);

--
-- Indexes for table `tbl_blanch_capital_principal`
--
ALTER TABLE `tbl_blanch_capital_principal`
  ADD PRIMARY KEY (`princ_id`);

--
-- Indexes for table `tbl_capital`
--
ALTER TABLE `tbl_capital`
  ADD PRIMARY KEY (`capital_id`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `transfer_id` (`trans_id`);

--
-- Indexes for table `tbl_cash_inhand`
--
ALTER TABLE `tbl_cash_inhand`
  ADD PRIMARY KEY (`hand_id`);

--
-- Indexes for table `tbl_chargers`
--
ALTER TABLE `tbl_chargers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_collelateral`
--
ALTER TABLE `tbl_collelateral`
  ADD PRIMARY KEY (`col_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `blanch_id` (`blanch_id`);

--
-- Indexes for table `tbl_customer_report`
--
ALTER TABLE `tbl_customer_report`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `tbl_deducted_fee`
--
ALTER TABLE `tbl_deducted_fee`
  ADD PRIMARY KEY (`deducted_id`);

--
-- Indexes for table `tbl_deduction`
--
ALTER TABLE `tbl_deduction`
  ADD PRIMARY KEY (`deduction_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_deduction_data`
--
ALTER TABLE `tbl_deduction_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deduction_day`
--
ALTER TABLE `tbl_deduction_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_depost`
--
ALTER TABLE `tbl_depost`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `tbl_depost_out`
--
ALTER TABLE `tbl_depost_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_depost_recod`
--
ALTER TABLE `tbl_depost_recod`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `tbl_double`
--
ALTER TABLE `tbl_double`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_send`
--
ALTER TABLE `tbl_email_send`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`empl_id`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `blanch_id` (`blanch_id`);

--
-- Indexes for table `tbl_empl_priv`
--
ALTER TABLE `tbl_empl_priv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `tbl_fee_category`
--
ALTER TABLE `tbl_fee_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fee_record`
--
ALTER TABLE `tbl_fee_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fee_type`
--
ALTER TABLE `tbl_fee_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fee_value`
--
ALTER TABLE `tbl_fee_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_float_branch`
--
ALTER TABLE `tbl_float_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_formular_setting`
--
ALTER TABLE `tbl_formular_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_froat_blanch_comp`
--
ALTER TABLE `tbl_froat_blanch_comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `tbl_group_member`
--
ALTER TABLE `tbl_group_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_income`
--
ALTER TABLE `tbl_income`
  ADD PRIMARY KEY (`inc_id`);

--
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_loan_category`
--
ALTER TABLE `tbl_loan_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_loan_fee`
--
ALTER TABLE `tbl_loan_fee`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `tbl_loan_pending`
--
ALTER TABLE `tbl_loan_pending`
  ADD PRIMARY KEY (`pend_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_miamala`
--
ALTER TABLE `tbl_miamala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_new_allownce`
--
ALTER TABLE `tbl_new_allownce`
  ADD PRIMARY KEY (`alow_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_non_deduct_day`
--
ALTER TABLE `tbl_non_deduct_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_outstand`
--
ALTER TABLE `tbl_outstand`
  ADD PRIMARY KEY (`out_id`);

--
-- Indexes for table `tbl_outstand_loan`
--
ALTER TABLE `tbl_outstand_loan`
  ADD PRIMARY KEY (`outstand_id`);

--
-- Indexes for table `tbl_outsystem_day`
--
ALTER TABLE `tbl_outsystem_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_out_system`
--
ALTER TABLE `tbl_out_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pay`
--
ALTER TABLE `tbl_pay`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_pay_penart`
--
ALTER TABLE `tbl_pay_penart`
  ADD PRIMARY KEY (`pen_id`);

--
-- Indexes for table `tbl_penart_category`
--
ALTER TABLE `tbl_penart_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penart_check`
--
ALTER TABLE `tbl_penart_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penart_leason`
--
ALTER TABLE `tbl_penart_leason`
  ADD PRIMARY KEY (`reason_id`);

--
-- Indexes for table `tbl_penart_value`
--
ALTER TABLE `tbl_penart_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penat`
--
ALTER TABLE `tbl_penat`
  ADD PRIMARY KEY (`penalt_id`);

--
-- Indexes for table `tbl_pending_total`
--
ALTER TABLE `tbl_pending_total`
  ADD PRIMARY KEY (`total_id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `tbl_prepaid`
--
ALTER TABLE `tbl_prepaid`
  ADD PRIMARY KEY (`prepaid_id`);

--
-- Indexes for table `tbl_prev_lecod`
--
ALTER TABLE `tbl_prev_lecod`
  ADD PRIMARY KEY (`prev_id`);

--
-- Indexes for table `tbl_principal_int_transfor`
--
ALTER TABLE `tbl_principal_int_transfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_privellage`
--
ALTER TABLE `tbl_privellage`
  ADD PRIMARY KEY (`priv_id`);

--
-- Indexes for table `tbl_receive_deducted`
--
ALTER TABLE `tbl_receive_deducted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_receive_non_deducted`
--
ALTER TABLE `tbl_receive_non_deducted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_receive_outsystem`
--
ALTER TABLE `tbl_receive_outsystem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_receive_out_date`
--
ALTER TABLE `tbl_receive_out_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_receve`
--
ALTER TABLE `tbl_receve`
  ADD PRIMARY KEY (`receved_id`);

--
-- Indexes for table `tbl_receve_outstand`
--
ALTER TABLE `tbl_receve_outstand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_region`
--
ALTER TABLE `tbl_region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `tbl_reminder`
--
ALTER TABLE `tbl_reminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_renew`
--
ALTER TABLE `tbl_renew`
  ADD PRIMARY KEY (`renew_id`);

--
-- Indexes for table `tbl_request_exp`
--
ALTER TABLE `tbl_request_exp`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `tbl_riba`
--
ALTER TABLE `tbl_riba`
  ADD PRIMARY KEY (`riba_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_share_holder`
--
ALTER TABLE `tbl_share_holder`
  ADD PRIMARY KEY (`share_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_sms_count`
--
ALTER TABLE `tbl_sms_count`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `tbl_sponser`
--
ALTER TABLE `tbl_sponser`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `tbl_stoo`
--
ALTER TABLE `tbl_stoo`
  ADD PRIMARY KEY (`stoo_id`);

--
-- Indexes for table `tbl_store_out`
--
ALTER TABLE `tbl_store_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_store_penalt`
--
ALTER TABLE `tbl_store_penalt`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `tbl_sub_customer`
--
ALTER TABLE `tbl_sub_customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tbl_super_admin`
--
ALTER TABLE `tbl_super_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test_date`
--
ALTER TABLE `tbl_test_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_total_fee`
--
ALTER TABLE `tbl_total_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transfor`
--
ALTER TABLE `tbl_transfor`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `tbl_transfor_blanch_blanch`
--
ALTER TABLE `tbl_transfor_blanch_blanch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transfor_blanch_company`
--
ALTER TABLE `tbl_transfor_blanch_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transfor_stoo`
--
ALTER TABLE `tbl_transfor_stoo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_trans_out`
--
ALTER TABLE `tbl_trans_out`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan_fee_payment`
--
ALTER TABLE `loan_fee_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_account_transaction`
--
ALTER TABLE `tbl_account_transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `tbl_account_type`
--
ALTER TABLE `tbl_account_type`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ac_company`
--
ALTER TABLE `tbl_ac_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_admin_privillage`
--
ALTER TABLE `tbl_admin_privillage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_attachment`
--
ALTER TABLE `tbl_attachment`
  MODIFY `attach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40851;

--
-- AUTO_INCREMENT for table `tbl_blanch`
--
ALTER TABLE `tbl_blanch`
  MODIFY `blanch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `tbl_blanch_account`
--
ALTER TABLE `tbl_blanch_account`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `tbl_blanch_capital_interest`
--
ALTER TABLE `tbl_blanch_capital_interest`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `tbl_blanch_capital_principal`
--
ALTER TABLE `tbl_blanch_capital_principal`
  MODIFY `princ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `tbl_capital`
--
ALTER TABLE `tbl_capital`
  MODIFY `capital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `tbl_cash_inhand`
--
ALTER TABLE `tbl_cash_inhand`
  MODIFY `hand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4109;

--
-- AUTO_INCREMENT for table `tbl_chargers`
--
ALTER TABLE `tbl_chargers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_collelateral`
--
ALTER TABLE `tbl_collelateral`
  MODIFY `col_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7450;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15533;

--
-- AUTO_INCREMENT for table `tbl_customer_report`
--
ALTER TABLE `tbl_customer_report`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=865216;

--
-- AUTO_INCREMENT for table `tbl_deducted_fee`
--
ALTER TABLE `tbl_deducted_fee`
  MODIFY `deducted_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37799;

--
-- AUTO_INCREMENT for table `tbl_deduction`
--
ALTER TABLE `tbl_deduction`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_deduction_data`
--
ALTER TABLE `tbl_deduction_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24184;

--
-- AUTO_INCREMENT for table `tbl_deduction_day`
--
ALTER TABLE `tbl_deduction_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2673;

--
-- AUTO_INCREMENT for table `tbl_depost`
--
ALTER TABLE `tbl_depost`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=616374;

--
-- AUTO_INCREMENT for table `tbl_depost_out`
--
ALTER TABLE `tbl_depost_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `tbl_depost_recod`
--
ALTER TABLE `tbl_depost_recod`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_double`
--
ALTER TABLE `tbl_double`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `tbl_email_send`
--
ALTER TABLE `tbl_email_send`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `empl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=464;

--
-- AUTO_INCREMENT for table `tbl_empl_priv`
--
ALTER TABLE `tbl_empl_priv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `tbl_fee_category`
--
ALTER TABLE `tbl_fee_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_fee_record`
--
ALTER TABLE `tbl_fee_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_fee_type`
--
ALTER TABLE `tbl_fee_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_fee_value`
--
ALTER TABLE `tbl_fee_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_float_branch`
--
ALTER TABLE `tbl_float_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `tbl_formular_setting`
--
ALTER TABLE `tbl_formular_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_froat_blanch_comp`
--
ALTER TABLE `tbl_froat_blanch_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=592;

--
-- AUTO_INCREMENT for table `tbl_group_member`
--
ALTER TABLE `tbl_group_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_income`
--
ALTER TABLE `tbl_income`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43942;

--
-- AUTO_INCREMENT for table `tbl_loan_category`
--
ALTER TABLE `tbl_loan_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `tbl_loan_fee`
--
ALTER TABLE `tbl_loan_fee`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tbl_loan_pending`
--
ALTER TABLE `tbl_loan_pending`
  MODIFY `pend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465168;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_miamala`
--
ALTER TABLE `tbl_miamala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1343;

--
-- AUTO_INCREMENT for table `tbl_new_allownce`
--
ALTER TABLE `tbl_new_allownce`
  MODIFY `alow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_non_deduct_day`
--
ALTER TABLE `tbl_non_deduct_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2672;

--
-- AUTO_INCREMENT for table `tbl_outstand`
--
ALTER TABLE `tbl_outstand`
  MODIFY `out_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42348;

--
-- AUTO_INCREMENT for table `tbl_outstand_loan`
--
ALTER TABLE `tbl_outstand_loan`
  MODIFY `outstand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_outsystem_day`
--
ALTER TABLE `tbl_outsystem_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_out_system`
--
ALTER TABLE `tbl_out_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pay`
--
ALTER TABLE `tbl_pay`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pay_penart`
--
ALTER TABLE `tbl_pay_penart`
  MODIFY `pen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penart_category`
--
ALTER TABLE `tbl_penart_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_penart_check`
--
ALTER TABLE `tbl_penart_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penart_leason`
--
ALTER TABLE `tbl_penart_leason`
  MODIFY `reason_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penart_value`
--
ALTER TABLE `tbl_penart_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penat`
--
ALTER TABLE `tbl_penat`
  MODIFY `penalt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pending_total`
--
ALTER TABLE `tbl_pending_total`
  MODIFY `total_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_prepaid`
--
ALTER TABLE `tbl_prepaid`
  MODIFY `prepaid_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_prev_lecod`
--
ALTER TABLE `tbl_prev_lecod`
  MODIFY `prev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_principal_int_transfor`
--
ALTER TABLE `tbl_principal_int_transfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_privellage`
--
ALTER TABLE `tbl_privellage`
  MODIFY `priv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_receive_deducted`
--
ALTER TABLE `tbl_receive_deducted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_receive_non_deducted`
--
ALTER TABLE `tbl_receive_non_deducted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_receive_outsystem`
--
ALTER TABLE `tbl_receive_outsystem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_receive_out_date`
--
ALTER TABLE `tbl_receive_out_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_receve`
--
ALTER TABLE `tbl_receve`
  MODIFY `receved_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_receve_outstand`
--
ALTER TABLE `tbl_receve_outstand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_region`
--
ALTER TABLE `tbl_region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_reminder`
--
ALTER TABLE `tbl_reminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_renew`
--
ALTER TABLE `tbl_renew`
  MODIFY `renew_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_request_exp`
--
ALTER TABLE `tbl_request_exp`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_riba`
--
ALTER TABLE `tbl_riba`
  MODIFY `riba_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_share_holder`
--
ALTER TABLE `tbl_share_holder`
  MODIFY `share_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sms_count`
--
ALTER TABLE `tbl_sms_count`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sponser`
--
ALTER TABLE `tbl_sponser`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stoo`
--
ALTER TABLE `tbl_stoo`
  MODIFY `stoo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_store_out`
--
ALTER TABLE `tbl_store_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_store_penalt`
--
ALTER TABLE `tbl_store_penalt`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sub_customer`
--
ALTER TABLE `tbl_sub_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_super_admin`
--
ALTER TABLE `tbl_super_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_test_date`
--
ALTER TABLE `tbl_test_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_total_fee`
--
ALTER TABLE `tbl_total_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transfor`
--
ALTER TABLE `tbl_transfor`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transfor_blanch_blanch`
--
ALTER TABLE `tbl_transfor_blanch_blanch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transfor_blanch_company`
--
ALTER TABLE `tbl_transfor_blanch_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transfor_stoo`
--
ALTER TABLE `tbl_transfor_stoo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_trans_out`
--
ALTER TABLE `tbl_trans_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_capital`
--
ALTER TABLE `tbl_capital`
  ADD CONSTRAINT `transfer_id` FOREIGN KEY (`trans_id`) REFERENCES `tbl_account_transaction` (`trans_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_deduction`
--
ALTER TABLE `tbl_deduction`
  ADD CONSTRAINT `tbl_deduction_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD CONSTRAINT `tbl_leave_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_loans`
--
ALTER TABLE `tbl_loans`
  ADD CONSTRAINT `tbl_loans_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_loan_category`
--
ALTER TABLE `tbl_loan_category`
  ADD CONSTRAINT `tbl_loan_category_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_new_allownce`
--
ALTER TABLE `tbl_new_allownce`
  ADD CONSTRAINT `tbl_new_allownce_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pay`
--
ALTER TABLE `tbl_pay`
  ADD CONSTRAINT `tbl_pay_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_riba`
--
ALTER TABLE `tbl_riba`
  ADD CONSTRAINT `tbl_riba_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_share_holder`
--
ALTER TABLE `tbl_share_holder`
  ADD CONSTRAINT `tbl_share_holder_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sponser`
--
ALTER TABLE `tbl_sponser`
  ADD CONSTRAINT `tbl_sponser_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
