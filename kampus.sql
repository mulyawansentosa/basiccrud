-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2016 at 02:55 
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `jurusan_id` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan_kode` varchar(100) NOT NULL,
  `jurusan_nama` varchar(100) NOT NULL,
  `jurusan_keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`jurusan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`jurusan_id`, `jurusan_kode`, `jurusan_nama`, `jurusan_keterangan`) VALUES
(2, 'MI', 'Manajemen Informatika', 'Jurusan Manajemen Informatika'),
(3, 'KA', 'Komputerisasi Akuntansi', 'Jurusan Komputerisasi Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT,
  `mahasiswa_nim` varchar(50) NOT NULL,
  `mahasiswa_nama` varchar(100) NOT NULL,
  `mahasiswa_lahir_tempat` varchar(100) NOT NULL,
  `mahasiswa_lahir_tanggal` date NOT NULL,
  `mahasiswa_jk` varchar(20) NOT NULL,
  `mahasiswa_agama` varchar(20) NOT NULL,
  `mahasiswa_hobi` varchar(100) NOT NULL,
  `mahasiswa_jurusan_id` int(11) NOT NULL,
  `mahasiswa_foto` varchar(255) NOT NULL,
  `mahasiswa_alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`mahasiswa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `mahasiswa_nim`, `mahasiswa_nama`, `mahasiswa_lahir_tempat`, `mahasiswa_lahir_tanggal`, `mahasiswa_jk`, `mahasiswa_agama`, `mahasiswa_hobi`, `mahasiswa_jurusan_id`, `mahasiswa_foto`, `mahasiswa_alamat`) VALUES
(4, '12345', 'Mulyawan Sentosa', 'Lebak', '2016-11-02', 'Laki-Laki', 'Islam', 'Olah Raga, Menulis', 2, 'image/Beli Buku Wordpress.jpg', 'Lebak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_nama`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Mulyawan Sentosa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
