-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 10:33 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE IF NOT EXISTS `chef` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `fa` varchar(255) DEFAULT NULL,
  `googlel` varchar(25) DEFAULT NULL,
  `tw` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `img` varchar(222) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`id`, `name`, `major`, `status`, `fa`, `googlel`, `tw`, `created_at`, `updated_at`, `img`) VALUES
(11, 'Nghệ Thuật123', 'sinh viên 2', 1, 'fa', 'fa', 'fa', '2018-08-08 04:43:50', '0000-00-00 00:00:00', '2018/08/37010146_1259556480853888_2117127098324746240_n.jpg'),
(12, 'Long Nguyễn', 'Master', 1, '', '', '', '2018-08-08 15:37:34', '0000-00-00 00:00:00', '2018/08/chef4.jpg'),
(13, 'Học Tập', 'sinh viên', 1, 'fa', 'fa', 'fa', '2018-08-08 15:37:25', '0000-00-00 00:00:00', '2018/08/chef3.jpg'),
(16, 'tran van teo', 'sinh viên', 1, 'fa', '', '', '2018-08-08 15:37:13', '0000-00-00 00:00:00', '2018/08/chef2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL,
  `txtlog1` text NOT NULL,
  `txtlog2` text NOT NULL,
  `fa` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `zalo` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `Introduction1` text NOT NULL,
  `Introduction2` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `title2` text NOT NULL,
  `choose` text NOT NULL,
  `titlechose` text NOT NULL,
  `address` text NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `footer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `txtlog1`, `txtlog2`, `fa`, `tw`, `google`, `zalo`, `title`, `Introduction1`, `Introduction2`, `img`, `title2`, `choose`, `titlechose`, `address`, `phone1`, `phone2`, `email`, `map`, `youtube`, `footer`, `created_at`, `updated_at`) VALUES
(1, 'THANG', 'FOOD', 'https://viblo.asia/p/huong-dan-cai-dat-unisharplaravel-filemanager-thu-vien-upload-anh-cho-ckeditorjs-voi-laravel-m68Z0wV6KkG', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'Chào mừng bận đến với nhà hàng của chúng tôi', 'Trải nghiệm phong cách ẩm thực hạng sang chưa bao giờ đơn giản đến thế. Mỗi nhân viên của VB Food hiểu rằng, đem tới bữa ăn ngon cho gia đình bạn chính là sứ mệnh của chúng tôi', 'hưởng thức ẩm thức Nhật Bản giữa bầu không khí hiện đại của phong cách nhà hàng đường phố? Đặt bàn ngay bạn nhé', '', '', 'Phong cách ẩm thực hiện đại', 'Luôn đặt vị trí khách hàng lên hàng đầu', '368/7 Nguyễn Văn Nghi , Phường 7 ,Gò Vấp', '016686014', '01689792438', 'tranquyetthang196@gmail.com', '203.2031', 's', '<p>- Gyuutan Shichu (Lưỡi b&ograve; hầm)<br />\r\n- Asugiri Becon (Thịt hun kh&oacute;i)<br />\r\n<br />\r\n- Samon Sushi Moriawase (Sushi c&aacute; hồi tổng hợp)<br />\r\n- Gyuniku Sushi (Sushi b&ograve;)</p>\r\n\r\n<p>- Ribu Roosu (Sườn b&ograve; Mỹ th&aacute;i l&aacute;t)<br />\r\n- Burisuketto (Gầu b&ograve;)<br />\r\n&nbsp;</p>\r\n', '2018-08-08 16:04:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Trần Quyết Thắng', '01689792438', 'cauthuxuatsac222@gmail.com', 'ádsad', '2018-08-05 13:34:16', '0000-00-00 00:00:00'),
(2, 'Trần Quyết Thắng', '01689792438', 'cauthuxuatsac222@gmail.com', 'ok', '2018-08-07 06:31:55', '0000-00-00 00:00:00'),
(4, 'trần văn tèo', '1689792438', 'cauthuxuatsac222@gmail.com', 'adasdsadasd', '2018-08-07 07:10:26', '0000-00-00 00:00:00'),
(5, 'Trần Quyết Thắng123', '01689792438', 'cauthuxuatsac222@gmail.com', '12313123', '2018-08-08 11:01:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `custumer`
--

CREATE TABLE IF NOT EXISTS `custumer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) NOT NULL,
  `content` text,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custumer`
--

INSERT INTO `custumer` (`id`, `name`, `job`, `content`, `status`, `img`, `created_at`, `updated_at`) VALUES
(3, 'Hương Tràm', 'Ca sĩ', 'Luôn cảm thấy hài lòng  với các nhóm ăn trai nghiệm từ nhà hàng , với một không gian rộng rãi và thoải mái', 1, '2018/08/images.jpg', '2018-08-08 07:50:17', '0000-00-00 00:00:00'),
(4, 'Lương Viết Quang ', 'Ca sĩ', 'Luôn cảm thấy hài lòng  với các nhóm ăn trai nghiệm từ nhà hàng , với một không gian rộng rãi và thoải mái', 1, '2018/08/images_(1).jpg', '2018-08-08 07:50:05', '0000-00-00 00:00:00'),
(5, 'Phạm Thanh', 'Nhần Viên', 'Luôn cảm thấy hài lòng  với các nhóm ăn trai nghiệm từ nhà hàng , với một không gian rộng rãi và thoải mái', 1, '2018/08/Girl-xinh-Viet-Nam-by-Ly-Khanh-MrCong_com-001.jpg', '2018-08-08 07:49:52', '0000-00-00 00:00:00'),
(6, 'Hồ Ngọc Hà', 'Ca sĩ', 'Luôn cảm thấy hài lòng  với các nhóm ăn trai nghiệm từ nhà hàng , với một không gian rộng rãi và thoải mái', 1, '2018/08/37010146_1259556480853888_2117127098324746240_n.jpg', '2018-08-08 07:49:39', '0000-00-00 00:00:00'),
(8, 'Nghệ Thuật 1', 'Nhần Viên', 'sdasd', 1, '2018/08/4296443_GirlXinh-Part8_ThienITCollection_24-min.jpg', '2018-08-08 07:41:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `eat`
--

CREATE TABLE IF NOT EXISTS `eat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eat`
--

INSERT INTO `eat` (`id`, `name`, `price`, `content`, `status`, `order`, `id_type`, `created_at`, `updated_at`) VALUES
(1, 'Cam ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 1, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(2, 'Cam2 ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 1, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(3, 'Cam3 ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 1, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(4, 'Cam4 ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 1, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(5, 'Táo1 ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 2, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(6, 'Táo2 ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 2, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(7, 'Táo3 ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 2, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(8, 'Táo4 ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 2, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(9, 'Cá Chiên ', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 3, '2018-08-07 04:40:44', '0000-00-00 00:00:00'),
(10, 'Cá Chiên 1', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 3, '2018-08-07 04:40:43', '0000-00-00 00:00:00'),
(11, 'Cá Chiên 2', '20', 'Luôn tươi ngon và bổ dưỡng', 1, 1, 3, '2018-08-07 04:40:43', '0000-00-00 00:00:00'),
(15, 'Sữa Tươi', '50', 'Thơm ngon', 1, 0, 3, '2018-08-07 04:40:43', '0000-00-00 00:00:00'),
(16, 'Sữa Tươi', '50', 'Thơm ngon', 1, 1, 3, '2018-08-07 04:40:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `li`
--

CREATE TABLE IF NOT EXISTS `li` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `li`
--

INSERT INTO `li` (`id`, `name`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Kem', 'p1.jpg', 1, '2018-08-04 14:11:30', '0000-00-00 00:00:00'),
(2, 'Bánh Kem', 'p2.jpg', 1, '2018-08-04 14:11:39', '0000-00-00 00:00:00'),
(3, 'Bánh Kem', 'p3.jpg', 1, '2018-08-04 14:11:44', '0000-00-00 00:00:00'),
(4, 'Bánh Kem', 'p4.jpg', 1, '2018-08-04 14:11:47', '0000-00-00 00:00:00'),
(5, 'Bánh Kem', 'p5.jpg', 1, '2018-08-04 14:11:53', '0000-00-00 00:00:00'),
(6, 'Bánh Kem', 'p6.jpg', 1, '2018-08-04 14:12:00', '0000-00-00 00:00:00'),
(7, 'Bánh Kem', 'p7.jpg', 1, '2018-08-04 14:12:04', '0000-00-00 00:00:00'),
(8, 'Bánh Kem', 'p8.jpg', 1, '2018-08-04 14:12:07', '0000-00-00 00:00:00'),
(9, 'Bánh Kem', 'p9.jpg', 1, '2018-08-04 14:12:11', '0000-00-00 00:00:00'),
(10, 'Bánh Kem', 'p10.jpg', 1, '2018-08-04 14:12:16', '0000-00-00 00:00:00'),
(11, 'Bánh Kem', 'p11.jpg', 1, '2018-08-04 14:12:19', '0000-00-00 00:00:00'),
(12, 'Bánh Kem', 'p12.jpg', 1, '2018-08-04 14:12:23', '0000-00-00 00:00:00'),
(13, 'Bánh Kem', 'p13.jpg', 1, '2018-08-04 14:12:26', '0000-00-00 00:00:00'),
(44, 'Nghệ Thuật', '2018/08/4296443_GirlXinh-Part8_ThienITCollection_24-min.jpg', 1, '2018-08-08 06:46:08', '0000-00-00 00:00:00'),
(45, 'Nghệ Thuật 1', '2018/08/37010146_1259556480853888_2117127098324746240_n.jpg', 1, '2018-08-08 06:47:33', '0000-00-00 00:00:00'),
(46, 'Trần Văn Tèo', '2018/08/Girl-xinh-Viet-Nam-by-Ly-Khanh-MrCong_com-001.jpg', 0, '2018-08-08 10:27:48', '0000-00-00 00:00:00'),
(47, 'Học Tập', '2018/08/cc.JPG', 1, '2018-08-08 10:27:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `content`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(29, 'Các Món Đặc Biệt', 'Các món ngon mỗi ngày', 'fa fa-glass', 1, '2018-08-06 17:02:56', '0000-00-00 00:00:00'),
(30, 'Bữa Trưa', 'Các món ngon mỗi ngày', 'fa fa-cutlery', 1, '2018-08-07 00:57:33', '0000-00-00 00:00:00'),
(31, 'Bữa tối', 'Món ngon mỗi ngày', 'fa fa-cutlery', 1, '2018-08-07 08:30:29', '0000-00-00 00:00:00'),
(32, 'Sáng chủ nhật', 'Khuyễn mãi mỗi tuần', 'fa fa-cutlery', 1, '2018-08-07 08:30:44', '0000-00-00 00:00:00'),
(33, 'Thiết kế không gian', 'Dịch Vụ', 'fa fa-apple', 1, '2018-08-07 08:31:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `people` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id`, `name`, `phone`, `status`, `email`, `people`, `date`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Trần Quyết Thắng', '1689792438', 1, 'cuteo@gmail.com', 0, '08/15/2018', '123123', '2018-08-07 05:59:58', '0000-00-00 00:00:00'),
(2, 'Trần Quyết Thắng', '1689792438', 1, 'cauthuxuatsac222@gmail.com', 0, '08/17/2018', 'sadasd', '2018-08-07 05:59:58', '0000-00-00 00:00:00'),
(4, 'Trần Quyết Thắng', '1689792438', 1, 'cauthuxuatsac222@gmail.com', 3, '08/24/2018', '132131321', '2018-08-07 05:59:58', '0000-00-00 00:00:00'),
(5, 'Nguyễn Sơn Nam', '0131232', 0, 'tung@gmail.com', 12, '12/07/2017', 'Các món ngon mỗi ngày', '2018-08-07 06:01:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `type_eat`
--

CREATE TABLE IF NOT EXISTS `type_eat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_eat`
--

INSERT INTO `type_eat` (`id`, `name`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Bữa Sáng', 1, 1, '2018-08-07 03:13:51', '0000-00-00 00:00:00'),
(2, 'Bữa Trưa', 1, 2, '2018-08-07 03:13:59', '0000-00-00 00:00:00'),
(3, 'Bữa Tối', 1, 1, '2018-08-07 03:13:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emaill` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `passowrd` text NOT NULL,
  `avatar` text,
  `role` int(11) NOT NULL DEFAULT '1',
  `token` text NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `fa` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `emaill`, `address`, `passowrd`, `avatar`, `role`, `token`, `active`, `fa`, `google`, `birthday`, `created_at`, `updated_at`) VALUES
(1, 'tranquyetthang', 'cauthuxuatsac222@gmail.com', NULL, '123123123', NULL, 1, '2342423423đsfsdfsdf', 1, NULL, NULL, NULL, '2018-08-09 11:40:14', '0000-00-00 00:00:00'),
(3, 'te123o', '211233@mg1ail.com', '123', '123213123', NULL, 1, '1', 1, 'áda', 'sdsad', 'sadad', '2018-08-09 17:15:30', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eat`
--
ALTER TABLE `eat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `li`
--
ALTER TABLE `li`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_eat`
--
ALTER TABLE `type_eat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `eat`
--
ALTER TABLE `eat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `li`
--
ALTER TABLE `li`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `type_eat`
--
ALTER TABLE `type_eat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `eat`
--
ALTER TABLE `eat`
  ADD CONSTRAINT `eat_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_eat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
