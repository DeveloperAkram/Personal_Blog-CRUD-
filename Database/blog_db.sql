-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 12:12 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_db`
--
CREATE DATABASE IF NOT EXISTS `blog_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog_db`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(2, 'HTML5'),
(3, 'CSS3'),
(4, 'PYTHON 3'),
(5, 'Bootstrap'),
(6, 'PHP 7'),
(7, 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `description`, `image`, `date`) VALUES
(9, 2, 'HTML', 'HTML is the standard markup language for creating Web pages.\r\n\r\nHTML stands for Hyper Text Markup Language\r\nHTML describes the structure of Web pages using markup\r\nHTML elements are the building blocks of HTML pages\r\nHTML elements are represented by tags\r\nHTML tags label pieces of content such as "heading", "paragraph", "table", and so on\r\nBrowsers do not display the HTML tags, but use them to render the content of the page', 'uploads/183430htmlimg.png', '2019-04-10'),
(10, 3, 'CSS', 'CSS is a language that describes the style of an HTML document.\r\n\r\nCSS describes how HTML elements should be displayed.\r\n\r\nThis tutorial will teach you CSS from basic to advanced.\r\n\r\n', 'uploads/588568css3.jpg', '2019-04-02'),
(12, 2, 'HTML is a Markup Language', 'HTML is the standard markup language for creating Web pages. HTML stands for Hyper Text Markup Language. HTML describes the structure of Web pages using markup. HTML elements are the building blocks of HTML pages. HTML elements are represented by tags.', 'uploads/173990htmlimg.png', '2019-04-25'),
(13, 3, 'CSS is stylish stylesheet', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', 'uploads/535969hero.png', '2019-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(3, 'Hani Mohammad', 'xyz@gmail.com', '121'),
(4, 'Nawab Abdullah', 'abc@gmai.com', '321'),
(6, 'Developer Army', 'abcd@gmail.com', '456'),
(7, 'Ragib', 'ragib@hotmail.com', '123'),
(8, 'Nafiz', 'nafiz@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
