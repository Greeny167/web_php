-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2019 lúc 04:47 AM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eng_online_demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `AVATAR` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`username`, `PASS`, `role_id`, `create_date`, `AVATAR`) VALUES
('std_ngocmn', '123456', 'student', '2019-11-04 00:00:00', '51076298_2989441557748001_39945613919387648_n.png'),
('std_ngocmn2', '123456', 'student', '2019-11-10 00:00:00', '53435126_3089506194408203_4628828048949510144_n.png'),
('std_ngocmn3', '0123456', 'student', '2019-11-10 00:00:00', 'Capture.PNG'),
('std_ngocmn4', '123456', 'student', '2019-11-16 00:00:00', '52823409_2366051810123882_2530041294202339328_n.jpg'),
('std_ngocmn5', '123456', 'student', '2019-10-27 00:00:00', 'e311ae28aa65955e526a19d954ff7788.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `ROLE_ID` char(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`ROLE_ID`) VALUES
('admin'),
('student'),
('teacher');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `USERNAME` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `FULLNAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date DEFAULT NULL,
  `SEX` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ADDRESS` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PHONE` char(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`USERNAME`, `FULLNAME`, `DOB`, `SEX`, `EMAIL`, `ADDRESS`, `PHONE`) VALUES
('std_ngocmn', 'Mai NhÆ° Ngá»c', '2019-10-27', 'femal', 'ngoc@gmail.com', 'HCM City', '013763556'),
('std_ngocmn2', 'Mai NhÆ° Ngá»c 2', '2019-10-27', 'male', 'ngoc2@gmail.com', 'HCM City', '0762425834'),
('std_ngocmn3', 'Mai NhÆ° Ngá»c 3', '1999-07-07', 'femal', 'ngoc3@gmail.com', 'HCM City', '082346359'),
('std_ngocmn4', 'Mai NhÆ° Ngá»c', '2019-10-27', 'femal', 'ngoc4@gmail.com', 'HCM City', '0762924646'),
('std_ngocmn5', 'Mai NhÆ° Ngá»c 5', '2018-12-30', 'femal', 'ngoc5@gmail.com', 'HCM Cityyy', '0876353585');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`),
  ADD KEY `account_role_FK` (`role_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_role_FK` FOREIGN KEY (`role_id`) REFERENCES `role` (`ROLE_ID`);

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `STU_ACC_FK` FOREIGN KEY (`USERNAME`) REFERENCES `account` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
