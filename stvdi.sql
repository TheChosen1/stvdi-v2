-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 06:13 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stvdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `ISO2` varchar(2) NOT NULL DEFAULT '',
  `ISO3` varchar(3) NOT NULL DEFAULT '',
  `ISONo` smallint(3) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `region` varchar(100) DEFAULT NULL,
  `currency_name` varchar(100) DEFAULT NULL,
  `currency_code` varchar(3) DEFAULT NULL,
  `currency_symbol` varchar(20) NOT NULL,
  `phone_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `ISO2`, `ISO3`, `ISONo`, `name`, `region`, `currency_name`, `currency_code`, `currency_symbol`, `phone_code`) VALUES
(1, 'AD', 'AND', 20, 'Andorra', 'Europe', 'Euro', 'EUR', '', 0),
(2, 'AE', 'ARE', 784, 'United Arab Emirates', 'Middle East', 'UAE Dirham', 'AED', '', 0),
(3, 'AF', 'AFG', 4, 'Afghanistan', 'Asia', 'Afghani', 'AFA', '', 0),
(4, 'AG', 'ATG', 28, 'Antigua and Barbuda', 'Central America and the Caribbean', 'East Caribbean Dollar', 'XCD', '', 0),
(5, 'AI', 'AIA', 660, 'Anguilla', 'Central America and the Caribbean', 'East Caribbean Dollar', 'XCD', '', 0),
(6, 'AL', 'ALB', 8, 'Albania', 'Europe', 'Lek', 'ALL', '', 0),
(7, 'AM', 'ARM', 51, 'Armenia', 'Commonwealth of Independent States', 'Armenian Dram', 'AMD', '', 0),
(8, 'AN', 'ANT', 530, 'Netherlands Antilles', 'Central America and the Caribbean', 'Netherlands Antillean guilder', 'ANG', '', 0),
(9, 'AO', 'AGO', 24, 'Angola', 'Africa', 'Kwanza', 'AOA', '', 0),
(10, 'AQ', 'ATA', 10, 'Antarctica', 'Antarctic Region', '', '', '', 0),
(11, 'AR', 'ARG', 32, 'Argentina', 'South America', 'Argentine Peso', 'ARS', '', 0),
(12, 'AS', 'ASM', 16, 'American Samoa', 'Oceania', 'US Dollar', 'USD', '', 0),
(13, 'AT', 'AUT', 40, 'Austria', 'Europe', 'Euro', 'EUR', '', 0),
(14, 'AU', 'AUS', 36, 'Australia', 'Oceania', 'Australian dollar', 'AUD', '', 0),
(15, 'AW', 'ABW', 533, 'Aruba', 'Central America and the Caribbean', 'Aruban Guilder', 'AWG', '', 0),
(16, 'AZ', 'AZE', 31, 'Azerbaijan', 'Commonwealth of Independent States', 'Azerbaijani Manat', 'AZM', '', 0),
(17, 'BA', 'BIH', 70, 'Bosnia and Herzegovina', 'Bosnia and Herzegovina, Europe', 'Convertible Marka', 'BAM', '', 0),
(18, 'BB', 'BRB', 52, 'Barbados', 'Central America and the Caribbean', 'Barbados Dollar', 'BBD', '', 0),
(19, 'BD', 'BGD', 50, 'Bangladesh', 'Asia', 'Taka', 'BDT', '', 0),
(20, 'BE', 'BEL', 56, 'Belgium', 'Europe', 'Euro', 'EUR', '', 0),
(21, 'BF', 'BFA', 854, 'Burkina Faso', 'Africa', 'CFA Franc BCEAO', 'XOF', '', 0),
(22, 'BG', 'BGR', 100, 'Bulgaria', 'Europe', 'Lev', 'BGL', '', 0),
(23, 'BH', 'BHR', 48, 'Bahrain', 'Middle East', 'Bahraini Dinar', 'BHD', '', 0),
(24, 'BI', 'BDI', 108, 'Burundi', 'Africa', 'Burundi Franc', 'BIF', '', 0),
(25, 'BJ', 'BEN', 204, 'Benin', 'Africa', 'CFA Franc BCEAO', 'XOF', '', 0),
(26, 'BM', 'BMU', 60, 'Bermuda', 'North America', 'Bermudian Dollar', 'BMD', '', 0),
(27, 'BN', 'BRN', 96, 'Brunei Darussalam', 'Southeast Asia', 'Brunei Dollar', 'BND', '', 0),
(28, 'BO', 'BOL', 68, 'Bolivia', 'South America', 'Boliviano', 'BOB', '', 0),
(29, 'BR', 'BRA', 76, 'Brazil', 'South America', 'Brazilian Real', 'BRL', '', 0),
(30, 'BS', 'BHS', 44, 'The Bahamas', 'Central America and the Caribbean', 'Bahamian Dollar', 'BSD', '', 0),
(31, 'BT', 'BTN', 64, 'Bhutan', 'Asia', 'Ngultrum', 'BTN', '', 0),
(32, 'BV', 'BVT', 74, 'Bouvet Island', 'Antarctic Region', 'Norwegian Krone', 'NOK', '', 0),
(33, 'BW', 'BWA', 72, 'Botswana', 'Africa', 'Pula', 'BWP', '', 0),
(34, 'BY', 'BLR', 112, 'Belarus', 'Commonwealth of Independent States', 'Belarussian Ruble', 'BYR', '', 0),
(35, 'BZ', 'BLZ', 84, 'Belize', 'Central America and the Caribbean', 'Belize Dollar', 'BZD', '', 0),
(36, 'CA', 'CAN', 124, 'Canada', 'North America', 'Canadian Dollar', 'CAD', '', 0),
(37, 'CC', 'CCK', 166, 'Cocos (Keeling) Islands', 'Southeast Asia', 'Australian Dollar', 'AUD', '', 0),
(38, 'CD', 'COD', 180, 'Congo, Democratic Republic of the', 'Africa', 'Franc Congolais', 'CDF', '', 0),
(39, 'CF', 'CAF', 140, 'Central African Republic', 'Africa', 'CFA Franc BEAC', 'XAF', '', 0),
(40, 'CG', 'COG', 178, 'Congo, Republic of the', 'Africa', 'CFA Franc BEAC', 'XAF', '', 0),
(41, 'CH', 'CHE', 756, 'Switzerland', 'Europe', 'Swiss Franc', 'CHF', '', 0),
(42, 'CI', 'CIV', 384, 'Cote d\'Ivoire', 'Africa', 'CFA Franc BCEAO', 'XOF', '', 0),
(43, 'CK', 'COK', 184, 'Cook Islands', 'Oceania', 'New Zealand Dollar', 'NZD', '', 0),
(44, 'CL', 'CHL', 152, 'Chile', 'South America', 'Chilean Peso', 'CLP', '', 0),
(45, 'CM', 'CMR', 120, 'Cameroon', 'Africa', 'CFA Franc BEAC', 'XAF', '', 0),
(46, 'CN', 'CHN', 156, 'China', 'Asia', 'Yuan Renminbi', 'CNY', '', 0),
(47, 'CO', 'COL', 170, 'Colombia', 'South America, Central America and the Caribbean', 'Colombian Peso', 'COP', '', 0),
(48, 'CR', 'CRI', 188, 'Costa Rica', 'Central America and the Caribbean', 'Costa Rican Colon', 'CRC', '', 0),
(49, 'CU', 'CUB', 192, 'Cuba', 'Central America and the Caribbean', 'Cuban Peso', 'CUP', '', 0),
(50, 'CV', 'CPV', 132, 'Cape Verde', 'World', 'Cape Verdean Escudo', 'CVE', '', 0),
(51, 'CX', 'CXR', 162, 'Christmas Island', 'Southeast Asia', 'Australian Dollar', 'AUD', '', 0),
(52, 'CY', 'CYP', 196, 'Cyprus', 'Middle East', 'Cyprus Pound', 'CYP', '', 0),
(53, 'CZ', 'CZE', 203, 'Czech Republic', 'Europe', 'Czech Koruna', 'CZK', '', 0),
(54, 'DE', 'DEU', 276, 'Germany', 'Europe', 'Euro', 'EUR', '', 0),
(55, 'DJ', 'DJI', 262, 'Djibouti', 'Africa', 'Djibouti Franc', 'DJF', '', 0),
(56, 'DK', 'DNK', 208, 'Denmark', 'Europe', 'Danish Krone', 'DKK', '', 0),
(57, 'DM', 'DMA', 212, 'Dominica', 'Central America and the Caribbean', 'East Caribbean Dollar', 'XCD', '', 0),
(58, 'DO', 'DOM', 214, 'Dominican Republic', 'Central America and the Caribbean', 'Dominican Peso', 'DOP', '', 0),
(59, 'DZ', 'DZA', 12, 'Algeria', 'Africa', 'Algerian Dinar', 'DZD', '', 0),
(60, 'EC', 'ECU', 218, 'Ecuador', 'South America', 'US dollar', 'USD', '', 0),
(61, 'EE', 'EST', 233, 'Estonia', 'Europe', 'Kroon', 'EEK', '', 0),
(62, 'EG', 'EGY', 818, 'Egypt', 'Africa', 'Egyptian Pound', 'EGP', '', 0),
(63, 'EH', 'ESH', 732, 'Western Sahara', 'Africa', 'Moroccan Dirham', 'MAD', '', 0),
(64, 'ER', 'ERI', 232, 'Eritrea', 'Africa', 'Nakfa', 'ERN', '', 0),
(65, 'ES', 'ESP', 724, 'Spain', 'Europe', 'Euro', 'EUR', '', 0),
(66, 'ET', 'ETH', 231, 'Ethiopia', 'Africa', 'Ethiopian Birr', 'ETB', '', 0),
(67, 'FI', 'FIN', 246, 'Finland', 'Europe', 'Euro', 'EUR', '', 0),
(68, 'FJ', 'FJI', 242, 'Fiji', 'Oceania', 'Fijian Dollar', 'FJD', '', 0),
(69, 'FK', 'FLK', 238, 'Falkland Islands (Islas Malvinas)', 'South America', 'Falkland Islands Pound', 'FKP', '', 0),
(70, 'FM', 'FSM', 583, 'Micronesia, Federated States of', 'Oceania', 'US dollar', 'USD', '', 0),
(71, 'FO', 'FRO', 234, 'Faroe Islands', 'Europe', 'Danish Krone', 'DKK', '', 0),
(72, 'FR', 'FRA', 250, 'France', 'Europe', 'Euro', 'EUR', '', 0),
(73, 'GA', 'GAB', 266, 'Gabon', 'Africa', 'CFA Franc BEAC', 'XAF', '', 0),
(74, 'GB', 'GBR', 826, 'United Kingdom', 'Europe', 'Pound Sterling', 'GBP', '£', 44),
(75, 'GD', 'GRD', 308, 'Grenada', 'Central America and the Caribbean', 'East Caribbean Dollar', 'XCD', '', 0),
(76, 'GE', 'GEO', 268, 'Georgia', 'Commonwealth of Independent States', 'Lari', 'GEL', '', 0),
(77, 'GF', 'GUF', 254, 'French Guiana', 'South America', 'Euro', 'EUR', '', 0),
(78, 'GH', 'GHA', 288, 'Ghana', 'Africa', 'Cedi', 'GHC', 'C', 233),
(79, 'GI', 'GIB', 292, 'Gibraltar', 'Europe', 'Gibraltar Pound', 'GIP', '', 0),
(80, 'GL', 'GRL', 304, 'Greenland', 'Arctic Region', 'Danish Krone', 'DKK', '', 0),
(81, 'GM', 'GMB', 270, 'The Gambia', 'Africa', 'Dalasi', 'GMD', '', 0),
(82, 'GN', 'GIN', 324, 'Guinea', 'Africa', 'Guinean Franc', 'GNF', '', 0),
(83, 'GP', 'GLP', 312, 'Guadeloupe', 'Central America and the Caribbean', 'Euro', 'EUR', '', 0),
(84, 'GQ', 'GNQ', 226, 'Equatorial Guinea', 'Africa', 'CFA Franc BEAC', 'XAF', '', 0),
(85, 'GR', 'GRC', 300, 'Greece', 'Europe', 'Euro', 'EUR', '', 0),
(86, 'GS', 'SGS', 239, 'South Georgia and the South Sandwich Islands', 'Antarctic Region', 'Pound Sterling', 'GBP', '£', 0),
(87, 'GT', 'GTM', 320, 'Guatemala', 'Central America and the Caribbean', 'Quetzal', 'GTQ', '', 0),
(88, 'GU', 'GUM', 316, 'Guam', 'Oceania', 'US Dollar', 'USD', '$', 0),
(89, 'GW', 'GNB', 624, 'Guinea-Bissau', 'Africa', 'CFA Franc BCEAO', 'XOF', '', 0),
(90, 'GY', 'GUY', 328, 'Guyana', 'South America', 'Guyana Dollar', 'GYD', '', 0),
(91, 'HK', 'HKG', 344, 'Hong Kong (SAR)', 'Southeast Asia', 'Hong Kong Dollar', 'HKD', '', 0),
(92, 'HM', 'HMD', 334, 'Heard Island and McDonald Islands', 'Antarctic Region', 'Australian Dollar', 'AUD', '', 0),
(93, 'HN', 'HND', 340, 'Honduras', 'Central America and the Caribbean', 'Lempira', 'HNL', '', 0),
(94, 'HR', 'HRV', 191, 'Croatia', 'Europe', 'Kuna', 'HRK', '', 0),
(95, 'HT', 'HTI', 332, 'Haiti', 'Central America and the Caribbean', 'Gourde', 'HTG', '', 0),
(96, 'HU', 'HUN', 348, 'Hungary', 'Europe', 'Forint', 'HUF', '', 0),
(97, 'ID', 'IDN', 360, 'Indonesia', 'Southeast Asia', 'Rupiah', 'IDR', '', 0),
(98, 'IE', 'IRL', 372, 'Ireland', 'Europe', 'Euro', 'EUR', '', 0),
(99, 'IL', 'ISR', 376, 'Israel', 'Middle East', 'New Israeli Sheqel', 'ILS', '', 0),
(100, 'IN', 'IND', 356, 'India', 'Asia', 'Indian Rupee', 'INR', '', 0),
(101, 'IO', 'IOT', 86, 'British Indian Ocean Territory', 'World', 'US Dollar', 'USD', '', 0),
(102, 'IQ', 'IRQ', 368, 'Iraq', 'Middle East', 'Iraqi Dinar', 'IQD', '', 0),
(103, 'IR', 'IRN', 364, 'Iran', 'Middle East', 'Iranian Rial', 'IRR', '', 0),
(104, 'IS', 'ISL', 352, 'Iceland', 'Arctic Region', 'Iceland Krona', 'ISK', '', 0),
(105, 'IT', 'ITA', 380, 'Italy', 'Europe', 'Euro', 'EUR', '', 0),
(106, 'JM', 'JAM', 388, 'Jamaica', 'Central America and the Caribbean', 'Jamaican dollar', 'JMD', '', 0),
(107, 'JO', 'JOR', 400, 'Jordan', 'Middle East', 'Jordanian Dinar', 'JOD', '', 0),
(108, 'JP', 'JPN', 392, 'Japan', 'Asia', 'Yen', 'JPY', 'Y', 0),
(109, 'KE', 'KEN', 404, 'Kenya', 'Africa', 'Kenyan shilling', 'KES', '', 0),
(110, 'KG', 'KGZ', 417, 'Kyrgyzstan', 'Commonwealth of Independent States', 'Som', 'KGS', '', 0),
(111, 'KH', 'KHM', 116, 'Cambodia', 'Southeast Asia', 'Riel', 'KHR', '', 0),
(112, 'KI', 'KIR', 296, 'Kiribati', 'Oceania', 'Australian dollar', 'AUD', '', 0),
(113, 'KM', 'COM', 174, 'Comoros', 'Africa', 'Comoro Franc', 'KMF', '', 0),
(114, 'KN', 'KNA', 659, 'Saint Kitts and Nevis', 'Central America and the Caribbean', 'East Caribbean Dollar', 'XCD', '', 0),
(115, 'KP', 'PRK', 408, 'Korea, North', 'Asia', 'North Korean Won', 'KPW', '', 0),
(116, 'KR', 'KOR', 410, 'Korea, South', 'Asia', 'Won', 'KRW', '', 0),
(117, 'KW', 'KWT', 414, 'Kuwait', 'Middle East', 'Kuwaiti Dinar', 'KWD', '', 0),
(118, 'KY', 'CYM', 136, 'Cayman Islands', 'Central America and the Caribbean', 'Cayman Islands Dollar', 'KYD', '', 0),
(119, 'KZ', 'KAZ', 398, 'Kazakhstan', 'Commonwealth of Independent States', 'Tenge', 'KZT', '', 0),
(120, 'LA', 'LAO', 418, 'Laos', 'Southeast Asia', 'Kip', 'LAK', '', 0),
(121, 'LB', 'LBN', 422, 'Lebanon', 'Middle East', 'Lebanese Pound', 'LBP', '', 0),
(122, 'LC', 'LCA', 662, 'Saint Lucia', 'Central America and the Caribbean', 'East Caribbean Dollar', 'XCD', '', 0),
(123, 'LI', 'LIE', 438, 'Liechtenstein', 'Europe', 'Swiss Franc', 'CHF', '', 0),
(124, 'LK', 'LKA', 144, 'Sri Lanka', 'Asia', 'Sri Lanka Rupee', 'LKR', '', 0),
(125, 'LR', 'LBR', 430, 'Liberia', 'Africa', 'Liberian Dollar', 'LRD', '', 0),
(126, 'LS', 'LSO', 426, 'Lesotho', 'Africa', 'Loti', 'LSL', '', 0),
(127, 'LT', 'LTU', 440, 'Lithuania', 'Europe', 'Lithuanian Litas', 'LTL', '', 0),
(128, 'LU', 'LUX', 442, 'Luxembourg', 'Europe', 'Euro', 'EUR', '', 0),
(129, 'LV', 'LVA', 428, 'Latvia', 'Europe', 'Latvian Lats', 'LVL', '', 0),
(130, 'LY', 'LBY', 434, 'Libya', 'Africa', 'Libyan Dinar', 'LYD', '', 0),
(131, 'MA', 'MAR', 504, 'Morocco', 'Africa', 'Moroccan Dirham', 'MAD', '', 0),
(132, 'MC', 'MCO', 492, 'Monaco', 'Europe', 'Euro', 'EUR', '', 0),
(133, 'MD', 'MDA', 498, 'Moldova', 'Commonwealth of Independent States', 'Moldovan Leu', 'MDL', '', 0),
(134, 'MG', 'MDG', 450, 'Madagascar', 'Africa', 'Malagasy Franc', 'MGF', '', 0),
(135, 'MH', 'MHL', 584, 'Marshall Islands', 'Oceania', 'US dollar', 'USD', '', 0),
(136, 'MK', 'MKD', 807, 'Macedonia, The Former Yugoslav Republic', 'Europe', 'Denar', 'MKD', '', 0),
(137, 'ML', 'MLI', 466, 'Mali', 'Africa', 'CFA Franc BCEAO', 'XOF', '', 0),
(138, 'MM', 'MMR', 104, 'Burma', 'Southeast Asia', 'kyat', 'MMK', '', 0),
(139, 'MN', 'MNG', 496, 'Mongolia', 'Asia', 'Tugrik', 'MNT', '', 0),
(140, 'MO', 'MAC', 446, 'Macao', 'Southeast Asia', 'Pataca', 'MOP', '', 0),
(141, 'MP', 'MNP', 580, 'Northern Mariana Islands', 'Oceania', 'US Dollar', 'USD', '', 0),
(142, 'MQ', 'MTQ', 474, 'Martinique', 'Central America and the Caribbean', 'Euro', 'EUR', '', 0),
(143, 'MR', 'MRT', 478, 'Mauritania', 'Africa', 'Ouguiya', 'MRO', '', 0),
(144, 'MS', 'MSR', 500, 'Montserrat', 'Central America and the Caribbean', 'East Caribbean Dollar', 'XCD', '', 0),
(145, 'MT', 'MLT', 470, 'Malta', 'Europe', 'Maltese Lira', 'MTL', '', 0),
(146, 'MU', 'MUS', 480, 'Mauritius', 'World', 'Mauritius Rupee', 'MUR', '', 0),
(147, 'MV', 'MDV', 462, 'Maldives', 'Asia', 'Rufiyaa', 'MVR', '', 0),
(148, 'MW', 'MWI', 454, 'Malawi', 'Africa', 'Kwacha', 'MWK', '', 0),
(149, 'MX', 'MEX', 484, 'Mexico', 'North America', 'Mexican Peso', 'MXN', '', 0),
(150, 'MY', 'MYS', 458, 'Malaysia', 'Southeast Asia', 'Malaysian Ringgit', 'MYR', '', 0),
(151, 'MZ', 'MOZ', 508, 'Mozambique', 'Africa', 'Metical', 'MZM', '', 0),
(152, 'NA', 'NAM', 516, 'Namibia', 'Africa', 'Namibian Dollar', 'NAD', '', 0),
(153, 'NC', 'NCL', 540, 'New Caledonia', 'Oceania', 'CFP Franc', 'XPF', '', 0),
(154, 'NE', 'NER', 562, 'Niger', 'Africa', 'CFA Franc BCEAO', 'XOF', '', 0),
(155, 'NF', 'NFK', 574, 'Norfolk Island', 'Oceania', 'Australian Dollar', 'AUD', '', 0),
(156, 'NG', 'NGA', 566, 'Nigeria', 'Africa', 'Naira', 'NGN', 'N', 234),
(157, 'NI', 'NIC', 558, 'Nicaragua', 'Central America and the Caribbean', 'Cordoba Oro', 'NIO', '', 0),
(158, 'NL', 'NLD', 528, 'Netherlands', 'Europe', 'Euro', 'EUR', '', 0),
(159, 'NO', 'NOR', 578, 'Norway', 'Europe', 'Norwegian Krone', 'NOK', '', 0),
(160, 'NP', 'NPL', 524, 'Nepal', 'Asia', 'Nepalese Rupee', 'NPR', '', 0),
(161, 'NR', 'NRU', 520, 'Nauru', 'Oceania', 'Australian Dollar', 'AUD', '', 0),
(162, 'NU', 'NIU', 570, 'Niue', 'Oceania', 'New Zealand Dollar', 'NZD', '', 0),
(163, 'NZ', 'NZL', 554, 'New Zealand', 'Oceania', 'New Zealand Dollar', 'NZD', '', 0),
(164, 'OM', 'OMN', 512, 'Oman', 'Middle East', 'Rial Omani', 'OMR', '', 0),
(165, 'PA', 'PAN', 591, 'Panama', 'Central America and the Caribbean', 'balboa', 'PAB', '', 0),
(166, 'PE', 'PER', 604, 'Peru', 'South America', 'Nuevo Sol', 'PEN', '', 0),
(167, 'PF', 'PYF', 258, 'French Polynesia', 'Oceania', 'CFP Franc', 'XPF', '', 0),
(168, 'PG', 'PNG', 598, 'Papua New Guinea', 'Oceania', 'Kina', 'PGK', '', 0),
(169, 'PH', 'PHL', 608, 'Philippines', 'Southeast Asia', 'Philippine Peso', 'PHP', '', 0),
(170, 'PK', 'PAK', 586, 'Pakistan', 'Asia', 'Pakistan Rupee', 'PKR', '', 0),
(171, 'PL', 'POL', 616, 'Poland', 'Europe', 'Zloty', 'PLN', '', 0),
(172, 'PM', 'SPM', 666, 'Saint Pierre and Miquelon', 'North America', 'Euro', 'EUR', '', 0),
(173, 'PN', 'PCN', 612, 'Pitcairn Islands', 'Oceania', 'New Zealand Dollar', 'NZD', '', 0),
(174, 'PR', 'PRI', 630, 'Puerto Rico', 'Central America and the Caribbean', 'US dollar', 'USD', '', 0),
(175, 'PS', 'PSE', 275, 'Palestinian Territory, Occupied', '', '', '', '', 0),
(176, 'PT', 'PRT', 620, 'Portugal', 'Europe', 'Euro', 'EUR', '', 0),
(177, 'PW', 'PLW', 585, 'Palau', 'Oceania', 'US dollar', 'USD', '', 0),
(178, 'PY', 'PRY', 600, 'Paraguay', 'South America', 'Guarani', 'PYG', '', 0),
(179, 'QA', 'QAT', 634, 'Qatar', 'Middle East', 'Qatari Rial', 'QAR', '', 0),
(180, 'RE', 'REU', 638, 'Reunion', 'World', 'Euro', 'EUR', '', 0),
(181, 'RO', 'ROU', 642, 'Romania', 'Europe', 'Leu', 'ROL', '', 0),
(182, 'RU', 'RUS', 643, 'Russia', 'Asia', 'Russian Ruble', 'RUB', '', 0),
(183, 'RW', 'RWA', 646, 'Rwanda', 'Africa', 'Rwanda Franc', 'RWF', '', 0),
(184, 'SA', 'SAU', 682, 'Saudi Arabia', 'Middle East', 'Saudi Riyal', 'SAR', '', 0),
(185, 'SB', 'SLB', 90, 'Solomon Islands', 'Oceania', 'Solomon Islands Dollar', 'SBD', '', 0),
(186, 'SC', 'SYC', 690, 'Seychelles', 'Africa', 'Seychelles Rupee', 'SCR', '', 0),
(187, 'SD', 'SDN', 736, 'Sudan', 'Africa', 'Sudanese Dinar', 'SDD', '', 0),
(188, 'SE', 'SWE', 752, 'Sweden', 'Europe', 'Swedish Krona', 'SEK', '', 0),
(189, 'SG', 'SGP', 702, 'Singapore', 'Southeast Asia', 'Singapore Dollar', 'SGD', '', 0),
(190, 'SH', 'SHN', 654, 'Saint Helena', 'Africa', 'Saint Helenian Pound', 'SHP', '', 0),
(191, 'SI', 'SVN', 705, 'Slovenia', 'Europe', 'Tolar', 'SIT', '', 0),
(192, 'SJ', 'SJM', 744, 'Svalbard', 'Arctic Region', 'Norwegian Krone', 'NOK', '', 0),
(193, 'SK', 'SVK', 703, 'Slovakia', 'Europe', 'Slovak Koruna', 'SKK', '', 0),
(194, 'SL', 'SLE', 694, 'Sierra Leone', 'Africa', 'Leone', 'SLL', '', 0),
(195, 'SM', 'SMR', 674, 'San Marino', 'Europe', 'Euro', 'EUR', '', 0),
(196, 'SN', 'SEN', 686, 'Senegal', 'Africa', 'CFA Franc BCEAO', 'XOF', '', 0),
(197, 'SO', 'SOM', 706, 'Somalia', 'Africa', 'Somali Shilling', 'SOS', '', 0),
(198, 'SR', 'SUR', 740, 'Suriname', 'South America', 'Suriname Guilder', 'SRG', '', 0),
(199, 'ST', 'STP', 678, 'Sao Tome and Principe', 'Africa', 'Dobra', 'STD', '', 0),
(200, 'SV', 'SLV', 222, 'El Salvador', 'Central America and the Caribbean', 'El Salvador Colon', 'SVC', '', 0),
(201, 'SY', 'SYR', 760, 'Syria', 'Middle East', 'Syrian Pound', 'SYP', '', 0),
(202, 'SZ', 'SWZ', 748, 'Swaziland', 'Africa', 'Lilangeni', 'SZL', '', 0),
(203, 'TC', 'TCA', 796, 'Turks and Caicos Islands', 'Central America and the Caribbean', 'US Dollar', 'USD', '', 0),
(204, 'TD', 'TCD', 148, 'Chad', 'Africa', 'CFA Franc BEAC', 'XAF', '', 0),
(205, 'TF', 'ATF', 260, 'French Southern and Antarctic Lands', 'Antarctic Region', 'Euro', 'EUR', '', 0),
(206, 'TG', 'TGO', 768, 'Togo', 'Africa', 'CFA Franc BCEAO', 'XOF', '', 0),
(207, 'TH', 'THA', 764, 'Thailand', 'Southeast Asia', 'Baht', 'THB', '', 0),
(208, 'TJ', 'TJK', 762, 'Tajikistan', 'Commonwealth of Independent States', 'Somoni', 'TJS', '', 0),
(209, 'TK', 'TKL', 772, 'Tokelau', 'Oceania', 'New Zealand Dollar', 'NZD', '', 0),
(210, 'TL', 'TLS', 626, 'East Timor', '', 'Timor Escudo', 'TPE', '', 0),
(211, 'TM', 'TKM', 795, 'Turkmenistan', 'Commonwealth of Independent States', 'Manat', 'TMM', '', 0),
(212, 'TN', 'TUN', 788, 'Tunisia', 'Africa', 'Tunisian Dinar', 'TND', '', 0),
(213, 'TO', 'TON', 776, 'Tonga', 'Oceania', 'Pa\'anga', 'TOP', '', 0),
(214, 'TR', 'TUR', 792, 'Turkey', 'Middle East', 'Turkish Lira', 'TRL', '', 0),
(215, 'TT', 'TTO', 780, 'Trinidad and Tobago', 'Central America and the Caribbean', 'Trinidad and Tobago Dollar', 'TTD', '', 0),
(216, 'TV', 'TUV', 798, 'Tuvalu', 'Oceania', 'Australian Dollar', 'AUD', '', 0),
(217, 'TW', 'TWN', 158, 'Taiwan', 'Southeast Asia', 'New Taiwan Dollar', 'TWD', '', 0),
(218, 'TZ', 'TZA', 834, 'Tanzania', 'Africa', 'Tanzanian Shilling', 'TZS', '', 0),
(219, 'UA', 'UKR', 804, 'Ukraine', 'Commonwealth of Independent States', 'Hryvnia', 'UAH', '', 0),
(220, 'UG', 'UGA', 800, 'Uganda', 'Africa', 'Uganda Shilling', 'UGX', '', 0),
(221, 'UM', 'UMI', 581, 'United States Minor Outlying Islands', '', 'US Dollar', 'USD', '$', 0),
(222, 'US', 'USA', 840, 'United States', 'North America', 'US Dollar', 'USD', '$', 1),
(223, 'UY', 'URY', 858, 'Uruguay', 'South America', 'Peso Uruguayo', 'UYU', '', 0),
(224, 'UZ', 'UZB', 860, 'Uzbekistan', 'Commonwealth of Independent States', 'Uzbekistan Sum', 'UZS', '', 0),
(225, 'VA', 'VAT', 336, 'Holy See (Vatican City)', 'Europe', 'Euro', 'EUR', '', 0),
(226, 'VC', 'VCT', 670, 'Saint Vincent and the Grenadines', 'Central America and the Caribbean', 'East Caribbean Dollar', 'XCD', '', 0),
(227, 'VE', 'VEN', 862, 'Venezuela', 'South America, Central America and the Caribbean', 'Bolivar', 'VEB', '', 0),
(228, 'VG', 'VGB', 92, 'British Virgin Islands', 'Central America and the Caribbean', 'US dollar', 'USD', '$', 0),
(229, 'VI', 'VIR', 850, 'Virgin Islands', 'Central America and the Caribbean', 'US Dollar', 'USD', '$', 0),
(230, 'VN', 'VNM', 704, 'Vietnam', 'Southeast Asia', 'Dong', 'VND', '', 0),
(231, 'VU', 'VUT', 548, 'Vanuatu', 'Oceania', 'Vatu', 'VUV', '', 0),
(232, 'WF', 'WLF', 876, 'Wallis and Futuna', 'Oceania', 'CFP Franc', 'XPF', '', 0),
(233, 'WS', 'WSM', 882, 'Samoa', 'Oceania', 'Tala', 'WST', '', 0),
(234, 'YE', 'YEM', 887, 'Yemen', 'Middle East', 'Yemeni Rial', 'YER', '', 0),
(235, 'YT', 'MYT', 175, 'Mayotte', 'Africa', 'Euro', 'EUR', '', 0),
(236, 'YU', 'YUG', 891, 'Yugoslavia', 'Europe', 'Yugoslavian Dinar', 'YUM', '', 0),
(237, 'ZA', 'ZAF', 710, 'South Africa', 'Africa', 'Rand', 'ZAR', 'R', 27),
(238, 'ZM', 'ZWB', 894, 'Zambia', 'Africa', 'Kwacha', 'ZMK', '', 0),
(239, 'ZW', 'ZWE', 716, 'Zimbabwe', 'Africa', 'Zimbabwe Dollar', 'ZWD', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country_states`
--

CREATE TABLE `country_states` (
  `id` bigint(20) NOT NULL,
  `country` varchar(50) CHARACTER SET latin1 NOT NULL,
  `code` varchar(3) CHARACTER SET latin1 NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `capital` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `slogan` varchar(100) CHARACTER SET latin1 NOT NULL,
  `lng` float NOT NULL,
  `lat` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_states`
--

INSERT INTO `country_states` (`id`, `country`, `code`, `name`, `capital`, `slogan`, `lng`, `lat`) VALUES
(1, 'NG', 'AB', 'Abia', 'Umuahia', 'God\'s Own State', 0, 0),
(2, 'NG', 'ABJ', 'Abuja', 'F.C.T.', 'Centre of Unity', 0, 0),
(3, 'NG', 'AD', 'Adamawa', 'Yola', 'Land of Beauty', 0, 0),
(4, 'NG', 'AK', 'Akwa Ibom', 'Uyo', 'Land of Promise', 0, 0),
(5, 'NG', 'AN', 'Anambra', 'Awka', 'Home for All', 0, 0),
(6, 'NG', 'BA', 'Bauchi', 'Bauchi', 'Home of Peace and Hospitality', 0, 0),
(7, 'NG', 'BY', 'Bayelsa', 'Yenagoa', 'Pride of the Nation', 0, 0),
(8, 'NG', 'BN', 'Benue', 'Makurdi', 'Food Basket of the Nation', 0, 0),
(9, 'NG', 'BO', 'Borno', 'Maiduguri', 'Home of Peace', 0, 0),
(10, 'NG', 'CR', 'Cross River', 'Calabar', 'The People\'s Paradise', 0, 0),
(11, 'NG', 'DT', 'Delta', 'Asaba', 'The Big Heart of the Nation', 0, 0),
(12, 'NG', 'EB', 'Ebonyi', 'Abakaliki', 'Salt of the Nation', 0, 0),
(13, 'NG', 'ED', 'Edo', 'Benin City', 'The Heartbeat of the Nation', 0, 0),
(14, 'NG', 'EK', 'Ekiti', 'Ado-Ekiti', 'Fountain of Knowledge', 0, 0),
(15, 'NG', 'EN', 'Enugu', 'Enugu', 'Coal City State', 0, 0),
(16, 'NG', 'GM', 'Gombe', 'Gombe', 'Jewel of the Savannah', 0, 0),
(17, 'NG', 'IM', 'Imo', 'Owerri', 'Eastern Heartland', 0, 0),
(18, 'NG', 'JG', 'Jigawa', 'Dutse', 'New World', 0, 0),
(19, 'NG', 'KD', 'Kaduna', 'Kaduna', 'Liberal State', 0, 0),
(20, 'NG', 'KN', 'Kano', 'Kano', 'Centre of Commerce', 0, 0),
(21, 'NG', 'KT', 'Katsina', 'Katsina', 'State of Hospitality', 0, 0),
(22, 'NG', 'KB', 'Kebbi', 'Birnin Kebbi', 'Land of Equity', 0, 0),
(23, 'NG', 'KG', 'Kogi', 'Lokoja', 'The Confluence State', 0, 0),
(24, 'NG', 'KW', 'Kwara', 'Ilorin', 'State of Harmony', 0, 0),
(25, 'NG', 'LG', 'Lagos', 'Ikeja', 'Centre of Excellence', 0, 0),
(26, 'NG', 'NS', 'Nassarawa', 'Lafia', 'Home of Solid Minerals', 0, 0),
(27, 'NG', 'NG', 'Niger', 'Minna', 'The Power State', 0, 0),
(28, 'NG', 'OG', 'Ogun', 'Abeokuta', 'The Gateway State', 0, 0),
(29, 'NG', 'ON', 'Ondo', 'Akure', 'The Sunshine State', 0, 0),
(30, 'NG', 'OS', 'Osun', 'Osogbo', 'State of the Living Spring', 0, 0),
(31, 'NG', 'OY', 'Oyo', 'Ibadan', 'Pacesetter State', 0, 0),
(32, 'NG', 'PL', 'Plateau', 'Jos', 'Peace and Tourism', 0, 0),
(33, 'NG', 'RV', 'Rivers', 'Port Harcourt', 'Treasure Base of the Nation', 0, 0),
(34, 'NG', 'SK', 'Sokoto', 'Sokoto', 'Seat of the Caliphate', 0, 0),
(35, 'NG', 'TR', 'Taraba', 'Jalingo', 'Nature\'s Gift of the Nation', 0, 0),
(36, 'NG', 'YB', 'Yobe', 'Damaturu', 'The Young Shall Grow', 0, 0),
(37, 'NG', 'ZM', 'Zamfara', 'Gusau', 'Farming is Our Pride', 0, 0),
(38, 'NG', 'ON', 'Outside Nigeria', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `education_type`
--

CREATE TABLE `education_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_type`
--

INSERT INTO `education_type` (`id`, `name`, `description`, `created_at`) VALUES
(1, 'Kindergarten/Primary/Secondary', 'Kindergarten, Primary and Secondary Schools', '2018-09-07 14:05:39'),
(2, 'Tertiary Institutions', 'Universities, Polytechnics, Monotechnics, and Colleges of education ', '2018-09-07 14:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `clean_url` varchar(100) NOT NULL,
  `description` tinytext NOT NULL,
  `privileges` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `is_active` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `position`, `name`, `clean_url`, `description`, `privileges`, `img`, `is_active`) VALUES
(1, 'leftBar', 'Dashboard', '/home', '', ':administrator:sadministrator:principal:cteacher:teacher:boarding:account:store:student', 'fa fa-tachometer-alt', '1'),
(2, 'leftBar', 'Users', '/users', '', ':administrator:sadministrator', 'fas fa-users', '1'),
(3, 'leftBar', 'Class', '/class', '', ':administrator:sadministrator:principal:cteacher:teacher:boarding:account', 'fa fa-chalkboard-teacher', '1'),
(4, 'leftBar', 'Hostel Manager', '/hostel', '', ':administrator:sadministrator:boarding', 'fa fa-h-square', '1'),
(5, 'leftBar', 'Inventory', '/inventory', '', ':account:administrator:sadministrator:store', 'fas fa-folder-open', '1'),
(6, 'leftBar', 'Documents', '/documents', '', ':account:administrator:sadministrator:principal', 'fa fa-file', '0'),
(7, 'leftBar', 'Payments', '/payments', '', 'administrator:account:sadministrator:principal', 'far fa-money-bill-alt', '1'),
(8, 'leftBar', 'Reports', '/reports', '', ':account:administrator:sadministrator:principal', 'fa fa-chart-pie', '1'),
(9, 'leftBar', 'Settings', '/settings', 'The settings shown below help you customize and organize the system.', ':administrator:sadministrator', 'fa fa-cog', '1'),
(10, 'settings', 'School Settings', '/school_settings', '', ':administrator:sadministrator', 'ion ion-android-settings', '1'),
(11, 'settings', 'Change Password', '/change_password', '', ':administrator:sadministrator:principal:cteacher:teacher:boarding:account:store:student', 'ion ion-unlocked', '1'),
(12, 'settings', 'Sessions', '/sessions', '', ':administrator:sadministrator', 'ion ion-calendar', '1'),
(13, 'settings', 'Semesters / Terms', '/semesters_terms', '', ':administrator:sadministrator', 'ion ion-android-notifications', '1');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_group_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `short_code` text NOT NULL,
  `can_view` enum('0','1') NOT NULL DEFAULT '1',
  `can_add` enum('0','1') NOT NULL DEFAULT '1',
  `can_edit` enum('0','1') NOT NULL DEFAULT '1',
  `can_delete` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modules_group`
--

CREATE TABLE `modules_group` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `short_code` text NOT NULL,
  `img` text NOT NULL,
  `disabled_cid_array` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules_group`
--

INSERT INTO `modules_group` (`id`, `name`, `short_code`, `img`, `disabled_cid_array`, `created_at`) VALUES
(1, 'Dashboard', 'dashboard', 'fa fa-tachometer-alt', '', '2018-09-17 17:44:06'),
(2, 'Students', 'students', 'fas fa-users', '', '2018-09-17 17:44:12'),
(3, 'Finance', 'finance', 'far fa-money-bill-alt', '', '2018-09-17 19:49:01'),
(4, 'Human Resource', 'hr', 'fa fa-sitemap', '', '2018-09-17 19:49:06'),
(5, 'Communicate', 'commmunicate', 'fa fa-bullhorn', '', '2018-09-17 19:49:10'),
(6, 'Inventory', 'inventory', 'fas fa-folder-open', '', '2018-09-17 19:49:14'),
(7, 'Hostel', 'hostel', 'fa fa-h-square', '', '2018-09-17 19:49:19'),
(8, 'Reports', 'reports', 'fa fa-chart-pie', '', '2018-09-17 19:49:23'),
(9, 'Settings', 'settings', 'fa fa-cog', '', '2018-09-17 19:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `is_active` enum('0','1') CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `is_superadmin` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `cid`, `title`, `is_active`, `is_superadmin`, `created_at`) VALUES
(1, 0, 'Super Administrator', '1', '1', '2018-09-13 08:45:08'),
(2, 0, 'Administrator', '1', '0', '2018-09-17 18:48:18'),
(3, 0, 'Lecturer/Teacher', '1', '0', '2018-09-17 18:48:24'),
(4, 0, 'Accountant', '1', '0', '2018-09-17 18:48:29'),
(5, 0, 'Student', '1', '0', '2018-09-17 18:48:34'),
(6, 0, 'Parent', '1', '0', '2018-09-17 18:48:39'),
(7, 0, 'Librarian', '1', '0', '2018-09-17 18:48:43'),
(8, 0, 'Human Resource', '1', '0', '2018-09-17 18:48:48'),
(9, 2, 'House Master', '1', '0', '2018-09-17 18:44:33'),
(10, 2, 'Principal', '1', '0', '2018-09-17 18:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `can_view` enum('0','1') NOT NULL DEFAULT '1',
  `can_add` enum('0','1') NOT NULL DEFAULT '1',
  `can_edit` enum('0','1') NOT NULL DEFAULT '1',
  `can_delete` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_type`
--

CREATE TABLE `school_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `min_select` int(3) NOT NULL,
  `max_select` int(3) NOT NULL,
  `subject_select` enum('N','Y') NOT NULL,
  `is_active` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school_type`
--

INSERT INTO `school_type` (`id`, `type`, `min_select`, `max_select`, `subject_select`, `is_active`) VALUES
(1, 'Nursery', 0, 0, 'N', '0'),
(2, 'Primary', 0, 0, 'N', '0'),
(3, 'Junior', 14, 14, 'Y', '1'),
(4, 'Senior', 8, 9, 'Y', '1');

-- --------------------------------------------------------

--
-- Table structure for table `semesters_terms`
--

CREATE TABLE `semesters_terms` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `start_date` varchar(40) CHARACTER SET utf8 NOT NULL,
  `end_date` varchar(40) CHARACTER SET utf8 NOT NULL,
  `promotion_term` enum('0','1') NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `session` varchar(20) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `cid`, `session`, `start_date`, `end_date`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 0, '2005/2006', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(2, 0, '2006/2007', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(3, 0, '2007/2008', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(4, 0, '2004/2005', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(5, 0, '2003/2004', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(6, 0, '2008/2009', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(7, 0, '2009/2010', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(8, 0, '2010/2011', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(9, 0, '2017/2018', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(10, 0, '2018/2019', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(11, 1, '2013/2014', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15'),
(12, 1, '2014/2015', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '2018-09-17 18:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_img` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `language` varchar(100) NOT NULL,
  `default_row_per_page` int(11) NOT NULL,
  `version` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `cid`, `site_name`, `site_img`, `username`, `facebook`, `twitter`, `url`, `email`, `language`, `default_row_per_page`, `version`, `created_at`, `updated_at`) VALUES
(1, 1, 'PEARSDC', '', '', 'social.jencube', '', 'www.jencube.com', 'info@jencube.com', 'English', 100, '1.0.20181507.BETA', '2016-06-14 23:00:00', '2018-09-17 18:35:05'),
(2, 2, 'BENSON IDAHOSA UNIVERSITY', '', 'biu', 'biuNigeria', '', 'http://biu.edu.ng', 'ict@biu.edu.ng', 'English', 100, '1.0.20181507.BETA', '2014-08-11 23:00:00', '2018-09-17 18:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `employee_id` varchar(200) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `work_exp` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_leaving` date NOT NULL,
  `address` text NOT NULL,
  `note` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `account_title` varchar(200) NOT NULL,
  `bank_account_no` varchar(200) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `payscale` varchar(200) NOT NULL,
  `basic_salary` varchar(200) NOT NULL,
  `epf_no` varchar(200) NOT NULL,
  `contract_type` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `joining_letter` varchar(200) NOT NULL,
  `resignation_letter` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disabled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `cid`, `employee_id`, `department`, `designation`, `qualification`, `work_exp`, `firstname`, `lastname`, `middlename`, `father_name`, `mother_name`, `contact_no`, `email`, `dob`, `marital_status`, `date_of_joining`, `date_of_leaving`, `address`, `note`, `image`, `gender`, `account_title`, `bank_account_no`, `bank_name`, `payscale`, `basic_salary`, `epf_no`, `contract_type`, `shift`, `location`, `facebook`, `twitter`, `linkedin`, `instagram`, `resume`, `joining_letter`, `resignation_letter`, `is_active`, `created_at`, `updated_at`, `disabled_at`) VALUES
(1, 0, '1001', '4', '1', '', '', 'Super Admin', '', '', '', '', '', 'amaeze@biu.edu.ng', '1970-01-01', '', '1970-01-01', '0000-00-00', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, '1002', '4', '2', '', '', 'Gaius', 'Osaiwe', '', '', '', '', 'gosaiwe@naa.ng', '1980-07-11', 'Single', '1970-01-01', '0000-00-00', '', '', '4.jpg', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 0, '1003', '1', '3', '', '', 'Godwin', 'Tonguve', '', '', '', '', 'gtonguve@naa.ng', '1986-04-18', 'Married', '1970-01-01', '0000-00-00', '', '', '5.jpg', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 0, '1004', '1', '3', '', '', 'Maureen', 'Omogbare', '', '', '', '', 'momogbare@naa.ng', '1975-07-04', 'Married', '1970-01-01', '0000-00-00', '', '', '6.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 0, '1005', '1', '3', '', '', 'Joy', 'Abguegbeude', '', '', '', '', 'jabguegbeude@naa.ng', '1990-07-04', 'Married', '1970-01-01', '0000-00-00', '', '', '7.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 0, '1006', '1', '3', '', '', 'Osaru', 'Uhimwen', '', '', '', '', 'ouhimwen@naa.ng', '1994-11-08', 'Single', '1970-01-01', '0000-00-00', '', '', '8.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 0, '1007', '1', '3', '', '', 'Etinosa', 'Osawe', '', '', '', '', 'admin@naa.ng', '1980-07-03', 'Single', '0000-00-00', '0000-00-00', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 0, '1008', '1', '3', '', '', 'Blessing A.', 'Yussuf ', '', '', '', '', 'kazuokwu@biu.edu.ng', '1980-02-14', '', '0000-00-00', '0000-00-00', '', '', '10.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 0, '1009', '4', '2', '', '', 'Blessing', 'Mmadu', '', '', '', '', 'bmmadu@naa.ng', '1989-09-12', '', '0000-00-00', '0000-00-00', '', '', '11.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-17 18:30:30', '0000-00-00 00:00:00'),
(12, 0, '1010', '4', '1', '', '', 'Esosa', 'Elaiho', '', '', '', '', 'elaiho@gmail.com', '1983-02-10', 'Married', '0000-00-00', '0000-00-00', '', '', '12.jpg', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `admission_no` varchar(100) DEFAULT NULL,
  `rfid_code` varchar(100) NOT NULL,
  `admission_date` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `scholarship` enum('No','Yes') NOT NULL DEFAULT 'No',
  `image` varchar(100) DEFAULT NULL,
  `mobileno` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `gender` enum('Female','Male') DEFAULT NULL,
  `current_address` text,
  `route_id` int(11) NOT NULL,
  `school_house_id` int(11) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `vehroute_id` int(11) NOT NULL,
  `hostel_room_id` int(11) NOT NULL,
  `guardian_is` varchar(100) NOT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_phone` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_phone` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_relation` varchar(100) DEFAULT NULL,
  `guardian_phone` varchar(100) DEFAULT NULL,
  `guardian_occupation` varchar(150) NOT NULL,
  `guardian_address` text,
  `guardian_email` varchar(100) NOT NULL,
  `father_pic` varchar(200) NOT NULL,
  `mother_pic` varchar(200) NOT NULL,
  `guardian_pic` varchar(200) NOT NULL,
  `is_active` enum('0','1') DEFAULT '1',
  `note` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disabled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `cid`, `parent_id`, `admission_no`, `rfid_code`, `admission_date`, `firstname`, `lastname`, `scholarship`, `image`, `mobileno`, `email`, `state`, `city`, `religion`, `dob`, `gender`, `current_address`, `route_id`, `school_house_id`, `blood_group`, `vehroute_id`, `hostel_room_id`, `guardian_is`, `father_name`, `father_phone`, `father_occupation`, `mother_name`, `mother_phone`, `mother_occupation`, `guardian_name`, `guardian_relation`, `guardian_phone`, `guardian_occupation`, `guardian_address`, `guardian_email`, `father_pic`, `mother_pic`, `guardian_pic`, `is_active`, `note`, `created_at`, `updated_at`, `disabled_at`) VALUES
(1, 2, 2, '10001', '', '2018-07-20', 'Oluwatobi', 'Omowanle', 'No', 'uploads/student_images/1.jpg', '', '', NULL, NULL, '', '2018-01-30', 'Female', '', 0, 0, 'O+', 0, 0, 'father', 'Segun Omowanle', '08045332547', 'Doctor', 'Mariam Omowanle', '08044345456', 'Business Woman', 'Segun Omowanle', 'Father', '08045332547', 'Doctor', '', '', 'uploads/student_images/1father.jpg', 'uploads/student_images/1mother.jpg', '', '1', '', '2018-07-20 12:21:46', '2018-09-17 18:26:51', '0000-00-00 00:00:00'),
(2, 2, 2, '10002', '', '2018-07-20', 'Kennedy', 'Omowanle', 'No', 'uploads/student_images/2.jpg', '', '', NULL, NULL, '', '2012-04-04', 'Male', '', 0, 2, '', 0, 0, 'father', 'Segun Omowanle', '08045332547', 'Doctor', 'Mariam Omowanle', '08044345456', 'Business Woman', 'Segun Omowanle', 'Father', '08045332547', 'Doctor', '', '', '', '', '', '1', '', '2018-07-20 12:23:36', '2018-09-17 18:27:04', '0000-00-00 00:00:00'),
(3, 2, 5, '10003', '', '2018-08-08', 'Michelle', 'Olajide', 'No', 'uploads/student_images/no_image.png', '', '', NULL, NULL, '', '2010-03-04', 'Female', '', 0, 0, '', 0, 0, 'father', 'Seyi Olajide', '', '', 'Dami Olajide', '', '', 'Seyi Olajide', 'Father', '07030433232', '', '', '', '', '', '', '1', '', '2018-08-08 14:14:32', '2018-09-17 18:27:09', '0000-00-00 00:00:00'),
(4, 2, 7, '10004', '', '2018-08-09', 'Michelle', 'Olajide', 'No', 'uploads/student_images/no_image.png', '', '', NULL, NULL, 'Christian', '2009-03-13', 'Female', '', 0, 0, '', 0, 0, 'father', 'Seyi Olajide', '07034032234', '', 'Damilola Olajide', '', '', 'Seyi Olajide', 'Father', '07034032234', '', '', '', '', '', '', '1', '', '2018-08-09 14:21:40', '2018-09-17 18:27:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) UNSIGNED NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `role_id` int(2) NOT NULL DEFAULT '2',
  `education_id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_coreadmin` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disabled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `role_id`, `education_id`, `name`, `user_code`, `email`, `password`, `remember_token`, `is_coreadmin`, `is_active`, `created_at`, `updated_at`, `disabled_at`) VALUES
(1, 0, 2, 2, 'University of Benin', 'uniben', 'amaeze@uniben.edu.ng', '$2y$10$meXHN6VVmRJ2X7G/NkzvAe6cujP0FHpG4g3kS.E5RgqG1nqF2UFC6', 'RrGKFzMh1biIyplfYyZmb7eukLGZTdnMp35EqaFnn4Dcu3DpefLCT6x7k4lJ', '1', '1', '2018-07-11 09:33:10', '2018-09-18 22:36:09', '0000-00-00 00:00:00'),
(2, 0, 2, 2, 'Benson Idahosa University', 'biu', 'ict@biu.edu.ng', '$2y$10$cc5zRdoh/rfKTmK5JnZmLOg/8POxCU/vfL570rwLi/emcmUgTSkN.', 'Ui1siWx5B47pn8XNNySXH31HYwriE3roYuWMUzOEdoVEvy12owA3gsOaFZxQ', '1', '1', '2018-07-15 09:27:52', '2018-09-19 15:25:01', '0000-00-00 00:00:00'),
(3, NULL, 2, 2, 'University of Ibadan', 'UI', 'info@ui.edu.ng', '$2y$10$/29z8tsw77j1LBeXTMRtRuLP2VpDMP2UF/OuGQpv2QVIQrUhksZeO', '4aLBhrtZsayMFlOj35Q7gB4VdYLekJD88BjU3JfPeq4Mb9KgTbVanOLJuyg6', '1', '1', '2018-09-18 12:23:16', '2018-09-18 13:27:47', NULL),
(4, NULL, 2, 1, 'Nathan American Academy', 'naa', 'admin@naa.ng', '$2y$10$F97Gkkv17/QW.iZf6YicwOrH2sR17olSvkv83Jm4xCrYmY4IQLVey', 'AuSJaTc5ZCoykVLh0rZh67NpCdxninoB9LxFP6SPInyI5iZNLuxwz66DkerF', '1', '1', '2018-09-18 18:24:38', '2018-09-18 19:28:08', NULL),
(5, NULL, 2, 1, 'WOF Group of Schools', 'WOF', 'admin@wof.edu', '$2y$10$2swx2JpGN2X2i1rRlukxwOp0/O7hVlMCtfushl7amRNkgqf2HejWa', 'fSTcAxctOExtSaBgphfe5V0jVzfqEnguR6eCUyQjvXmDp8I1l9mU9ajGDO5q', '1', '1', '2018-09-18 19:07:19', '2018-09-18 20:07:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_states`
--
ALTER TABLE `country_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_type`
--
ALTER TABLE `education_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clean_url` (`clean_url`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules_group`
--
ALTER TABLE `modules_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD KEY `email` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_type`
--
ALTER TABLE `school_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters_terms`
--
ALTER TABLE `semesters_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission_no` (`admission_no`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`(191)),
  ADD KEY `user_code` (`user_code`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `country_states`
--
ALTER TABLE `country_states`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `education_type`
--
ALTER TABLE `education_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modules_group`
--
ALTER TABLE `modules_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_type`
--
ALTER TABLE `school_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `semesters_terms`
--
ALTER TABLE `semesters_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
