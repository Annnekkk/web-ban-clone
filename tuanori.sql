-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 24, 2022 lúc 12:07 AM
-- Phiên bản máy phục vụ: 5.7.38-cll-lve
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tmailscantpcom_tuanori`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `stk` text NOT NULL,
  `name` text NOT NULL,
  `bank_name` text NOT NULL,
  `chi_nhanh` text NOT NULL,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank_auto`
--

CREATE TABLE `bank_auto` (
  `id` int(11) NOT NULL,
  `tid` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_vietnamese_ci,
  `amount` int(11) DEFAULT '0',
  `cusum_balance` int(11) DEFAULT '0',
  `time` datetime DEFAULT NULL,
  `bank_sub_acc_id` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` varchar(32) NOT NULL,
  `loaithe` varchar(32) NOT NULL,
  `menhgia` int(11) NOT NULL,
  `thucnhan` int(11) DEFAULT '0',
  `seri` text NOT NULL,
  `pin` text NOT NULL,
  `createdate` datetime NOT NULL,
  `status` varchar(32) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `pin` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `display` varchar(32) DEFAULT 'show',
  `money` int(11) NOT NULL DEFAULT '0',
  `badge` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `code`, `pin`, `title`, `note`, `display`, `money`, `badge`) VALUES
(37, 'MAILFREE', 'mailfree', 'Mail Free - Random Năm ', '', 'show', 0, ''),
(38, 'MAILFR0', 'mail0bb', 'Mail K5 - 0 Bạn Bè', '', 'show', 70000, ''),
(39, 'MK5NULL', 'mailnull', 'Mail K5 - Null - Bạn Bè', '', 'show', 50000, ''),
(40, 'MK5CLONE', 'mailclone', 'Mail K5 - Clone - Dưới 100 Bạn Bè', '', 'show', 60000, ''),
(41, 'MK5VIA', 'mailvia', 'Mail K5 - Via - Trên 100 Bạn Bè', '', 'show', 150000, ''),
(42, 'MK5VIA1K', 'mailvia', 'Mail K5 - Via - Trên 1K Bạn Bè', '', 'show', 250000, ''),
(43, 'MK5VIAFL', 'mailviafl', 'Mail K5 - Via - Trên 100 Follow', '', 'show', 200000, ''),
(44, 'MK5VIA1KFL', 'mailviafl', 'Mail K5 - Via - Trên 1K Fl', '', 'show', 300000, ''),
(46, 'MK60BB', 'mail0bb', 'Mail K6 - 0 Bạn Bè', '', 'show', 15000, ''),
(47, 'MK6NULL', 'mailnull', 'Mail K6 - Null Bạn Bè', '', 'show', 10000, ''),
(48, 'MK6CLONE', 'mailclone', 'Mail K6 - Clone - Dưới 100 Bạn Bè', '', 'show', 13000, ''),
(49, 'MK6VIA', 'mailvia', 'Mail K6 - Via - Trên 100 Bạn Bè', '', 'show', 30000, ''),
(50, 'MK6VIA1K', 'mailvia', 'Mail K6 - Via - Trên 1K Bạn Bè', '', 'show', 50000, ''),
(51, 'MK6VIAFL', 'mailviafl', 'Mail K6 - Via - Trên 100FL', '', 'show', 40000, ''),
(52, 'MK6VIA1KFL', 'mailviafl', 'Mail K6 - Via - Trên 1K Fl', '', 'show', 70000, ''),
(53, 'MK70BB', 'mail0bb', 'Mail K7 - 0 Bạn Bè', '', 'show', 10000, ''),
(54, 'MK7NULL', 'mailnull', 'Mail K7 - Null Bạn Bè', '', 'show', 6000, ''),
(55, 'MK7CLONE', 'mailclone', 'Mail K7 - Clone - Dưới 100 Bạn Bè', '', 'show', 8000, ''),
(56, 'MK7VIA', 'mailvia', 'Mail K7 - Via - Trên 100 Bạn Bè', '', 'show', 20000, ''),
(57, 'MK7VIA1K', 'mailvia', 'Mail K7 - Via - Trên 1K Bạn Bè', '', 'show', 25000, ''),
(58, 'MK7VIAFL', 'mailviafl', 'Mail K7 - Via - Trên 100FL', '', 'show', 35000, ''),
(59, 'MK7VIA1KFL', 'mailviafl', 'Mail K7 - Via - Trên 1K FL', '', 'show', 45000, ''),
(60, 'MK80BB', 'mail0bb', 'Mail K8 - 0 Bạn Bè', '', 'show', 7000, ''),
(61, 'MK8NULL', 'mailnull', 'Mail K8 - Null Bạn Bè', '', 'show', 5000, ''),
(62, 'MK8CLONE', 'mailclone', 'Mail K8 - Clone - Dưới 100 Bạn Bè', '', 'show', 6000, ''),
(63, 'MK8VIA', 'mailvia', 'Mail K8 - Via - Trên 100 Bạn Bè', '', 'show', 13000, ''),
(64, 'MK8VIA1K', 'mailvia', 'Mail K8 - Via - Trên 1K Bạn Bè', '', 'show', 17000, ''),
(65, 'MK8FL', 'mailviafl', 'Mail K8 - Via - Trên 100 FL', '', 'show', 20000, ''),
(66, 'MK8VIA1KFL', 'mailviafl', 'Mail K8 - Via - Trên 1K FL', '', 'show', 25000, ''),
(67, 'MK90BB', 'mail0bb', 'Mail K9 - 0 Bạn Bè', '', 'show', 5000, ''),
(68, 'MK9NULL', 'mailnull', 'Mail K9 - Null Bạn Bè', '', 'show', 4000, ''),
(69, 'MK9CLONE', 'mailclone', 'Mail K9 - Clone - Dưới 100 Bạn Bè', '', 'show', 4500, ''),
(70, 'MK9VIA', 'mailvia', 'Mail K9 - Via - Trên 100 Bạn Bè', '', 'show', 8000, ''),
(71, 'MK9VIA1K', 'mailvia', 'Mail K9 - Via - Trên 1K Bạn Bè', '', 'show', 10000, ''),
(72, 'MK9VIAFL', 'mailviafl', 'Mail K9 - Via - Trên 100FL', '', 'show', 13000, ''),
(73, 'MK9VIA1KFL', 'mailviafl', 'Mail K9 - Via - Trên 1K FL', '', 'show', 17000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giftcode`
--

CREATE TABLE `giftcode` (
  `id` int(11) NOT NULL,
  `code` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dieukien` int(11) DEFAULT '0',
  `soluong` int(11) DEFAULT '0',
  `sudung` int(11) DEFAULT '0',
  `createdate` datetime DEFAULT NULL,
  `money` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `msg1` text COLLATE utf8_vietnamese_ci,
  `msg2` text COLLATE utf8_vietnamese_ci,
  `msg3` text COLLATE utf8_vietnamese_ci,
  `msg4` text COLLATE utf8_vietnamese_ci,
  `msg5` text COLLATE utf8_vietnamese_ci,
  `msg6` text COLLATE utf8_vietnamese_ci,
  `msg7` text COLLATE utf8_vietnamese_ci,
  `msg8` text COLLATE utf8_vietnamese_ci,
  `msg9` text COLLATE utf8_vietnamese_ci,
  `msg10` text COLLATE utf8_vietnamese_ci,
  `msg11` text COLLATE utf8_vietnamese_ci,
  `msg12` text COLLATE utf8_vietnamese_ci,
  `msg13` text COLLATE utf8_vietnamese_ci,
  `14` text COLLATE utf8_vietnamese_ci,
  `15` text COLLATE utf8_vietnamese_ci,
  `16` text COLLATE utf8_vietnamese_ci,
  `17` text COLLATE utf8_vietnamese_ci,
  `18` text COLLATE utf8_vietnamese_ci,
  `19` text COLLATE utf8_vietnamese_ci,
  `20` text COLLATE utf8_vietnamese_ci,
  `side1` text COLLATE utf8_vietnamese_ci,
  `side2` text COLLATE utf8_vietnamese_ci,
  `side3` text COLLATE utf8_vietnamese_ci,
  `side4` text COLLATE utf8_vietnamese_ci,
  `side5` text COLLATE utf8_vietnamese_ci,
  `side6` text COLLATE utf8_vietnamese_ci,
  `side7` text COLLATE utf8_vietnamese_ci,
  `side8` text COLLATE utf8_vietnamese_ci,
  `side9` text COLLATE utf8_vietnamese_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `lang`
--

INSERT INTO `lang` (`id`, `msg1`, `msg2`, `msg3`, `msg4`, `msg5`, `msg6`, `msg7`, `msg8`, `msg9`, `msg10`, `msg11`, `msg12`, `msg13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `side1`, `side2`, `side3`, `side4`, `side5`, `side6`, `side7`, `side8`, `side9`) VALUES
(1, 'Vui lòng điền vào ô trống !', 'Tài khoản đã tồn tại !', 'Địa chỉ Email đã tồn tại !', 'IP này đã đạt giới hạn tạo tài khoản!', 'Đăng ký tài khoản thành công !', 'Vui lòng điền vào ô trống !', 'Tài khoản không tồn tại !', 'Sai thông tin tài khoản hoặc mật khẩu !', 'Đăng nhập thành công !', 'Vui lòng điền vào ô trống !', 'Địa chỉ email không hợp lệ !', 'Địa chỉ email không có trong hệ thống !', 'Vui lòng kiểm tra hòm thư Email của bạn!', 'Vui lòng đăng nhập để tiếp tục', 'Số lượng tối thiểu là 1 tài khoản !', 'Số lượng tối đa khi mua 1 lần là 10.000 !', 'Loại tài khoản không tồn tại !', 'Số tài khoản trong hệ thống không đủ !', 'Số dư không đủ thanh toán!', 'Số lượng tài khoản không đủ, vui lòng thử lại', 'Home', 'Mua Tài Khoản', 'Nạp Tiền', 'Lịch Sử Đơn Hàng', 'Công Cụ', 'Giftcode', 'Cộng Tác Viên', 'Hộp Thư Hỗ Trợ', 'Facebook Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `log`
--

INSERT INTO `log` (`id`, `username`, `content`, `createdate`) VALUES
(10731, 'admin', 'Thực hiện đăng nhập vào hệ thống ! ', '2021-11-20 12:27:51'),
(10732, 'admin', 'Thực hiện đăng nhập vào hệ thống ! ', '2022-07-23 23:49:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_die`
--

CREATE TABLE `log_die` (
  `id` int(11) NOT NULL,
  `loai` text COLLATE utf8mb4_vietnamese_ci,
  `uid` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `createdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_giftcode`
--

CREATE TABLE `log_giftcode` (
  `id` int(11) NOT NULL,
  `username` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `code` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT '0',
  `money` int(11) NOT NULL,
  `createdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ls_mua`
--

CREATE TABLE `ls_mua` (
  `id` int(11) NOT NULL,
  `username` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_vietnamese_ci,
  `createdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id` int(11) NOT NULL,
  `request_id` varchar(64) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci DEFAULT NULL,
  `tranId` text CHARACTER SET utf32 COLLATE utf32_vietnamese_ci,
  `partnerId` text CHARACTER SET utf32 COLLATE utf32_vietnamese_ci,
  `partnerName` text CHARACTER SET utf16 COLLATE utf16_vietnamese_ci,
  `amount` text CHARACTER SET utf32 COLLATE utf32_vietnamese_ci,
  `comment` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  `time` text,
  `username` varchar(32) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci DEFAULT NULL,
  `status` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT 'xuly'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `ID_BUY` varchar(32) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_vietnamese_ci,
  `soluong` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `username` varchar(32) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `live` int(11) DEFAULT '0',
  `type` varchar(64) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `display` varchar(32) COLLATE utf8mb4_vietnamese_ci DEFAULT 'show'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply_ticket`
--

CREATE TABLE `reply_ticket` (
  `id` int(11) NOT NULL,
  `id_ticket` varchar(64) DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `createdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `site_image` text,
  `site_domain` text,
  `site_favicon` text,
  `site_logo` text,
  `site_tenweb` text,
  `site_mota` text,
  `site_tukhoa` text,
  `site_baotri` varchar(32) DEFAULT 'OFF',
  `site_api_momo` text,
  `site_api_card` text,
  `site_ck_card` int(11) DEFAULT '0',
  `site_callback` text,
  `site_gmail` text,
  `site_sdt_momo` text,
  `site_ten_momo` text,
  `site_qr_momo` text,
  `site_noidung_momo` text,
  `site_gmail_momo` text,
  `site_pass_momo` text,
  `site_show_soluong` varchar(32) DEFAULT 'ON',
  `site_thong_bao` longtext,
  `site_token` text,
  `birthday` text,
  `carousel_1` text,
  `carousel_2` text,
  `carousel_3` text,
  `site_show_carousel` varchar(32) DEFAULT 'ON',
  `SECURE_TOKEN` varchar(128) DEFAULT NULL,
  `MEMO_PREFIX` varchar(64) DEFAULT NULL,
  `color` varchar(64) DEFAULT NULL,
  `DirectChatLink` text,
  `tuyetroi` varchar(32) DEFAULT 'ON',
  `gdganday` varchar(32) DEFAULT 'ON',
  `ck_ref` int(11) DEFAULT '0',
  `facebook` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  `display_daban` varchar(255) DEFAULT 'ON',
  `token_momo` varchar(250) DEFAULT NULL,
  `token_bank` varchar(250) DEFAULT NULL,
  `stk_bank` varchar(250) DEFAULT NULL,
  `pass_stk` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `site_image`, `site_domain`, `site_favicon`, `site_logo`, `site_tenweb`, `site_mota`, `site_tukhoa`, `site_baotri`, `site_api_momo`, `site_api_card`, `site_ck_card`, `site_callback`, `site_gmail`, `site_sdt_momo`, `site_ten_momo`, `site_qr_momo`, `site_noidung_momo`, `site_gmail_momo`, `site_pass_momo`, `site_show_soluong`, `site_thong_bao`, `site_token`, `birthday`, `carousel_1`, `carousel_2`, `carousel_3`, `site_show_carousel`, `SECURE_TOKEN`, `MEMO_PREFIX`, `color`, `DirectChatLink`, `tuyetroi`, `gdganday`, `ck_ref`, `facebook`, `display_daban`, `token_momo`, `token_bank`, `stk_bank`, `pass_stk`) VALUES
(1, '/upload/thumb_7120.png', 'https://zangyt.xyz', '/upload/favicon_5736.png', '/upload/logo_7120.png', 'ZangYT | Website Bán Mail Cổ Uy Tín Chất Lượng', 'Shop Bán Mail Cổ Yahoo Chất Lượng, Giá Rẻ, Uy Tín, Tự Động Xử Lý Giao Dịch Cực Nhanh, Support Hoạt Động 24/24,... Đi Đầu Về Chất Lượng........ ', 'mail co gia re, mail co uy tin, mail co chat luong,....', 'OFF', '', 'Inyb7PU1MAwl3p80JTuDZLqCBXm69gGo', 0, '', 'spzangyt@gmail.com', '', '', '', 'NAPTIEN', '', '', 'ON', '', '', NULL, '/upload/carousel_1.png', '/upload/carousel_2.png', '/upload/carousel_3.png', '', '', 'mailzangyt', '#ca5d49', 'https://tawk.to/chat/5fbab5f8920fc91564c9878b/default', 'ON', 'ON', 0, 'https://www.facebook.com/Admin.SpZangYT/', 'ON', '25859A42-72F9-3E49-EFFF-FFF105B497B6', '60EB5CD0-4A94-185C-1A3D-A3DC103849DC', '0862205561', 'Vungocdiep_05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `code` varchar(32) NOT NULL,
  `ID_BUY` varchar(32) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `id_fb` varchar(32) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'live',
  `gender` text,
  `friends` text,
  `name` text CHARACTER SET utf32 COLLATE utf32_vietnamese_ci,
  `updated_time` datetime DEFAULT NULL,
  `birthday` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `id` int(11) NOT NULL,
  `content` longtext CHARACTER SET utf32 COLLATE utf32_vietnamese_ci,
  `createdate` datetime DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `code` varchar(64) DEFAULT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  `createdate` datetime NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `money` int(11) DEFAULT '0',
  `total_nap` int(11) DEFAULT '0',
  `level` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ck` float DEFAULT '0',
  `createdate` datetime DEFAULT NULL,
  `ip` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  `banned` int(11) NOT NULL DEFAULT '0',
  `fullname` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  `token` varchar(64) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ref` varchar(64) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `code`, `username`, `email`, `password`, `money`, `total_nap`, `level`, `ck`, `createdate`, `ip`, `banned`, `fullname`, `token`, `ref`) VALUES
(1, '804537692', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, 0, 'admin', 0, '2022-07-23 23:16:05', '171.234.12.182', 0, NULL, NULL, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `bank_auto`
--
ALTER TABLE `bank_auto`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `giftcode`
--
ALTER TABLE `giftcode`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `log_die`
--
ALTER TABLE `log_die`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `log_giftcode`
--
ALTER TABLE `log_giftcode`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `ls_mua`
--
ALTER TABLE `ls_mua`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `reply_ticket`
--
ALTER TABLE `reply_ticket`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `bank_auto`
--
ALTER TABLE `bank_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `giftcode`
--
ALTER TABLE `giftcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10733;

--
-- AUTO_INCREMENT cho bảng `log_die`
--
ALTER TABLE `log_die`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `log_giftcode`
--
ALTER TABLE `log_giftcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ls_mua`
--
ALTER TABLE `ls_mua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2240;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2239;

--
-- AUTO_INCREMENT cho bảng `reply_ticket`
--
ALTER TABLE `reply_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45977;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
