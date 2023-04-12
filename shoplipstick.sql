-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 06, 2023 lúc 06:11 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoplipstick`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(10) NOT NULL,
  `fullname` varchar(1000) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phoneNumber` int(10) DEFAULT NULL,
  `id_tk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `fullname`, `address`, `phoneNumber`, `id_tk`) VALUES
(6, 'Vy', 'Vinh Long', 394206302, 5),
(8, 'Lê Quốc Minh', '553, 30/4, Ninh Kiều', 394206302, 1),
(9, 'HUY', 'Phu Quoc', 1122334455, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `images` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `name_cart` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `price_cart` int(11) NOT NULL,
  `quantity_cart` int(11) NOT NULL,
  `total_cart` int(11) DEFAULT NULL,
  `id_tk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `images`, `name_cart`, `price_cart`, `quantity_cart`, `total_cart`, `id_tk`) VALUES
(89, 's4.png', 'Lip Balm', 250, 1, 250, 5),
(93, 's9.png', 'Pink Rose', 199, 1, 199, 6),
(95, 's4.png', 'Lipstick One 1111', 250, 1, 250, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_pd` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `name_pd` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `price_pd` float NOT NULL,
  `quantity_pd` int(11) NOT NULL,
  `made_in` varchar(1000) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_pd`, `images`, `name_pd`, `price_pd`, `quantity_pd`, `made_in`) VALUES
('pd2', 's3.png', 'Lipstick orange', 223, 20, 'India'),
('pd3', 's3.png', 'Lipstick orange', 68, 100, 'Vietnam'),
('pd4', 's4.png', 'Lipstick One 1111', 250, 120, 'India'),
('pd5', 's5.png', 'Lip Cross One', 68, 100, 'Vietnam'),
('pd6', 's9.png', 'Pink Rose', 199, 29, 'Russia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(10) NOT NULL,
  `name_tk` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `email_tk` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `password_tk` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `name_tk`, `email_tk`, `password_tk`) VALUES
(1, 'admin', 'minhle26022002@gmail.com', 'minhcute123'),
(3, 'quy', 'quy123@gmail.com', '123'),
(4, 'huy', 'huyml123@gmail.com', '123'),
(5, 'vy', 'vy123@gmail.com', '123'),
(6, 'Giang', 'giang123@gmail.com', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD UNIQUE KEY `id_bill` (`id_bill`),
  ADD KEY `id_tk_fk` (`id_tk`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD UNIQUE KEY `id_cart` (`id_cart`),
  ADD KEY `idtk` (`id_tk`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_pd`),
  ADD UNIQUE KEY `id_pd` (`id_pd`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`),
  ADD UNIQUE KEY `name_tk` (`name_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `id_tk_fk` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `idtk` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
