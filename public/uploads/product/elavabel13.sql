-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 27, 2019 lúc 09:49 AM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `elavabel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_17_061837_create_tbl_admin_table', 1),
(4, '2019_11_18_142737_creat_tbl_category_product', 2),
(5, '2019_11_21_042408_create_tbl_brand_product', 3),
(6, '2019_11_22_055445_create_tbl_khuvuc_product', 4),
(7, '2019_11_22_082143_create_tbl_thaoluan_product', 5),
(8, '2019_11_22_091258_create_tbl_product', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Huy Hoang', '0978326531', '2019-11-15 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(8, 'Mr Simple', 'Trend', 0, NULL, NULL),
(9, 'YG', 'StreetWear', 0, NULL, NULL),
(7, '4Men', 'Chất', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`, `product_name`) VALUES
(5, 7, 6, 'Xanh', 'Chaats luong cao nhat', '400.000', 'aothun85.jpg', 0, NULL, NULL, 'San Pham 1'),
(2, 7, 6, 'San Pham Nguyen Combo 2', 'Rat Dep nhat', '500.00', '65.png', 0, NULL, NULL, 'San Pham 3'),
(6, 8, 6, 'dep tuyet voi', 'xanh', '1.000.000', 'aothun26.jpg', 0, NULL, NULL, 'San Pham 4'),
(4, 6, 6, 'asdasfad', 'afasdfasdgda', '1.000.000', 'nam241.png', 0, NULL, NULL, 'San Pham 2'),
(7, 9, 7, 'Áo Thun', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '230.000', 'aothun45.jpg', 0, NULL, NULL, 'Áo Thun Trơn 1'),
(8, 9, 7, 'Áo Thun cổ tròn', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '235.000', 'aothun230.jpg', 0, NULL, NULL, 'Áo thun Trơn 2'),
(9, 9, 7, 'Áo Thun Đỏ', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '250.00', 'aothun351.jpg', 0, NULL, NULL, 'Áo thun Trơn 3'),
(10, 13, 8, 'Vest cao cấp', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '1.500.000', 'nam311.png', 0, NULL, NULL, 'Vest Nam'),
(11, 12, 8, 'Sơ Mi Trắng sọc đen', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '430.000', 'nam 921.jpeg', 0, NULL, NULL, 'Sơ Mi Trắng'),
(12, 15, 9, 'Short Màu', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '280.000', 'nam846.png', 0, NULL, NULL, 'Quan Short'),
(13, 14, 9, 'Áo Khoác Da Cá', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '700.000', 'nam424.png', 0, NULL, NULL, 'Áo khoác'),
(14, 11, 8, 'Quần Tây', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '430.000', 'nam245.png', 0, NULL, NULL, 'Quần Tây Nam'),
(15, 10, 9, 'Jeans 1', 'Cam kết đúng như hình và chất lượng hàng đẹp 100%', '540.000', 'jeans145.jpg', 1, NULL, NULL, 'Quần Jeans'),
(16, 15, 9, 'Xam', 'Xam', '290.000', 'short245.jpeg', 1, NULL, NULL, 'Short 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
