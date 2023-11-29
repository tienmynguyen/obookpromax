-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 15, 2023 at 08:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `idprofile` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `user`, `pass`, `idprofile`, `email`, `role`) VALUES
(11, 'mivip', '123', NULL, 'mi5@gmail.com', 0),
(12, 'my', '123', NULL, 'tienmy@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `url`, `type`) VALUES
(1, '/views/images/bannner4.png', 1),
(2, '/views/images/bannner5.jpg', 1),
(3, '/views/images/bannner6.jpg', 1),
(4, '/views/images/bannner7.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booktype`
--

CREATE TABLE `booktype` (
  `bookid` int(11) NOT NULL,
  `typeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `booktype`
--

INSERT INTO `booktype` (`bookid`, `typeid`) VALUES
(1, 1),
(1, 5),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(12, 5),
(13, 1),
(16, 4),
(16, 5),
(17, 4),
(18, 4),
(19, 4),
(20, 2),
(20, 3),
(20, 4),
(21, 3),
(22, 3),
(22, 5),
(23, 3),
(24, 3),
(25, 3),
(25, 4),
(25, 5),
(26, 3),
(27, 3),
(27, 5),
(28, 3),
(29, 3),
(31, 5),
(32, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(41, 5),
(42, 2),
(42, 3),
(43, 3),
(44, 3),
(46, 2),
(47, 5),
(48, 5),
(50, 2),
(50, 5),
(60, 4),
(61, 4),
(62, 4),
(62, 6),
(63, 4),
(63, 6),
(64, 4),
(64, 6),
(65, 4),
(65, 6),
(66, 4),
(66, 6),
(67, 4),
(67, 6),
(68, 4),
(68, 6),
(69, 4),
(69, 6),
(70, 6),
(71, 6),
(72, 6);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `history` int(11) DEFAULT NULL,
  `save` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `love` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuvien`
--

CREATE TABLE `thuvien` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `note` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `rate` float NOT NULL,
  `dodai` int(11) NOT NULL,
  `theloai` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `luotdoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `thuvien`
--

INSERT INTO `thuvien` (`id`, `name`, `note`, `img`, `url`, `rate`, `dodai`, `theloai`, `luotdoc`) VALUES
(1, 'Nhà Giả Kim', 'Paulo Coelho', 'img1.jpg', 'nhagiakim', 4.5, 13, 'phieuluu langman', NULL),
(2, 'Ông già và biển cả', 'Ernest Hemingway', 'img3.jpg', '', 4.5, 2, 'phieuluu doithuong tieuthuyet', NULL),
(3, 'Chúa tể của những chiếc nhẫn', 'J. R. R. Tolkien', 'img4.jpg', '', 5, 6, 'phieuluu langman', NULL),
(4, 'Don Quixote', 'Miguel de Cervantes Saavedra', 'img5.jpg', '', 4, 75, 'phieuluu', NULL),
(5, 'Chiến tranh và hoà bình', 'Lev Tolstoy', 'img6.jpg', '', 4.5, 25, 'nghethuat tieusu', NULL),
(6, 'Hoàng tử bé', 'Antoine De Saint-Expéry', 'img7.jpg', 'hoangtube', 5, 7, 'phieuluu nghethuat langman', NULL),
(7, 'SherLock Holmes', 'Arthur Conan Doyle', 'img8.jpg', '#', 4.5, 110, 'trinhtham khoahoc nghethuat', NULL),
(8, 'Romeo và Juliet', 'William Shakespeare', 'img9.jpg', '', 3.5, 3, 'langman', NULL),
(9, 'Tôi là Bêtô', 'Nguyễn Nhật Ánh', 'img10.jpg', '', 4, 10, 'treem tuongtuong', NULL),
(10, 'The Candy House', 'Jennifer Egan', 'img11.jpg', '', 4, 5, 'khoahoc nghethuat', NULL),
(11, 'QUO VADIS', 'Henryk Sienkiewicz', 'img12.jpg', '', 4, 74, 'lichsu tuongtuong phieuluu', NULL),
(12, 'Think and Grow Rich', 'Napoleon Hill', 'img13.jpg', '', 4.5, 43, 'khoahoc tieusu', NULL),
(13, 'Hình hài của nước', 'Thu Phương', 'img14.jpg', '', 4.5, 56, 'tuongtuong phieuluu nghethuat', NULL),
(14, 'Perfect', 'Rachel Joyce', 'img15.jpg', '', 4.5, 71, 'nghethuat tieusu', NULL),
(15, 'Life of Pi', 'Yann Martel', 'img16.jpg', '', 4, 34, 'phieuluu nghethuat', NULL),
(16, 'Hoàng tử bé', 'Nhà xuất bản Kim Đồng', 'img17.jpg', '', 4.5, 30, 'treem phieuluu tuongtuong nghethuat', NULL),
(17, 'Việt Nam Phong tục', 'Phan Kế Bính', 'img18.jpg', '', 4.5, 50, 'nghethuat lichsu tongiao', NULL),
(18, 'Hai Số Phận', 'Jeffrey Archer', 'img19.jpg', '', 4, 60, 'nghethuat tieusu', NULL),
(19, 'IRON HANS', 'Tuyển tập truyện cổ tích thế giới', 'img20.jpg', '', 3.5, 50, 'treem phieuluu nghethuat tuongtuong', NULL),
(20, 'Truyện ngắn đặc sắc Nga', 'Nhà xuất bản Kim Đồng', 'img21.jpg', '', 4.5, 300, 'phieuluu nghethuat langman tuongtuong trinhtham', NULL),
(21, 'Không Gia Đình', 'Hector Malot', 'img22.jpg', '', 4, 60, 'tieusu nghethuat tuongtuong', NULL),
(22, 'truyện Thúy Kiều', 'Nguyễn Du', 'img23.jpg', '', 4.5, 300, 'nghethuat tieusu langman', NULL),
(23, 'Đối thoại cùng ma', 'Eva Ibbotson', 'img24.jpg', '', 4, 80, 'tuongtuong nghethuat', NULL),
(24, 'Nếu chỉ còn một ngày để sống', 'NIGOLA YOON', 'img25.jpg', '', 4, 50, 'tuongtuong nghethuat phieuluu', NULL),
(25, 'Những Người Khốn Khổ', 'VICTOR HUGO', 'img26.jpg', '', 5, 50, 'nghethuat lichsu tieusu', NULL),
(26, 'Cái Chết Huy Hoàng', 'J. D. ROBB', 'img27.jpg', '', 4, 60, 'tieusu nghethuat', NULL),
(27, 'Harry Potter và hoàng tử lai', 'J. K. Rowling', 'img28.JPG', '', 5, 6, 'tuongtuong phieuluu', NULL),
(28, 'Tiếng Hán-Tạng nguyên thủy', 'Phương ngữ tiếng Hán', 'img29.jpg', '', 3.5, 30, 'khoahoc nghethuat sachgiaokhoa', NULL),
(29, 'The Fault In our Stars', 'John Green', 'img30.jpg', '', 4, 30, 'tuongtuong nghethuat khoahocvientuong', NULL),
(30, 'Hỏa Ngục', 'DAN BROWN', 'img31.jpg', '', 4.5, 60, 'tuongtuong nghethuat', NULL),
(31, 'Hai đứa trẻ', 'Thạch Lam', 'img32.jpg', '', 4.5, 30, 'nghethuat tieusu sachgiaokhoa', NULL),
(32, 'Nếu được yêu như thế', 'Nguyên Ngộ Không', 'img33.jpg', '', 3.5, 30, 'langman', NULL),
(33, 'The Sun The Moon The Stars', 'Junot Diaz', 'img34.jpg', '', 4, 4, 'langman nghethuat tieusu', NULL),
(34, 'Săn Cá Thần', 'Đặng Thiều Quang', 'img35.jpg', '', 4, 10, 'tuongtuong tieusu nghethuat', NULL),
(35, 'Ngôi Nhà Nghìn Hành Lang', 'Thu Phương', 'img36.jpg', '', 5, 60, 'tuongtuong nghethuat', NULL),
(36, 'Cẩm nang du lịch Việt Nam', 'Mì', 'mybook2.jpg', 'book1', 4, 10, 'khoahoc tieusu', NULL),
(37, 'Người hùng áo trắng và kẻ địch vô hình', 'ntmy', 'mybook1.jpg', '', 4, 50, 'khoahoc tuongtuong tieusu', NULL),
(38, 'Việt Nam Sử Lược', 'Trần Trọng Kim', 'baikiemtragiuaki/cd1.jpg', '', 5, 100, 'lichsu nghethuat tieusu', NULL),
(39, 'Từ điển Hán-Việt hiện đại', 'Nguyễn Kim Thản', 'baikiemtragiuaki/cd3.jpg', '', 4, 30, 'nghethuat sachgiaokhoa', NULL),
(40, 'Pho tượng của Baltalon', 'Nguyễn Nhật Ánh', 'baikiemtragiuaki/cd4.jpg', '', 4.5, 80, 'treem nghethuat tuongtuong', NULL),
(41, 'Truyện cổ tích Việt Nam được yêu thích nhất', 'Nhà xuất bản Kim Đồng', 'baikiemtragiuaki/cd5.jpg', '', 4.5, 500, 'treem tuongtuong', NULL),
(42, 'Hà Nội 36 phố phường', 'Thạch Lam', 'baikiemtragiuaki/cd6.jpg', '', 4, 32, 'tieusu lichsu langman', NULL),
(43, 'Những Ngày Thơ Ấu', 'Nguyên Hồng', 'baikiemtragiuaki/cd7.jpg', '', 4, 9, 'lichsu tieusu nghethuat', NULL),
(44, 'Tấm Cám', 'Cổ tích Việt Nam', 'baikiemtragiuaki/cd11.jpg', '', 4.5, 6, 'treem tuongtuong', NULL),
(45, 'Đừng lựa chọn An Nhàn khi còn trẻ', 'Cảnh Thiên', 'baikiemtragiuaki/cd12.jpg', '', 4, 10, 'khoahoc tieusu doisong', NULL),
(46, 'Chuyện xứ LANGBIANG', 'Nguyễn Nhật Ánh', 'baikiemtragiuaki/cd4.jpg', '', 4.5, 28, 'phieuluu tuongtuong treem nghethuat', NULL),
(47, 'Những tấm lòng Cao Cả', 'Edmondo De Amicis', 'baikiemtragiuaki/st61.jpg', '', 4, 30, 'lichsu tieusu doisong', NULL),
(48, 'Tuổi trẻ đáng giá bao nhiêu', 'Rosie Nguyễn', 'baikiemtragiuaki/st64.jpg', '', 4, 5, 'doisong nghethuat', NULL),
(49, 'Tôi tài giỏi bạn cũng thế!', 'Adam Khoo', 'baikiemtragiuaki/st65.jpg', '', 4.5, 10, 'doisong khoahoc nghethuat tamly', NULL),
(50, 'Vì Thương', 'NXB Văn Hóa Văn Nghệ', 'baikiemtragiuaki/st66.jpg', '', 4.5, 50, 'nghethuat doisong tieusu', NULL),
(51, 'Thang Máy và Thang Cuốn', 'Chủ biên: ThS. Hoa Văn Ngũ', 'baikiemtragiuaki/st67.jpg', '', 4, 30, 'khoahoc sachgiaokhoa', NULL),
(52, 'Ngôi nhà quái dị', 'Dịch: Anh Trần', 'baikiemtragiuaki/st69.jpg', '', 3.5, 50, 'tuongtuong nghethuat trinhtham', NULL),
(53, 'The Book Thief', 'Markus Zusak', 'baikiemtragiuaki/st610.jpg', '', 4, 50, 'nghethuat lichsu tieusu trinhtham doisong', NULL),
(54, 'Peter Pan', 'J. M. Barrie', 'baikiemtragiuaki/st612.jpg', '', 4.5, 50, 'phieuluu tuongtuong', NULL),
(55, 'Quân Khu Nam Đồng', 'Bình Ca', 'baikiemtragiuaki/yt1.jpg', '', 4, 21, 'lichsu tieusu nghethuat', NULL),
(56, 'Trà Hoa Nữ', 'Alexandre Dumas', 'baikiemtragiuaki/yt3.jpg', '', 4, 30, 'nghethuat tieusu langman', NULL),
(57, 'Vô cùng Tàn Nhẫn vô cùng Yêu Thương', 'Sara Imas', 'baikiemtragiuaki/yt5.jpg', '', 4, 10, 'khoahoc doisong', NULL),
(58, 'Mắt Biếc', 'Nguyễn Nhật Ánh', 'baikiemtragiuaki/yt8.png', '', 4.5, 30, 'nghethuat langman', NULL),
(59, 'Không gia đình', 'Hector Malot', 'baikiemtragiuaki/yt10.jpg', '', 4, 30, 'phieuluu tieusu treem', NULL),
(60, 'Nghiệp Tình Yêu', 'Geshe Michael Roach', 'baikiemtragiuaki/yt11.png', '', 4, 30, 'nghethuat tuongtuong', NULL),
(61, 'Cô gái năm ấy chúng ta cùng theo đuổi', 'Người dịch: Lục Hương', 'baikiemtragiuaki/yt2.jpeg', '', 4.5, 50, 'doisong tieusu langman', NULL),
(62, 'Happy World', 'Tiếng anh cho trẻ em', 'baikiemtragiuaki/te1.jpg', '', 4, 50, 'treem sachgiaokhoa', NULL),
(63, 'Tiếng Hoa dành cho trẻ em', 'Mã Thành Tài', 'baikiemtragiuaki/te2.jpg', '', 3.5, 30, 'treem sachgiaokhoa', NULL),
(64, 'Truyện cổ tích dành cho Bé', 'Những truyện kể thú vị là món điểm tâm ngọt ngào trong thời thơ ấu', 'baikiemtragiuaki/te3.jpg', '', 4.5, 60, 'treem tuongtuong phieuluu', NULL),
(65, 'Truyện cổ tích dành cho Bé 2', ' Những truyện kể thú vị là món điểm tâm ngọt ngào trong thời thơ ấu', 'baikiemtragiuaki/te4.jpg', '', 4.5, 60, 'treem phieuluu tuongtuong', NULL),
(66, 'F\'apprends à lire', 'A. Cecconello', 'baikiemtragiuaki/te5.jpg', '', 4, 10, 'doisong nghethuat tuongtuong', NULL),
(67, 'Cờ vua nhập môn', 'Biên soạn: Đỗ Phú Phi', 'baikiemtragiuaki/te6.jpg', '', 4, 50, 'khoahoc nghethuat', NULL),
(68, 'ATLAS về các quốc gia', 'Nhà xuất bản Kim Đồng', 'baikiemtragiuaki/te7.jpg', '', 4, 8, 'sachgiaokhoa khoahoc', NULL),
(69, 'Khác biệt giới tính', 'SHIN Yeon-Mi', 'baikiemtragiuaki/te9.jpg', '', 4, 30, 'treem khoahoc', NULL),
(70, 'Bé tập tô màu', 'Nhà xuất bản Mỹ Thuật', 'baikiemtragiuaki/te10.jpg', '', 4, 60, 'treem', NULL),
(71, 'Đồng Dao Thơ-Truyện', 'Nhà xuất bản Phụ Nữ', 'baikiemtragiuaki/te11.jpg', '', 4, 30, 'nghethuat sachgiaokhoa', NULL),
(72, 'Bí ẩn về Vũ Trụ', 'Biên dịch: SONG LINH', 'baikiemtragiuaki/te12.jpg', '', 4, 30, 'khoahoc sachgiaokhoa nghethuat', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'xuhuong'),
(2, 'moi'),
(3, 'codien'),
(4, 'thang'),
(5, 'yeuthichnhat'),
(6, 'treem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idprofile` (`idprofile`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booktype`
--
ALTER TABLE `booktype`
  ADD PRIMARY KEY (`bookid`,`typeid`),
  ADD KEY `typeid` (`typeid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `history` (`history`);

--
-- Indexes for table `thuvien`
--
ALTER TABLE `thuvien`
  ADD KEY `id` (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booktype`
--
ALTER TABLE `booktype`
  ADD CONSTRAINT `booktype_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `thuvien` (`id`),
  ADD CONSTRAINT `booktype_ibfk_2` FOREIGN KEY (`typeid`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
