-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 12:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulsu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter_table`
--

CREATE TABLE `counter_table` (
  `id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `counter_token` text NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter_table`
--

INSERT INTO `counter_table` (`id`, `ip_address`, `counter_token`, `visit_date`) VALUES
(1, '::1', 'CXdTGe-je8rLa7ew5-SdY3s3sQg0x4v1NMkhf9wmT198gMjtBsKgrst8MTY2ODI0MDE2Ng', '2022-11-12 01:02:50'),
(2, '::1', 'dBOzO8-69evXaYM_F0iIRC3V5TalF_NtLgzPypxIKRR8X7LtXgagX1J8MTY2ODI0MDYwNw', '2022-11-12 01:10:14'),
(3, '::1', 'oRongeL7VDewzY8bI-DGBW0J8A0bvU6CYJo2WF17z258IKcitEbAdLt8MTY2ODI0MDYxNg', '2022-11-12 01:10:31'),
(4, '::1', 'V8EGAjxIG1_3zez1SKGc0GkZ2v8Xja1fm9DrpbZuoc98ik3C-HlqdKt8MTY2ODI0MDY3MA', '2022-11-12 01:11:16'),
(5, '::1', '6-l9GHsRcQGZybGDoLUSrBgrmu5qRYzvsDS0MZI14258nwYXvyO-L1R8MTY2ODI0MDY3OQ', '2022-11-12 01:11:28'),
(6, '::1', 'LPU84S_P4nTXWQrf6rOEd624MNRvRS2PW4uznSgtSuN8NASMWu4xm4Z8MTY2ODI0MTI0Mg', '2022-11-12 01:20:47'),
(7, '::1', 'tESCO94xXFRgVfLx9AC_3oWBu4Mu8z33vpdzrbEWHUF8t9B9_8W6gRx8MTY2ODI0MTI1MA', '2022-11-12 01:20:58'),
(8, '::1', 'skJQjibuYG6tZsOKIaDyyflR-N0wWpMx1YVj1B9PEdN8DyOzN_5xz4R8MTY2ODI2MTgyOA', '2022-11-12 07:04:00'),
(9, '::1', '4PXtk-8-1xpzx1LJVegIYjopk2ooAISJzmfmmWol4C58odsklfgPXxR8MTY2ODI2NjA3Nw', '2022-11-12 08:14:44'),
(10, '::1', 'EgI6Hd9jNADkjq__BWHr7XKGOFSKd2Q-eYV7aClzfcZ82PBuErsgRzB8MTY2ODMxMDA5NQ', '2022-11-12 20:28:27'),
(11, '::1', 'Ij2nU-kqGIZniLYTCXR7ob_gZmwRiYbxDbLAAWUb7C18ZjSeVFlBCUp8MTY2ODMyOTk2Mg', '2022-11-13 01:59:37'),
(12, '::1', 'mMgGXLJcxDfwXDLNFWMH9ZRMvOlI34g1NKOGQVZ4ls18GwKkqRc6Gg98MTY2ODMzNTkyNg', '2022-11-13 03:39:27'),
(13, '::1', 'NIawaF6KHETUvl6RCrA3NAerGyyDnMTTnsMqEuoASVF8_AmyoZ1YD998MTY2ODM0MTEyNw', '2022-11-13 05:06:57'),
(14, '::1', 'LdcsrvxggaP7ACceZtDRDlEI-jcziwok37cxRgJEsGR8YU9FS24RY6Z8MTY2ODM0MTM1Mg', '2022-11-13 05:09:25'),
(15, '::1', 'MJIn71LDMviEUxqOmsKKlxgbWB-kGDI3Kje1tKsLG_l8VwFr-FZ9gnV8MTY2ODM1MjUxNw', '2022-11-13 08:15:27'),
(16, '::1', 'zNAMM5SZC7L5lmcDbwPMI7DK3nO__qGo2-o2jX-90Jp8tnnTYjflX7d8MTY2ODM4NDg2Mw', '2022-11-13 18:14:12'),
(17, '::1', 'TpNgI9Pqh2mIFMEaq2drucL4U8kHkrWYz1qRVgCjf3l8Qk1j5Nwwuld8MTY2ODM5MzM4MQ', '2022-11-13 19:36:28'),
(18, '::1', 'nueC3VWHfvfvPUTv-ES00H-WO-F_NUxXZ35QaGt7zN58VVWM9C8cZ498MTY2ODM5NjU1OA', '2022-11-13 20:29:28'),
(19, '::1', 'pLlyu0V1asrM4975S0XGNNk8658oKsp-ZQqPeX-Wu1R8UvTvx8tT9od8MTY2ODM5NjYzMA', '2022-11-13 20:30:36'),
(20, '::1', 'UfkM5frkI4Og1A6V4SPoohzTP8eFYg8UTlC0I-W-DKx8ZXbr-oNagpF8MTY2ODM5NzM2Mg', '2022-11-13 20:42:51'),
(21, '::1', 'MdkJ0Gc7ZW0jNZNQFxHSs2ovD7dTf_Tk9iLc2jlAw398gS56zU34xNN8MTY2ODQwMDk3Mg', '2022-11-13 21:43:01'),
(22, '::1', 'vZYidW1bq6Ca2Pmt4MPs7RL0pHO96gZwmP2yMdkaa6p8_TjAuRpwu7V8MTY2ODQwMDk4OQ', '2022-11-13 21:43:17'),
(23, '::1', 'jeuN1-7jcegj3cwVVsvoZwHZCy052uY6fzbiksAdLRZ8gp4-pr28d9d8MTY2ODQwMTA2OQ', '2022-11-13 21:44:40'),
(24, '::1', 'LWBH1gq_ZJKYO6C54EUkn0RDKDsNUeemnrXkR_mh8xR8ejumWrK8TDN8MTY2ODQwMTE1Mg', '2022-11-13 21:48:38'),
(25, '::1', '-_eeCVgyC4Pse58EmUE3IFktDmpXr6MHEfe4D7d4ACB8RLURuywgMHV8MTY2ODQwMTQzMw', '2022-11-13 21:50:48'),
(26, '::1', '_yCBU4pq9unOok-aRrzhkNz2HOF1xjbgowx1yXmMIlF8E5nl7G5RP818MTY2ODQwMTQ2Mg', '2022-11-13 21:51:13'),
(27, '::1', 'MZeiJyhjWpMrSUKwA1WyyHub22qykO0g8Z2d5234c9x82PITRXKikyp8MTY2ODQwMTQ4NQ', '2022-11-13 21:51:36'),
(28, '::1', 'N0L5OlfJcNjBHdbh9xZvdQ1jbfzaaJgno2sylA7F-vJ8Q1E01yChN918MTY2ODQwMTUwOA', '2022-11-13 21:57:18'),
(29, '::1', 'xEdQ0EIceHrydY7EgNtwF-sSW34Ic9FB8uOOQQp9EjB8tH4L3DQML5R8MTY2ODQwMTkyOQ', '2022-11-13 21:59:02'),
(30, '::1', 'sGFaZuXHkpmoJluG2V45wLQOi21KAGIWUoBZTjBPxgZ8PhjfVV2p6nN8MTY2ODQwMjA4NQ', '2022-11-13 22:01:35'),
(31, '::1', 'l8YH25tELjFzNwdALVgW6_36UEvO3bV919GutBnEdlt8hpxta_4D0WZ8MTY2ODQwMjE5OQ', '2022-11-13 22:05:59'),
(32, '::1', '-tuP1iex2zNjgsMb1sIBwYoktvqvTetvOZdDkbcosEt8TatBnQCf7w18MTY2ODQwMjM5NQ', '2022-11-13 22:06:40'),
(33, '::1', 'fhIspKM5ATEdG8BV6QUN8omJk9J2iWoTZbtNHzVwnkx8P7nmA1cLcYR8MTY2ODQwMjYwMw', '2022-11-13 22:10:08'),
(34, '::1', 'WzDwi3TOPoQHqAGQz9b66BzoNsK7_aRntCbCFIfxs_18Nj4VtrOvwa58MTY2ODQwMjc0Mw', '2022-11-13 22:12:54'),
(35, '::1', 'Sn8foC4feKX67-oyljMCihn1VPwhkJa6rYUmLxS54Kl8Vj1BCevhcUd8MTY2ODQwMzI5Mg', '2022-11-13 22:21:46'),
(36, '::1', 'XZCBvcShyHTFWAEtNgLFaVh3mGjXcbi2bvHlERBQ1Nd8zNBrrj30U2p8MTY2ODQwMzMyNA', '2022-11-13 22:22:10'),
(37, '::1', '7XV_KSfs90_ZU-h_8kiHSfx-WQ7jb0tZiFqWbmLKARx8X4v7HLlv-gl8MTY2ODQwNDAxNA', '2022-11-13 22:33:41'),
(38, '::1', 'vJhDQjx9RBkqUyGYD1m1w99pT_K4J0XGhreTQcPt6ld8El3JrqvmRh18MTY2ODQwNTQ1Ng', '2022-11-13 22:57:45'),
(39, '::1', 'azQCK-S0Ti_qOCtSpJZsS_N6zkE9iNkFCDi87ciZa0Z8vCFvl1ywhUx8MTY2ODQwNTUyNg', '2022-11-13 22:58:57'),
(40, '::1', 'BHpmG1YGz1Hs0XbdtnEYOOr10vqNVRfIg1pECL8r7Lh8yJBCfXQGwCB8MTY2ODQwNTYyOA', '2022-11-13 23:00:34'),
(41, '::1', 'E36dOXWUJJGzAzEuRCmNL128u9jK64RIXCnrtgZbNrZ88amjwTxnfX18MTY2ODQwNzY3OA', '2022-11-13 23:34:43'),
(42, '::1', 'sWDmpEEFsIJf1RenW2WLwAkgfelmhSLH5dSVF6A_cch8ARV5ghQzkyB8MTY2ODQ0NDE2NQ', '2022-11-14 09:43:04'),
(43, '::1', 'ufvdGaIzm6hbJMGua_uWQvxPMl_eUySz2ghTT-9GbmN8c74H6-fo91V8MTY2ODQ0NDIyMA', '2022-11-14 09:43:51'),
(44, '::1', 'iFNi3JWlZ17KeKq8sOEPdrlBSx_LEieD-nAGD15AA058ewPLXPkqTb58MTY2ODQ1MTI1MQ', '2022-11-14 11:41:09'),
(45, '::1', 'XHUBczMe_rQj8nN3V6Xu9OQ41Xdq5inyK3eedryq3Ih8HEs9kCbhInN8MTY2ODQ1MjAwNQ', '2022-11-14 11:53:30'),
(46, '::1', 'swHKajJwK1vyEXrajHvZhm8o9Wb1AFbJum-aETIEEvd82W8jE5L8gGJ8MTY2ODQ1MjQ3OA', '2022-11-14 12:01:29'),
(47, '::1', 'bKClp1rdwwDD-G-2kz2zZjty69ohdo4IKg7BJ_il-i98yK4yWc2R5H18MTY2ODQ1Mjg1Ng', '2022-11-14 12:08:10'),
(48, '::1', 'lnmaKtftf-1U9nCDE5rSjawXUXO6IYLqC4bRRix2FOl8KwyU-tUSu6F8MTY2ODQ1NzYyOQ', '2022-11-14 13:27:16'),
(49, '::1', '-PpWH8YkmCqVbXn226cBqFZFbvCa8751UoPTS4QZU018h9EnOkv43EJ8MTY2ODQ1NzY1MQ', '2022-11-14 13:27:36'),
(50, '::1', 'FeCyehJy9MCrrFed4WwjE5PKytIARPOLj75etkQeyq58ywntOWO3lK58MTY2ODQ1NzcwNQ', '2022-11-14 13:28:31'),
(51, '::1', 'ppGgCdZwfUMLHzvnhPgq62cSqsZX7BB4o9H2ZtxvM0x8CyCaPcxTgRx8MTY2ODQ1Nzc4NA', '2022-11-14 13:29:50'),
(52, '::1', 'Qsxnqkg06s3qZBwlQ4qfdj2nKkfe_Ba3RNBd_Lvn14p8nQ3eUH_ayR58MTY2ODQ1ODI1OQ', '2022-11-14 13:37:45'),
(53, '::1', 'XnFpLxQBiJ3GRnLcGwDlBTQXGXYURbmVUuavbE70WtV8mrxxymS5Zkh8MTY2ODQ3NDY1Ng', '2022-11-14 18:11:02'),
(54, '::1', 'J-d3tWbXzfkwrVsyUB-veHltHekVKZNGMQgYTH41IRl80h14Bew7RYF8MTY2ODQ3NDgyOA', '2022-11-14 18:13:56'),
(55, '::1', '4LSU6CW7eedzPQ5DKq4BtiwqYbAE-SFx48uK7dP44698jiCad5rTAqt8MTY2ODQ3NTE2MA', '2022-11-14 18:19:26'),
(56, '::1', 'W8LyJrJlqhVmEZ4BSP9hM6GDRtn8DrdiirfHVEsnCu98mV2hlc83A9N8MTY2ODQ3NTE5OQ', '2022-11-14 18:20:04'),
(57, '::1', 'yAEqtMOCoVgaa40kHtZ-7nidLVal7d_tADdHd_UMUOt8UYVE4UMdQMt8MTY2ODQ3NTI4OQ', '2022-11-14 18:21:36'),
(58, '::1', 'bJxHeVSj8ftzl7H5EBSlNw5y6oNjIwbPMOT1zDqzpZp8LSAV7Fh1gkV8MTY2ODQ3NTgyOA', '2022-11-14 18:30:34'),
(59, '::1', 'HcfAARTBq193D4EO4smkvZ9ukpGkQaqEIgUxH-dpl4Z8VbppaR8MmtJ8MTY2ODQ3NTg1Ng', '2022-11-14 18:31:01'),
(60, '::1', 'pXBaFzBhSiolmxY6Phnkn4Vg5OICT3blotJsyMUcJa18OeeFLq2kS7d8MTY2ODQ3NjQyNQ', '2022-11-14 18:40:32'),
(61, '::1', 'StO_4g26L9sOul6HuFwVwJhZGWl7snU4DqsEes_TzQF8gF3Yco9pp6d8MTY2ODQ3NjQ0Nw', '2022-11-14 18:41:33'),
(62, '::1', 'l_v9BGarT32vEfP4Ivb7SXNMYD4BEzwqizMCEDA3Tvd82V48mG603oF8MTY2ODQ3NjUwMw', '2022-11-14 18:41:48'),
(63, '::1', '3R0AvUZkYb6gpTPObIRanjoQUPvDV22tmZVpkNF-tQx829CNpOV-pW58MTY2ODQ3Njc0Nw', '2022-11-14 18:45:53'),
(64, '::1', 'wxvDV0Pq0EfMlp-JIJydTbhdVu9JaE0yymLqbhq-i4x8NGMtloMpZyJ8MTY2ODQ4MDA0Nw', '2022-11-14 19:40:57'),
(65, '::1', 'NTcOTnZYvh8YqEvsKm3dZv2kIddSVXNAWC0aTbMx9MZ8crgp5wofU2t8MTY2ODQ4MDQyMw', '2022-11-14 19:47:13'),
(66, '::1', 'WNZsF-Dhb5QoNkMrf513QHCb7mDfeD5298-ypuquizN8CDVrzNYwbB18MTY2ODQ4MDg5MA', '2022-11-14 19:54:56'),
(67, '::1', 'C42jzK8wM5-J62JfG8orf_rZtoB0lafIQJU3DhoJ1WV8dX-iJLsfjoV8MTY2ODQ4MDkxMg', '2022-11-14 19:55:20'),
(68, '::1', 'KjSR7St56BncMha9i4u21vfU6RPHRnimf7IHoXG2JI589kKHpq26gyJ8MTY2ODQ4MzMwMw', '2022-11-14 20:35:09'),
(69, '::1', 'XipTeWk-CMMlVw85UxALOCB5alnsxKr0ZwpKNPs7xq185HfHEz0jGn58MTY2ODQ4MzMxNQ', '2022-11-14 20:35:22'),
(70, '::1', '-q7OuLQaEkA8Vaq6VnBhylngkX7mDcFS2GHPruMllQ989Q_kvB1kOrl8MTY2ODQ4MzM2MQ', '2022-11-14 20:36:09'),
(71, '::1', 'ovSP9sw6IaB7-6ax-jFyO26y3ETvyPjU2McAg1De9oN8w8jJRuYNKyl8MTY2ODQ4Mzc3Nw', '2022-11-14 20:43:04'),
(72, '::1', 'g24CNSus3fZlsuebrEq0AV9un-ZbiwKHc-Op4j02P5B8avwAaID_TuZ8MTY2ODQ4NDEzMw', '2022-11-14 20:49:02'),
(73, '::1', '8_rCrasmTSFsp_BXUE7qVpiF-9n3G07OSrqzJ2rSSu58mAkpcRe0QmR8MTY2ODQ4NjI2MQ', '2022-11-14 21:24:26'),
(74, '::1', 'z2PhLHX6cEHDQUbAa9Chmu-6UKbAu-ahVDFv4Hbgow18_VRp4Vkftdx8MTY2ODU2MDcxMA', '2022-11-15 18:06:22'),
(75, '::1', 'Uh3T4NL4ZYH5YDU0t4t_zbiaXtj0rh0fx7rtddmbEWp8ltO-1NlyqN18MTY2ODU4NTg1Ng', '2022-11-16 01:04:36'),
(76, '::1', '0NRMkfGfgo8J-9SIaEBKFgHovQHaRkbK41Ufw5SjuxZ8tOL7sYB24cl8MTY2ODU5ODc1MA', '2022-11-16 06:40:46'),
(77, '::1', 'FpdNo-UmzI9Q-JkCbdCbHqnFg4xib7R7eu8CIQz8LuR8setJCjsTlH98MTY2ODYwNzE1MA', '2022-11-16 06:59:15'),
(78, '::1', 'R6O5As1r2T0_OaJEibyowCOn7MkiAB4LXiR3pwCXu2V8pX3b9z9PTDR8MTY2ODYwNzU5Ng', '2022-11-16 07:06:43'),
(79, '::1', 'q0VZmuDD1-SLSVfOZbj6c25RCi-Y3SACxSk6ITsYjVl8T5S0bPG3QK98MTY2ODYyMzAxNw', '2022-11-16 11:23:44'),
(80, '::1', 'zUoWHIRfMPT1D_EJFOVePYBZtgRuWxAgRU7j71pAjWp85uShAFia4UJ8MTY2ODYzODU5OA', '2022-11-16 15:43:29'),
(81, '::1', 'n-jYo2I2guWbnQKxxMl7jLk7KvSin2c0w_KCbpHdFNV8ax_j6ZNNpS18MTY2ODY0MTU2Mg', '2022-11-16 16:32:50'),
(82, '::1', 'Juw8Nq2yqyWgUDNIkEUwBcmg7VqUqXDuHrVHbjSr-qd8up_VIYvLd6h8MTY2ODY0ODk0Nw', '2022-11-16 18:35:58'),
(83, '::1', 'c-HLMfFJ8U8BSbqRx7prlGPCT5obRjtBFF03Bftm8UR8WSzQjiKhWlp8MTY2ODY0ODk1OA', '2022-11-16 18:36:06'),
(84, '::1', '0vPqFIzbvqP6KRnvWEO8_yIqFcuraxTgXyAm3Uci2xp8CiVJAbP-Ioh8MTY2ODY0ODk4OQ', '2022-11-16 18:36:37'),
(85, '::1', 'eTZZp4U6NSSEwAv0P6lICW2Hs2KnsSbiVILwAvQ6Juh841pZP4lJv418MTY2ODY0OTA3Ng', '2022-11-16 18:38:03'),
(86, '::1', 'S2e9aDBGyTl1DXH4Twhzh9HOgNgEwlH_HC9McSwpH2p8it5LxZudAiV8MTY2ODY0OTE0MQ', '2022-11-16 18:39:31'),
(87, '::1', '_ufRcqkgvO8fQl1tnyuIc64k66C1G25cVDtfn07_hwl8Fcg2oX5Q3i98MTY2ODY0OTE3Mw', '2022-11-16 18:40:33'),
(88, '::1', 'Ep2yrFHLCvxXbTNDUF5etaJTSvny12_Ahv_Q9UxAU2F8qa8wkNnnvEJ8MTY2ODY0OTIzOA', '2022-11-16 18:44:37'),
(89, '::1', 'IU5TZn81cxTrL9LAha7DDfQT3dQSr5T2Ktru4hnPlWR83q1FnLj8i-R8MTY2ODY0OTQ4MQ', '2022-11-16 18:44:51'),
(90, '::1', 'S8Tuyxf1SL4pnP1XTP7_oVPJj1B_B1DhZVrVSxmXpeZ8w4ADC9Y4izV8MTY2ODY0OTk1MA', '2022-11-16 18:52:34'),
(91, '::1', '8irT_pLS_hZlHMf9Hsb-L9ks7240lUJj2KKnWs2rgPZ8WZLjwHfe8OF8MTY2ODY1MTE4NA', '2022-11-16 19:13:18'),
(92, '::1', '83l-hilv4qjvoSgiTc9R8Aea6q71LknQScnUUVErxap8NkEANYVz_jt8MTY2ODY1MTQ0Ng', '2022-11-16 19:17:32'),
(93, '::1', 'rKmkAhe1Xhi3NorMlwdxLS9kriXnXeE5B2Pa6_W29-F8gKI2G6Em-St8MTY2ODY1MzYyNA', '2022-11-16 19:53:53'),
(94, '::1', 'fzcs4gaKBNUK-lEjatZ71D_jo2giK31NmhKrmeS6SBh8M5cshrFEQYF8MTY2ODY1Mzg5NA', '2022-11-16 19:58:18'),
(95, '::1', '7eEVP0AgeTfY4J0ZO-4F7LxQ54L7WlBGv5lO-1nQezZ8yVXEOXrXeap8MTY2ODY1MzkwOQ', '2022-11-16 19:58:39'),
(96, '::1', 'lBL5UimnA3p4ICd4ETIu1yT5tWVwUPAz_A4Gfw_5QhV8rw6mzLXGjnZ8MTY2ODY1NDkzMg', '2022-11-16 20:15:40'),
(97, '::1', 'pequt5YfwFBgE-fn0O-GgGrrocU_xhfv5aWWrp_b8zR8yJeZ8hQQ_E98MTY2ODY1NTQ0Mg', '2022-11-16 20:24:09'),
(98, '::1', 'v5qfQ90u3PshQDy14QB2yfIMrCLyJ_n6s44K0_Zuzlp8Y6JbGvXvWm18MTY2ODY1NTQ3MQ', '2022-11-16 20:24:39'),
(99, '::1', 'GwNJjViQG01O8-oKuNOLvwa_AhS7NJBEboRlxT0LcmR8z74Ic5RrXqp8MTY2ODY1NTQ3OQ', '2022-11-16 20:25:19'),
(100, '::1', 'uGjajc2I44hrWwAxx6DyfXYqPKkHMZII4E9yaIIGxQR8pCht9PgCHCJ8MTY2ODY1NTUxOQ', '2022-11-16 20:26:21'),
(101, '::1', 'UHv9iUuBGnSxCI_Y1DsLeU-q8CVA2Am-3Tp7d0FBcwB8nJDsYxfSSiJ8MTY2ODY1NTYxMg', '2022-11-16 20:26:56'),
(102, '::1', '4A8L__zqpsNYXTwpKL-4XqlCrqpiZ-8IKtb611ZJo9V8Gip3C9TObdF8MTY2ODY1NTYxNg', '2022-11-16 20:27:02'),
(103, '::1', 'XUpIYkdBn7SihfQpbPWnaOvF5y9Y3KZjwzmolomlk018oKKK7DaRj7p8MTY2ODY1NTYyMg', '2022-11-16 20:27:25'),
(104, '::1', 'MC6fPX7WTPkJI2RtxB11Vv_k3R5OEwtEsRqY_stSF5l8_7caN5t3tRh8MTY2ODY1NTY1MQ', '2022-11-16 20:27:37'),
(105, '::1', '8nafwYwGfijxBadRuvVeMOlMvGNrSr0vD_aRmJa1N1N8f08kbxRYpCB8MTY2ODY1NTc5Mw', '2022-11-16 20:29:58'),
(106, '::1', 'Y1p3vkwhpGPi0KXCg2fzaU0b1XC8K_hTp-sguhmtrM98l8jlgIQOkh58MTY2ODY1NTkwOQ', '2022-11-16 20:31:57'),
(107, '::1', 'aVDOKcsoO_lU1DNeuuDzSpwd2o1kSFv8inDhQVmGSeZ87AUNxCR-Qi18MTY2ODY1NjA1MA', '2022-11-16 20:34:16'),
(108, '::1', 'WZOJKW81bWEDalS-Si8h3fKAl5sTmIby3__7L0rz42J8jTZyJ0gzkkZ8MTY2ODY1NjE4NA', '2022-11-16 20:51:28'),
(109, '::1', 'G_W_a1mlmKoOxIVbjRFD2KRO741xgCdXKSsX07qDJ518jmjigsdnnUZ8MTY2ODY2MDM4Ng', '2022-11-16 21:46:36'),
(110, '::1', '2iT3u9ltOXLpCZXoLr9C2fFY5ZvlwhA_snpNmK-qyc583nedEOMR1XF8MTY2ODY2MDYyOA', '2022-11-16 21:50:35'),
(111, '::1', '72ZiYru6ol1x4_OTLQL7kgA88YKM2DJTqWRy0m4pwdJ8gOx7P1hL82d8MTY2ODY2MDY3MQ', '2022-11-16 21:51:25'),
(112, '::1', 'FwBryDbqw-vBxS_35Bzys1gjmM1vacBG77TAZCCaQ218j4_D4Dn8I1t8MTY2ODY2MDcwMA', '2022-11-16 21:52:08'),
(113, '::1', '4NvY-6ayyt3QMKoCrzIVYqhCxTdMkdDD4FA6d84-wAZ8Hry1GTrtg_V8MTY2ODY2MDg2Ng', '2022-11-16 21:55:17'),
(114, '::1', 'SUjB3MTMZ-8uFjr61zzSUtxneJtX1Z7z_O0FjeICm1l82q69nFJbuch8MTY2ODY2MDkxNw', '2022-11-16 21:55:45'),
(115, '::1', '2bElUYVmHbzHtpMMWB7HJBVn18F6rrAVSaOVIPXcgVZ888_RK-HJC8l8MTY2ODY2MDk1MA', '2022-11-16 21:56:07'),
(116, '::1', 'CMo04DuHgBSaLqjzHAhGAzXIbkH_r9kvE5UtHSPusOF8VOpafhqordl8MTY2ODY2NjY2OA', '2022-11-16 23:31:13'),
(117, '::1', '', '2022-11-17 00:58:06'),
(118, '::1', '', '2022-11-17 01:07:24'),
(119, '::1', '', '2022-11-17 01:08:01'),
(120, '::1', '', '2022-11-17 01:48:44'),
(121, '::1', '', '2022-11-17 23:39:31'),
(122, '::1', '', '2022-11-18 00:26:41'),
(123, '::1', '', '2022-11-18 10:32:44'),
(124, '::1', '', '2022-11-18 10:42:45'),
(125, '::1', '', '2022-11-18 11:10:22'),
(126, '::1', '', '2022-11-18 11:17:11'),
(127, '::1', '', '2022-11-18 11:27:13'),
(128, '::1', '', '2022-11-18 11:29:33'),
(129, '::1', '', '2022-11-18 12:49:08'),
(130, '::1', '', '2022-11-18 14:29:00'),
(131, '::1', '', '2022-11-18 14:36:07'),
(132, '::1', '', '2022-11-18 14:49:52'),
(133, '::1', '', '2022-11-19 03:08:33'),
(134, '::1', '', '2022-11-19 12:40:43'),
(135, '::1', '', '2022-11-19 21:20:29'),
(136, '::1', '', '2022-11-20 15:29:06'),
(137, '::1', '', '2022-11-20 15:30:50'),
(138, '::1', '', '2022-11-20 15:32:33'),
(139, '::1', '', '2022-11-20 15:32:41'),
(140, '::1', '', '2022-11-20 15:34:00'),
(141, '::1', '', '2022-11-20 15:34:50'),
(142, '::1', '', '2022-11-20 15:35:15'),
(143, '::1', '', '2022-11-20 15:36:55'),
(144, '::1', '', '2022-11-20 15:37:07'),
(145, '::1', '', '2022-11-20 15:38:15'),
(146, '::1', '', '2022-11-20 15:50:53'),
(147, '::1', '', '2022-11-20 15:52:10'),
(148, '::1', '', '2022-11-20 16:05:07'),
(149, '::1', '', '2022-11-20 16:18:53'),
(150, '::1', '', '2022-11-20 16:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `course_description` varchar(200) NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_token` varchar(300) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_code`, `course_description`, `department_id`, `user_id`, `course_token`, `date`) VALUES
(2, 'BSBA', 'Bachelor of Science in Business Administration Major in Business Economics', 1, 1, '', '2022-11-08 09:52:57'),
(3, 'BSBA', 'Bachelor of Science in Business Administration Major in Financial Management', 1, 1, '', '2022-11-08 10:10:27'),
(4, 'BSBA', 'Bachelor of Science in Business Administration Major in Marketing Management', 1, 1, '', '2022-11-08 10:14:28'),
(5, 'BSE', 'Bachelor of Science in Entrepreneurship', 1, 1, '', '2022-11-08 10:16:56'),
(6, 'BSHM', 'Bachelor of Science in Hospitality Management', 3, 1, '', '2022-11-08 10:18:05'),
(7, 'BSTM', 'Bachelor of Tourism Management', 3, 1, '', '2022-11-08 10:58:25'),
(8, 'BEE', 'Bachelor of Elementary Education', 2, 1, '', '2022-11-08 10:59:43'),
(9, 'BSED EMM', 'Bachelor of Science in Elementary Education Major in English minor in Mandarin', 2, 1, '', '2022-11-08 11:08:10'),
(10, 'BSED Filipino', 'Bachelor of Science in Elementary Education Major in Filipino', 2, 1, '', '2022-11-08 11:09:17'),
(11, 'BSED Science', 'Bachelor of Science in Elementary Education Major in Science', 2, 1, '', '2022-11-08 11:21:43'),
(12, 'BSED Mathematics', 'Bachelor of Science in Elementary Education Major in Mathematics', 2, 1, '', '2022-11-08 11:25:04'),
(13, 'BSED Social Studies', 'Bachelor of Science in Elementary Education Major in Social Studies', 2, 1, '', '2022-11-08 11:27:52'),
(14, 'BSIT', 'Bachelor of Science in Information Technology', 3, 1, '', '2022-11-08 11:28:30'),
(15, 'BIT Computer', 'Bachelor of Information Technology Major in Computer', 3, 1, '', '2022-11-08 11:29:31'),
(35, 'BITCT', 'Bachelor in Industrial Technology Major in Computer Technology', 3, 27, '1rlMft0c72GM8I2AjysVYdqpIrFk9AW-Ud3IPeS_-fF8_j3NijhcoOx8MTY2ODgwNDcwNw', '2022-11-18 21:53:07'),
(36, 'BITF', 'Bachelor in Industrial Technology Major in Foods', 3, 27, 'FgcPJGSs57vySh455YaQ1aGREvWSCSXVYLrknJAe0GJ8mRq3tXUh9M58MTY2ODgwNTE5MA', '2022-11-18 22:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_code` varchar(200) NOT NULL,
  `department_description` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `department_token` varchar(300) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_code`, `department_description`, `user_id`, `department_token`, `date`) VALUES
(1, 'BAM', 'Business and Management Department', 13, 'FgnUmTb3wf1HHP7SMYJ_EDY_J7V_gHCGAM6SRMoE3fB8ZcGuUu6kiGR8MTY2ODYwNzY3NQ', '2022-11-16 15:08:03'),
(2, 'GATE', 'General Academic and Teacher Education Department', 13, 'gnRxUw3U4G5N0CWVAK_UAYqr0cjklFbrYtnJUD-U59d87OPUAVugczZ8MTY2ODYwNzY5Nw', '2022-11-16 15:08:36'),
(3, 'IIT', 'Industrial and Information Department', 13, '5rbXEdlCy_TRohAli5Qsps0VI3ObzRNWnMt_lQGu2MB88EkVOYgMUc58MTY2ODYwNzc1NA', '2022-11-16 15:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_token` text NOT NULL,
  `history_token` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `user_token`, `history_token`, `date`) VALUES
(1, 27, '_rEa-p9ikhKhEyg9FM0GWjuJVMY6hfmXrYNL0hZpwxt8ZqQMC3jnLC58MTY2ODc5MjQ3Mw', '0R4MsTZZE_n-JdOScmLGdOmJ5rr7GkOX0beE8xMxDEV8rWSJe72iK498MTY2ODc2Njk2MA', '2022-11-21 00:17:54'),
(2, 27, '_rEa-p9ikhKhEyg9FM0GWjuJVMY6hfmXrYNL0hZpwxt8ZqQMC3jnLC58MTY2ODc5MjQ3Mw', 'rNfIYTpH-gyEuCdvQnCefQVzA2vVC5yv2hap0W21lzh88jwEyQbcIaJ8MTY2ODgwNDk0OA', '2022-11-21 00:17:59'),
(3, 27, '_rEa-p9ikhKhEyg9FM0GWjuJVMY6hfmXrYNL0hZpwxt8ZqQMC3jnLC58MTY2ODc5MjQ3Mw', 'IeKK4BNBq2nXbUpGaqKh9Xfrap3Dn8PdT3WRem5AWI18aEkq2ljR4yJ8MTY2ODgwNTUyNg', '2022-11-21 00:18:12'),
(4, 42, '21ISQweWA4Gcjn3YKwwQ3MwbMUtNxD9IAd5elFKH3Ct8ixzE4gWqDEV8MTY2ODgwMDczNQ', 'ydaKoDjGHlw90k8MhmbldoJ49WeiAPdlxvSfjWdoJrx8F6GHIsTLKcB8MTY2ODgwMjcwNw', '2022-11-21 00:19:09'),
(5, 42, '21ISQweWA4Gcjn3YKwwQ3MwbMUtNxD9IAd5elFKH3Ct8ixzE4gWqDEV8MTY2ODgwMDczNQ', 'IeKK4BNBq2nXbUpGaqKh9Xfrap3Dn8PdT3WRem5AWI18aEkq2ljR4yJ8MTY2ODgwNTUyNg', '2022-11-21 00:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE `recent` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recent_description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `researchers` varchar(300) NOT NULL,
  `adviser` varchar(100) NOT NULL,
  `date_research` date NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT '',
  `picture` varchar(300) NOT NULL,
  `picture1` varchar(300) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `research_description` longtext NOT NULL,
  `research_token` varchar(300) NOT NULL,
  `views` int(11) NOT NULL,
  `views_date` date NOT NULL DEFAULT current_timestamp(),
  `downloads` int(11) NOT NULL,
  `downloads_date` date NOT NULL DEFAULT current_timestamp(),
  `date_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `title`, `researchers`, `adviser`, `date_research`, `type`, `picture`, `picture1`, `department_id`, `course_id`, `user_id`, `research_description`, `research_token`, `views`, `views_date`, `downloads`, `downloads_date`, `date_publish`) VALUES
(1, 'BULSU Archive', 'Diether Medina', 'Mary Grace Hermogenes', '2021-11-08', 'Thesis', 'Abstract.pdf', 'Abstract-Abstract.pdf', 1, 5, 27, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet mi luctus, euismod mi ut, consequat lacus. Suspendisse tempus purus sed enim tempor suscipit.', '0R4MsTZZE_n-JdOScmLGdOmJ5rr7GkOX0beE8xMxDEV8rWSJe72iK498MTY2ODc2Njk2MA', 68, '2022-11-21', 2, '2022-11-18', '2022-11-18'),
(2, 'Marketing', 'Ayban Hernandez', 'Elenita Caparino', '2020-11-27', 'Capstone', 'Thesis.pdf', 'Thesis-Abstract.pdf', 1, 3, 27, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet mi luctus, euismod mi ut, consequat lacus. Suspendisse tempus purus sed enim tempor suscipit. \r\n', 'iuf4nza792OIIsyS1j1UQrSbXFR68-dq62hDkAS2p7B8RlatX9RcNzZ8MTY2ODc2NzI5Mw', 17, '2022-11-21', 2, '2022-11-18', '2022-11-18'),
(4, 'Uno na din period', 'Lambayan Joelyn', 'Perez Eugene', '2022-11-19', 'Capstone', 'Sa Wakas Uno na din.pdf', 'Sa Wakas Uno na din-Abstract.pdf', 1, 2, 42, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet mi luctus, euismod mi ut, consequat lacus. ', 'ydaKoDjGHlw90k8MhmbldoJ49WeiAPdlxvSfjWdoJrx8F6GHIsTLKcB8MTY2ODgwMjcwNw', 12, '2022-11-21', 3, '2022-11-20', '2022-11-18'),
(9, 'Thesis namin patapus na konting puyat pa', 'Joelyn Lambayan', 'Oliver Delima', '2022-11-19', 'Capstone', 'Thesis namin patapus na konting puyat pa.pdf', 'Thesis namin patapus na konting puyat pa-Abstract.pdf', 2, 10, 42, 'kampaykampaykampaykampay\r\nkampaykampay\r\nkampaykampaykampaykampaykampaykampaykampaykam\r\npaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampa\r\nykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykam\r\npaykampaykampaykampaykampaykampaykampaykampaykampaykampa\r\nykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampaykampay', 'rNfIYTpH-gyEuCdvQnCefQVzA2vVC5yv2hap0W21lzh88jwEyQbcIaJ8MTY2ODgwNDk0OA', 19, '2022-11-21', 1, '2022-11-19', '2022-11-18'),
(11, 'Add Thesis and Capstone', 'Ayban Hernandez', 'Eugine Perez', '2022-11-19', 'Thesis', 'Add Thesis and Capstone.pdf', 'Add Thesis and Capstone-Abstract.pdf', 3, 36, 42, ' pasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok ditopasok dito', 'IeKK4BNBq2nXbUpGaqKh9Xfrap3Dn8PdT3WRem5AWI18aEkq2ljR4yJ8MTY2ODgwNTUyNg', 11, '2022-11-21', 1, '2022-11-19', '2022-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `research_views`
--

CREATE TABLE `research_views` (
  `id` int(11) NOT NULL,
  `researchviews_token` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `ip_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research_views`
--

INSERT INTO `research_views` (`id`, `researchviews_token`, `date`, `ip_address`) VALUES
(1, 'c7jle9urFbQPIIkFvxtYDuWcxvEyaejJW6Jk32IeB_58-PbWPYeMLqB8MTY2ODE0NDgxMg', '2022-11-12 12:19:17', '::1'),
(2, 'c7jle9urFbQPIIkFvxtYDuWcxvEyaejJW6Jk32IeB_58-PbWPYeMLqB8MTY2ODE0NDgxMg', '2022-11-12 12:20:56', '::1'),
(3, 'c7jle9urFbQPIIkFvxtYDuWcxvEyaejJW6Jk32IeB_58-PbWPYeMLqB8MTY2ODE0NDgxMg', '2022-11-12 12:21:03', '::1'),
(4, 'c7jle9urFbQPIIkFvxtYDuWcxvEyaejJW6Jk32IeB_58-PbWPYeMLqB8MTY2ODE0NDgxMg', '2022-11-12 12:21:07', '::1'),
(5, 'c7jle9urFbQPIIkFvxtYDuWcxvEyaejJW6Jk32IeB_58-PbWPYeMLqB8MTY2ODE0NDgxMg', '2022-11-12 12:21:10', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Student'),
(3, 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `savedpaper`
--

CREATE TABLE `savedpaper` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_token` text NOT NULL,
  `research_id` int(11) NOT NULL,
  `saved_token` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savedpaper`
--

INSERT INTO `savedpaper` (`id`, `user_id`, `user_token`, `research_id`, `saved_token`, `date`) VALUES
(1, 42, '21ISQweWA4Gcjn3YKwwQ3MwbMUtNxD9IAd5elFKH3Ct8ixzE4gWqDEV8MTY2ODgwMDczNQ', 1, '0R4MsTZZE_n-JdOScmLGdOmJ5rr7GkOX0beE8xMxDEV8rWSJe72iK498MTY2ODc2Njk2MA', '2022-11-21 00:03:30'),
(2, 27, '_rEa-p9ikhKhEyg9FM0GWjuJVMY6hfmXrYNL0hZpwxt8ZqQMC3jnLC58MTY2ODc5MjQ3Mw', 1, '0R4MsTZZE_n-JdOScmLGdOmJ5rr7GkOX0beE8xMxDEV8rWSJe72iK498MTY2ODc2Njk2MA', '2022-11-20 15:36:40'),
(3, 27, '_rEa-p9ikhKhEyg9FM0GWjuJVMY6hfmXrYNL0hZpwxt8ZqQMC3jnLC58MTY2ODc5MjQ3Mw', 2, 'iuf4nza792OIIsyS1j1UQrSbXFR68-dq62hDkAS2p7B8RlatX9RcNzZ8MTY2ODc2NzI5Mw', '2022-11-20 15:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `playerid` int(10) UNSIGNED NOT NULL,
  `score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`playerid`, `score`) VALUES
(1, 10),
(2, 40),
(3, 20),
(4, 9),
(5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `temp_user`
--

CREATE TABLE `temp_user` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `temp_token` varchar(300) NOT NULL,
  `date_validate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `school_id` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) NOT NULL,
  `email_verified` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `picture` varchar(300) DEFAULT NULL,
  `user_token` text NOT NULL,
  `date_validate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `school_id`, `firstname`, `middlename`, `lastname`, `email_verified`, `password`, `department_id`, `course_id`, `role_id`, `picture`, `user_token`, `date_validate`) VALUES
(27, '123654', 'Jeswel', NULL, 'Gomez', 'gomez.jeswel.r@bulsu.edu.ph', '$2y$10$um26v7U2WIW31VSUejLRUud3K.Iq8zndRK3BxdOYAg2iIMOmSnEXu', 1, NULL, 1, NULL, '_rEa-p9ikhKhEyg9FM0GWjuJVMY6hfmXrYNL0hZpwxt8ZqQMC3jnLC58MTY2ODc5MjQ3Mw', '2022-11-14'),
(42, '231121', 'Student', NULL, 'Sample Uno', 'sampleuno.student@bulsu.edu.ph', '$2y$10$X1NcDxNFdzi74N6zw4xDUuIsYw4fzI6jBdRRoZz3RARiEzsomi76K', 2, 12, 2, NULL, '21ISQweWA4Gcjn3YKwwQ3MwbMUtNxD9IAd5elFKH3Ct8ixzE4gWqDEV8MTY2ODgwMDczNQ', '2022-11-18'),
(43, '123456736', 'Sample', NULL, 'Student student', 'student.sampleone@bulsu.edu.ph', '$2y$10$neL7aUPUjz7a1ucEWoE3K.yVL/r8ljBZO4NGVIdLjM54HUvIg8ZDS', 1, 5, 2, NULL, 'l2l6MmbnQDZMSnjCvikgXWhRRPwEa1Ou2r0MPiObzIx8wUO2SwBO87J8MTY2ODgwMDk4MA', '2022-11-18'),
(49, '8521364', 'Mary Rose', NULL, 'Columbres', 'columbres.maryrose@bulsu.edu.ph', '$2y$10$NhydBbsfQow.JBLdw9BIJuEFH9NQLyzmEa9SIdq4h31tLPqMejK/G', 3, NULL, 3, NULL, 'G_xQX2UBZAOfmAZP5fm092qwV2p-qmVjSl9KxQeCajR8uTS_uvBH39t8MTY2ODgwNzA4MA', '2022-11-18'),
(50, '2019501429', 'Jed', NULL, 'Cauan', 'cauan.jed.f@bulsu.edu.ph', '$2y$10$um26v7U2WIW31VSUejLRUud3K.Iq8zndRK3BxdOYAg2iIMOmSnEXu', 3, 35, 2, NULL, 'cIANqzyRP6o2lNavTLsglZtganlU5Ctm5kI0nbXiqaR8SyMXojcf9J58MTY2ODgwNzExNg', '2022-11-18'),
(52, '12345678851', 'faculty', NULL, 'faculty', 'faculty1@bulsu.edu.ph', '$2y$10$Gu9Qbgm435JiiWBl9dMUAuVwCNvJdZuRV/0BKxHEp2sYGCTBTnq4W', 1, NULL, 3, NULL, 'z1RCGIWHvO6Z4XIeulfgnrK806IGmBR7wF-u-UZLDwR8bxKOM55U2eB8MTY2ODk4MzgyNw', '2022-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter_table`
--
ALTER TABLE `counter_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent`
--
ALTER TABLE `recent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_views`
--
ALTER TABLE `research_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savedpaper`
--
ALTER TABLE `savedpaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`playerid`);

--
-- Indexes for table `temp_user`
--
ALTER TABLE `temp_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter_table`
--
ALTER TABLE `counter_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recent`
--
ALTER TABLE `recent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `research_views`
--
ALTER TABLE `research_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `savedpaper`
--
ALTER TABLE `savedpaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `playerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temp_user`
--
ALTER TABLE `temp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
