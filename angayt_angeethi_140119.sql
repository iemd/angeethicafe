-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 12:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angayt_angeethi`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `cart_id` int(11) NOT NULL,
  `invoiceId` int(255) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `base_price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `delivery_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`cart_id`, `invoiceId`, `prod_id`, `prod_name`, `quantity`, `base_price`, `discount`, `delivery_time`) VALUES
(1, 1, 78, 'paneer Tikka', 5, '195', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'info@angeethicafe.in', '0239e64d28db8f5b3faa42a1cc63d4db');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `bill_id` int(11) NOT NULL,
  `Invoice` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `Mobile` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(555) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_time` time NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `payable_amount` varchar(255) NOT NULL,
  `grandtotal` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `discount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'shorba'),
(2, 'starter'),
(3, 'salads'),
(4, 'Main course'),
(5, 'Rice & Roti'),
(6, 'Chinese Starter'),
(7, 'Chinese'),
(8, 'Chinese & Soups'),
(9, 'Thalis'),
(10, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inv_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` time(6) NOT NULL,
  `qtyOut` varchar(255) NOT NULL,
  `dateOut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `base_price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `short_des` varchar(255) NOT NULL,
  `long_des` varchar(500) NOT NULL,
  `delivery_time` varchar(255) NOT NULL,
  `prod_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `category`, `prod_name`, `base_price`, `discount`, `type`, `short_des`, `long_des`, `delivery_time`, `prod_img`) VALUES
(18, '1', 'Tamatar Shorba', '65/- ', '0', 'Snacks', '', '', '1 hour', 'Tomato-shorba-1496832956_835x547.jpg'),
(19, '1', 'Dal Shorba', '65', '0', 'Main course', '', '', '1 hour.', 'moong_dal_shorba.jpg'),
(20, '1', 'Murgh Shorba', '85', '0', 'Main course', '', '', '1 hour', 'murgh_shorba.jpg'),
(21, '2', 'Paneer Tikka', '195', '0', 'Snacks', 'Achari/ Adraki Flavours.\r\nFresh cottage Cheese Skewered and Grilled in the Clay Oven.\r\n\r\n', '', '1 hour', 'Achari_Paneer_Tikka_Recipe_Party_Food.JPG'),
(22, '2', 'Panner Pakoda', '175', '0', 'Snacks', 'Fried Cottage Cheese', '', '1 hour', 'paneer-pakoda-recipe.jpg'),
(25, '2', 'Khumbh Nawabi', '195', '0', 'Snacks', 'Butter Mushroom Sprinkled with Herbs & Grilled in Tandoor.', '', '1 hour', 'khumbh.jpg'),
(26, '3', 'Pasta Salad', '125', '0', 'Snacks', '', '', '1 hour', ''),
(27, '2', 'Green Salad', '55', '0', 'Snacks', '', '', '1 hour', 'Green-Salad-@30-1.jpg'),
(28, '3', 'Masala Papad', '25', '0', 'Snacks', '', '', '1 hour', 'MasalaPapad_4.jpg'),
(29, '4', 'Jeera Aloo', '175', '0', 'Main course', '', '', '1 hour', 'Jeera-Aloo-in-Microwave_1303-11-1024x723-1024x723.jpg'),
(32, '5', 'Tandoori Roti', '15', '0', 'Main course', '', '', '1 hour', 'tandoori-roti2.jpg'),
(33, '5', 'Butter Roti', '25', '0', 'Main course', '', '', '1 hour', 'butter-roti-500x500.png'),
(34, '5', 'Plain Naan', '35', '0', 'Main course', '', '', '1 hour', 'plain-naan.png'),
(35, '5', 'Butter Naan', '45', '0', 'Main course', '', '', '1 hour', 'Butter-Naan-Recipe1.jpg'),
(36, '6', 'Honey Chilly Potato', '170', '0', 'Snacks', '', '', '1 hour', 'Honey_chilli_potatoes.jpg'),
(37, '6', 'Veg Manchurian Dry', '170', '0', 'Snacks', '', '', '1 hour', 'veg_manch_dry.JPG'),
(38, '6', 'Corn Salt & Pepper', '195', '0', 'Snacks', '', '', '1 hour', 'corn_saltn_pep.jpg'),
(40, '7', 'Mix Veg. Hot & Garlic Sauce', '170', '0', 'Snacks', '', '', '1 hour', 'vegetables_garlic_sauce.jpg'),
(41, '7', 'Veg. Manchurian Gravy', '175', '0', 'Main course', '', '', '1 hour', ''),
(42, '7', 'Cottage Cheese Schezwan Sauce', '195', '0', 'Main course', '', '', '1 hour', 'cottage_cheeese_schez.jpg'),
(43, '7', 'Chilly Paneer Gravy', '195', '0', 'Main course', '', '', '1 hour', 'chilly_paneer.jpg'),
(44, '7', 'Shredded Chicken Hot & Garlic Sauce', '250', '0', 'Main course', '', '', '1 hour', 'chicken_hot_galice_sauce.jpg'),
(46, '4', 'paneer kadahi', '195', '', '', '', '', '', ''),
(49, '4', 'mater paneer', '195', '', '', '', '', '', ''),
(50, '4', 'subz taka tak', '195', '', '', '', '', '', ''),
(51, '4', 'paneer do pyaza', '195', '', '', '', '', '', ''),
(52, '5', 'jeera rice', '115', '', '', '', '', '', ''),
(53, '4', 'paneer kundan kalian', '195', '', '', '', '', '', ''),
(54, '2', 'chicken 65', '250', '', '', '', '', '', ''),
(55, '4', 'Dehati Chicken', '385', '', '', '', '', '', ''),
(56, '4', 'Dal Tadka', '175', '', '', '', '', '', ''),
(57, '4', 'Malai Kofta', '195', '', '', '', '', '', ''),
(58, '6', 'Chilli Chicken', '250', '', '', '', '', '', ''),
(61, '4', 'Dal Makhani', '195', '', '', '', '', '', ''),
(63, '2', 'Chicken Churga full', '350', '', '', '', '', '', ''),
(64, '2', 'Chicken Churga half', '250', '', '', '', '', '', ''),
(65, '4', 'Chicken masala', '245', '', '', '', '', '', ''),
(66, '4', 'Mutton masala', '295', '', '', '', '', '', ''),
(67, '4', 'paneer tawa masala', '195', '', '', '', '', '', ''),
(68, '2', 'Murg tikka', '250', '', '', '', '', '', ''),
(69, '4', 'mutton masala half', '150', '', '', '', '', '', ''),
(70, '5', 'st. rice', '85', '', '', '', '', '', ''),
(71, '1', 'coke', '40', '', '', '', '', '', ''),
(72, '1', 'Blue sea', '95', '', '', '', '', '', ''),
(74, '1', 'Mangolina', '95', '', '', '', '', '', ''),
(75, '1', 'Fresh L WATER', '25', '', '', '', '', '', ''),
(76, '1', 'Tea', '25', '', '', '', '', '', ''),
(78, '2', 'paneer Tikka', '195', '', '', '', '', '', ''),
(80, '2', 'paneer Pakoda', '175', '', '', '', '', '', ''),
(81, '2', 'Dahi Ke Kabab', '195', '', '', '', '', '', ''),
(83, '2', 'Hara Bhara Kabab', '175', '', '', '', '', '', ''),
(85, '2', 'Murgh hARIYALI Tikka', '250', '', '', '', '', '', ''),
(86, '2', 'Murgh Malai Tikka', '250', '', '', '', '', '', ''),
(87, '2', 'Lahsuni Murgh Tikka', '250', '', '', '', '', '', ''),
(89, '4', 'Angeethi Murg', '250', '', '', '', '', '', ''),
(90, '4', 'Murgh Lababadar', '250', '', '', '', '', '', ''),
(92, '4', 'Murg Mumtaz', '250', '', '', '', '', '', ''),
(93, '4', 'Chicken Boti Masala', '250', '', '', '', '', '', ''),
(94, '5', 'subz briyani', '145', '', '', '', '', '', ''),
(95, '5', 'mix veg pulao', '115', '', '', '', '', '', ''),
(96, '0', 'soft drink', '40', '', '', '', '', '', ''),
(97, '1', 'VEG MANCHOW SOUP', '65', '', '', '', '', '', ''),
(98, '2', 'BABY CORN CHILLI', '195', '', '', '', '', '', ''),
(99, '5', 'chicken biryani', '245', '', '', '', '', '', ''),
(100, '4', 'Chicken curry', '250', '', '', '', '', '', ''),
(101, '4', 'Murgh Taka tak', '260', '', '', '', '', '', ''),
(102, '4', 'LAAL MASS', '260', '', '', '', '', '', ''),
(103, '4', 'Rogan Josh', '260', '', '', '', '', '', ''),
(104, '4', 'Martban Meat', '295', '', '', '', '', '', ''),
(105, '4', 'Murg Tawa Masala', '250', '', '', '', '', '', ''),
(106, '5', 'Garlic Naan', '55', '', '', '', '', '', ''),
(107, '5', 'Onion/Aloo Kulcha', '55', '', '', '', '', '', ''),
(108, '5', 'Paneer Kulcha', '75', '', '', '', '', '', ''),
(110, '6', 'Drums of Heaven', '300', '', '', '', '', '', ''),
(111, '1', 'chicken manchow', '85', '', '', '', '', '', ''),
(112, '10', 'Choice of icecream', '60', '', '', '', '', '', ''),
(113, '10', 'Choice of icecream', '60', '', '', '', '', '', ''),
(114, '7', 'CHICKEN hAKKA NOODLES', '165', '', '', '', '', '', ''),
(115, '2', 'VEG SPRING ROLL', '170', '', '', '', '', '', ''),
(116, '7', 'VEG dimsum', '135', '', '', '', '', '', ''),
(117, '1', 'VEG S/C SOUP', '65', '', '', '', '', '', ''),
(118, '5', 'VEG FRY RICE', '125', '', '', '', '', '', ''),
(119, '2', 'MURG R tikka', '250', '', '', '', '', '', ''),
(120, '4', 'aloo jaipuri', '175', '', '', '', '', '', ''),
(121, '1', 'mix raita', '75', '', '', '', '', '', ''),
(122, '4', 'kadahi chicken', '250', '', '', '', '', '', ''),
(123, '2', 'Tangari Apna Andaaz', '250', '', '', '', '', '', ''),
(124, '2', 'Mahi tikka', '250', '', '', '', '', '', ''),
(125, '2', 'Murgh bhutta kabab', '280', '', '', '', '', '', ''),
(126, '4', 'Banarasi dum aloo', '175', '', '', '', '', '', ''),
(127, '4', 'Paneer jalfrezi', '195', '', '', '', '', '', ''),
(128, '4', 'GOBI MASALEDAR', '195', '', '', '', '', '', ''),
(129, '4', 'Paneer akbari', '195', '', '', '', '', '', ''),
(130, '4', 'karari bhindi', '195', '', '', '', '', '', ''),
(131, '4', 'Teekha Paneer', '195', '', '', '', '', '', ''),
(132, '4', 'Palak Paneer', '195', '', '', '', '', '', ''),
(133, '4', 'Methi Mutter Malai', '195', '', '', '', '', '', ''),
(134, '4', 'Mushroom Masala', '195', '', '', '', '', '', ''),
(135, '4', 'Makki Kumbh Masala', '195', '', '', '', '', '', ''),
(136, '5', 'Missi Roti', '45', '', '', '', '', '', ''),
(137, '5', 'Lachha Paratha', '45', '', '', '', '', '', ''),
(138, '5', 'Sada Chawal', '85', '', '', '', '', '', ''),
(139, '5', 'Pulao aap ki pasand', '115', '', '', '', '', '', ''),
(140, '4', 'Murgh briyani', '245', '', '', '', '', '', ''),
(141, '5', 'Egg briyani', '195', '', '', '', '', '', ''),
(142, '8', 'Chi S/C soup', '85', '', '', '', '', '', ''),
(143, '8', 'veg H/S soup', '65', '', '', '', '', '', ''),
(144, '8', 'Chi H/S soup', '85', '', '', '', '', '', ''),
(145, '8', 'Veg L/C soup', '65', '', '', '', '', '', ''),
(146, '8', 'Chi L/C soup', '85', '', '', '', '', '', ''),
(147, '8', 'Chi manchow soup', '85', '', '', '', '', '', ''),
(148, '6', 'Chilly mushroom', '195', '', '', '', '', '', ''),
(151, '6', 'Chilly chi dry ', '250', '', '', '', '', '', ''),
(152, '6', 'Crispy chi gingao', '270', '', '', '', '', '', ''),
(153, '6', 'Taichi chicken', '270', '', '', '', '', '', ''),
(154, '7', 'Diced chi schezwan sauce', '255', '', '', '', '', '', ''),
(155, '7', 'Veg chilly garlic noodels', '135', '', '', '', '', '', ''),
(156, '7', 'Chi chilly garlic noodels', '165', '', '', '', '', '', ''),
(157, '7', 'veg hakka noodels', '125', '', '', '', '', '', ''),
(158, '7', 'Chi hakka noodels', '165', '', '', '', '', '', ''),
(159, '7', 'Chi singapuri noodels', '165', '', '', '', '', '', ''),
(160, '7', 'Veg singapuri noodels', '135', '', '', '', '', '', ''),
(161, '7', 'Veg Fried rice', '125', '', '', '', '', '', ''),
(162, '7', 'Chi fried rice', '165', '', '', '', '', '', ''),
(163, '7', 'Gulab jamun', '70', '', '', '', '', '', ''),
(164, '4', 'CHIKEN BTR MASALA B/L', '295', '', '', '', '', '', ''),
(165, '2', 'CHIKEN LOLY POP', '300', '', '', '', '', '', ''),
(166, '4', 'EGG CURRY', '195', '', '', '', '', '', ''),
(167, '10', 'MASALA COKE', '50', '', '', '', '', '', ''),
(169, '4', 'corn masroom', '195', '', '', '', '', '', ''),
(170, '4', 'masroom chilli', '195', '', '', '', '', '', ''),
(173, '4', 'shahi paneer', '195', '', 'paneer', '', 'Shahi paneer is a preparation of paneer cottage cheese in a thick gravy made up of cream, tomatoes and spices from the Indian subcontinent. It is mainly eaten with roti, naan, rice, other breads.', '', 'images.jpg'),
(174, '4', 'masala kulcha', '55', '', '', '', '', '', ''),
(175, '10', 'M WATER', '25', '', '', '', '', '', ''),
(177, '4', 'DEAHTI CHK8PCS', '435', '', '', '', '', '', ''),
(178, '9', 'veg mahraja thali', '170', '', '', '', '', '', ''),
(179, '4', 'aloo parwal', '175', '', '', '', '', '', ''),
(180, '5', 'pine apple raita', '95', '', '', '', '', '', ''),
(181, '5', 'papar', '25', '', '', '', '', '', ''),
(182, '4', 'veg pulawo', '115', '', '', '', '', '', ''),
(183, '2', 'CHK DIMSIM', '165', '', '', '', '', '', ''),
(185, '4', 'murag lababdar b/L', '285', '', '', '', '', '', ''),
(187, '0', 'Hot milk', '40', '', '', '', '', '', ''),
(188, '0', 'Gulab jamun 1pice', '35', '', '', '', '', '', ''),
(189, '0', 'Aaloo jeera', '175', '', '', '', '', '', ''),
(190, '4', 'Chi. Do Pyaza', '245', '', '', '', '', '', ''),
(191, '4', 'Chi. Btr Masala', '250', '', '', '', '', '', ''),
(192, '7', 'saihwan chk h/g souce', '255', '', '', '', '', '', ''),
(193, '10', 'coffee', '45', '', '', '', '', '', ''),
(194, '4', 'Paneer btr masala', '195', '', '', '', '', '', ''),
(195, '4', 'Mashroom masala', '195', '', '', '', '', '', ''),
(198, '9', 'ROOM NONVEG THALI', '300', '', '', '', '', '', ''),
(199, '4', 'MURGH MUMTAZ', '250', '', '', '', '', '', ''),
(200, '4', 'MURGH T MASALA', '250', '', '', '', '', '', ''),
(201, '4', 'Ghost dum briyani', '265', '', '', '', '', '', ''),
(202, '4', 'Paneer lababdar', '195', '', '', '', '', '', ''),
(203, '0', 'STAFF NAAN', '45', '', '', '', '', '', ''),
(204, '0', 'TAWA ROTI', '15', '', '', '', '', '', ''),
(205, '0', 'HOT GULAB JAMUN', '70', '', '', '', '', '', ''),
(206, '0', 'breakfast', '60', '', '', '', '', '', ''),
(207, '4', 'Mashroom do pyaza', '195', '', '', '', '', '', ''),
(208, '9', 'nonveg thli', '235', '', '', '', '', '', ''),
(209, '0', 'EGG FRID RICE', '165', '', '', '', '', '', ''),
(210, '0', 'PANEER CILLI DRY', '195', '', '', '', '', '', ''),
(211, '0', 'MURG LAHSUNI TIKKA', '250', '', '', '', '', '', ''),
(212, '0', 'MUTTER PANEER', '195', '', '', '', '', '', ''),
(213, '0', 'LUNCH BUFFET', '477', '', '', '', '', '', ''),
(214, '0', 'MUTTON CURRY', '260', '', '', '', '', '', ''),
(215, '0', 'BUFFET DINNER', '650', '', '', '', '', '', ''),
(216, '0', 'F/L-WATER', '50', '', '', '', '', '', ''),
(217, '0', 'Tomato soup', '65', '', '', '', '', '', ''),
(218, '0', 'BUFFET LUNCH', '600', '', '', '', '', '', ''),
(219, '4', 'MURGH T MASALA B/L', '285', '', '', '', '', '', ''),
(220, '0', 'FRENCH FRY', '160', '', '', '', '', '', ''),
(221, '0', 'chikcen seek kebab', '250', '', '', '', '', '', ''),
(222, '0', 'coke 2ltr', '100', '', '', '', '', '', ''),
(223, '6', 'veg plater', '250', '', '', '', '', '', ''),
(224, '2', 'mutton sheek kabab', '275', '', '', '', '', '', ''),
(225, '2', 'hydrabadi sheek kabab', '295', '', '', '', '', '', ''),
(226, '2', 'non veg platter', '350', '', '', '', '', '', ''),
(227, '0', 'maki tikka kabab', '250', '', '', '', '', '', ''),
(230, '5', 'paneer st. kulcha', '55', '', '', '', '', '', ''),
(231, '0', 'Disposable Cup Tea', '15', '', '', '', '', '', ''),
(232, '0', 'cake 1 paund ', '250', '', '', '', '', '', ''),
(233, '2', 'crispy panner', '210', '', '', '', '', '', ''),
(234, '5', 'paneer paratha', '75', '', '', '', '', '', ''),
(235, '2', 'cripsy chicken', '280', '', '', '', '', '', ''),
(237, '10', 'KALAKAND SUGAR FREE', '110', '', '', '', '', '', ''),
(238, '4', 'BHINDI MASALA', '175', '', '', '', '', '', ''),
(239, '2', 'AFGHANI CHICKEN (F)', '450', '', '', '', '', '', ''),
(240, '2', 'AFGHANI CHICKEN (H)', '275', '', '', '', '', '', ''),
(241, '10', 'rasmalai', '70', '', '', '', '', '', ''),
(242, '0', 'Tava Roti', '15', '', '', '', '', '', ''),
(243, '0', 'chicken biryani b/L', '295', '', '', '', '', '', ''),
(244, '0', 'breakfast  ', '140', '', '', '', '', '', ''),
(245, '0', 'M WATER    500 ml', '13', '', '', '', '', '', ''),
(246, '0', 'tava  butter roti', '20', '', '', '', '', '', ''),
(247, '1', 'M WATER', '25', '', '', '', '', '', ''),
(248, '0', 'chicken bemishal', '', '', '', '', '', '', ''),
(249, '4', 'chicken bemishal', '275', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `Password` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `name`, `email`, `number`, `Password`) VALUES
(13, 'AYTIS', 'aytistechnology@gmail.com', '8340326660', 'aytis@2018cloud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
