-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 11:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `idprofile` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(50) NOT NULL DEFAULT 'user',
  `age` int(11) NOT NULL DEFAULT 13,
  `money` float NOT NULL DEFAULT 0,
  `avt` varchar(255) NOT NULL DEFAULT '/views/images/profile.png	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `user`, `pass`, `idprofile`, `email`, `role`, `name`, `age`, `money`, `avt`) VALUES
(12, 'my', '123', NULL, 'tienmy@gmail.com', 2, 'user', 13, 0, '/views/images/spiderman.jpg'),
(13, 'Nguyễn Tiến Mỹ', '1', NULL, 'test@gmail.com', 0, 'user', 18, 0, '/views/images/khongbietten.png'),
(15, 'gicungduoc', '123', NULL, 'a@gmail.com', 2, 'Khong co ten', 13, 0, '/views/images/khongbietten.png'),
(16, 'test2', '123123', NULL, 'test2@gmail.com', 0, 'test', 13, 0, '/views/images/profile.png	');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `url`, `type`) VALUES
(1, '/views/images/banner/bannner4.png', 1),
(2, '/views/images/banner/bannner5.png', 1),
(3, '/views/images/banner/bannner6.jpg', 1),
(8, '/views/images/banner/bannner7.jpg', 1);

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
(13, 1),
(20, 2),
(32, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(46, 2),
(50, 2),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(42, 3),
(43, 3),
(44, 3),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 4),
(25, 4),
(60, 4),
(61, 4),
(62, 4),
(63, 4),
(64, 4),
(65, 4),
(66, 4),
(67, 4),
(69, 4),
(1, 5),
(12, 5),
(16, 5),
(22, 5),
(25, 5),
(27, 5),
(31, 5),
(41, 5),
(47, 5),
(48, 5),
(50, 5),
(62, 6),
(63, 6),
(64, 6),
(65, 6),
(66, 6),
(67, 6),
(68, 6),
(69, 6),
(70, 6),
(71, 6),
(72, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cmt`
--

CREATE TABLE `cmt` (
  `id` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `cmt` longtext DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cmt`
--

INSERT INTO `cmt` (`id`, `bookid`, `userid`, `cmt`, `date`) VALUES
(36, 1, 12, 'cuon sach rat hay', '2023-11-02 21:11:19'),
(38, 1, 12, 'hello', '2023-11-16 14:38:49'),
(39, 1, 13, 'hi\r\n', '2023-11-16 14:39:40'),
(42, 2, 12, 'Sach hay tuyet', '2023-12-08 22:10:40'),
(43, 82, 12, 'hello', '2023-12-08 23:42:38'),
(44, 1, 13, 'chào', '2023-12-09 18:37:15'),
(45, 1, 12, 'chào', '2023-12-09 19:07:23'),
(46, 1, 12, 'sách hay', '2023-12-09 19:15:34'),
(47, 83, 12, 'hi', '2023-12-09 19:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `danhsachyeuthich`
--

CREATE TABLE `danhsachyeuthich` (
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhsachyeuthich`
--

INSERT INTO `danhsachyeuthich` (`userid`, `bookid`) VALUES
(12, 1),
(12, 2),
(12, 4),
(12, 5),
(12, 82),
(12, 83),
(13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diendan`
--

CREATE TABLE `diendan` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diendan`
--

INSERT INTO `diendan` (`id`, `img`, `text`, `date`) VALUES
(2, 'gatsby.jpg', '😍😍😍 Vừa đọc xong cuốn sách \"The Great Gatsby\" của tác giả F. Scott Fitzgerald.💕💕💕\r\nĐây là một tác phẩm văn học kinh điển nổi tiếng của Mỹ thuộc thể loại tiểu thuyết lãng mạn bậc nhất. Điểm đáng chú ý nhất của cuốn sách đó là việc tìm hiểu về những đường c', '2023-11-28 23:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `lichsudoc`
--

CREATE TABLE `lichsudoc` (
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lichsudoc`
--

INSERT INTO `lichsudoc` (`userid`, `bookid`, `date`) VALUES
(12, 1, '2023-12-09 19:15:44'),
(12, 2, '2023-12-09 18:41:26'),
(12, 3, '2023-12-03 12:12:23'),
(12, 4, '2023-12-03 12:12:34'),
(12, 5, '2023-12-03 12:15:56'),
(12, 6, '2023-12-06 23:27:18'),
(12, 9, '2023-12-05 00:21:59'),
(12, 12, '2023-12-05 00:22:19'),
(12, 20, '2023-11-27 21:02:24'),
(12, 25, '2023-11-27 21:02:32'),
(12, 31, '2023-11-29 14:13:34'),
(12, 46, '2023-11-29 14:13:47'),
(12, 58, '2023-11-28 23:51:16'),
(12, 81, '2023-12-02 22:30:00'),
(12, 82, '2023-12-08 23:42:52'),
(12, 83, '2023-12-09 19:18:25'),
(13, 1, '2023-11-29 19:30:49'),
(13, 2, '2023-11-29 19:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `mybooks`
--

CREATE TABLE `mybooks` (
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mybooks`
--

INSERT INTO `mybooks` (`userid`, `bookid`) VALUES
(12, 1),
(12, 31),
(12, 46),
(12, 53),
(12, 66),
(12, 70),
(12, 82),
(12, 83),
(13, 36),
(13, 37);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `bookid` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sachcho`
--

CREATE TABLE `sachcho` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `dodai` int(11) NOT NULL,
  `theloai` varchar(100) NOT NULL,
  `gioithieu` longtext NOT NULL,
  `file` varchar(50) NOT NULL,
  `TrangThai` int(11) DEFAULT 0,
  `ngaydang` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuvien`
--

CREATE TABLE `thuvien` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `rate` float NOT NULL,
  `dodai` int(11) NOT NULL,
  `theloai` varchar(100) NOT NULL,
  `luotdoc` int(11) DEFAULT 0,
  `gioithieu` longtext DEFAULT NULL,
  `ngaydang` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `thuvien`
--

INSERT INTO `thuvien` (`id`, `name`, `note`, `img`, `rate`, `dodai`, `theloai`, `luotdoc`, `gioithieu`, `ngaydang`) VALUES
(1, 'Nhà Giả Kim', 'Paulo Coelho', 'img1.jpg', 4.5, 13, 'phieuluu langman', 78, '“Nhà Giả Kim” là một trong những tác phẩm hay nhất của tác giả Paulo Coelho. Cuốn sách bắt đầu bằng câu chuyện xoay quanh cậu bé chăn cừu có tên Santiago trong chuyến hành trình đi tìm kho báu của mình. Xuyên suốt chuyến phiêu lưu để theo đuổi giấc mơ của Santiago, bạn đọc có thể thấy cậu bé đã trải qua nhiều gian khổ và nguy hiểm. Nhưng với khát khao thực hiện ước mơ, cậu bé đã không từ bỏ và vượt qua mọi thách thức. Cuộc hành trình dài này đã giúp cậu bé nhận ra nhiều bài học đáng quý cũng như mục đích và ý nghĩa cuộc đời mình. Thông qua những bài học đó, mỗi cá nhân người đọc cũng rút ra được những bài học, chân lý riêng cũng như nhìn nhận lại những thiếu sót của bản thân để thay đổi và phát triển hoàn thiện nhất.', '2023-11-14 21:57:07'),
(2, 'Ông già và biển cả', 'Ernest Hemingway', 'img3.jpg', 4.5, 2, 'phieuluu doithuong tieuthuyet', 9, 'Ông già và Biển cả (tên tiếng Anh: The Old Man and the Sea) là một tiểu thuyết ngắn được Ernest Hemingway viết ở Cuba năm 1951 và xuất bản năm 1952. Nó là truyện ngắn dạng viễn tưởng cuối cùng được viết bởi Hemingway. Đây cũng là tác phẩm nổi tiếng và là một trong những đỉnh cao trong sự nghiệp sáng tác của nhà văn. Tác phẩm này đoạt giải Pulitzer cho tác phẩm hư cấu năm 1953. Nó cũng góp phần quan trọng để nhà văn được nhận Giải Nobel văn học năm 1954.', '2023-11-14 21:57:07'),
(3, 'Chúa tể của những chiếc nhẫn', 'J. R. R. Tolkien', 'img4.jpg', 5, 6, 'phieuluu langman', 1, 'Cuốn sách Chúa tể của những chiếc nhẫn (tựa Tiếng Anh: The Lord of the Rings) được tác giả J.R.R Tolkien sáng tác và chia ra làm ba phần nhưng nội dung vẫn liên quan chặt chẽ với nhau.\r\nNội dung câu chuyện được lấy bối cảnh tại một vùng đất được tác giả tưởng tượng ra có tên là Middle Earth, hoặc với tên gọi khác là vùng Trung địa. Tại nơi đây, chính là nơi sinh sống của rất nhiều giống loài, bộ tộc đặc biệt và khác nhau, có thể kể đến như người bình thường, người lùn (Hobbit), pháp sư (Wizard), yêu tinh (Goblin), người tiên (Elf), chim ưng (Eagle)... Chính những bộ tộc này đã cùng nhau kết hợp và liên minh với nhau để loại trừ chiếc nhẫn của chúa tể bóng đêm Sauron. \r\n', '2023-11-14 21:57:07'),
(4, 'Don Quixote', 'Miguel de Cervantes Saavedra', 'img5.jpg', 4, 75, 'phieuluu', 1, 'Được xuất bản thành hai phần vào năm 1605 và 1615, đây là câu chuyện về Alonso Quijano, một quý tộc nghèo sa sút người Tây Ban Nha thế kỷ 16, người say mê đọc sách đến mức bỏ nhà ra đi để tìm kiếm những cuộc phiêu lưu hào hiệp của riêng mình. Ông tự phong cho mình là kỵ sĩ: Don Quixote xứ Mancha. Bằng cách mô phỏng những nhân vật anh hùng văn học mà mình ngưỡng mộ, ông tìm thấy ý nghĩa mới trong cuộc sống của mình: giúp đỡ những người khốn khổ gặp nạn, chiến đấu với những người khổng lồ và đấu tranh với những sai trái — hầu hết [những điều đó] đều diễn ra trong đầu của ông.', '2023-11-14 21:57:07'),
(5, 'Chiến tranh và hoà bình', 'Lev Tolstoy', 'img6.jpg', 4.5, 25, 'nghethuat tieusu', 1, 'Khi quân đội của Napoleon xâm lược, Tolstoy theo chân một cách xuất sắc các nhân vật có xuất thân khác nhau – nông dân và quý tộc, thường dân và binh lính – khi họ đấu tranh với những vấn đề độc đáo của thời đại, lịch sử và văn hóa của họ. Và khi cuốn tiểu thuyết tiếp tục phát triển, những nhân vật này vượt lên trên tính cụ thể của họ, trở thành một số nhân vật – và con người – cảm động nhất trong văn học thế giới.\r\nChiến tranh và Hòa bình đã có ảnh hưởng lớn lao đối với sự phát triển của văn học Xô Viết và Tây Âu nói riêng, văn học thế giới nói chung. Bởi từ khi ra đời tới nay, bộ tiểu thuyết đã được xuất bản hàng nghìn lần bằng nhiều thứ tiếng khác nhau.\r\n', '2023-11-14 21:57:07'),
(6, 'Hoàng tử bé', 'Antoine De Saint-Expéry', 'img7.jpg', 5, 7, 'phieuluu nghethuat langman', 305, 'Hoàng tử bé là một cuốn sách kì lạ được viết bởi một tác giả kì lạ. Saint Exupéry đâu phải là một nhà văn thường, mà là một nhà văn phi công! Ông sáng tác Hoàng tử bé trong thời kì lưu vong khi nước Pháp bị chiếm đóng, ông không được bay theo đúng nghĩa. Cuốn sách là một cuộc hành trình đi tìm lại trí tưởng tượng của bản thân mình, mà chính tác giả đã bỏ quên trong quá khứ. Ông khẳng định, thế giới của trẻ con khác với thế giới của người lớn. Khi người lớn có quá nhiều thứ phải suy nghĩ, nhưng lại nhàm chán bởi các vấn đề họ quan tâm chỉ là tiền bạc, quyền lực, đôi khi không biết mình đang làm gì. Thì thế giới trẻ con đơn giản hơn nhiều, song cũng màu sắc hơn nhiều.', '2023-11-14 21:57:07'),
(7, 'SherLock Holmes', 'Arthur Conan Doyle', 'img8.jpg', 4.5, 110, 'trinhtham khoahoc nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(8, 'Romeo và Juliet', 'William Shakespeare', 'img9.jpg', 3.5, 3, 'langman', 0, NULL, '2023-11-14 21:57:07'),
(9, 'Tôi là Bêtô', 'Nguyễn Nhật Ánh', 'img10.jpg', 4, 10, 'treem tuongtuong', 1, NULL, '2023-11-14 21:57:07'),
(10, 'The Candy House', 'Jennifer Egan', 'img11.jpg', 4, 5, 'khoahoc nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(11, 'QUO VADIS', 'Henryk Sienkiewicz', 'img12.jpg', 4, 74, 'lichsu tuongtuong phieuluu', 0, NULL, '2023-11-14 21:57:07'),
(12, 'Think and Grow Rich', 'Napoleon Hill', 'img13.jpg', 4.5, 43, 'khoahoc tieusu', 1, NULL, '2023-11-14 21:57:07'),
(13, 'Hình hài của nước', 'Thu Phương', 'img14.jpg', 4.5, 56, 'tuongtuong phieuluu nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(14, 'Perfect', 'Rachel Joyce', 'img15.jpg', 4.5, 71, 'nghethuat tieusu', 0, NULL, '2023-11-14 21:57:07'),
(15, 'Life of Pi', 'Yann Martel', 'img16.jpg', 4, 34, 'phieuluu nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(16, 'Hoàng tử bé', 'Nhà xuất bản Kim Đồng', 'img17.jpg', 4.5, 30, 'treem phieuluu tuongtuong nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(17, 'Việt Nam Phong tục', 'Phan Kế Bính', 'img18.jpg', 4.5, 50, 'nghethuat lichsu tongiao', 0, NULL, '2023-11-14 21:57:07'),
(18, 'Hai Số Phận', 'Jeffrey Archer', 'img19.jpg', 4, 60, 'nghethuat tieusu', 0, NULL, '2023-11-14 21:57:07'),
(19, 'IRON HANS', 'Tuyển tập truyện cổ tích thế giới', 'img20.jpg', 3.5, 50, 'treem phieuluu nghethuat tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(20, 'Truyện ngắn đặc sắc Nga', 'Nhà xuất bản Kim Đồng', 'img21.jpg', 4.5, 300, 'phieuluu nghethuat langman tuongtuong trinhtham', 1, NULL, '2023-11-14 21:57:07'),
(21, 'Không Gia Đình', 'Hector Malot', 'img22.jpg', 4, 60, 'tieusu nghethuat tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(22, 'truyện Thúy Kiều', 'Nguyễn Du', 'img23.jpg', 4.5, 300, 'nghethuat tieusu langman', 0, NULL, '2023-11-14 21:57:07'),
(23, 'Đối thoại cùng ma', 'Eva Ibbotson', 'img24.jpg', 4, 80, 'tuongtuong nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(24, 'Nếu chỉ còn một ngày để sống', 'NIGOLA YOON', 'img25.jpg', 4, 50, 'tuongtuong nghethuat phieuluu', 0, NULL, '2023-11-14 21:57:07'),
(25, 'Những Người Khốn Khổ', 'VICTOR HUGO', 'img26.jpg', 5, 50, 'nghethuat lichsu tieusu', 1, NULL, '2023-11-14 21:57:07'),
(26, 'Cái Chết Huy Hoàng', 'J. D. ROBB', 'img27.jpg', 4, 60, 'tieusu nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(27, 'Harry Potter và hoàng tử lai', 'J. K. Rowling', 'img28.JPG', 5, 6, 'tuongtuong phieuluu', 0, NULL, '2023-11-14 21:57:07'),
(28, 'Tiếng Hán-Tạng nguyên thủy', 'Phương ngữ tiếng Hán', 'img29.jpg', 3.5, 30, 'khoahoc nghethuat sachgiaokhoa', 0, NULL, '2023-11-14 21:57:07'),
(29, 'The Fault In our Stars', 'John Green', 'img30.jpg', 4, 30, 'tuongtuong nghethuat khoahocvientuong', 0, NULL, '2023-11-14 21:57:07'),
(30, 'Hỏa Ngục', 'DAN BROWN', 'img31.jpg', 4.5, 60, 'tuongtuong nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(31, 'Hai đứa trẻ', 'Thạch Lam', 'img32.jpg', 4.5, 30, 'nghethuat tieusu sachgiaokhoa', 2, NULL, '2023-11-14 21:57:07'),
(32, 'Nếu được yêu như thế', 'Nguyên Ngộ Không', 'img33.jpg', 3.5, 30, 'langman', 0, NULL, '2023-11-14 21:57:07'),
(33, 'The Sun The Moon The Stars', 'Junot Diaz', 'img34.jpg', 4, 4, 'langman nghethuat tieusu', 0, NULL, '2023-11-14 21:57:07'),
(34, 'Săn Cá Thần', 'Đặng Thiều Quang', 'img35.jpg', 4, 10, 'tuongtuong tieusu nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(35, 'Ngôi Nhà Nghìn Hành Lang', 'Thu Phương', 'img36.jpg', 5, 60, 'tuongtuong nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(36, 'Cẩm nang du lịch Việt Nam', 'Mì', 'mybook2.jpg', 4, 10, 'khoahoc tieusu', 0, NULL, '2023-11-14 21:57:07'),
(37, 'Người hùng áo trắng và kẻ địch vô hình', 'ntmy', 'mybook1.jpg', 4, 50, 'khoahoc tuongtuong tieusu', 0, NULL, '2023-11-14 21:57:07'),
(38, 'Việt Nam Sử Lược', 'Trần Trọng Kim', 'baikiemtragiuaki/cd1.jpg', 5, 100, 'lichsu nghethuat tieusu', 0, NULL, '2023-11-14 21:57:07'),
(39, 'Từ điển Hán-Việt hiện đại', 'Nguyễn Kim Thản', 'baikiemtragiuaki/cd3.jpg', 4, 30, 'nghethuat sachgiaokhoa', 0, NULL, '2023-11-14 21:57:07'),
(40, 'Pho tượng của Baltalon', 'Nguyễn Nhật Ánh', 'baikiemtragiuaki/cd4.jpg', 4.5, 80, 'treem nghethuat tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(41, 'Truyện cổ tích Việt Nam được yêu thích nhất', 'Nhà xuất bản Kim Đồng', 'baikiemtragiuaki/cd5.jpg', 4.5, 500, 'treem tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(42, 'Hà Nội 36 phố phường', 'Thạch Lam', 'baikiemtragiuaki/cd6.jpg', 4, 32, 'tieusu lichsu langman', 0, NULL, '2023-11-14 21:57:07'),
(43, 'Những Ngày Thơ Ấu', 'Nguyên Hồng', 'baikiemtragiuaki/cd7.jpg', 4, 9, 'lichsu tieusu nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(44, 'Tấm Cám', 'Cổ tích Việt Nam', 'baikiemtragiuaki/cd11.jpg', 4.5, 6, 'treem tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(45, 'Đừng lựa chọn An Nhàn khi còn trẻ', 'Cảnh Thiên', 'baikiemtragiuaki/cd12.jpg', 4, 10, 'khoahoc tieusu doisong', 0, NULL, '2023-11-14 21:57:07'),
(46, 'Chuyện xứ LANGBIANG', 'Nguyễn Nhật Ánh', 'baikiemtragiuaki/cd4.jpg', 4.5, 28, 'phieuluu tuongtuong treem nghethuat', 1, NULL, '2023-11-14 21:57:07'),
(47, 'Những tấm lòng Cao Cả', 'Edmondo De Amicis', 'baikiemtragiuaki/st61.jpg', 4, 30, 'lichsu tieusu doisong', 0, NULL, '2023-11-14 21:57:07'),
(48, 'Tuổi trẻ đáng giá bao nhiêu', 'Rosie Nguyễn', 'baikiemtragiuaki/st64.jpg', 4, 5, 'doisong nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(49, 'Tôi tài giỏi bạn cũng thế!', 'Adam Khoo', 'baikiemtragiuaki/st65.jpg', 4.5, 10, 'doisong khoahoc nghethuat tamly', 0, NULL, '2023-11-14 21:57:07'),
(50, 'Vì Thương', 'NXB Văn Hóa Văn Nghệ', 'baikiemtragiuaki/st66.jpg', 4.5, 50, 'nghethuat doisong tieusu', 0, NULL, '2023-11-14 21:57:07'),
(51, 'Thang Máy và Thang Cuốn', 'Chủ biên: ThS. Hoa Văn Ngũ', 'baikiemtragiuaki/st67.jpg', 4, 30, 'khoahoc sachgiaokhoa', 0, NULL, '2023-11-14 21:57:07'),
(52, 'Ngôi nhà quái dị', 'Dịch: Anh Trần', 'baikiemtragiuaki/st69.jpg', 3.5, 50, 'tuongtuong nghethuat trinhtham', 0, NULL, '2023-11-14 21:57:07'),
(53, 'The Book Thief', 'Markus Zusak', 'baikiemtragiuaki/st610.jpg', 4, 50, 'nghethuat lichsu tieusu trinhtham doisong', 0, NULL, '2023-11-14 21:57:07'),
(54, 'Peter Pan', 'J. M. Barrie', 'baikiemtragiuaki/st612.jpg', 4.5, 50, 'phieuluu tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(55, 'Quân Khu Nam Đồng', 'Bình Ca', 'baikiemtragiuaki/yt1.jpg', 4, 21, 'lichsu tieusu nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(56, 'Trà Hoa Nữ', 'Alexandre Dumas', 'baikiemtragiuaki/yt3.jpg', 4, 30, 'nghethuat tieusu langman', 0, NULL, '2023-11-14 21:57:07'),
(57, 'Vô cùng Tàn Nhẫn vô cùng Yêu Thương', 'Sara Imas', 'baikiemtragiuaki/yt5.jpg', 4, 10, 'khoahoc doisong', 0, NULL, '2023-11-14 21:57:07'),
(58, 'Mắt Biếc', 'Nguyễn Nhật Ánh', 'baikiemtragiuaki/yt8.png', 4.5, 30, 'nghethuat langman', 1, NULL, '2023-11-14 21:57:07'),
(59, 'Không gia đình', 'Hector Malot', 'baikiemtragiuaki/yt10.jpg', 4, 30, 'phieuluu tieusu treem', 0, NULL, '2023-11-14 21:57:07'),
(60, 'Nghiệp Tình Yêu', 'Geshe Michael Roach', 'baikiemtragiuaki/yt11.png', 4, 30, 'nghethuat tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(61, 'Cô gái năm ấy chúng ta cùng theo đuổi', 'Người dịch: Lục Hương', 'baikiemtragiuaki/yt2.jpeg', 4.5, 50, 'doisong tieusu langman', 0, NULL, '2023-11-14 21:57:07'),
(62, 'Happy World', 'Tiếng anh cho trẻ em', 'baikiemtragiuaki/te1.jpg', 4, 50, 'treem sachgiaokhoa', 0, NULL, '2023-11-14 21:57:07'),
(63, 'Tiếng Hoa dành cho trẻ em', 'Mã Thành Tài', 'baikiemtragiuaki/te2.jpg', 3.5, 30, 'treem sachgiaokhoa', 0, NULL, '2023-11-14 21:57:07'),
(64, 'Truyện cổ tích dành cho Bé', 'Những truyện kể thú vị là món điểm tâm ngọt ngào trong thời thơ ấu', 'baikiemtragiuaki/te3.jpg', 4.5, 60, 'treem tuongtuong phieuluu', 0, NULL, '2023-11-14 21:57:07'),
(65, 'Truyện cổ tích dành cho Bé 2', ' Những truyện kể thú vị là món điểm tâm ngọt ngào trong thời thơ ấu', 'baikiemtragiuaki/te4.jpg', 4.5, 60, 'treem phieuluu tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(66, 'F\'apprends à lire', 'A. Cecconello', 'baikiemtragiuaki/te5.jpg', 4, 10, 'doisong nghethuat tuongtuong', 0, NULL, '2023-11-14 21:57:07'),
(67, 'Cờ vua nhập môn', 'Biên soạn: Đỗ Phú Phi', 'baikiemtragiuaki/te6.jpg', 4, 50, 'khoahoc nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(68, 'ATLAS về các quốc gia', 'Nhà xuất bản Kim Đồng', 'baikiemtragiuaki/te7.jpg', 4, 8, 'sachgiaokhoa khoahoc', 0, NULL, '2023-11-14 21:57:07'),
(69, 'Khác biệt giới tính', 'SHIN Yeon-Mi', 'baikiemtragiuaki/te9.jpg', 4, 30, 'treem khoahoc', 0, NULL, '2023-11-14 21:57:07'),
(70, 'Bé tập tô màu', 'Nhà xuất bản Mỹ Thuật', 'baikiemtragiuaki/te10.jpg', 4, 60, 'treem', 0, NULL, '2023-11-14 21:57:07'),
(71, 'Đồng Dao Thơ-Truyện', 'Nhà xuất bản Phụ Nữ', 'baikiemtragiuaki/te11.jpg', 4, 30, 'nghethuat sachgiaokhoa', 0, NULL, '2023-11-14 21:57:07'),
(72, 'Bí ẩn về Vũ Trụ', 'Biên dịch: SONG LINH', 'baikiemtragiuaki/te12.jpg', 4, 30, 'khoahoc sachgiaokhoa nghethuat', 0, NULL, '2023-11-14 21:57:07'),
(81, 'tieng nhat 2', 'mi`', 'baikiemtragiuaki/Screenshot 2023-11-30 171642.png', 0, 15, ' phieuluu langman doithuong tieuthuyet', 2, 'ád', '2023-12-02 22:21:03'),
(82, 'Think n grow rich', 'nặc danh', 'trangbia/khongbietten_10.png', 0, 50, ' doithuong tieuthuyet treem', 9, 'làm giàu không khó', '2023-12-08 23:19:10'),
(83, 'Don ki ho te', 'Saavedra', 'trangbia/don_kihote_1.png', 0, 50, ' phieuluu tieuthuyet', 1, 'Sách hay', '2023-12-09 19:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(3, 'codien'),
(2, 'moi'),
(6, 'treem'),
(1, 'xuhuong'),
(5, 'yeuthichnhat');

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
  ADD PRIMARY KEY (`typeid`,`bookid`) USING BTREE,
  ADD KEY `typeid` (`typeid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  ADD PRIMARY KEY (`userid`,`bookid`),
  ADD KEY `danhsachyeuthich_ibfk_1` (`bookid`);

--
-- Indexes for table `diendan`
--
ALTER TABLE `diendan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lichsudoc`
--
ALTER TABLE `lichsudoc`
  ADD PRIMARY KEY (`userid`,`bookid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `mybooks`
--
ALTER TABLE `mybooks`
  ADD PRIMARY KEY (`userid`,`bookid`) USING BTREE,
  ADD KEY `bookid` (`bookid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `sachcho`
--
ALTER TABLE `sachcho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuvien`
--
ALTER TABLE `thuvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `diendan`
--
ALTER TABLE `diendan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sachcho`
--
ALTER TABLE `sachcho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booktype`
--
ALTER TABLE `booktype`
  ADD CONSTRAINT `booktype_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `thuvien` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cmt`
--
ALTER TABLE `cmt`
  ADD CONSTRAINT `cmt_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `account` (`ID`),
  ADD CONSTRAINT `cmt_ibfk_3` FOREIGN KEY (`bookid`) REFERENCES `thuvien` (`id`);

--
-- Constraints for table `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  ADD CONSTRAINT `danhsachyeuthich_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `thuvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `danhsachyeuthich_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lichsudoc`
--
ALTER TABLE `lichsudoc`
  ADD CONSTRAINT `lichsudoc_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `thuvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichsudoc_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mybooks`
--
ALTER TABLE `mybooks`
  ADD CONSTRAINT `mybooks_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mybooks_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `thuvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`id`) REFERENCES `booktype` (`typeid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
