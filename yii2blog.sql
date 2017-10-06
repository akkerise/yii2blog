-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2017 at 01:43 PM
-- Server version: 5.7.19-0ubuntu1
-- PHP Version: 7.1.9-1+ubuntu17.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `keyword`, `description`, `tag_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'FaceID nghe rất thú vị nhưng có những tình huống chỉ hình dung đã thấy bất tiện, nhất là khi bạn dùng nó tới 80 lần/ngày', '<h2 class=\"knc-sapo\">Thử một, hai lần c&oacute; vẻ kh&ocirc;ng phải vấn đề. Nhưng khi bạn d&ugrave;ng m&aacute;y li&ecirc;n tục cả ng&agrave;y, tần suất d&ugrave;ng FaceID tới 80 lần th&igrave; c&oacute; nhiều t&igrave;nh huống kh&oacute; chịu hơn nhiều.</h2>\r\n<div class=\"clearfix\">&nbsp;</div>\r\n<div id=\"ContentDetail\" class=\"knc-content\">\r\n<p>Chiếc iPhone X ho&agrave;n to&agrave;n mới đ&atilde; lộ diện, v&agrave; n&oacute; được mang theo đầy đủ c&ocirc;ng nghệ. Nhưng c&oacute; một thứ m&agrave; n&oacute; kh&ocirc;ng c&oacute;, đ&oacute; l&agrave; cảm biến v&acirc;n tay. Giống như nhiều điện thoại ra mắt trong năm 2017, iPhone X xuất hiện với m&agrave;n h&igrave;nh phủ k&iacute;n gần như to&agrave;n bộ mặt trước, điều n&agrave;y c&oacute; nghĩa l&agrave; kh&ocirc;ng c&ograve;n chỗ cho một cảm biến Touch ID ở ph&iacute;a trước nữa.</p>\r\n<p>Thay v&igrave; đặt cảm biến v&acirc;n tay ở ph&iacute;a sau, như nhiều chiếc điện thoại kh&aacute;c đang l&agrave;m, Apple chọn c&aacute;ch loại bỏ ho&agrave;n to&agrave;n Touch ID đ&oacute;. Thay v&agrave;o đ&oacute;, iPhone X dựa v&agrave;o t&iacute;nh năng nhận diện gương mặt mới &ldquo;Face ID&rdquo; để bảo mật sinh trắc học.</p>\r\n<p>Face ID tr&ecirc;n iPhone X sử dụng camera c&ocirc;ng nghệ TrueDepth, c&oacute; khả năng chiếu s&aacute;ng khu&ocirc;n mặt bạn với 30.000 điểm hồng ngoại v&agrave; qu&eacute;t gương mặt bạn bằng h&igrave;nh ảnh 3D. Apple cho rằng c&ocirc;ng nghệ n&agrave;y c&oacute; thể &ldquo;<em>nhận ra bạn ngay lập tức</em>&rdquo; v&agrave; đăng nhập v&agrave;o điện thoại của bạn.</p>\r\n<div class=\"VCSortableInPreviewMode\">\r\n<div><img id=\"img_63b60c70-99cd-11e7-a8db-1d1d88eac0e4\" src=\"http://genknews.genkcdn.vn/thumb_w/660/2017/screen-shot-2017-09-12-at-2-26-04-pm-980x613-1505449303352.png\" alt=\"\" data-original=\"http://genknews.genkcdn.vn/2017/screen-shot-2017-09-12-at-2-26-04-pm-980x613-1505449303352.png\" /></div>\r\n<div class=\"PhotoCMS_Caption\">&nbsp;</div>\r\n</div>\r\n<p>D&ugrave; sao đi nữa, FaceID c&oacute; vẻ chưa phải l&agrave; một &yacute; tưởng hay (tr&ecirc;n giấy).</p>\r\n<p>Đ&acirc;y kh&ocirc;ng phải chiếc điện thoại đầu ti&ecirc;n c&oacute; t&iacute;nh năng nhận diện gương mặt, v&agrave; ch&uacute;ng đều c&oacute; chung một vấn đề. Bất kể Face ID nhanh v&agrave; ch&iacute;nh x&aacute;c đến đ&acirc;u đi nữa, vấn đề nằm ở c&ocirc;ng th&aacute;i học (ergonomic) - hay sự tiện dụng: bạn buộc phải hướng thiết bị v&agrave;o gương mặt m&igrave;nh. Đ&oacute; l&agrave; một thao t&aacute;c chậm chạp v&agrave; kỳ quặc, đặc biệt l&agrave; khi so s&aacute;nh với cảm biến v&acirc;n tay, thứ m&agrave; bạn chẳng phải hướng n&oacute; v&agrave;o đ&acirc;u cả.</p>\r\n<p><strong>Bất tiện khi lấy ra khỏi t&uacute;i</strong></p>\r\n<p>H&atilde;y nghĩ về t&igrave;nh huống khi bạn r&uacute;t thiết bị ra khỏi t&uacute;i: nếu bạn l&agrave;m đ&uacute;ng, bạn sẽ đặt ng&oacute;n tay v&agrave;o t&uacute;i v&agrave; r&uacute;t chiếc điện thoại ra, l&uacute;c n&agrave;y ng&oacute;n tay sẽ đặt ngay v&agrave;o m&aacute;y đọc dấu v&acirc;n tay. Touch ID hoạt động cả như một n&uacute;t &ldquo;bật m&aacute;y&rdquo; v&agrave; n&uacute;t &ldquo;<em>x&aacute;c thực</em>&rdquo;. Chỉ bằng một lần chạm, bạn sẽ bật điện thoại l&ecirc;n v&agrave; đăng nhập. Bạn ho&agrave;n to&agrave;n kh&ocirc;ng cần phải r&uacute;t hẳn chiếc điện thoại ra khỏi t&uacute;i, v&agrave; n&oacute; đ&atilde; được mở kh&oacute;a, bật sẵn. V&igrave; vậy khi bạn đưa được chiếc điện thoại l&ecirc;n mặt m&igrave;nh, qu&aacute; tr&igrave;nh mở kh&oacute;a đ&atilde; kết th&uacute;c v&agrave; bạn đang nh&igrave;n v&agrave;o m&agrave;n h&igrave;nh ch&iacute;nh.</p>\r\n<div class=\"VCSortableInPreviewMode\">\r\n<div><img id=\"img_63761d40-99cd-11e7-a370-c9cc62f96717\" src=\"http://genknews.genkcdn.vn/thumb_w/660/2017/10-1-800x497-1505449303343.jpg\" alt=\"\" data-original=\"http://genknews.genkcdn.vn/2017/10-1-800x497-1505449303343.jpg\" /></div>\r\n<div class=\"PhotoCMS_Caption\">&nbsp;</div>\r\n</div>\r\n<p>Để sử dụng Face ID của iPhone X, bạn sẽ phải lấy hẳn điện thoại ra khỏi t&uacute;i, đưa n&oacute; l&ecirc;n ngang mặt v&agrave; vuốt cho n&oacute; bật l&ecirc;n, v&agrave; chỉ khi đ&oacute; bạn mới bắt đầu qu&aacute; tr&igrave;nh mở kh&oacute;a. Sự kh&aacute;c biệt c&oacute; thể chỉ khoảng một hay 2 gi&acirc;y mỗi lần, nhưng khi bạn d&ugrave;ng t&iacute;nh năng n&agrave;y đến 80 lần mỗi ng&agrave;y, n&oacute; sẽ thực sự g&acirc;y ra vấn đề lớn.</p>\r\n<p><strong>Phức tạp hơn với Apple Pay</strong></p>\r\n<p>H&atilde;y xem đến việc x&aacute;c thực với Apple Pay: với đầu đọc dấu v&acirc;n tay, bạn c&oacute; thể ấn chiếc iPhone của m&igrave;nh v&agrave;o m&aacute;y thanh to&aacute;n thẻ trong khi vẫn giữ ng&oacute;n tay ở n&uacute;t Touch ID, v&agrave; mọi thứ sẽ hoạt động. C&ugrave;ng l&uacute;c bạn c&oacute; thể x&aacute;c thực v&agrave; truyền th&ocirc;ng tin thẻ thanh to&aacute;n, thật dễ d&agrave;ng, trực quan v&agrave; kh&oacute; c&oacute; thể nhầm lẫn.</p>\r\n<p>Trong khi đ&oacute;, theo phần tr&igrave;nh diễn về Face ID của &ocirc;ng Craig Federighi, giờ bạn sẽ phải mở Apple Pay l&ecirc;n trước, sau đ&oacute; hướng chiếc điện thoại v&agrave;o gương mặt m&igrave;nh để Face ID hoạt động, nếu bạn kh&ocirc;ng hướng về đ&uacute;ng gương mặt m&igrave;nh, n&oacute; sẽ kh&ocirc;ng thể l&agrave;m g&igrave; được. Chỉ sau khi ho&agrave;n th&agrave;nh bước đ&oacute;, bạn mới c&oacute; thể chạm iPhone v&agrave;o m&aacute;y quẹt thẻ. Như vậy, sẽ phải th&ecirc;m hai bước nữa.</p>\r\n<div class=\"VCSortableInPreviewMode\">\r\n<div><img id=\"img_63939050-99cd-11e7-a370-c9cc62f96717\" src=\"http://genknews.genkcdn.vn/thumb_w/660/2017/6364088935158130692-1505449303347.jpg\" alt=\"\r\nTrước ti&ecirc;n bạn phải mở ứng dụng thanh to&aacute;n để k&iacute;ch hoạt Face ID trước (b&ecirc;n tr&aacute;i), v&agrave; sau đ&oacute; đưa lại gần m&aacute;y quẹt thẻ, cho tới khi biểu tượng ở trung t&acirc;m m&agrave;n h&igrave;nh thay đổi, để thanh to&aacute;n.\r\n\" data-original=\"http://genknews.genkcdn.vn/2017/6364088935158130692-1505449303347.jpg\" /></div>\r\n<div class=\"PhotoCMS_Caption\">\r\n<p>Trước ti&ecirc;n bạn phải mở ứng dụng thanh to&aacute;n để k&iacute;ch hoạt Face ID trước (b&ecirc;n tr&aacute;i), v&agrave; sau đ&oacute; đưa lại gần m&aacute;y quẹt thẻ, cho tới khi biểu tượng ở trung t&acirc;m m&agrave;n h&igrave;nh thay đổi, để thanh to&aacute;n.</p>\r\n</div>\r\n</div>\r\n<p>Hơn nữa, cảm biến v&acirc;n tay chỉ hoạt động khi được chạm v&agrave;o, nghĩa l&agrave; n&oacute; sẽ hoạt động bất kỳ l&uacute;c n&agrave;o. Bất cứ khi n&agrave;o bạn cần, bạn chỉ việc ấn v&agrave;o n&oacute;, v&agrave; mọi việc sẽ diễn ra. C&ograve;n với nhận diện gương mặt, bạn sẽ phải k&iacute;ch hoạt n&oacute; qua một ứng dụng.</p>\r\n<p>V&igrave; vậy để x&aacute;c thực một thanh to&aacute;n, giờ bạn phải mở Apple Pay trước, bởi v&igrave; phải c&oacute; một ứng dụng n&agrave;o đ&oacute; để gọi hệ thống nhận diện gương mặt bật l&ecirc;n. Nếu bạn bỏ qua điều n&agrave;y v&agrave; chỉ đặt chiếc điện thoại v&agrave;o m&aacute;y quẹt thẻ thanh to&aacute;n m&agrave; kh&ocirc;ng x&aacute;c thực, chưa hẳn Apple Pay sẽ mở l&ecirc;n v&agrave; y&ecirc;u cầu bạn qu&eacute;t Face ID, khi chiếc điện thoại kh&ocirc;ng hướng v&agrave;o gương mặt bạn.</p>\r\n<p><strong>V&agrave; những t&igrave;nh huống kh&aacute;c nữa ...</strong></p>\r\n<p>Ngo&agrave;i ra c&ograve;n c&oacute; t&igrave;nh huống khi điện thoại đặt tr&ecirc;n b&agrave;n. Nếu trước đ&acirc;y với Touch ID, bạn chỉ cần chạm v&agrave;o n&uacute;t Home để mở kh&oacute;a điện thoại, giờ bạn sẽ phải cầm n&oacute; l&ecirc;n v&agrave; hướng về gương mặt m&igrave;nh.</p>\r\n<div id=\"admzone480457\">&nbsp;</div>\r\n<div class=\"VCSortableInPreviewMode\">\r\n<div><img id=\"img_63d490f0-99cd-11e7-a428-316e6a252121\" src=\"http://genknews.genkcdn.vn/thumb_w/660/2017/screen-shot-2017-09-12-at-2-27-51-pm-980x613-1505449303356.png\" alt=\"\" data-original=\"http://genknews.genkcdn.vn/2017/screen-shot-2017-09-12-at-2-27-51-pm-980x613-1505449303356.png\" /></div>\r\n<div class=\"PhotoCMS_Caption\">&nbsp;</div>\r\n</div>\r\n<p>Đ&acirc;y l&agrave; điều m&agrave; anh Ron Amadeo của Arstechnica gặp phải khi d&ugrave;ng thử chiếc Galaxy S8 v&agrave; Note8. Tr&ecirc;n chiếc điện thoại đ&oacute;, Samsung kh&ocirc;ng ho&agrave;n to&agrave;n loại bỏ cảm biến v&acirc;n tay, nhưng n&oacute; lại c&oacute; k&iacute;ch thước v&agrave; vị tr&iacute; đặt xấu đến nỗi gần như chiếc S8 kh&ocirc;ng c&oacute; cảm biến v&acirc;n tay. Thiết kế của n&oacute; y&ecirc;u cầu người d&ugrave;ng phụ thuộc v&agrave;o Iris hay nhận dạng gương mặt bằng sinh trắc học, n&oacute; kh&aacute; l&agrave; chậm.</p>\r\n<p>Mặc d&ugrave; Amadeo chưa c&oacute; dịp d&ugrave;ng thử Face ID, nhưng anh thấy thật kh&oacute; c&oacute; thể tưởng tượng được rằng một hệ thống nhận diện gương mặt c&oacute; thể giải quyết được vấn đề phiền phức khi phải li&ecirc;n tục hướng chiếc điện thoại v&agrave;o gương mặt m&igrave;nh. Tuy nhi&ecirc;n, một b&aacute;o c&aacute;o của Bloomberg trước đ&acirc;y lại khẳng định iPhone X c&oacute; thể nhận diện gương mặt kể cả khi nằm ngang tr&ecirc;n mặt b&agrave;n. V&igrave; vậy, ch&uacute;ng ta cần thời gian để kiểm chứng điều n&agrave;y.</p>\r\n<p>Với mức gi&aacute; gần 1.000 USD, Apple đang biến iPhone X th&agrave;nh một chiếc điện thoại ti&ecirc;u chuẩn si&ecirc;u cao cấp, gần như kh&ocirc;ng t&igrave; vết, nhưng r&otilde; r&agrave;ng việc thiếu cảm biến v&acirc;n tay l&agrave; một nhược điểm lớn. Mặc d&ugrave; mặt trước đ&atilde; kh&ocirc;ng c&ograve;n chỗ cho những cảm biến như vậy, nhưng nhiều h&atilde;ng điện thoại đ&atilde; đặt cảm biến v&acirc;n tay ở những chỗ dễ thấy v&agrave; vừa tay tr&ecirc;n mặt lưng thiết bị. Đ&oacute; cũng l&agrave; điều Apple c&oacute; thể l&agrave;m trong khi chờ đợi c&ocirc;ng nghệ qu&eacute;t v&acirc;n tay dưới m&agrave;n h&igrave;nh xuất hiện.</p>\r\n<p>Nhận diện gương mặt kh&ocirc;ng phải l&agrave; một &yacute; tưởng hay cho một thiết bị lu&ocirc;n cần phải hướng trực tiếp v&agrave;o gương mặt bạn. Thật kh&oacute; tin nếu xem Face ID như l&agrave; một bước tiến lớn khi so với Touch ID. Nếu n&oacute; kh&ocirc;ng tốt hơn nhiều so với nhận diện gương mặt của Galaxy S8, c&oacute; lẽ nhiều người d&ugrave;ng sẽ chọn c&aacute;ch nhập m&atilde; PIN.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"VCSortableInPreviewMode link-content-footer\">&nbsp;</div>\r\n</div>', 'FaceID', 'FaceID nghe rất thú vị nhưng có những tình huống chỉ hình dung đã thấy bất tiện, nhất là khi bạn dùng nó tới 80 lần/ngày', 1, 1, 1505629537, 1505629537);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_phone_number`, `brand_address`, `created_at`, `updated_at`) VALUES
(1, 'ADIDAS', '0918888666', '488 Minh Khai - Hà Nội', 1505397138, 1505397138),
(2, 'H&M', '0988762156', 'Stockholm, Sweden', 1505397406, 1505397406),
(3, 'NIKE', '0988762156', 'Beaverton, Oregon, United States', 1505397452, 1505397452),
(4, 'ARMANI', '0988766888', 'Milan, Italy', 1505398880, 1505398880),
(5, 'VERSACE', '0988777444', 'Milan, Italy', 1505398917, 1505398917),
(6, 'GUCCI', '0875898989', 'Florence, Italy', 1505398989, 1505398989),
(7, 'BURBERRY', '0875866777', 'London, United Kingdom', 1505399024, 1505399024),
(8, 'HERMÈS', '0439369126', '15 Ngô Quyền, Tràng Tiền, Hà Nội', 1505399076, 1505399076),
(9, 'DIOR', '0442072160216', 'Paris, France', 1505399182, 1505399182),
(10, 'CAN DE BLANCE', '0888644488 ', 'Palmgold Building, R4-56 Hưng Gia 1, Phú Mỹ Hưng, P. Tân Phong, Quận 7, HCMC ', 1505399216, 1505399216),
(11, 'PRADA', '0888666888', 'Milan, Italy', 1505399250, 1505399250),
(12, 'CHANEL', '0987555444', 'Paris, France', 1505399283, 1505399283),
(13, 'LOUIS VUITTON', '02438242968', 'Trang Tien Plaza Hai Ba Trung Street, Trang Tien Ward Hoan Kiem District, Hà Nội 100000', 1505399327, 1505399327),
(14, 'BOTTEGA VENETA', '0438238866', 'Hotel Sofitel Metropole Legend, 15 Ngo Quyen, Hoan Kiem District, Hano', 1505399399, 1505399399);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` smallint(6) NOT NULL DEFAULT '1',
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `icon`, `category_name`, `parent_id`, `keywords`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '/yii2blog/frontend/web/uploads/category-icons/dong-ho.png', 'Đồng Hồ', 0, 'dong-ho', 'Đồng hồ nhập khẩu', 1, 1505363030, 1505363030),
(2, '/yii2blog/uploads/category-icons/vay-cuoi.png', 'Váy Cưới ', 13, 'vay-cuoi', 'Váy Cưới cao cấp sang chảnh', 1, 1505363748, 1505365343),
(3, '/yii2blog/uploads/category-icons/giay-da.png', 'Giầy Da', 9, 'giay-da', 'Giầy Da nhập khẩu Italy', 1, 1505371534, 1505371585),
(4, '/yii2blog/uploads/category-icons/the-thao.png', 'Thể Thao', 0, 'the-thao', 'Đồ Thể Thao Giá Rẻ', 1, 1505374133, 1505374133),
(5, '/yii2blog/uploads/category-icons/bong-da.png', 'Bóng Đá', 4, 'bong-da', 'Bóng Đá', 1, 1505374275, 1505374275),
(6, '/yii2blog/uploads/category-icons/quan-bong-da.jpeg', 'Quần Bóng Đá', 4, 'quan-bong-da', 'Quần Bóng Đá', 1, 1505374320, 1505374320),
(7, '/yii2blog/uploads/category-icons/vi.jpeg', 'Ví', 10, 'vi', 'Ví Thời Trang', 1, 1505374487, 1505374487),
(8, '/yii2blog/uploads/category-icons/quan-denim.png', 'Quần Denim', 13, 'quan-denim', 'Quần Denim', 1, 1505374610, 1505374610),
(9, '/yii2blog/uploads/category-icons/dan-ong.png', 'Đàn Ông', 0, 'dan-ong', 'Đồ Cho Đàn Ông', 0, 1505377308, 1505377308),
(10, '/yii2blog/uploads/category-icons/phu-nu.png', 'Phụ Nữ', 0, 'phu-nu', 'Đồ Cho Phụ Nữ', 0, 1505377366, 1505377366),
(11, '/yii2blog/uploads/category-icons/tre-em.png', 'Trẻ Em', 0, 'tre-em', 'Đồ Cho Trẻ Em', 0, 1505377460, 1505377460),
(12, '/yii2blog/uploads/category-icons/noi-that.png', 'Nội Thất', 0, 'thoi-trang', 'Nội Thất', 0, 1505377582, 1505378409),
(13, '/yii2blog/uploads/category-icons/quan-ao.png', 'Quần Áo', 0, 'quan-ao', 'Quần Áo', 0, 1505395911, 1505396192),
(14, '/yii2blog/uploads/category-icons/cong-nghe.png', 'CÔNG NGHỆ', 0, 'cong-nghe', 'Công Nghệ', 0, 1505701088, 1505701088),
(15, '/yii2blog/uploads/category-icons/dien-thoai.png', 'Điện Thoại', 14, 'dien-thoai', 'Công Nghệ', 0, 1505701199, 1505701199);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(11) NOT NULL,
  `delivery_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `image_src`, `blog_id`, `created_at`, `updated_at`) VALUES
(1, 'FaceID-nghe-rat-thu-vi-nhung-co-nhung-tinh-huong-chi-hinh-dung-da-thay-bat-tien,-nhat-la-khi-ban-dung-no-toi-80-lan-ngay', '/var/www/html/yii2blog/frontend/web/uploads/blogs/FaceID-nghe-rat-thu-vi-nhung-co-nhung-tinh-huong-chi-hinh-dung-da-thay-bat-tien,-nhat-la-khi-ban-dung-no-toi-80-lan-ngay.png', 1, 1505629537, 1505629537);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `material_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1505202437),
('m130524_201442_init', 1505202461),
('m170915_082954_create_comments_table', 1505464769),
('m170915_093946_create_comments_table', 1505469113);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `username_shipper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_shipper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number_shipper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_shipper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `request` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_sale_off` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `begin_date_sale_off` int(11) DEFAULT NULL,
  `end_date_sale_off` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(1, 'Công Nghệ Thông Tin', 1505206508, 1505206508),
(2, 'Bóng Đá', 1505206621, 1505206621),
(3, 'JavaScript', 1505206667, 1505206667),
(4, 'Java', 1505206674, 1505206674),
(5, 'OOP', 1505206682, 1505206682),
(6, 'Genk.vn', 1505206689, 1505206689),
(7, 'Thể Thao', 1505206728, 1505206728),
(8, 'Kinh Tế', 1505206736, 1505206736),
(9, 'Xã hội', 1505206742, 1505206742),
(10, 'Khoa Học', 1505206747, 1505206747);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `phone_number`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'akkerise', 'AkKeRise', '0968381829', '0cWO2lb8ytUQwVXXaxGgV_QKuodWgh6U', '$2y$13$TUU1rG1By.wN0hxZAx9IG.NtCeTSmEuOfz/2buxPb5gu6oGKY31Zu', 'w-8GQV8SQf-Yjs2N0vws1BG4bTz0RFXI_1505203623', 'akkerise@gmail.com', 0, '/var/www/html/yii2blog/frontend/web/uploads/akkerise.jpg', 1505203598, 1505292689),
(2, 'admin', NULL, NULL, 'WI8CAv065gJ_QvlEiFDwzFlZs-NCubo0', '$2y$13$YLIJTwK/FVL/1S98E.1Zje23hh0kWHJllCFf8wW0qAbWqzTPM.oaq', NULL, 'admin@example.com', 10, '', 1505203849, 1505203849),
(3, 'bongda', NULL, NULL, 'eGAmNFiT8s3e9ZzzHHIRw_2UeNJ03fea', '$2y$13$LSyGaovSKV8TqBmpe9.T/.fL7E6GzhL8/VeW8fp3AwwkMh7rTqKSm', NULL, 'bongda@peacesoft.net', 10, '', 1505206807, 1505206807),
(4, 'abcdef', 'ABCDEF', '3249324328', 'txkM01-eScZ7iDqMX3qx2toaFJQP51wc', 'adasdad', NULL, 'asdsasd@gmail.com', 0, '/var/www/html/yii2blog/frontend/web/uploads/abcdef.jpg', 1505294563, 1505294563),
(5, 'akkerise88', '09999999', '09999999', 'DvZRfpyziF6_7kv10c3_aAJx9ABuRwFp', 'quintus49K', NULL, 'akkerise88@gmail.com', 0, '/var/www/html/yii2blog/frontend/web/uploads/akkerise88.jpg', 1505296763, 1505319373),
(6, 'clgtabc', 'clgtabc', '096888832432', 'xxdu7cUH75P7-Bo15MteS8IQIEMqKA48', '$2y$13$3iEd5cayBWIcsvhMut9IdeMWqYeCpSylgsqqUS/1kwyhAs16ePU8e', NULL, 'clgtabc@abc.com', 0, '/var/www/html/yii2blog/frontend/web/uploads/clgtabc.jpg', 1505297268, 1505297268),
(7, 'deohieuvisao', 'deohieuvisao', '0988888888', 'TUDUncBi0qMe4pdKDmDlnXqbSB9gWHmx', '$2y$13$L/sqlFRyn4oTZHq75s3z0e691wFEwKLUwRkj/GbQyZVWiRM3etj..', NULL, 'deohieuvisao@gmail.com', 0, '/var/www/html/yii2blog/frontend/web/uploads/deohieuvisao.jpg', 1505318499, 1505318499),
(8, 'akkerise99', NULL, NULL, 'KmvIyLIIIuJWElMCKdyCaSETuuhnvOQF', '$2y$13$2nRQb0HBcBVKyYewp7QLxumCYam5t52ToTbUuMNGL6nHTP5FiU8be', NULL, 'akkerise99@gmail.com', 10, '/var/www/html/yii2blog/frontend/web/uploads/logo.jpg', 1505319033, 1505319033),
(9, 'akkerise00', NULL, NULL, 'en4Dy3ZM50bAXdREw6_CFV3sN_4n7aeO', '$2y$13$sfz4b7A4o83So.FJlw6dk.b5.MHi2N9hgLVw5w78oWhc5j1j4lpd.', NULL, 'akkerise00', 10, '/var/www/html/yii2blog/frontend/web/uploads/logo.jpg', 1505319068, 1505319068);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BLOGS_USER` (`user_id`),
  ADD KEY `FK_BLOGS_TAG` (`tag_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `content` (`content`),
  ADD KEY `FK_COMMENTS_BLOG` (`blog_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ORDERS_PAYMENT` (`payment_id`),
  ADD KEY `FK_ORDERS_DELIVERY` (`delivery_id`),
  ADD KEY `FK_ORDERS_USER` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ORDER_DETAILS_ORDER` (`order_id`),
  ADD KEY `FK_ORDER_DETAILS_PRODUCT` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PRODUCTS_CATEGORY` (`category_id`),
  ADD KEY `FK_PRODUCTS_BRAND` (`brand_id`),
  ADD KEY `FK_PRODUCTS_SIZE` (`size_id`),
  ADD KEY `FK_PRODUCTS_COLOR` (`color_id`),
  ADD KEY `FK_PRODUCTS_MATERIAL` (`material_id`),
  ADD KEY `FK_PRODUCTS_RATE` (`rate_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_RATES_USER` (`user_id`),
  ADD KEY `FK_RATES_BLOG` (`blog_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `full_name` (`full_name`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `FK_BLOGS_TAG` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BLOGS_USER` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_COMMENTS_BLOG` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_ORDERS_DELIVERY` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`),
  ADD CONSTRAINT `FK_ORDERS_PAYMENT` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `FK_ORDERS_USER` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_ORDER_DETAILS_ORDER` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `FK_ORDER_DETAILS_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_PRODUCTS_BRAND` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `FK_PRODUCTS_CATEGORY` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_PRODUCTS_COLOR` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `FK_PRODUCTS_MATERIAL` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`),
  ADD CONSTRAINT `FK_PRODUCTS_RATE` FOREIGN KEY (`rate_id`) REFERENCES `rates` (`id`),
  ADD CONSTRAINT `FK_PRODUCTS_SIZE` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`);

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `FK_RATES_BLOG` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RATES_USER` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
