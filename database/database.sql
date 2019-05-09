-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: hust_laravel
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.16.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dang_ky_hoc_phan`
--

DROP TABLE IF EXISTS `dang_ky_hoc_phan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dang_ky_hoc_phan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sinh_vien` int(11) DEFAULT NULL,
  `ma_hoc_phan` varchar(45) DEFAULT NULL,
  `hoc_ky` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `DK_HP_idx` (`ma_sinh_vien`),
  KEY `DK_HP_HP_idx` (`ma_hoc_phan`),
  CONSTRAINT `DK_HP_HP` FOREIGN KEY (`ma_hoc_phan`) REFERENCES `hoc_phan` (`ma_hoc_phan`),
  CONSTRAINT `DK_HP_SV` FOREIGN KEY (`ma_sinh_vien`) REFERENCES `sinh_vien` (`ma_sinh_vien`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dang_ky_hoc_phan`
--

LOCK TABLES `dang_ky_hoc_phan` WRITE;
/*!40000 ALTER TABLE `dang_ky_hoc_phan` DISABLE KEYS */;
INSERT INTO `dang_ky_hoc_phan` VALUES (4,20154080,'FL1431','20181');
/*!40000 ALTER TABLE `dang_ky_hoc_phan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dang_ky_lop`
--

DROP TABLE IF EXISTS `dang_ky_lop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dang_ky_lop` (
  `id_dang_ky_lop` int(11) NOT NULL,
  `ma_sinh_vien` int(11) DEFAULT NULL,
  `ma_lop` int(11) DEFAULT NULL,
  `hoc_ky` varchar(45) DEFAULT NULL,
  `nhom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_dang_ky_lop`),
  KEY `FK_DK_SV_idx` (`ma_sinh_vien`),
  KEY `FK_DK_LH_idx` (`ma_lop`),
  CONSTRAINT `FK_DK_LH` FOREIGN KEY (`ma_lop`) REFERENCES `lop_hoc` (`ma_lop`),
  CONSTRAINT `FK_DK_SV` FOREIGN KEY (`ma_sinh_vien`) REFERENCES `sinh_vien` (`ma_sinh_vien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dang_ky_lop`
--

LOCK TABLES `dang_ky_lop` WRITE;
/*!40000 ALTER TABLE `dang_ky_lop` DISABLE KEYS */;
INSERT INTO `dang_ky_lop` VALUES (1,20150393,104415,'20181','1'),(2,20151124,104443,'20181','23'),(3,20150393,104444,'20181','4'),(4,20151124,104447,'20181','2'),(5,20150393,104448,'20172','1'),(6,20151124,104449,'20172','4'),(7,20150393,106972,'20172','5'),(8,20151124,676475,'20172','6');
/*!40000 ALTER TABLE `dang_ky_lop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dang_ky_tctd`
--

DROP TABLE IF EXISTS `dang_ky_tctd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dang_ky_tctd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sinh_vien` int(11) DEFAULT NULL,
  `ma_hoc_phan` varchar(45) DEFAULT NULL,
  `hoc_ky` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `TD_SV_idx` (`ma_sinh_vien`),
  KEY `TD_HP_idx` (`ma_hoc_phan`),
  CONSTRAINT `TD_HP` FOREIGN KEY (`ma_hoc_phan`) REFERENCES `hoc_phan` (`ma_hoc_phan`),
  CONSTRAINT `TD_SV` FOREIGN KEY (`ma_sinh_vien`) REFERENCES `sinh_vien` (`ma_sinh_vien`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dang_ky_tctd`
--

LOCK TABLES `dang_ky_tctd` WRITE;
/*!40000 ALTER TABLE `dang_ky_tctd` DISABLE KEYS */;
INSERT INTO `dang_ky_tctd` VALUES (1,20154080,'FL1431','20181'),(2,20154080,'FL1431','20172');
/*!40000 ALTER TABLE `dang_ky_tctd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diem_sinh_vien`
--

DROP TABLE IF EXISTS `diem_sinh_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diem_sinh_vien` (
  `id_diem` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sinh_vien` int(11) DEFAULT NULL,
  `ma_lop` int(11) DEFAULT NULL,
  `diem_qua_trinh` float DEFAULT NULL,
  `diem_ket_thuc` float DEFAULT NULL,
  `hoc_ky` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_diem`),
  KEY `Fk_SV_idx` (`ma_sinh_vien`),
  KEY `Fk_LH_idx` (`ma_lop`),
  CONSTRAINT `Fk_LH` FOREIGN KEY (`ma_lop`) REFERENCES `lop_hoc` (`ma_lop`),
  CONSTRAINT `Fk_SV` FOREIGN KEY (`ma_sinh_vien`) REFERENCES `sinh_vien` (`ma_sinh_vien`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diem_sinh_vien`
--

LOCK TABLES `diem_sinh_vien` WRITE;
/*!40000 ALTER TABLE `diem_sinh_vien` DISABLE KEYS */;
INSERT INTO `diem_sinh_vien` VALUES (1,20150393,104448,10,10,'20172'),(2,20150393,106972,9,9,'20172'),(3,20151124,106972,8,8,'20172'),(4,20151124,104448,8,8,'20172');
/*!40000 ALTER TABLE `diem_sinh_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diem_toeic`
--

DROP TABLE IF EXISTS `diem_toeic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diem_toeic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sinh_vien` int(11) DEFAULT NULL,
  `diem_doc` int(11) DEFAULT NULL,
  `diem_nghe` int(11) DEFAULT NULL,
  `ngay_thi` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Toeic_SV_idx` (`ma_sinh_vien`),
  CONSTRAINT `Toeic_SV` FOREIGN KEY (`ma_sinh_vien`) REFERENCES `sinh_vien` (`ma_sinh_vien`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diem_toeic`
--

LOCK TABLES `diem_toeic` WRITE;
/*!40000 ALTER TABLE `diem_toeic` DISABLE KEYS */;
INSERT INTO `diem_toeic` VALUES (1,20150393,450,450,'2016-02-03'),(2,20150393,450,450,'2018-02-03'),(3,20151124,300,300,'2018-02-03');
/*!40000 ALTER TABLE `diem_toeic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gop_y`
--

DROP TABLE IF EXISTS `gop_y`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gop_y` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) DEFAULT NULL,
  `noi_dung` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gop_y`
--

LOCK TABLES `gop_y` WRITE;
/*!40000 ALTER TABLE `gop_y` DISABLE KEYS */;
INSERT INTO `gop_y` VALUES (1,'Cải thiện web','123'),(2,'Cải thiện web','123'),(3,'Cải thiện web','123'),(4,'Cải thiện web',NULL),(5,'Cải thiện web',NULL),(6,'Cải thiện web',NULL),(7,'Cải thiện web',NULL),(8,'Cải thiện web',NULL),(9,'Cải thiện web',NULL),(10,'GOOD',NULL),(11,'chung',NULL),(12,'',NULL),(13,'chung',NULL),(14,'123asdasd','asdasda223');
/*!40000 ALTER TABLE `gop_y` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoc_phan`
--

DROP TABLE IF EXISTS `hoc_phan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoc_phan` (
  `ma_hoc_phan` varchar(45) NOT NULL,
  `ten_hoc_phan` varchar(255) DEFAULT NULL,
  `so_tin_chi` int(11) DEFAULT NULL,
  `so_tin_hoc_phi` int(11) DEFAULT NULL,
  `he_so` float DEFAULT NULL,
  `id_khoa_vien` int(11) DEFAULT NULL,
  PRIMARY KEY (`ma_hoc_phan`),
  KEY `FK_Khoa_vien_idx` (`id_khoa_vien`),
  CONSTRAINT `FK_Khoa_vien` FOREIGN KEY (`id_khoa_vien`) REFERENCES `khoa_vien` (`ma_khoa_vien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoc_phan`
--

LOCK TABLES `hoc_phan` WRITE;
/*!40000 ALTER TABLE `hoc_phan` DISABLE KEYS */;
INSERT INTO `hoc_phan` VALUES ('FL1431','Tiếng Nhật I',3,4,0.3,2),('IT3120','Phân tích và thiết kế hệ thống thông tin',3,4,0.3,1),('IT4440','Tương tác Người –Máy',3,4,0.3,1),('IT4490','Thiết kế và xây dựng phần mềm',3,4,0.3,1),('IT4501','Đảm bảo chất lượng Phần mềm',3,4,0.3,1),('IT4520','Kinh tế công nghệ phần mềm',3,4,0.3,1),('IT4551','Phát triển phần mềm chuyên nghiệp',3,4,0.3,1),('IT4991','Thực tập kỹ thuật',3,4,0.3,1);
/*!40000 ALTER TABLE `hoc_phan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khoa_vien`
--

DROP TABLE IF EXISTS `khoa_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `khoa_vien` (
  `ma_khoa_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khoa_vien` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ma_khoa_vien`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khoa_vien`
--

LOCK TABLES `khoa_vien` WRITE;
/*!40000 ALTER TABLE `khoa_vien` DISABLE KEYS */;
INSERT INTO `khoa_vien` VALUES (1,'CNTT-TT'),(2,'Ngoại ngữ'),(3,'Yêu đời');
/*!40000 ALTER TABLE `khoa_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_tai_khoan`
--

DROP TABLE IF EXISTS `loai_tai_khoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loai_tai_khoan` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai_tai_khoan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_tai_khoan`
--

LOCK TABLES `loai_tai_khoan` WRITE;
/*!40000 ALTER TABLE `loai_tai_khoan` DISABLE KEYS */;
INSERT INTO `loai_tai_khoan` VALUES (1,'Sinh Viên'),(2,'Admin');
/*!40000 ALTER TABLE `loai_tai_khoan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lop_hoc`
--

DROP TABLE IF EXISTS `lop_hoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lop_hoc` (
  `ma_lop` int(11) NOT NULL,
  `ma_hoc_phan` varchar(45) DEFAULT NULL,
  `thoi_gian_hoc` varchar(255) DEFAULT NULL,
  `phong_hoc` varchar(45) DEFAULT NULL,
  `tuan_hoc` varchar(255) DEFAULT NULL,
  `loai_lop` varchar(255) DEFAULT NULL,
  `ghi_chu` text,
  `lop_thi` varchar(45) DEFAULT NULL,
  `tinh_trang` text,
  PRIMARY KEY (`ma_lop`),
  KEY `FK_HP_idx` (`ma_hoc_phan`),
  CONSTRAINT `FK_HP` FOREIGN KEY (`ma_hoc_phan`) REFERENCES `hoc_phan` (`ma_hoc_phan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lop_hoc`
--

LOCK TABLES `lop_hoc` WRITE;
/*!40000 ALTER TABLE `lop_hoc` DISABLE KEYS */;
INSERT INTO `lop_hoc` VALUES (104415,'IT3120','Thứ 6,16h0 - 17h35','TC-207','2-9,11-18','LT+BT','Công nghệ thông tin-K61S','88480','DKBT'),(104443,'IT4440','Thứ 5,12h30 - 15h0','	T-409','2-9,11-18','LT+BT','CNPM-K60C','88466','DKBT'),(104444,'IT4490','Thứ 4,12h30 - 14h5','TC-207','2-9,11-18','LT+BT','CNPM-K60C','88320','DKBT'),(104447,'IT4551','Thứ 4,14h15 - 17h35','TC-207','2-9,11-18','LT+BT','CNPM-K60C','88460','DKBT'),(104448,'IT4520','Thứ 5,15h5 - 17h35','	T-409','2-9,11-18','LT+BT','CNPM-K60C','88471','DKBT'),(104449,'IT4501','Thứ 6,9h20 - 11h50','TC-207','2-9,11-18','LT+BT','CNPM-K60C','88474','DKBT'),(106972,'FL1431','Thứ 7,7h35 - 11h0','D5-201','2-9,11-18','LT+BT','Khối D-K62S','88541','DKBT'),(676475,'IT4991','Thứ 2,12h30 - 15h50','TC-207','2-9,11-18','TT','Cử nhân kĩ thuật','90968','DKBT');
/*!40000 ALTER TABLE `lop_hoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sinh_vien`
--

DROP TABLE IF EXISTS `sinh_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sinh_vien` (
  `ma_sinh_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_khoa_vien` int(11) DEFAULT NULL,
  `id_tai_khoan` int(11) DEFAULT NULL,
  PRIMARY KEY (`ma_sinh_vien`),
  KEY `FK_TK_idx` (`id_tai_khoan`),
  KEY `FK_KV_idx` (`ma_khoa_vien`),
  CONSTRAINT `FK_KV` FOREIGN KEY (`ma_khoa_vien`) REFERENCES `khoa_vien` (`ma_khoa_vien`),
  CONSTRAINT `FK_TK` FOREIGN KEY (`id_tai_khoan`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20154081 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sinh_vien`
--

LOCK TABLES `sinh_vien` WRITE;
/*!40000 ALTER TABLE `sinh_vien` DISABLE KEYS */;
INSERT INTO `sinh_vien` VALUES (20150393,1,1),(20151124,1,2),(20154080,1,4);
/*!40000 ALTER TABLE `sinh_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `gioi_tinh` varchar(255) DEFAULT NULL,
  `que_quan` varchar(255) DEFAULT NULL,
  `so_dien_thoai` char(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tai_khoan` varchar(255) DEFAULT NULL,
  `mat_khau` varchar(255) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL COMMENT 'normal user = 1; admin = 2;',
  PRIMARY KEY (`id`),
  KEY `FK_TK_idx` (`id_category`),
  CONSTRAINT `FK_TK_Cate` FOREIGN KEY (`id_category`) REFERENCES `loai_tai_khoan` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Biện Thành Chung','1997-02-05','Nam','Bắc Ninh','0971702707','chungch251997@gmail.com','201503933','$2y$10$66fLw3vJwRIjOhOBZXZZ1eQS93OxHzoPoi2N/VFNc6EYpMT8jMSr.',2),(2,'Hoàng Minh Giám','1997-02-14','Nam ','Thái Bình','0987654321','giamhoangminh@gmail.com','20151124','$2y$10$66fLw3vJwRIjOhOBZXZZ1eQS93OxHzoPoi2N/VFNc6EYpMT8jMSr.',1),(3,'Admin','2000-10-10','Nam','BKHN','0987654321','admin@hust.edu.vn','admin1','$2y$10$66fLw3vJwRIjOhOBZXZZ1eQS93OxHzoPoi2N/VFNc6EYpMT8jMSr.',2),(4,'Đỗ Văn Tuấn','1997-01-01','Nữ','Hà Nam','0987654321','xautrai@gmail.com','20154080','$2y$10$o0e6LeTS96iLq3JVAaHMruyNw1wQbTitlqWHVwXqANJkSd9IOvoKu',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'hust_laravel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-02  8:21:50
