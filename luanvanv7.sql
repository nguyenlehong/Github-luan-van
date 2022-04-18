-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2022 lúc 05:12 PM
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
('Buổi phụ'),
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
(3, 'Lê Hồng Nguyên', '2022-03-07', 'Nam', 127, 'nguyen@gmail.com', 'cần thơ'),
(4, 'Lê Nguyên Hồng', '2022-03-05', 'Nữ', 987111222, 'Hong@gmail.com', 'Cà Mau'),
(19, 'Lê Hồng Nguyên test', '1998-06-15', 'Nam', 1111, 'nguyen@gmail.com', 'can tho');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_so_phat_trien`
--

CREATE TABLE `chi_so_phat_trien` (
  `T_ID` int(11) NOT NULL,
  `THANG` varchar(255) NOT NULL,
  `CHIEUCAO` float NOT NULL,
  `CANNANG` float NOT NULL,
  `CS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_so_phat_trien`
--

INSERT INTO `chi_so_phat_trien` (`T_ID`, `THANG`, `CHIEUCAO`, `CANNANG`, `CS_ID`) VALUES
(22, 'THANG 1', 112, 12, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoan_thu`
--

CREATE TABLE `khoan_thu` (
  `KT_ID` int(11) NOT NULL,
  `KT_TEN` varchar(255) NOT NULL,
  `KT_MOTA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoan_thu`
--

INSERT INTO `khoan_thu` (`KT_ID`, `KT_TEN`, `KT_MOTA`) VALUES
(2000, 'Học phí HK1', 'Là học phí học kỳ 1'),
(2001, 'Phí ăn sáng', 'Gồm tiền ăn và tiền nước');

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
('Khối chồi'),
('Khối lá'),
('Khối mầm');

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
(11, 'Món cháo'),
(12, 'Món phở'),
(13, 'Món canh'),
(14, 'Bánh'),
(15, 'Món kho'),
(16, 'Sữa');

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
(6, 'nhóm 1a', 'Khối mầm', '2021-2022'),
(7, 'nhóm 1B', 'Khối mầm', '2021-2022'),
(8, 'nhóm 2A', 'Khối chồi', '2021-2022'),
(9, 'nhóm 2B', 'Khối chồi', '2021-2022'),
(10, 'nhóm 3A', 'Khối lá', '2021-2022'),
(11, 'nhóm 3B', 'Khối lá', '2021-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_tre`
--

CREATE TABLE `lop_tre` (
  `L_ID` int(11) NOT NULL,
  `T_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop_tre`
--

INSERT INTO `lop_tre` (`L_ID`, `T_ID`) VALUES
(6, 20),
(6, 21),
(8, 22),
(9, 23),
(10, 24),
(7, 25),
(7, 28);

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
(36, 'cháo ngêu', 'chao-ngeu.jpg', 'Trong nghêu có chứa vitamin B12 đặc biệt tốt cho trí nhớ và vitamin C giúp làm lành vết thương. Ngoài ra, với những thành phần khoáng chất quan trọng như: sắt, kali, canxi, nghêu còn giúp tăng cường sức khỏe và phòng tránh bệnh tật.', 11),
(37, 'Cháo gà', 'chao-ga.webp', 'Ngoài tác dụng chống viêm, món ăn này còn có khả năng hạn chế thời gian virus gây bệnh tiếp xúc với niêm mạc mũi. Điều kỳ diệu trong món cháo gà biến nó thành thực phẩm chức năng không phải xuất phát từ hơi nóng nó xông lên mặt cho cảm giác dễ chịu như nhiều người vẫn tin.', 11),
(38, 'Cháo thịt bí đỏ', 'chao-thit-bi-do.webp', 'Bí đỏ có chứa lượng lớn beta carotene, khi vào trong cơ thể chất này được chuyển hóa thành Vitamin A. Đây là chất cần thiết cho mắt, giúp võng mạc hấp thụ và xử lý ánh sáng tốt hơn.', 11),
(39, 'Canh Cải nấu thịt', 'canh-cai.jpg', 'Cải bẹ xanh có lượng calorie thấp nhưng lại nhiều chất xơ cùng các vitamin và khoáng chất thiết yếu. Đặc biệt, chúng là nguồn cung cấp vitamin C và K dồi dào.', 13),
(40, 'Phở thịt gà', 'pho-ga.jpg', 'Món phở gà mang một vị ngon đặc trưng chẳng hề thua kém phở bò. Sợi phở dai ngon, nước dùng ngọt thanh, béo béo còn thịt gà thì mềm vừa phải. Ăn kèm với nước tương ớt cùng tí chanh là xuất sắc nhất.', 12),
(41, 'Bánh quy', 'banh-quy.jpg', '1 lượng bánh quy 30g cung cấp khoảng 130 kcal. Dinh dưỡng của bánh quy (từ bột mì) cung cấp nhiều năng lượng, khoáng chất và các vitamin chính nuôi cơ thể. Đặc biệt là các chất hữu ích như canxi làm chắc xương, chất sắt giúp phát triển và cải thiện trí tuệ, chất xơ hỗ trợ hệ tiêu hóa.', 14),
(42, 'Đậu hữu sốt cà chua', 'dau-huu-ca-chua.jpg', 'Cà chua rất giàu vitamin A, C, K, vitamin B6, kali, folate, thiamin, magiê, niacin, đồng và phốt pho, là những vi chất cần thiết để duy trì một sức khỏe tốt. Điều tuyệt vời hơn ở cà chua là chúng chứa rất ít cholesterol, chất béo bão hòa, natri và calo', 15),
(43, 'Sữa tươi', 'sua-tuoi.jpg', 'Sữa tươi rất giàu canxi, các dưỡng chất và các loại vitamin như: vitamin D, vitamin K, phốt pho, magiê… uống sữa tươi sẽ giúp ngăn ngừa loãng xương, giảm cân, giảm căng thẳng mệt mỏi, tăng khả năng hấp thu....', 16);

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
('2021-2022'),
('2022-2023');

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
-- Cấu trúc bảng cho bảng `phan_cong`
--

CREATE TABLE `phan_cong` (
  `PC_ID` int(11) NOT NULL,
  `NAMHOC` varchar(9) NOT NULL,
  `L_ID` int(11) NOT NULL,
  `NV_ID` int(11) NOT NULL,
  `CB_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phan_cong`
--

INSERT INTO `phan_cong` (`PC_ID`, `NAMHOC`, `L_ID`, `NV_ID`, `CB_ID`) VALUES
(1, '2021-2022', 6, 2, 4),
(4, '2022-2023', 7, 1, 3),
(6, '2021-2022', 6, 2, 19),
(7, '2022-2023', 6, 1, 19);

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
('Thứ 2'),
('Thứ 3'),
('Thứ 4'),
('Thứ 5'),
('Thứ 6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuc_don`
--

CREATE TABLE `thuc_don` (
  `TD_ID` int(9) NOT NULL,
  `KHOI` varchar(255) NOT NULL,
  `BUOI` varchar(255) NOT NULL,
  `THU` varchar(255) NOT NULL,
  `MONAN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuc_don`
--

INSERT INTO `thuc_don` (`TD_ID`, `KHOI`, `BUOI`, `THU`, `MONAN`) VALUES
(37, 'Khối lá', 'Buổi sáng', 'Thứ 2', 'Sữa tươi\nCháo thịt bí đỏ'),
(38, 'Khối lá', 'Buổi sáng', 'Thứ 3', 'Sữa tươi,Cháo gà'),
(41, 'Khối lá', 'Buổi sáng', 'Thứ 4', 'Cháo gà'),
(42, 'Khối lá', 'Buổi sáng', 'Thứ 5', 'Bánh quy'),
(43, 'Khối lá', 'Buổi sáng', 'Thứ 6', 'Phở thịt gà'),
(44, 'Khối lá', 'Buổi trưa', 'Thứ 2', 'Sữa tươi, Canh Cải nấu thịt');

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
-- Đang đổ dữ liệu cho bảng `tre`
--

INSERT INTO `tre` (`T_ID`, `T_HOTEN`, `T_NGAYSINH`, `T_PHAI`, `T_DIACHI`, `T_HTCHA`, `T_SDTCHA`, `T_NNCHA`, `T_HTME`, `T_SDTME`, `T_NNME`) VALUES
(17, 'Lê Hồng Phong 2', '2022-04-15', 'Nữ', 'can tho', 'nguyen cha 2', 1232, 'cán bộ', 'nguyen me', 232, 'noi tro'),
(19, 'Nguyễn thị hoa', '2022-04-01', 'Nữ', '3/2 xuân khánh ninh kiều cần thơ', 'Nguyễn Văn Anh', 933879384, 'Bác sỹ', 'Lê Thị Xuân', 985677322, 'Y tá'),
(20, 'Lê Hồng Nguyên', '2021-01-04', 'Nam', '3/2 xuân khánh Ninh Kiều Cần Thơ', 'Lê Hồng Nguyên Ba', 987345345, 'Cán bộ', 'Lê Hồng Nguyên Mẹ', 165777145, 'Nội trợ'),
(21, 'Đào Văn Hùng', '2022-04-06', 'Nam', 'Tiền Giang', 'Đào Văn Hùng Ba', 978123778, 'Giáo Viên', 'Đào Văn Hùng Mẹ', 932765998, 'Nội trợ'),
(22, 'Lý Hải Đăng', '2022-04-07', 'Nam', 'Cà Mau', 'Lý Hải Đăng Dương', 987672123, 'Bác sỹ', 'Lý Hải ', 164288277, 'Kỹ sư'),
(23, 'Bùi Như Quỳnh', '2022-04-14', 'Nữ', 'Bắc Giang', 'Bùi Văn Đông', 988127432, 'Cán bộ', 'Lê Thị Na', 989444125, 'Nội trợ'),
(24, 'Nguyễn Thùy Anh', '2022-04-07', 'Nữ', 'Bình Dương', 'Nguyễn Hồng Sơn', 945125882, 'Làm nông', 'Nguyễn Thị Hoa', 399489632, 'Làm nông'),
(25, 'Nguyễn Anh Thư', '2022-04-02', 'Nữ', 'Long Xuyên', 'Nguyễn Văn Xuân', 945765442, 'Giáo viên', 'Trần Hồng Nhiên', 989178672, 'Giáo viên'),
(28, 'Lê Hồng Ngọc', '2022-04-13', '', 'Kiên Giang', 'Lê Hồng Sơn', 921765382, 'Bác sĩ', 'Nguyễn Thị Giang', 989675321, 'Bác sỹ');

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
-- Chỉ mục cho bảng `chi_so_phat_trien`
--
ALTER TABLE `chi_so_phat_trien`
  ADD PRIMARY KEY (`CS_ID`);

--
-- Chỉ mục cho bảng `khoan_thu`
--
ALTER TABLE `khoan_thu`
  ADD PRIMARY KEY (`KT_ID`);

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
-- Chỉ mục cho bảng `lop_tre`
--
ALTER TABLE `lop_tre`
  ADD KEY `loptre_lop` (`L_ID`),
  ADD KEY `loptre_tre` (`T_ID`);

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
-- Chỉ mục cho bảng `phan_cong`
--
ALTER TABLE `phan_cong`
  ADD PRIMARY KEY (`PC_ID`),
  ADD KEY `phancong_canbo` (`CB_ID`),
  ADD KEY `phancong_lop` (`L_ID`),
  ADD KEY `phancong_nam` (`NAMHOC`),
  ADD KEY `phancong_nhiemvu` (`NV_ID`);

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
-- Chỉ mục cho bảng `thuc_don`
--
ALTER TABLE `thuc_don`
  ADD PRIMARY KEY (`TD_ID`),
  ADD KEY `thucdon-buoi` (`BUOI`),
  ADD KEY `thucdon-khoi` (`KHOI`),
  ADD KEY `thudon-thu` (`THU`);

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
  MODIFY `CB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `chi_so_phat_trien`
--
ALTER TABLE `chi_so_phat_trien`
  MODIFY `CS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khoan_thu`
--
ALTER TABLE `khoan_thu`
  MODIFY `KT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;

--
-- AUTO_INCREMENT cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  MODIFY `LM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `L_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `mon`
--
ALTER TABLE `mon`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `nhiem_vu`
--
ALTER TABLE `nhiem_vu`
  MODIFY `NV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phan_cong`
--
ALTER TABLE `phan_cong`
  MODIFY `PC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `thuc_don`
--
ALTER TABLE `thuc_don`
  MODIFY `TD_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tre`
--
ALTER TABLE `tre`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop-khoi` FOREIGN KEY (`KHOI`) REFERENCES `khoi` (`KHOI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lop-namhoc` FOREIGN KEY (`NAMHOC`) REFERENCES `nam_hoc` (`NAMHOC`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lop_tre`
--
ALTER TABLE `lop_tre`
  ADD CONSTRAINT `loptre_lop` FOREIGN KEY (`L_ID`) REFERENCES `lop` (`L_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loptre_tre` FOREIGN KEY (`T_ID`) REFERENCES `tre` (`T_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `MON_LOAIMON` FOREIGN KEY (`LM_ID`) REFERENCES `loai_mon` (`LM_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phan_cong`
--
ALTER TABLE `phan_cong`
  ADD CONSTRAINT `phancong_canbo` FOREIGN KEY (`CB_ID`) REFERENCES `can_bo` (`CB_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phancong_lop` FOREIGN KEY (`L_ID`) REFERENCES `lop` (`L_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phancong_nam` FOREIGN KEY (`NAMHOC`) REFERENCES `nam_hoc` (`NAMHOC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phancong_nhiemvu` FOREIGN KEY (`NV_ID`) REFERENCES `nhiem_vu` (`NV_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thuc_don`
--
ALTER TABLE `thuc_don`
  ADD CONSTRAINT `thucdon-buoi` FOREIGN KEY (`BUOI`) REFERENCES `buoi` (`BUOI`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thucdon-khoi` FOREIGN KEY (`KHOI`) REFERENCES `khoi` (`KHOI`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thudon-thu` FOREIGN KEY (`THU`) REFERENCES `thu` (`THU`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
