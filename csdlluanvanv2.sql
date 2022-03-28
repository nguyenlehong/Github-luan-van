-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 28, 2022 lúc 02:59 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `luanvan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buoi`
--

CREATE TABLE `buoi` (
  `BUOI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `buoi`
--

INSERT INTO `buoi` (`BUOI`) VALUES
('Buổi chiều'),
('Buổi sáng'),
('Buổi trưa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `can_bo`
--

CREATE TABLE `can_bo` (
  `CB_ID` int(11) NOT NULL,
  `CB_HOTEN` varchar(255) NOT NULL,
  `CB_NGAYSINH` date NOT NULL,
  `CB_PHAI` varchar(11) NOT NULL,
  `CB_SDT` int(10) NOT NULL,
  `CB_EMAIL` varchar(255) NOT NULL,
  `CB_DIACHI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `can_bo`
--

INSERT INTO `can_bo` (`CB_ID`, `CB_HOTEN`, `CB_NGAYSINH`, `CB_PHAI`, `CB_SDT`, `CB_EMAIL`, `CB_DIACHI`) VALUES
(1, 'Lê Hồng Nguyên', '2022-03-16', '', 0, 'nguyen@gmail.com', 'cần thơ'),
(2, 'Lê Hồng Nguyên', '2022-03-16', '', 0, 'nguyen@gmail.com', 'cần thơ'),
(3, 'Lê Hồng Nguyên', '2022-03-07', 'Nam', 127, 'nguyen@gmail.com', 'cần thơ'),
(4, 'Lê Nguyên Hồng', '2022-03-05', 'Nữ', 987111222, 'Hong@gmail.com', 'Cà Mau');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoi`
--

CREATE TABLE `khoi` (
  `KHOI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoi`
--

INSERT INTO `khoi` (`KHOI`) VALUES
('Khối mầm'),
('khối từ 3 - 5 tháng tuổi'),
('khối từ 5 - 10 tháng tuổi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_mon`
--

CREATE TABLE `loai_mon` (
  `LM_ID` int(11) NOT NULL,
  `LM_TEN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_mon`
--

INSERT INTO `loai_mon` (`LM_ID`, `LM_TEN`) VALUES
(3, 'Món chính'),
(4, 'Món tráng miệng'),
(5, 'Bánh'),
(7, 'Món chai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `L_ID` int(11) NOT NULL,
  `L_TEN` varchar(255) NOT NULL,
  `KHOI` varchar(255) NOT NULL,
  `NAMHOC` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`L_ID`, `L_TEN`, `KHOI`, `NAMHOC`) VALUES
(1, '', 'Khối mầm', '2020-2021'),
(2, '', 'Khối mầm', '2020-2021'),
(3, '', 'Khối mầm', '2020-2021'),
(4, 'Mầm 1', 'Khối mầm', '2020-2021'),
(5, 'Mầm 2', 'khối từ 3 - 5 tháng tuổi', '2021-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `M_ID` int(11) NOT NULL,
  `M_TEN` varchar(255) NOT NULL,
  `M_HINH` varchar(255) NOT NULL,
  `M_MOTA` text NOT NULL,
  `LM_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`M_ID`, `M_TEN`, `M_HINH`, `M_MOTA`, `LM_ID`) VALUES
(30, 'Bánh canh cua', 'dell2.png', 'bánh canh cua ăn rất ngon và rất ngon', 5),
(31, 'Gà chiên', 'avatar-dep-nhat-53_112148.jpg', 'Gà chiên ăn kiềm với nước tương', 3),
(32, 'Gà chiên bột', 'dell2.png', 'gà chiên bột xù', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nam_hoc`
--

CREATE TABLE `nam_hoc` (
  `NAMHOC` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nam_hoc`
--

INSERT INTO `nam_hoc` (`NAMHOC`) VALUES
('2020-2021'),
('2021-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhiem_vu`
--

CREATE TABLE `nhiem_vu` (
  `NV_ID` int(11) NOT NULL,
  `NV_TEN` varchar(255) NOT NULL,
  `NV_MOTA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhiem_vu`
--

INSERT INTO `nhiem_vu` (`NV_ID`, `NV_TEN`, `NV_MOTA`) VALUES
(1, 'giáo viên', 'giáo viên đứng lớp'),
(2, 'giáo viên chủ nhiệm', 'quản lý lớp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thang`
--

CREATE TABLE `thang` (
  `THANG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thang`
--

INSERT INTO `thang` (`THANG`) VALUES
('Tháng 1'),
('Tháng 10'),
('Tháng 11'),
('Tháng 12'),
('Tháng 2'),
('Tháng 3'),
('Tháng 4'),
('Tháng 5'),
('Tháng 6'),
('Tháng 7'),
('Tháng 8'),
('Tháng 9 ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu`
--

CREATE TABLE `thu` (
  `THU` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thu`
--

INSERT INTO `thu` (`THU`) VALUES
('Chủ nhật'),
('Thứ 2'),
('Thứ 3'),
('Thứ 4'),
('Thứ 5'),
('Thứ 6'),
('Thứ 7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tre`
--

CREATE TABLE `tre` (
  `T_ID` int(11) NOT NULL,
  `T_HOTEN` varchar(255) NOT NULL,
  `T_NGAYSINH` date NOT NULL,
  `T_PHAI` varchar(11) NOT NULL,
  `T_DIACHI` text NOT NULL,
  `T_HTCHA` varchar(255) NOT NULL,
  `T_SDTCHA` int(10) NOT NULL,
  `T_NNCHA` varchar(255) NOT NULL,
  `T_HTME` varchar(255) NOT NULL,
  `T_SDTME` int(10) NOT NULL,
  `T_NNME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `buoi`
--
ALTER TABLE `buoi`
  ADD PRIMARY KEY (`BUOI`);

--
-- Chỉ mục cho bảng `can_bo`
--
ALTER TABLE `can_bo`
  ADD PRIMARY KEY (`CB_ID`);

--
-- Chỉ mục cho bảng `khoi`
--
ALTER TABLE `khoi`
  ADD PRIMARY KEY (`KHOI`);

--
-- Chỉ mục cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  ADD PRIMARY KEY (`LM_ID`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`L_ID`),
  ADD KEY `lop-khoi` (`KHOI`),
  ADD KEY `lop-namhoc` (`NAMHOC`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`M_ID`),
  ADD KEY `MON_LOAIMON` (`LM_ID`);

--
-- Chỉ mục cho bảng `nam_hoc`
--
ALTER TABLE `nam_hoc`
  ADD PRIMARY KEY (`NAMHOC`);

--
-- Chỉ mục cho bảng `nhiem_vu`
--
ALTER TABLE `nhiem_vu`
  ADD PRIMARY KEY (`NV_ID`);

--
-- Chỉ mục cho bảng `thang`
--
ALTER TABLE `thang`
  ADD PRIMARY KEY (`THANG`);

--
-- Chỉ mục cho bảng `thu`
--
ALTER TABLE `thu`
  ADD PRIMARY KEY (`THU`);

--
-- Chỉ mục cho bảng `tre`
--
ALTER TABLE `tre`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `can_bo`
--
ALTER TABLE `can_bo`
  MODIFY `CB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  MODIFY `LM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `L_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `mon`
--
ALTER TABLE `mon`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `nhiem_vu`
--
ALTER TABLE `nhiem_vu`
  MODIFY `NV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tre`
--
ALTER TABLE `tre`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop-khoi` FOREIGN KEY (`KHOI`) REFERENCES `khoi` (`KHOI`),
  ADD CONSTRAINT `lop-namhoc` FOREIGN KEY (`NAMHOC`) REFERENCES `nam_hoc` (`NAMHOC`);

--
-- Các ràng buộc cho bảng `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `MON_LOAIMON` FOREIGN KEY (`LM_ID`) REFERENCES `loai_mon` (`LM_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
