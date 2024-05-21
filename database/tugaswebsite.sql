-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 02:15 PM
-- Server version: 10.11.2-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `123123qasd`
--

CREATE TABLE `123123qasd` (
  `id` int(11) NOT NULL,
  `aasd` int(11) NOT NULL,
  `asdasd` int(11) NOT NULL,
  `asd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `judul1` text NOT NULL,
  `judul2` text NOT NULL,
  `penjelasan1` text NOT NULL,
  `penjelasan2` text NOT NULL,
  `source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `judul1`, `judul2`, `penjelasan1`, `penjelasan2`, `source`) VALUES
(1, 'Bitcoin Halving Frenzy Is the Digital Gold About to Shine Again?', 'What happen to Bitcoin???', 'Bitcoin Halving : Impact and Future', 'Market is booming currently, with over $ 2.80 trillion market cap, about 0.53 % change in last 24 hours and with that , a new event is approaching on April 23rd 2024 , known as Bitcoin Halving. Its a pre-programmed code that\'s gonna cut the half of the miners reward , significantly reducing the supply of new Bitcoin entering in the market.', 'Last time the halving of Bitcoin conducted in 2020 the price of Bitcoin went from $5000 to $68000 in November. Bitcoin halving is a simple procedure to reduce the rate of coin generation in market cause we are limited to 21 million. The Future of Bitcoin is also very crazy due to it\'s different factors in the market from SEC approval to major bullish approach from firms like BlackRock (ETF), those some of the factors making this bull market even more crazy. As of now, a conducted research is must before entering the Cryptocurrency market. Even after so many positive factors, the price surge of Bitcoin is undeniable.', 'https://www.publish0x.com/rupanshu-kumar2/bitcoin-halving-frenzy-is-the-digital-gold-about-to-shine-ag-xyqjpkw'),
(2, 'How to Use ChatGPT in Daily Life?', 'What is ChatGPT?', 'What you can do with Chat-GPT', 'ChatGPT is actually a chatbot. It is a powerful tool that can help you with tasks such as composing emails, essays, and code. Maybe ChatGPT will be your best friend in the future. This model was originally developed based on the GPT-3.5 model and is specially trained for chatting. With the release of GPT-4, ChatGPT started using this model. While this dialog robot used to only accept text input, it now accepts visual inputs as well. For example, when you draw a website model and give it to ChatGPT, this model gives you the necessary codes to build it for the site.', 'Good. Now, let’s look at the usage scenarios. ChatGPT can writimg us a summary of the book. Of course, it’s better to read the whole book. But if you don’t have the time, this is one way to get an idea of the book. Thus, by looking at this summary, you can decide whether to spend time on the book. ChatGPT started recommending books within seconds. It is writing not only the names of the books but also the features of the books.', 'https://levelup.gitconnected.com/how-to-use-chatgpt-in-daily-life-4688f7afb930'),
(3, 'Gerhana Matahari Total Bareng Ledakan Hebat, BMKG Ungkap Dampak di RI', 'Gerhana Matahari ', 'Kesimpulan ', 'Jakarta, CNBC Indonesia - Jelang lebaran pekan depan, ada beberapa fenomena luar angkasa yang akan terjadi, yakni gerhana matahari total dan juga ledakan Matahari yang terjadi bersamaan . Saat menyaksikan GMT [gerhana matahari total] 8 April 2024, menurut National Center for Atmospheric Research(NCAR) akan terlihat ledakan-ledakan di Matahari, saat totalitas gerhana matahari, pandangan matahari dari Bumi terhalang oleh bulan dan menyisakan sisi tepi. Pada sisi tepi inilah di Bumi bisa menyaksikan tepian plasma Matahari tampak meledak-ledak Geofisika (BMKG) dikutip dari laman resminya, Selasa (2/4/2024).', 'Dalam kesimpulannya, BMKG menjelaskan dampak ledakan Matahari terkait badai magnet Bumi relatif aman untuk Indonesia. Letak negara ini berada dalam lintang rendah, tempat titik terkuat perisai Bumi.', 'https://www.cnbcindonesia.com/tech/20240402082542-37-527343/gerhana-matahari-total-bareng-ledakan-hebat-bmkg-ungkap-dampak-di-ri');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `deskripsi`, `image`) VALUES
(59, 'Bagaimana Cara Install Kali Linux', 'Pada tutorial kali ini akan diajarkan bagaimana cara menginstall sistem operasi kali linux', 'gambar_kali.png'),
(60, 'Apa itu IDS dalam cyber security?', 'Kali ini kita akan memahami tentang apa itu IDS (Intrusion Detection System) dalam cyber security', 'gambar_ids.jpg'),
(61, 'Memahami Open-Source Intelligence (OSINT)', 'Konten ini akan menyajikan materi pemahaman dasar mengenai Open-Source Intelligence (OSINT)', 'osint_recon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `123123qasd`
--
ALTER TABLE `123123qasd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `123123qasd`
--
ALTER TABLE `123123qasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
