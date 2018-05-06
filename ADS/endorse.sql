-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 07:13 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `endorse`
--

-- --------------------------------------------------------

--
-- Table structure for table `influencer`
--

CREATE TABLE `influencer` (
  `id_influencer` varchar(15) NOT NULL,
  `nama_influencer` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tarif` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `influencer`
--

INSERT INTO `influencer` (`id_influencer`, `nama_influencer`, `email`, `tarif`) VALUES
('1', 'Kuncoro', 'kuncoro90@gmail.com', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `status`) VALUES
('1', 'piskadwi12@gmail.com', 'fadila1234', 'vendor'),
('1', 'a@gmail.com', 'a', 'vendor'),
('3', 'i@gmail.com', 'i', 'influencer');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(15) NOT NULL,
  `jenis_produk` varchar(15) NOT NULL,
  `merk_produk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `jenis_produk`, `merk_produk`) VALUES
('1', 'gorengan', 'gorenganAjib');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_req` varchar(15) NOT NULL,
  `id_vendor` varchar(15) NOT NULL,
  `id_influencer` varchar(15) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_req`, `id_vendor`, `id_influencer`, `id_produk`, `tanggal`, `harga`, `kategori`, `status`) VALUES
('1', '1', '1', '1', '2018-05-01', 1500000, 'mamam', 'confirm'),
('2', '1', '1', '1', '2018-05-16', 1500000, 'mamam', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` varchar(15) NOT NULL,
  `nama_vendor` varchar(15) NOT NULL,
  `email_vendor` varchar(25) NOT NULL,
  `nama_usaha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `email_vendor`, `nama_usaha`) VALUES
('1', 'Ajib', 'ajibAinun@gmail.com', 'AjibAjib');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
