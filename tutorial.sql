-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2021 at 07:00 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `prodId` int(4) NOT NULL AUTO_INCREMENT,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL,
  PRIMARY KEY (`prodId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, '2019 Apple iPad mini', 'smallipad.webp', 'largeipad.webp', 'The 2019 Apple iPad mini has been created with the A12 Bionic chip, a 7.9\" Retina display, a battery life of up to 10 hours and is compatible with Apple pencil (sold separately) – additionally, it weighs only slightly over 300g. Being thin, light and portable, 2019 Apple iPad mini is ready to join you on your commute, on holiday or in your home.', 'Brilliant bionic\r\nThe A12 Bionic chip with Apple’s next-generation Neural Engine uses real-time machine learning to transform the way you use your apps. It’s means your 2019 Apple iPad mini is up to 3x faster than an iPad mini 4. You’ll be able to use apps like Adobe Photoshop CC, games with great graphics, as well as experience augmented reality (AR) features.\r\n\r\nRetina display\r\nThe 7.9” Retina display comprises of 3.1 million pixels at a resolution of 2048 x 1536 pixels, displaying incredible detail in your photos and videos and ensuring that text looks bright, sharp and well defined. The True Tone feature cleverly adjusts white balance, so your images look natural in almost all lighting conditions.', '380.58', 5),
(2, '2020 Apple iMac', 's1.webp', 'l1.webp', 'Processor\r\n\r\nIntel Core i5\r\n\r\nGreat for running lots of programs at once\r\n\r\nMemory (RAM)\r\n\r\n8GB\r\n\r\nPerfect for online browsing and emails\r\n\r\nStorage capacity\r\n\r\n256GB SSD', 'Created with a faster than ever 10th generation Intel Core i5 processor, 1080p Facetime camera, 8GB RAM, fast SSD storage, a 27”, 5K display and a Radeon Pro 5300 graphics card, the 2020 Apple iMac is still as stylish as ever, yet packs even more technology to aid your productivity and social life.\r\n', '1799.00', 7),
(3, 'Canon EOS 2000D', 's2.webp', 'l2.webp', 'Product code: 82903324\r\n\r\nCanon\'s EOS 2000D is a fantastic place to start experimenting with DSLR shooting, being ideally suited to those wishing to step up from smart phone photography. A large 24.1MP sensor delivers a rich level of fine detail and glorious colour, with the potential for beautifully blurred backgrounds thanks to superb depth of field control. Shoot cinematic Full HD movies and share your work online with ease with built-in Wi-Fi and NFC. Simple in-camera guides ensure you learn as you go, making it the ideal entry into the creative and rewarding world of professional-style DSLR storytelling.', 'Sensational Sensor\r\nA large 24.1 MP APS-C sensor packs the image with super-fine detail. It\'s capable of a depth of field that\'s great for professional-style portraits with sharp subjects and elegantly defocussed backgrounds. Canon\'s Digic 4+ processor, together with a max ISO of 6400 (expandable to 12800) takes equally fine pictures in low light. And 3 frames-per-second continuous shooting allows you to select just the right split-second composition.\r\n\r\nRapid Autofocus\r\nWith fast and precise autofocus, the camera rapidly reacts to capture that golden moment. The optical viewfinder includes 9 AF points to lock onto your subject and track it throughout the frame with stable accuracy.\r\n\r\nFull HD Movies\r\nExperiment with your director\'s impulse and shoot cinematic Full HD movies. Brilliantly detailed 1080p resolution footage is smooth and sharp. Depth-of-field control keeps your subject in focus and background beautifully blurred for a professional finish.\r\n\r\nSeamless Sharing\r\nWith built-in Wi-Fi & NFC you can easily share your work with friends and colleagues in an instant. It\'s made easy and intuitive with the Canon Camera Connect app (iOS and Android), which also allows you to use your smart device to control the camera remotely.', '409.00', 10),
(4, 'Nespresso', 's3.webp', 'l3.webp', 'Nespresso Boutiques at John Lewis & Partners\r\n\r\nYou can browse and buy your favourite blends and intensities at Nespresso Boutiques located in the following John Lewis & Partners shops:', 'Product code: 85508801\r\n\r\nThe most compact machine within the Lattissima range, the Lattissima One is sure to add a contemporary touch to any kitchen with its chromed lever, verticle grooves and combination of gloss and matte finishes.\r\n\r\nEquipped with a new, intelligent fresh milk system, this smart coffee machine lets you prepare delicious, frothy hot drinks at the touch of a single button. Simply fill the jug with the amount of milk you\'d prefer, and leave the Lattissima One to create a velvety foam in your cup.\r\n\r\nThanks to its single-serve system, all the milk in the jug is used in preparing your beverage, so nothing goes to waste. Plus, the milk jug is dishwasher-safe for effortless cleaning.', '199.97', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(4) NOT NULL AUTO_INCREMENT,
  `userType` varchar(1) DEFAULT NULL,
  `userFName` varchar(50) NOT NULL,
  `userLName` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userPostCode` varchar(50) NOT NULL,
  `userTelNo` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userType`, `userFName`, `userLName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) VALUES
(6, NULL, 'Ben', ' Hanan', 'Sinnakadai', '41000', '1234', 'benhanan.subdendran@gmail.com', '123'),
(11, NULL, 'mk', ' mm', 'Sinnakadai', '41000', '4334', 'test@test.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
