-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 07, 2013 at 12:12 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `tutorial`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `sys_traffic`
-- 

CREATE TABLE `sys_traffic` (
  `Tanggal` date NOT NULL,
  `ipAddress` text NOT NULL,
  `Jumlah` int(10) NOT NULL,
  PRIMARY KEY  (`Tanggal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `sys_traffic`
-- 

INSERT INTO `sys_traffic` VALUES ('2013-02-07', '', 11);
