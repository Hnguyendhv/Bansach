CREATE DATABASE  IF NOT EXISTS `shopbh` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `shopbh`;
-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: shopbh
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (10,'Sách sức khỏe',0,'Sách sức khỏe','<p>S&aacute;ch sức khỏe</p>',1,'2025-03-05 09:58:13','2025-03-05 09:58:13'),(11,'Sách thiếu nhi',0,'Sách thiếu nhi','<p>S&aacute;ch thiếu nhi</p>',1,'2025-03-05 09:58:29','2025-03-05 09:58:29'),(12,'Sách đời sống',0,'Sách đời sống','<p>S&aacute;ch đời sống</p>',1,'2025-03-05 09:58:42','2025-03-05 09:58:42'),(13,'Báo thiếu nhi',11,'Báo thiếu nhi','<p>B&aacute;o thiếu nhi</p>',1,'2025-03-05 10:04:34','2025-03-05 10:04:34'),(14,'Truyện thiếu nhi',11,'Truyện thiếu nhi','<p>Truyện thiếu nhi</p>',1,'2025-03-05 10:04:48','2025-03-05 10:04:48'),(15,'Sách đời sống 2',12,'Sách đời sống 2','<p>S&aacute;ch đời sống 2</p>',1,'2025-03-05 10:10:30','2025-03-05 10:10:30'),(16,'xx',0,'','',1,'2025-03-07 16:27:59','2025-03-07 16:27:59');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_02_20_060010_create_menus_table',2),(6,'2025_02_24_100935_create_products_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `menu_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (49,'Phòng và Chữa Bệnh Ung Thư','Đây là cuốn sách hay về sức khỏe . Phòng và Chữa Bệnh Ung Thư Theo Tự Nhiên mang đến nhiều thông tin bổ ích để chăm sóc sức khỏe, điều trị và phòng chống ung thư.','<p>Đ&acirc;y l&agrave; cuốn s&aacute;ch hay về sức khỏe . Ph&ograve;ng v&agrave; Chữa Bệnh Ung Thư Theo Tự Nhi&ecirc;n mang đến nhiều th&ocirc;ng tin bổ &iacute;ch để chăm s&oacute;c sức khỏe, điều trị v&agrave; ph&ograve;ng chống ung thư.</p>',10,70000,60000,0,'storage/images/Zk9UZCpFXkTIDrFTpg3RagTeQBWsZoob0GRqsW1F.png','2025-02-25 10:39:23','2025-03-05 10:19:20'),(50,'Suối Nguồn Tươi Trẻ','Cuốn sách này sẽ cho bạn biết 5 phương thức thể dục của Tây Tạng xưa, giúp bạn có được sinh khí tốt và sinh lực dồi dào. Sách mang đến những phương pháp phòng chống các bệnh nguy hiểm về tim mạch, hệ tiêu hóa, viêm khớp…','<p>Cuốn s&aacute;ch n&agrave;y sẽ cho bạn biết 5 phương thức thể dục của T&acirc;y Tạng xưa, gi&uacute;p bạn c&oacute; được sinh kh&iacute; tốt v&agrave; sinh lực dồi d&agrave;o. S&aacute;ch mang đến những phương ph&aacute;p ph&ograve;ng chống c&aacute;c bệnh nguy hiểm về tim mạch, hệ ti&ecirc;u h&oacute;a, vi&ecirc;m khớp&hellip;</p>',10,60000,55000,0,'storage/images/yRLeB8tWgOdnSfzwuV2x0pLbXK4MURKpekZ4RaJv.png','2025-03-05 10:15:13','2025-03-05 10:19:14'),(51,'Làm Sạch Mạch Và Máu','Sách chỉ ra những kiến thức cơ bản về ăn uống, tập luyện và suy nghĩ giúp làm sạch, phục hồi các mạch máu. Từ đó đẩy lùi các bệnh nguy hiểm và giúp chúng ta có được sức khỏe tốt','<p>S&aacute;ch chỉ ra những kiến thức cơ bản về ăn uống, tập luyện v&agrave; suy nghĩ gi&uacute;p l&agrave;m sạch, phục hồi c&aacute;c mạch m&aacute;u. Từ đ&oacute; đẩy l&ugrave;i c&aacute;c bệnh nguy hiểm v&agrave; gi&uacute;p ch&uacute;ng ta c&oacute; được sức khỏe tốt</p>',10,60000,55000,0,'storage/images/RsAQmfVweUSplFvRQHP2J0rcg2fCNmOUyUjM689j.png','2025-03-05 10:17:44','2025-03-05 10:19:07'),(52,'Đừng ốm','Dựa trên nghiên cứu khoa học cùng các cuộc phỏng vấn chuyên gia hàng đầu, Đừng ốm Bí quyết sống khỏe trong thế giới đầy rẫy mầm bệnh sẽ tiết lộ: Nơi virus, vi khuẩn ưa trú ngụ? Những thói quen khiến bạn dễ mắc bệnh truyền nhiễm? Sản phẩm tăng cường miễn dịch chuyên gia khuyên dùng?','<p>Dựa tr&ecirc;n nghi&ecirc;n cứu khoa học c&ugrave;ng c&aacute;c cuộc phỏng vấn chuy&ecirc;n gia h&agrave;ng đầu, Đừng ốm B&iacute; quyết sống khỏe trong thế giới đầy rẫy mầm bệnh sẽ tiết lộ: Nơi virus, vi khuẩn ưa tr&uacute; ngụ? Những th&oacute;i quen khiến bạn dễ mắc bệnh truyền nhiễm? Sản phẩm tăng cường miễn dịch chuy&ecirc;n gia khuy&ecirc;n d&ugrave;ng?</p>',10,65000,60000,0,'storage/images/WUIT1s0AQOxtebeArGuGLwiLHIFzleBQMULljc6u.jpg','2025-03-05 10:18:36','2025-03-05 10:19:00'),(54,'Dế mèn phiêu lưu ký','Sách đưa ra thông điệp giáo dục về tình bạn và tình cảm gia đình. Ngoài ra, ông còn giúp các em thiếu nhi học được bài học về sự thông minh, lòng dũng cảm và kiên định với mục tiêu của mình thông qua nhân vật Dế Mèn','<p>S&aacute;ch đưa ra th&ocirc;ng điệp gi&aacute;o dục về t&igrave;nh bạn v&agrave; t&igrave;nh cảm gia đ&igrave;nh. Ngo&agrave;i ra, &ocirc;ng c&ograve;n gi&uacute;p c&aacute;c em thiếu nhi học được b&agrave;i học về sự th&ocirc;ng minh, l&ograve;ng dũng cảm v&agrave; ki&ecirc;n định với mục ti&ecirc;u của m&igrave;nh th&ocirc;ng qua nh&acirc;n vật Dế M&egrave;n</p>',11,90000,80000,0,'storage/images/aAnepih5BIP2w8K29qs5St1ZjfzZxGIFMxrzYaNW.png','2025-03-07 14:28:26','2025-03-07 14:28:26'),(55,'Toán Tư Duy','Bộ sách \"Toán tư duy\" giúp bé vừa chơi vừa học thông qua nhiều hoạt động như vẽ tranh, tô màu, đếm số, ghép nối,... không tạo cảm giác gò bó, nhồi nhét khi học cho trẻ.','<p>Bộ s&aacute;ch &quot;To&aacute;n tư duy&quot; gi&uacute;p b&eacute; vừa chơi vừa học th&ocirc;ng qua nhiều hoạt động như vẽ tranh, t&ocirc; m&agrave;u, đếm số, gh&eacute;p nối,... kh&ocirc;ng tạo cảm gi&aacute;c g&ograve; b&oacute;, nhồi nh&eacute;t khi học cho trẻ.</p>',11,90000,80000,0,'storage/images/vL7N55QqkFmdU56r1sss57848M2I4o5dHrMYEtSx.png','2025-03-07 14:29:18','2025-03-07 14:29:18'),(56,'Lật mở khám phá','Sách tương tác lật mở rất thú vị, giúp con tìm hiểu và học hỏi những từ vựng hay ho theo từng chủ đề. Thông qua sách, bé cũng học được cách sắp xếp đồ vật một cách gọn gàng, ngăn nắp','<p>S&aacute;ch tương t&aacute;c lật mở rất th&uacute; vị, gi&uacute;p con t&igrave;m hiểu v&agrave; học hỏi những từ vựng hay ho theo từng chủ đề. Th&ocirc;ng qua s&aacute;ch, b&eacute; cũng học được c&aacute;ch sắp xếp đồ vật một c&aacute;ch gọn g&agrave;ng, ngăn nắp</p>',11,95000,85000,0,'storage/images/aW4vuk9eqzzLdabFavR2urZqj3ym98sWsDb9ixux.png','2025-03-07 14:29:56','2025-03-07 14:29:56'),(57,'91 câu chuyện trí tuệ','Cuốn sách “91 câu chuyện trí tuệ bồi dưỡng trí thông minh cho trẻ” cô đọng 91 câu chuyện nhỏ, hàm súc, phù hợp với lứa tuổi thiếu niên nhi đồng trong kho tàng những câu chuyện giàu tính triết lý trên thế giới. Thông qua những câu chuyện hay, lời lẽ sâu sắc, thâm thúy...','<p>Cuốn s&aacute;ch &ldquo;91 c&acirc;u chuyện tr&iacute; tuệ bồi dưỡng tr&iacute; th&ocirc;ng minh cho trẻ&rdquo; c&ocirc; đọng 91 c&acirc;u chuyện nhỏ, h&agrave;m s&uacute;c, ph&ugrave; hợp với lứa tuổi thiếu ni&ecirc;n nhi đồng trong kho t&agrave;ng những c&acirc;u chuyện gi&agrave;u t&iacute;nh triết l&yacute; tr&ecirc;n thế giới. Th&ocirc;ng qua những c&acirc;u chuyện hay, lời lẽ s&acirc;u sắc, th&acirc;m th&uacute;y...</p>',11,80000,70000,0,'storage/images/XmKiZXoSncr0oXnstoTetbx85KGXJgOsrM0CPJbl.jpg','2025-03-07 14:30:27','2025-03-07 14:31:03'),(58,'Đắc Nhân Tâm','Đắc Nhân Tâm là nghệ thuật thu phục lòng người, là làm cho tất cả mọi người yêu mến mình, bằng sự hiểu rõ bản thân, thành thật với chính mình, hiểu biết và quan tâm đến những người xung quanh để nhìn ra và khơi gợi những tiềm năng ẩn khuất nơi họ, giúp họ phát triển lên một tầm cao mới','<p>Đắc Nh&acirc;n T&acirc;m l&agrave; nghệ thuật thu phục l&ograve;ng người, l&agrave; l&agrave;m cho tất cả mọi người y&ecirc;u mến m&igrave;nh, bằng sự hiểu r&otilde; bản th&acirc;n, th&agrave;nh thật với ch&iacute;nh m&igrave;nh, hiểu biết v&agrave; quan t&acirc;m đến những người xung quanh để nh&igrave;n ra v&agrave; khơi gợi những tiềm năng ẩn khuất nơi họ, gi&uacute;p họ ph&aacute;t triển l&ecirc;n một tầm cao mới</p>',12,100000,95000,0,'storage/images/A56QgqMAK5PedGJwsSgbXs6GBJ5q3LcHmIV0PB8E.png','2025-03-07 14:32:02','2025-03-07 14:32:02'),(59,'Đời Thay Đổi Khi Chúng Ta Thay Đổi','Sách sẽ giúp bạn đưa ra các giải pháp hữu ích để có thể đối mặt và giải quyết những khó khăn, thất bại trong cuộc sống.Qua đó, khám phá được khả năng tiềm ẩn của mình để cùng đồng điệu với cảm xúc và tâm hồn của bản thân','<p>S&aacute;ch sẽ gi&uacute;p bạn đưa ra c&aacute;c giải ph&aacute;p hữu &iacute;ch để c&oacute; thể đối mặt v&agrave; giải quyết những kh&oacute; khăn, thất bại trong cuộc sống.Qua đ&oacute;, kh&aacute;m ph&aacute; được khả năng tiềm ẩn của m&igrave;nh để c&ugrave;ng đồng điệu với cảm x&uacute;c v&agrave; t&acirc;m hồn của bản th&acirc;n</p>',12,90000,80000,0,'storage/images/7cO3Ov1u0oh6g0B18vIA5DKmveysk6FNhnhsSZ3T.png','2025-03-07 14:33:13','2025-03-07 14:33:13'),(60,'Đời Ngắn Đừng Ngủ Dài','Cuốn sách này bao gồm 101 câu chuyện ngắn, được tác giả tổng hợp từ nhiều khía cạnh khác nhau trong cuộc sống, bao gồm công việc, học tập, phong cách sống của các người ông mà ông gặp gỡ, cũng như của chính ông','<p>Cuốn s&aacute;ch n&agrave;y bao gồm 101 c&acirc;u chuyện ngắn, được t&aacute;c giả tổng hợp từ nhiều kh&iacute;a cạnh kh&aacute;c nhau trong cuộc sống, bao gồm c&ocirc;ng việc, học tập, phong c&aacute;ch sống của c&aacute;c người &ocirc;ng m&agrave; &ocirc;ng gặp gỡ, cũng như của ch&iacute;nh &ocirc;ng</p>',12,80000,70000,0,'storage/images/hYSWfHjJ0qch7JfBjV2lbtX1RKvN916rFZIyPrs9.jpg','2025-03-07 14:33:55','2025-03-07 14:33:55'),(61,'Đừng Lựa Chọn An Nhàn','Tác phẩm này chứa đựng những lời khuyên quý báu mà tác giả muốn truyền tải đến bạn đọc: hãy kiên trì, cố gắng và vượt qua mọi thử thách để đạt được ước mơ của mình trong tương lai.','<p>T&aacute;c phẩm n&agrave;y chứa đựng những lời khuy&ecirc;n qu&yacute; b&aacute;u m&agrave; t&aacute;c giả muốn truyền tải đến bạn đọc: h&atilde;y ki&ecirc;n tr&igrave;, cố gắng v&agrave; vượt qua mọi thử th&aacute;ch để đạt được ước mơ của m&igrave;nh trong tương lai.</p>',12,90000,80000,0,'storage/images/EKeFfB6gdLISsgHFjotiVoXZ7Xx5aUtcrLCxQsSx.jpg','2025-03-07 14:34:25','2025-03-07 14:34:25');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('4BXKy83VVvOV0kQ9WLWkpJB9LsbAbCBTTWf1JQhi',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzc4TUk4TU4zaHhod1hITmsySk1iVVFaS244SE1GdDB3UzhxWU9KYSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovL2xvY2FsaG9zdC9zaG9wYmgvYWRtaW4vcHJvZHVjdHMvYWRkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1740488993),('mvz9Iy7WkqG5rJsU0TPgCS1b9N2fXLWqrnhTZmk4',1,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXFpUXZCZDY5RlRhRkVYdERVblhUbkIyeFl5Y3ZSR1dld3d6WnFSayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Qvc2hvcGJoL2FkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1740474287),('mWOXkjE3oJDwyynxi5PuRw5DrDboaIzddCuCovQl',1,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMmtsa3NQakVKSElrZUY2MHh2ZzlpaU40bURMSHJzbll5U0JCcWZPRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Qvc2hvcGJoL2FkbWluIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1740474403),('utntDxgy69zW501mJNr4idiq6rvGtOeAsdMKNkNb',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YToyOntzOjY6Il90b2tlbiI7czo0MDoiNEtIamQyV0ZScmV1TzNMUjh1cU90TnhhbGhyaTc1bzhzWURzN2xKNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1740475546),('UZLibP1Ev0flcaPzsBr4jJ9U9miXSTa0rQSJ52KM',1,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRFVHWjZwOHRUNEY5dUZDYndJa2l3cnhKWTBUMU1kMUt2dUlGaFlSUSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyOToiaHR0cDovL2xvY2FsaG9zdC9zaG9wYmgvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1740468718),('wIDUp1VQzy4N4xiReRYgdEZlTzG8bInPWJEWLTas',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTUw5MVJBcGFFZDFGYnpvclR6bTBNMlozblZxTXJDWUJJSE44UkRvRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1740478313),('XzCEJCb9pDRIOStLMIysh2XVTGhASRudDh4Psj7o',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTlQ1QUNNR1RKZXQ1TzZzdDJFZ2g2WXY5cnZSWDVVUU5VMTlCYUhXbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1740478481);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$12$yfDUJP3GLKgwcEHjKjHQUORvcrvwhPld.MQ4QhCVwD0zoYW1d3jde','KpjaHTVjCF6QqX6rtj86es9LS6o3A1zyzGeX2YOJ2eno8EBFtyTfXLHfwqH0',NULL,NULL),(2,'a','a@gmail.com',NULL,'123456',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-12 18:22:10
