-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 23, 2019 lúc 02:26 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data3-1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `title`, `image`, `active`) VALUES
(39, '', 'autochess.png', 0),
(41, '', 'steam_wallet_card_5-460x215-457x213.png', 0),
(43, '', 'acc.jpg', 0),
(44, '', '636778948808659826_H1x2.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `content`) VALUES
(24, 'HÃ nh Ä‘á»™ng', ''),
(25, 'Chiáº¿n thuáº­t', ''),
(26, 'Nháº­p vai', ''),
(27, 'Thá»ƒ thao', ''),
(28, 'FPS', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) UNSIGNED NOT NULL,
  `idproduct` int(11) NOT NULL,
  `namemember` varchar(50) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `idproduct`, `namemember`, `noidung`) VALUES
(1, 51, 'a', 'a'),
(2, 51, 'a', 'a'),
(3, 47, 'aaa', 'aaa'),
(4, 47, 'ahihi', 'hihihih'),
(5, 49, 'aaa', 'a'),
(6, 49, 'aaa', 'a'),
(7, 49, 'aaa', 'a'),
(8, 49, 'aaa', 'a'),
(9, 49, 'aaa', 'a'),
(10, 49, 'aaa', 'a'),
(11, 49, 'aaa', 'a'),
(12, 49, 'aaa', 'a'),
(13, 49, 'aaa', 'a'),
(14, 49, 'aaa', 'a'),
(15, 53, 'a', 'aaaa'),
(16, 48, 'a', 'a'),
(17, 48, 'Quang', 'Sáº£n pháº©m tá»‘t'),
(18, 92, 'Ã¡dsadsasad', 'sdsadas');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_oder`
--

CREATE TABLE `tbl_oder` (
  `id` int(11) NOT NULL,
  `diachi` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `idproduct` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` float NOT NULL,
  `tenkhachhang` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `note` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `hinhthuc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_oder`
--

INSERT INTO `tbl_oder` (`id`, `diachi`, `idproduct`, `soluong`, `tongtien`, `tenkhachhang`, `email`, `phone`, `note`, `hinhthuc`) VALUES
(1, 'sadsad', 94, 1, 750000, 'sadsaasdsad', 'sadsadsa@gmail.com', '012222222', '', 'Thanh toÃ¡n táº¡i cá»­a hÃ ng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_vietnamese_ci,
  `content` text COLLATE utf8_vietnamese_ci,
  `image` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `content`, `image`) VALUES
(11, 'HÃ© lá»™ nhá»¯ng thÃ´ng tin Ä‘áº§u tiÃªn vá» tá»±a game báº¯n tá»‰a Sniper Elite 5', '', 'sniperelit.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `masp` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `category` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `chitiet` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `masp`, `price`, `image`, `category`, `chitiet`) VALUES
(92, 'Grand Theft Auto V', 'GTAV', 250000, 'GTA5.jpg', '24', ''),
(93, 'Counter-Strike: Global Offensive', 'CS:GO', 150000, 'csgo.jpg', '28', ''),
(94, 'Sid Meierâ€™s CivilizationÂ® VI', 'SMCVI', 500000, 'sid.jpg', '25', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_sale`
--

CREATE TABLE `tbl_product_sale` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `chitiet` text NOT NULL,
  `giamgia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_sale`
--

INSERT INTO `tbl_product_sale` (`id`, `name`, `masp`, `price`, `image`, `category`, `chitiet`, `giamgia`) VALUES
(23, 'Sid Meierâ€™s CivilizationÂ® VI', 'SMCVI', 150000, 'sid.jpg', '25', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `name` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `name`, `email`, `phone`, `address`, `password`) VALUES
('admin', 'admin', 'admin@gmail.com', '7777777', 'HCM', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_oder`
--
ALTER TABLE `tbl_oder`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product_sale`
--
ALTER TABLE `tbl_product_sale`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_oder`
--
ALTER TABLE `tbl_oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `tbl_product_sale`
--
ALTER TABLE `tbl_product_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
