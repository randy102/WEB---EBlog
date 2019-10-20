-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2018 lúc 03:56 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eblog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `penname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '1',
  `birthdate` date DEFAULT NULL,
  `quote` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `position` int(11) NOT NULL,
  `date` date NOT NULL,
  `avar` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT 'index_avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `fullname`, `penname`, `email`, `password`, `birthdate`, `quote`, `facebook`, `about`, `position`, `date`, `avar`) VALUES
(2, 'Trần Quang', 'Randy', 'welldey102@gmail.com', 'bemyself', '2000-08-08', 'Star can\'t shine without darkness', 'https://www.facebook.com/profile.php?id=100005471800276', 'Nothing', 1, '2018-10-06', 'quang (2).jpg'),
(3, 'AAAA', 'Welldey', 'welldey8800@gmail.com', 'bemyself', '0000-00-00', '', '', '', 0, '2018-10-10', 'index_avatar.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category`, `icon`, `date`) VALUES
(3, 'Lifestyle', 'leaf', '2018-10-10'),
(5, 'Travel', 'plane-departure', '2018-10-12'),
(7, 'Movies', 'film', '2018-10-12'),
(8, 'Games', 'gamepad', '2018-10-12'),
(9, 'English-learning', 'book', '2018-10-12'),
(10, 'Music', 'music', '2018-10-12'),
(11, 'University Life', 'university', '2018-10-12'),
(12, 'Coding', 'code', '2018-10-12'),
(13, 'Psychology', 'brain', '2018-10-12'),
(14, 'Relationship', 'hand-holding-heart', '2018-10-12'),
(15, 'Health', 'heartbeat', '2018-10-12'),
(16, 'Social', 'users', '2018-10-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cont` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `user`, `cont`, `date`) VALUES
(1, 'Quang', 'Hello', '2018-10-12'),
(2, '', '', '2018-10-13'),
(3, '', '', '2018-10-13'),
(4, '', '', '2018-10-13'),
(5, '', '', '2018-10-13'),
(6, '', '', '2018-10-13'),
(7, '', '', '2018-10-13'),
(8, '', '', '2018-10-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `google` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `copy` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `site_birth` date NOT NULL DEFAULT '2018-10-10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`phone`, `email`, `facebook`, `youtube`, `google`, `twitter`, `about`, `copy`, `id`, `site_birth`) VALUES
(123456789, 'welldey102@gmail.com', 'https://www.facebook.com/Etrans-Blog-218962742114961/', 'https://www.youtube.com/channel/UC3WKitZ-QSPuJ_cvYSGy1Ow?view_as=subscriber', 'Updating', 'Updating', 'Etrans Blog là một trang blog song ngữ Anh-Việt bao gồm nhiều chủ đề phong phú, những câu chuyện thú vị, những trải nghiệm đời thật của tác giả... mang lại cho bạn những giây phút thư giãn, một góc nhìn mới trong cuộc sống cùng với cơ hội được trau dồi kỹ năng tiếng Anh, nâng cao vốn từ vựng, kiến thức chuyên môn của nhiều lĩnh vực, ngành nghề... Và trang Blog sẽ không thể phát triển và tồn tại nếu thiếu đi những tác giả, những cây bút đầy tâm huyết đã gắn bó với Etrans trong suốt quá trình chinh phục con đường mang tên tri thức:', 'The copy, modify, dissemination, and use of any form beyond the scope of copyright law requires the written consent of the author or site operator. The downloading or reproduction of this website is for personal and non-commercial use only.', 0, '2018-10-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `vi_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `vi_header` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng_header` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vi_cont` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `eng_cont` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `des` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `vi_title`, `eng_title`, `category_id`, `vi_header`, `eng_header`, `vi_cont`, `eng_cont`, `img`, `keywords`, `des`, `date`, `author_id`, `status`, `likes`, `views`, `link`) VALUES
(2, 'Chất lượng cao tốc Đà Nẵng - Quảng Ngãi chỉ đạt 6/10 là có vấn đề', 'High speed Da Nang - Quang Ngai only reached 6/10 is problematic', 3, 'Trao đổi với Zing.vn, ông Nguyễn Tiến Thành, Giám đốc Ban quản lý dự án đường cao tốc Đà Nẵng - Quảng Ngãi (VEC), cho biết nhà thầu đang khắc phục các vị trí hư hỏng trên cao tốc Đà Nẵng - Quảng Ngãi.', 'Nguyen Tan Thanh, director of the Da Nang-Quang Ngai Expressway Project Management Board (VEC), said that the contractor was repairing damaged positions on Da Nang-Quang Ninh highway. Ngai.', '<h3>Chất lượng cao tốc chỉ đạt 6/10 điểm</h3>\r\n\r\n<p>&Ocirc;ng Th&agrave;nh cho biết thời gian qua b&aacute;o ch&iacute; phản &aacute;nh t&igrave;nh trạng hư hỏng cục bộ tr&ecirc;n đoạn cao tốc T&uacute;y Loan - Tam Kỳ (Quảng Nam) l&agrave; đ&uacute;ng. Theo nhận định ban đầu, những hư hỏng tr&ecirc;n c&oacute; thể do nguồn gốc vật liệu thảm ở một số mẻ kh&ocirc;ng đảm bảo. C&ugrave;ng với đ&oacute;, t&aacute;c động của lưu lượng xe lớn, trong đ&oacute; c&oacute; cả xe qu&aacute; tải lưu th&ocirc;ng dưới trời mưa.</p>\r\n\r\n<p>&quot;Ngo&agrave;i ra, c&oacute; thể phương tiện lưu th&ocirc;ng tr&ecirc;n tuyến bị vương v&atilde;i dầu hoặc trong qu&aacute; tr&igrave;nh thi c&ocirc;ng trước đ&acirc;y m&aacute;y m&oacute;c chảy dầu ra mặt đường, g&acirc;y hư hỏng, xuất hiện &#39;ổ g&agrave;&#39; như tr&ecirc;n&quot;, &ocirc;ng Th&agrave;nh n&oacute;i v&agrave; cho biết cao tốc c&oacute; thời gian bảo h&agrave;nh 24 th&aacute;ng n&ecirc;n chi ph&iacute; khắc phục sẽ do c&aacute;c&nbsp;nh&agrave; thầu chi trả.</p>\r\n', '<p>High speed performance is only 6/10<br />\r\nMr. Thanh said that the time of the press reflected local damage on the highway section of Tuy Loan - Tam Ky (Quang Nam) is correct. Initial damage may be due to the origin of carpet material in some batches are not guaranteed. In addition, the impact of large vehicle traffic, including overloaded vehicles in the rain.</p>\r\n\r\n<p><img alt=\"\" src=\"/Public/img/files/loan%203.jpg\" style=\"height:959px; width:960px\" /></p>\r\n\r\n<p>&quot;In addition, it is possible that the traffic on the route was oil spilled or during the construction process before the oil drainage machine, causing damage, appeared &#39;potholes&#39; as above,&quot; said Thanh and The highway has a 24-month warranty, so the cost of repairs will be borne by contractors.<br />\r\n&nbsp;</p>\r\n', 'dji_0062.jpg', 'guty', 'rewtwer', '2018-10-10', 2, 1, 7, 57, 'high-speed-da-nang-quang-ngai-only-reached-6-10-is-problematic'),
(3, 'Tại sao TP.HCM xây nhà hát mà không phải bệnh viện, trường học?', 'Why does HCMC build a theater without a hospital or school?', 3, 'Chia sẻ với Zing.vn, kiến trúc sư Trần Ngọc Chính (nguyên Thứ trưởng Bộ Xây dựng, Chủ tịch Hội quy hoạch phát triển đô thị Việt Nam) cho rằng dự án xây Nhà hát Giao hưởng, Nhạc và Vũ kịch của TP.HCM là một bước đi táo bạo trong quá trình thay đổi diện mạo và tạo dựng những giá trị biểu tượng cho thành phố mang tên Bác.', 'Sharing with Zing.vn, architect Tran Ngoc Chinh (former Vice Minister of Construction, Chairman of the Vietnam Urban Planning Association) said that the project to build the Symphony, Music and Dance Theater of the city. Ho Chi Minh City is a bold step in the process of changing the face and create symbolic values for the city named Uncle.', '<p>Ng&agrave;y 9/10, khi đang l&aacute;i xe, t&ocirc;i nghe th&ocirc;ng tin tr&ecirc;n đ&agrave;i ph&aacute;t thanh rằng&nbsp;<a href=\"https://news.zing.vn/hdnd-tphcm-dong-y-xay-nha-hat-1500-ty-o-thu-thiem-post882790.html\">HĐND TP.HCM th&ocirc;ng qua&nbsp;</a>một nội dung li&ecirc;n quan đến x&acirc;y dựng Nh&agrave; h&aacute;t Giao hưởng, Nhạc v&agrave; Vũ kịch cho TP.HCM tại Thủ Thi&ecirc;m. T&ocirc;i đ&atilde; rất mừng.</p>\r\n\r\n<p>Từng v&agrave; tham gia thiết kế, tư vấn nhiều dự &aacute;n của TP.HCM với tư c&aacute;ch l&agrave; một kiến tr&uacute;c sư từ thời c&ograve;n l&agrave;m ở Viện Quy hoạch Đ&ocirc; thị - N&ocirc;ng th&ocirc;n (Bộ X&acirc;y dựng), t&ocirc;i c&oacute; thời gian d&agrave;i theo d&otilde;i từng bước ph&aacute;t triển của th&agrave;nh phố mang t&ecirc;n B&aacute;c. Khu vực Thủ Thi&ecirc;m c&oacute; một vị tr&iacute; hết sức quan trọng trong chiến lược quy hoạch v&agrave; ph&aacute;t triển của th&agrave;nh phố.</p>\r\n\r\n<p>Thủ Thi&ecirc;m, trong những quy hoạch gần đ&acirc;y đang trở th&agrave;nh một trung t&acirc;m đ&ocirc; thị mới của TP.HCM, kh&ocirc;ng những thế n&oacute; c&ograve;n tạo n&ecirc;n h&igrave;nh ảnh th&agrave;nh phố ở 2 b&ecirc;n bờ s&ocirc;ng S&agrave;i G&ograve;n. Nếu được quy hoạch hợp l&yacute;, nơi đ&acirc;y sẽ kh&ocirc;ng kh&aacute;c g&igrave; c&aacute;c th&agrave;nh phố ở ch&acirc;u &Acirc;u.</p>\r\n\r\n<h3>TP.HCM đ&atilde; sai g&igrave; trong c&acirc;u chuyện n&agrave;y?</h3>\r\n\r\n<p>TP.HCM chưa chuẩn bị cho người d&acirc;n một tư tưởng sẵn s&agrave;ng để đ&oacute;n nhận dự &aacute;n nh&agrave; h&aacute;t theo c&aacute;ch t&iacute;ch cực trong khi đ&acirc;y l&agrave; dự &aacute;n m&agrave; UBND th&agrave;nh phố đ&atilde; ấp ủ từ 20 năm về trước.</p>\r\n\r\n<p>T&ocirc;i nhấn mạnh l&agrave; dự &aacute;n đ&atilde; c&oacute; từ 20 năm trước. V&agrave; kh&ocirc;ng phải HĐND th&ocirc;ng qua th&igrave; ng&agrave;y mai TP đổ 1.500 tỷ ra ngay để x&acirc;y. Nhanh nhất th&igrave; 2-3 năm tới mới c&oacute; thể khởi c&ocirc;ng bởi dự &aacute;n c&ograve;n trải qua nhiều bước.</p>\r\n', '<p>On 9/10, when I was driving, I heard information on the radio that HCMC People&#39;s Council approved a content related to the building of the Symphony, Music and Dance Theater for HCMC in Thu Thiem. I was very happy.</p>\r\n\r\n<p>Having worked as an architect since working at the Institute of Urban and Rural Planning (Ministry of Construction), I have been involved in designing and consulting many projects in Ho Chi Minh City. the development of the city named Uncle. Thu Thiem has a very important place in the planning and development strategy of the city.</p>\r\n\r\n<p>Thu Thiem, in the recent planning is becoming a new urban center of Ho Chi Minh City, not only that it also creates the image of the city on both sides of the Saigon River. If properly planned, this place will be no different to European cities.</p>\r\n\r\n<p>What was wrong with Ho Chi Minh City?<br />\r\nHo Chi Minh City has not prepared for the people a willingness to welcome theater projects in a positive way while this is a project that the city People&#39;s Committee has cherished 20 years ago.</p>\r\n\r\n<p>I emphasize that the project was 20 years ago. And not the People&#39;s Council approved, tomorrow the city poured 1.500 billion to build immediately. The fastest is 2-3 years to start the project is going through many steps.</p>\r\n', 'nhahatvitri.jpg', '', '', '2018-10-11', 2, 1, 49, 10, 'why-does-hcmc-build-a-theater-without-a-hospital-or-school-');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date`) VALUES
(11, 'welldey8800@gmail.com', '2018-10-12'),
(12, 'welldeyqewr', '2018-10-13'),
(13, 'rqwe', '2018-10-13');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
