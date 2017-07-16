-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2017 at 03:30 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautif6_web-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(255) NOT NULL,
  `blog_title` varchar(500) NOT NULL,
  `featured_image` varchar(150) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_content` text NOT NULL,
  `date_posted` date NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `featured_image`, `blog_description`, `blog_content`, `date_posted`, `user_id`) VALUES
(1, 'Seaweed Superfood Company – Snacks that Pop!', 'blog1.jpg', 'Seaweed may not be the first thing that pops into your mind as a top seller in your snack aisle, but according to experts in the health food industry (including highly influential figure sarah wilson, it\'s destined to be the next big superfood.', 'Seaweed may not be the first thing that pops into your mind as a top seller in your snack aisle, but according to experts in the health food industry (including highly influential figure sarah wilson, it\'s destined to be the next big superfood.\r\nJanet Duncan, the entrepreneur behind Seaweed Superfood Company, has been hooked on seaweed and its many health benefits her entire life.\r\nHaving a Japanese mother, Janet grew up loving seaweed but it wasn’t so easy to convince her Australian husband and son to change their perception of seaweed from the slimy stuff on the beach to a nutrient, edible superfood.\r\nAfter studying the health benefits of seaweed and discovering it’s loaded with iodine, calcium, potassium, magnesium, zinc and many more trace minerals and vitamins, she began sneaking it into food she shared with family and friends – and they loved it!\r\nAfter recognising the opportunity to harness the extensive health benefits of seaweed in delicious snacks that consumers want to eat (not just because they’re good for them), Janet and her seaweed-convert husband teamed up to launch Seaweed Superfood Company Popcorn to Australian consumers.\r\nTheir popcorn is available in four incredible flavours: Nori Sesame, Spiced Turmeric, Cacao, and Chilli. As the business idea developed, Janet altered the products to appeal to more consumers, making them gluten free, vegan, dairy free and made with organic ingredients.\r\nMade from non-GMO, Australian corn and wild-harvested, sustainable seaweed and available in snack sized 50g bags, they’re perfect for filling consumer demand for healthy grab n’ go snacks.', '2017-05-17', 2),
(2, 'Seaweed Superfood Company – Snacks that Pop!', 'blog1.jpg', 'Seaweed may not be the first thing that pops into your mind as a top seller in your snack aisle, but according to experts in the health food industry (including highly influential figure sarah wilson, it\'s destined to be the next big superfood.', 'Seaweed may not be the first thing that pops into your mind as a top seller in your snack aisle, but according to experts in the health food industry (including highly influential figure sarah wilson, it\'s destined to be the next big superfood.\r\nJanet Duncan, the entrepreneur behind Seaweed Superfood Company, has been hooked on seaweed and its many health benefits her entire life.\r\nHaving a Japanese mother, Janet grew up loving seaweed but it wasn’t so easy to convince her Australian husband and son to change their perception of seaweed from the slimy stuff on the beach to a nutrient, edible superfood.\r\nAfter studying the health benefits of seaweed and discovering it’s loaded with iodine, calcium, potassium, magnesium, zinc and many more trace minerals and vitamins, she began sneaking it into food she shared with family and friends – and they loved it!\r\nAfter recognising the opportunity to harness the extensive health benefits of seaweed in delicious snacks that consumers want to eat (not just because they’re good for them), Janet and her seaweed-convert husband teamed up to launch Seaweed Superfood Company Popcorn to Australian consumers.\r\nTheir popcorn is available in four incredible flavours: Nori Sesame, Spiced Turmeric, Cacao, and Chilli. As the business idea developed, Janet altered the products to appeal to more consumers, making them gluten free, vegan, dairy free and made with organic ingredients.\r\nMade from non-GMO, Australian corn and wild-harvested, sustainable seaweed and available in snack sized 50g bags, they’re perfect for filling consumer demand for healthy grab n’ go snacks.', '2017-05-17', 2),
(3, 'Seaweed Superfood Company – Snacks that Pop!', 'blog1.jpg', 'Seaweed may not be the first thing that pops into your mind as a top seller in your snack aisle, but according to experts in the health food industry (including highly influential figure sarah wilson, it\'s destined to be the next big superfood.', 'Seaweed may not be the first thing that pops into your mind as a top seller in your snack aisle, but according to experts in the health food industry (including highly influential figure sarah wilson, it\'s destined to be the next big superfood.\r\nJanet Duncan, the entrepreneur behind Seaweed Superfood Company, has been hooked on seaweed and its many health benefits her entire life.\r\nHaving a Japanese mother, Janet grew up loving seaweed but it wasn’t so easy to convince her Australian husband and son to change their perception of seaweed from the slimy stuff on the beach to a nutrient, edible superfood.\r\nAfter studying the health benefits of seaweed and discovering it’s loaded with iodine, calcium, potassium, magnesium, zinc and many more trace minerals and vitamins, she began sneaking it into food she shared with family and friends – and they loved it!\r\nAfter recognising the opportunity to harness the extensive health benefits of seaweed in delicious snacks that consumers want to eat (not just because they’re good for them), Janet and her seaweed-convert husband teamed up to launch Seaweed Superfood Company Popcorn to Australian consumers.\r\nTheir popcorn is available in four incredible flavours: Nori Sesame, Spiced Turmeric, Cacao, and Chilli. As the business idea developed, Janet altered the products to appeal to more consumers, making them gluten free, vegan, dairy free and made with organic ingredients.\r\nMade from non-GMO, Australian corn and wild-harvested, sustainable seaweed and available in snack sized 50g bags, they’re perfect for filling consumer demand for healthy grab n’ go snacks.', '2017-05-17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `brand_image` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_image`) VALUES
(1, 'Sukin', '1495511876-sukin.png'),
(2, 'Mt. RETOUR ORGANIC', '1495511913-mt_retour.jpg'),
(3, 'Trilogy', '1495511939-trilogy.png'),
(4, 'GoodHealth', '1495511961-goodHealth.png'),
(5, 'Blackmores', '1495511984-blackmores.jpg'),
(6, 'Swisse', '1495512012-swisse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `parent_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `parent_id`) VALUES
(1, 'Bath & Body', 0),
(2, 'Beauty care', 0),
(3, 'Mother & baby', 0),
(4, 'Functional foods', 0),
(5, 'Serving the kitchen', 0),
(6, 'Products for athletes', 0),
(7, 'Relaxing Essential Oil - Therapy', 0),
(8, 'Shower gel', 1),
(9, 'Shampoo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `certificate_id` int(255) NOT NULL,
  `certificate_name` varchar(500) NOT NULL,
  `certificate_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`certificate_id`, `certificate_name`, `certificate_image`) VALUES
(1, 'Certificate of Food Hygiene and Safety', '1495512521-certificate1.jpg'),
(2, 'Certificate of Quality', '1495512542-certificate2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_id` int(255) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `contact_address` varchar(150) NOT NULL,
  `recipients_email` varchar(100) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `contact_subject` varchar(300) DEFAULT NULL,
  `contact_content` text NOT NULL,
  `sent_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `info_id` int(255) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `address` varchar(200) NOT NULL,
  `headquarters` varchar(200) DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `contact_email` varchar(100) NOT NULL,
  `vietnam_phone` varchar(15) DEFAULT NULL,
  `australia_phone` varchar(15) DEFAULT NULL,
  `fax` varchar(35) DEFAULT NULL,
  `logo_image` varchar(200) NOT NULL,
  `map` text,
  `contact_info` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`info_id`, `company_name`, `address`, `headquarters`, `branch`, `contact_email`, `vietnam_phone`, `australia_phone`, `fax`, `logo_image`, `map`, `contact_info`) VALUES
(1, 'Organic n\' All', 'Organic n\' All, 2076 Sydney, Australia', NULL, NULL, 'forallorganic@gmail.com', '0969880808', '0969880808', NULL, 'logo.png', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `in_origin`
--

CREATE TABLE `in_origin` (
  `origin_id` int(255) NOT NULL,
  `name_of_origin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_origin`
--

INSERT INTO `in_origin` (`origin_id`, `name_of_origin`) VALUES
(1, 'Australia'),
(2, 'USA'),
(3, 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `maxim`
--

CREATE TABLE `maxim` (
  `maxim_id` int(255) NOT NULL,
  `maxim_content` text NOT NULL,
  `maxim_background` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maxim`
--

INSERT INTO `maxim` (`maxim_id`, `maxim_content`, `maxim_background`) VALUES
(1, 'When it comes to distributors of healthy food products, it simply doesn\'t get better than Unique. they cover the entire contry with first class logistics, pro-active sales staff, and impeccable customer service', 'border-box-right'),
(2, 'We believe that our passion innovation, service and ethichs make us a market leader', 'no-border'),
(3, 'Dealing with Unique is like an extended family - nurtured with kindness every step of the way. A bright effective team with their finger on the pulse and an understanding of what needs to happen from the big picture to the finer details. keep of the good work guys', 'border-box');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `order_cost` float NOT NULL,
  `order_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `delivery_date`, `order_cost`, `order_status`) VALUES
(1, 3, '2017-05-17', '2017-05-22', 30.25, 1),
(2, 3, '2017-05-17', '0000-00-00', 60.5, 1),
(3, 3, '2017-05-17', '0000-00-00', 30.25, 1),
(4, 3, '2017-05-17', '0000-00-00', 60.5, 1),
(5, 3, '2017-05-17', '0000-00-00', 90.75, 1),
(6, 2, '2017-05-16', '0000-00-00', 0, 1),
(7, 2, '2017-05-16', '2017-05-22', 30.25, 0),
(8, 2, '2017-05-16', '0000-00-00', 332.75, 0),
(9, 2, '2017-05-22', '0000-00-00', 121, 0),
(10, 2, '2017-05-24', '0000-00-00', 90.75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_discount` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`detail_id`, `order_id`, `product_id`, `order_quantity`, `product_price`, `product_discount`, `total`) VALUES
(1, 1, 2, 1, 32.25, 30.25, 30.25),
(2, 2, 1, 1, 32.25, 30.25, 30.25),
(3, 2, 7, 1, 32.25, 30.25, 30.25),
(4, 3, 4, 1, 32.25, 30.25, 30.25),
(5, 4, 6, 1, 32.25, 30.25, 30.25),
(6, 4, 1, 1, 32.25, 30.25, 30.25),
(7, 5, 3, 1, 32.25, 30.25, 30.25),
(8, 5, 5, 1, 32.25, 30.25, 30.25),
(9, 6, 1, 1, 32.25, 30.25, 30.25),
(10, 6, 5, 1, 32.25, 30.25, 30.25),
(11, 6, 16, 1, 32.25, 30.25, 30.25),
(12, 7, 1, 1, 32.25, 30.25, 30.25),
(13, 8, 5, 1, 32.25, 30.25, 30.25),
(14, 8, 16, 10, 32.25, 30.25, 302.5),
(15, 9, 4, 1, 32.25, 30.25, 30.25),
(16, 9, 15, 1, 32.25, 30.25, 30.25),
(17, 9, 12, 1, 32.25, 30.25, 30.25),
(18, 9, 13, 1, 32.25, 30.25, 30.25),
(19, 10, 1, 1, 32.25, 30.25, 30.25),
(20, 10, 2, 2, 32.25, 30.25, 60.5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_image` varchar(150) NOT NULL,
  `product_image1` varchar(150) DEFAULT NULL,
  `product_image2` varchar(150) DEFAULT NULL,
  `product_price` float NOT NULL,
  `product_discount` float DEFAULT NULL,
  `product_currency` varchar(15) NOT NULL,
  `product_description` text NOT NULL,
  `product_detail` text NOT NULL,
  `product_in_stock` int(11) DEFAULT NULL,
  `category_id` int(255) NOT NULL,
  `feature_id` int(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `origin_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_image1`, `product_image2`, `product_price`, `product_discount`, `product_currency`, `product_description`, `product_detail`, `product_in_stock`, `category_id`, `feature_id`, `brand_id`, `origin_id`, `user_id`) VALUES
(1, 'Alka Power Natural Alkaline Water', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', '<p>Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease &ndash; and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It&rsquo;s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won&rsquo;t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic. - pH 9-10 - Pure - Highly stable - Source of calcium, magnesium, potassium and sodium - Prevents mineral loss - Improves blood circulation - Boosts energy levels - Strengthens defences against disease - BPA &amp; BPS free - Ultimate hydration About the brand... Alka Power Alka Power is Australia&rsquo;s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.</p>\r\n', 99, 8, 2, 1, 1, 2),
(2, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 98, 8, 2, 1, 1, 2),
(3, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 8, 2, 1, 1, 2),
(4, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 8, 2, 1, 1, 2),
(5, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 4, 2, 1, 1, 2),
(6, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 5, 2, 1, 1, 2),
(7, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 6, 2, 1, 1, 2),
(8, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 7, 2, 1, 1, 2),
(9, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 2, 2, 1, 1, 2),
(10, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 2, 2, 1, 1, 2),
(11, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 2, 2, 1, 1, 2),
(12, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 3, 2, 1, 1, 2),
(13, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 9, 2, 1, 1, 2),
(14, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 9, 2, 1, 1, 2),
(15, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 9, 2, 1, 1, 2),
(16, 'Alka Power Natural Alkaline Water 12x600ml', 'product1.jpg', 'product1.jpg', 'product1.jpg', 32.25, 30.25, '$', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable...', 'Much of the food we eat, and many of the beverages we drink, are highly acidic. Meat, bread, vegetable oil, nuts, beans, soft drinks, coffee, tea and alcohol all contribute acidity to our system. This results in oxidative stress, lowering our defences against serious illnesses such as cancer, diabetes and heart disease – and increasing the rate at which alkaline minerals are lost from our bones and organs as our bodies attempt to compensate. Drinking alkaline water can help to offset these unhealthy effects by neutralising acids and providing a much-needed source of minerals such as calcium, magnesium, potassium and sodium. Alka Power is a premium ionic active mineral alkaline water designed by Australian biochemist Randy Park after a 25-year career in the water treatment industry. It’s made with sustainably farmed coral, mother of pearl and seashells and has a pure, refreshing taste, a high pH of 9-10, and exceptional stability that ensures it retains its alkalinity long after bottling. Unlike tap water, Alka Power is 100% free of dirt, rust and sediments, and unlike other commercially available alkaline waters it won’t cause kidney stones. Bottled in BPA/BPS-free biodegradable plastic.\r\n- pH 9-10\r\n- Pure\r\n- Highly stable\r\n- Source of calcium, magnesium, potassium and sodium\r\n- Prevents mineral loss\r\n- Improves blood circulation\r\n- Boosts energy levels\r\n- Strengthens defences against disease\r\n- BPA & BPS free\r\n- Ultimate hydration\r\n\r\n\r\nAbout the brand...\r\nAlka Power\r\n\r\nAlka Power is Australia’s finest alkaline water. Developed by biochemist Randy Park over a 25- year career in public and industrial water treatment, Alka Power is an ionic active mineral water infused with calcium and other alkaline minerals from sustainably farmed coral, mother of pearl and seashells. Pure, clean and refreshing, Alka Power is free of harmful sediments often found in tap water and has a high, stable pH of 9-10 that helps counteract the deleterious effects of acids consumed in food and other drinks. Benefits may include reduced mineral loss, improved blood circulation, increased energy levels, softer skin, stronger nails, and superior hydration.', 100, 9, 2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_certificate`
--

CREATE TABLE `product_certificate` (
  `show_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `certificate_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `feature_id` int(255) NOT NULL,
  `feature_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`feature_id`, `feature_name`) VALUES
(1, 'Chống lão hóa da'),
(2, 'Xóa nếp nhăn'),
(3, 'Dưỡng da toàn thân'),
(4, 'Ngừa bệnh Gút'),
(5, 'Bổ mắt'),
(6, 'Bổ sung Sắt'),
(7, 'Bổ sung Vitamins');

-- --------------------------------------------------------

--
-- Table structure for table `show_title`
--

CREATE TABLE `show_title` (
  `show_title_id` int(255) NOT NULL,
  `title_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show_title`
--

INSERT INTO `show_title` (`show_title_id`, `title_id`, `product_id`) VALUES
(1, 4, 1),
(2, 4, 3),
(3, 4, 6),
(4, 4, 3),
(5, 4, 6),
(6, 4, 8),
(7, 4, 8),
(8, 4, 8),
(9, 4, 7),
(10, 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `slide_id` int(255) NOT NULL,
  `slide_image` varchar(150) NOT NULL,
  `slide_link` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`slide_id`, `slide_image`, `slide_link`) VALUES
(1, 'banner1.jpg', NULL),
(2, 'banner2.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `title_id` int(255) NOT NULL,
  `title_name` varchar(200) NOT NULL,
  `title_icon` varchar(150) DEFAULT NULL,
  `show_hide` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`title_id`, `title_name`, `title_icon`, `show_hide`) VALUES
(1, 'Marketable Product', NULL, 1),
(2, 'New Product', NULL, 1),
(3, 'Discount product', NULL, 1),
(4, 'Bath & Body', NULL, 1),
(5, 'Beauty care', NULL, 0),
(6, 'Mother & baby', NULL, 0),
(7, 'Functional foods', NULL, 0),
(8, 'Serving the kitchen', NULL, 0),
(9, 'Products for athletes', NULL, 0),
(10, 'Relaxing Essential Oil - Therapy', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `avatar` varchar(150) DEFAULT NULL,
  `permission` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `username`, `password`, `email`, `phone`, `address`, `avatar`, `permission`) VALUES
(1, 'Phạm Thị Kim Ngân', 'Senior_admin', 'c975e857c4acf30e2e0d5471b878b0bf', 'phamngan1129@gmail.com', '01883667080', 'tp.HCM', 'avatar.png', 0),
(2, 'Đăng Ngọc Sơn', 'adminDNS', '58004536d6ec66433fae73c558df687f', 'sondnps04576@fpt.edu.vn', '0909445408', 'tp.HCM', 'avatar.png', 1),
(3, 'Chu Văn Lâm', 'lamcvan', '33de82aa687226eaafc8c99646c0c8b0', 'lamcvps04660@fpt.edu.vn', '0941481042', 'tp.HCM', 'avatar.png', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `in_origin`
--
ALTER TABLE `in_origin`
  ADD PRIMARY KEY (`origin_id`);

--
-- Indexes for table `maxim`
--
ALTER TABLE `maxim`
  ADD PRIMARY KEY (`maxim_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `origin_id` (`origin_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `feature_id` (`feature_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product_certificate`
--
ALTER TABLE `product_certificate`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `certificate_id` (`certificate_id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `show_title`
--
ALTER TABLE `show_title`
  ADD PRIMARY KEY (`show_title_id`),
  ADD KEY `title_id` (`title_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `certificate_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `info_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `in_origin`
--
ALTER TABLE `in_origin`
  MODIFY `origin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `maxim`
--
ALTER TABLE `maxim`
  MODIFY `maxim_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `detail_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `product_certificate`
--
ALTER TABLE `product_certificate`
  MODIFY `show_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `feature_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `show_title`
--
ALTER TABLE `show_title`
  MODIFY `show_title_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `slide_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `title_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`feature_id`) REFERENCES `product_features` (`feature_id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`origin_id`) REFERENCES `in_origin` (`origin_id`),
  ADD CONSTRAINT `products_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `products_ibfk_6` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `product_certificate`
--
ALTER TABLE `product_certificate`
  ADD CONSTRAINT `product_certificate_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `product_certificate_ibfk_2` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`certificate_id`);

--
-- Constraints for table `show_title`
--
ALTER TABLE `show_title`
  ADD CONSTRAINT `show_title_ibfk_1` FOREIGN KEY (`title_id`) REFERENCES `titles` (`title_id`),
  ADD CONSTRAINT `show_title_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
