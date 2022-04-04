-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2022 lúc 05:26 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duannhom2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`id`, `name`) VALUES
(7, 'AF1'),
(8, 'Mlb'),
(9, 'Jordan'),
(10, 'Mcqueen'),
(11, ' Converse');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `iduser`, `idproduct`, `time`) VALUES
(8, 'adda', 2, 8, '2022-04-01'),
(9, 'adda', 2, 8, '2022-04-01'),
(10, 'Hải', 2, 8, '2022-04-01'),
(11, 'Hải', 2, 8, '2022-04-01'),
(12, ' Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải Hải ', 2, 8, '2022-04-01'),
(13, 'd', 2, 8, '2022-04-01'),
(14, 'Hải', 2, 8, '2022-04-01'),
(15, 'á', 2, 9, '2022-04-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `note` text NOT NULL,
  `total` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale` varchar(10) NOT NULL,
  `images` varchar(255) NOT NULL,
  `images1` varchar(255) NOT NULL,
  `images2` varchar(255) NOT NULL,
  `view` int(5) NOT NULL,
  `description` text NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp(),
  `idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale`, `images`, `images1`, `images2`, `view`, `description`, `time`, `idcategory`) VALUES
(8, 'MLB Boston 1:1 ( Trung )', 390000, '0%', '1.jpg', '2.jpg', '3.jpg', 29, 'NICE ^^', '2022-03-27', 8),
(9, 'AF1 White Brown Trắng Nâu 1:1 ', 390000, '10%', 'af67-300x300.png', 'af66-300x300.png', 'af66-300x300 (1).png', 182, 'ĐẸP', '2022-03-27', 7),
(10, 'AF1 Panda 1:1', 350000, '2%', 'af46-300x300 (1).png', 'af46-300x300.png', 'af47-300x300.png', 63, 'Đẹp thế', '2022-03-28', 7),
(11, 'MLB NY Đế Nâu 1:1 Trung', 370000, '12%', 'mlb12-300x300.png', 'mlb11-300x300.png', 'mlb11-300x300 (1).png', 102, 'Ok', '2022-03-28', 8),
(14, 'JD 1 hight mocha pink 1:1', 380000, '2%', 'z3256856569769_e55371dc0ef44e3b84001a4cf7c67b5a-300x300 (1).jpg', 'z3256856569769_e55371dc0ef44e3b84001a4cf7c67b5a-300x300.jpg', 'z3256856590622_b054d0f07fdab6fc296f3c19d9a67f56-300x300.jpg', 30, 'Hong', '2022-03-28', 9),
(19, ' AF1 Travis Xanh Đen 1:1', 390000, '10%', 'z3256905459468_6768b83dfda454c43a2214a9d3e7bba4-300x300.jpg', 'z3256905457882_88197ab21b1583c9cc28397c0024ce6a-300x300.jpg', 'z3256905446214_fab0b3bf7e83655f4d1869ca8eecbf85-300x300.jpg', 49, 'Good', '2022-03-28', 7),
(20, ' AF1 Travis Xanh Đen 1:1', 390000, '10%', 'z3256905459468_6768b83dfda454c43a2214a9d3e7bba4-300x300.jpg', 'z3256905457882_88197ab21b1583c9cc28397c0024ce6a-300x300.jpg', 'z3256905446214_fab0b3bf7e83655f4d1869ca8eecbf85-300x300.jpg', 182, 'Good', '2022-03-28', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `roleId`) VALUES
(1, 'Hai Nguyen Van', 'haibrave@gmail.com', '123', 1),
(2, 'Nguyễn Văn Hải', 'admin2@gmail.com', '123', 2),
(3, 'Nguyễn Văn Hải', 'admin3@gmail.com', '123', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order` (`order_id`),
  ADD KEY `order_detail_ibfk_1` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
