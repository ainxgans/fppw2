-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2023 at 06:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rps`
--

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode` varchar(20) NOT NULL,
  `id_dosen` int(50) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `sks` varchar(20) NOT NULL,
  `penilaian` varchar(255) NOT NULL,
  `nm_matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode`, `id_dosen`, `semester`, `sks`, `penilaian`, `nm_matkul`) VALUES
('2', 123, '3', '4', '&lt;p&gt;Klasifikasi Penilaian&lt;/p&gt;&lt;p&gt;≥ 80 % ( A )&lt;/p&gt;&lt;p&gt;≥ 60 &amp; &lt;80&gt;&lt;p&gt;≥ 40 &amp; &lt; 60&gt;&lt;p&gt;≥ 20 &amp; &lt; 40&gt;&lt;p&gt;&lt; 21&gt;', 'Metodologi Penelitian'),
('21213', 44836870, '1', '2', '<p>wad</p>', 'bahasa jawa'),
('4', 123, '3', '2', '&lt;p&gt;Klasifikasi Nilai&lt;/p&gt;&lt;p&gt;&gt; 80 % ( A )&lt;/p&gt;&lt;p&gt;≥ 60 &amp; &lt; 80&gt;&lt;/p&gt;&lt;p&gt;≥ 40 &amp; &lt; 60&gt;&lt;/p&gt;&lt;p&gt;≥ 20 &amp; &lt; 40&gt;&lt;/p&gt;&lt;p&gt;&lt; 20&gt;&lt;/p&gt;', 'Multimedia'),
('DT-081', 190302457, '3', '2', 'Presensi 10%\r\nUjian Mid Semester 30 %\r\nUjian Akhir Semester 40 %\r\nTugas 20 %', 'MULTIMEDIA'),
('DT-105', 9092154, '3', '4', '&lt;p&gt;Klasifikasi Nilai&lt;/p&gt;&lt;p&gt;&gt; 80 % ( A )&lt;/p&gt;&lt;p&gt;≥ 60 &amp; &lt; 80&gt;&lt;p&gt;≥ 40 &amp; &lt; 60&gt;&lt;p&gt;≥ 20 &amp; 40 ( D )&lt;/p&gt;&lt;p&gt;&lt; 20&gt;', 'Pengolahan Basis Data'),
('DT-106', 8787811, '3', '4', ' Presensi 20 %\r\n Ujian Mid Semester 30 %\r\n Ujian Akhir Semester 30 %\r\n Tugas 20 %', 'E-COMMERCE'),
('DT-168', 8787811, '5', '4', 'Ujian Tengah Semester 25 %\r\n Ujian Akhir Semester 30 %\r\nResponsi 25 %\r\nTugas/Kuis 20 %', 'Proyek Pemrograman Seluler'),
('DT-170', 190302315, '3', '4', '▪ Presensi 10%\r\n▪ Ujian Mid Semester 30 %\r\n▪ Ujian Akhir Semester 40 %\r\n▪ Tugas 20 %', 'Perancangan Web II'),
('DT090', 190302282, '3', '2', '<ul><li> Presensi 10%</li><li> Ujian Mid Semester 30 %</li><li>Ujian Akhir Semester 40 %</li><li>Tugas 20 %</li></ul>', 'BAHASA INDONESIA'),
('DT095', 190302481, '1', '2', '<ul><li>Presensi 10%</li><li> Ujian Mid Semester 30 %</li><li> Ujian Akhir Semester 40 %</li><li> Tugas 20 %</li></ul>', 'PENGANTAR IT DAN INSTALASI KOMPUTER'),
('DT126', 190302421, '4', '4', '&lt;ul&gt;&lt;li&gt; Presensi 10%&lt;/li&gt;&lt;li&gt; Ujian Mid Semester 30 %&lt;/li&gt;&lt;li&gt;UjianAkhir Semester 40 %&lt;/li&gt;&lt;li&gt;Tugas 20 %&lt;/li&gt;&lt;/ul&gt;', 'CONCEPT ART 1');

-- --------------------------------------------------------

--
-- Table structure for table `rpp`
--

CREATE TABLE `rpp` (
  `id` int(20) NOT NULL,
  `id_rps` int(20) NOT NULL,
  `minggu` int(2) NOT NULL,
  `km_akhir` varchar(300) NOT NULL,
  `indikator` varchar(300) NOT NULL,
  `topik` varchar(300) NOT NULL,
  `strategi_pembelajaran` text NOT NULL,
  `waktu` int(4) NOT NULL,
  `penilaian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rps`
--

CREATE TABLE `rps` (
  `id` int(20) NOT NULL,
  `id_matkul` varchar(20) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nomor_rps` varchar(50) NOT NULL,
  `tgl_berlaku` year(4) NOT NULL,
  `tgl_disusun` date NOT NULL,
  `gb_umum` text NOT NULL,
  `cp_pembelajaran` text NOT NULL,
  `prasyarat` text NOT NULL,
  `referensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps`
--

INSERT INTO `rps` (`id`, `id_matkul`, `id_dosen`, `nomor_rps`, `tgl_berlaku`, `tgl_disusun`, `gb_umum`, `cp_pembelajaran`, `prasyarat`, `referensi`) VALUES
(10, 'DT090', 190302282, '090', 2023, '2023-01-07', '<ul><li>Matakuliah bahasa Indonesia memuat bahan ajar untuk meningkatkan kemampuan siswa dalam menggunakan bahasa Indonesia yang baik dan benar, baik secara lisan dan tulisan terutama dalam menyusun paragraf, esai, menulis akademik, serta menyajikannya secara akurat dan santun.</li></ul>', '<ul><li>Membuat paragraf akademik dengan ejaan, diksi dan kalimat efektif</li><li>Menyusun karangan ilmiah sesuai konvensi naskah ilmiah yang tepat</li><li>Menampilkan keterampilan berbicara sesuai konteks</li></ul>', '<p>Bagian ini menjelaskan prasyarat, bila ada, untuk mengikuti mata kuliah ini. Dosen bisa juga mencantumkan pengetahuan atau keterampilan yang dapat membantu proses belajar dan diasumsikan sudah dikuasai oleh calon peserta kuliah (tidak diajarkan di mata kuliah ini), meski hal itu bukan prasyarat formal.</p>', '<ol><li>1. Arifin, E.Z. Cermat Berbahasa Indonesia untuk Perguruan Tinggi. Jakarta: Akademika Pressindo, 2008.</li><li>&nbsp;Dalman. Keterampilan Menulis. Jakarta: Raja Grafindo Persada, 2014.</li><li>&nbsp;Depdiknas. Ejaan Yang Disempurnakan. Jakarta: Gramedia, 2008.</li><li>&nbsp;Hs. Widjono. Bahasa Indonesia Mata Kuliah Pengembangan Kepribadian di Perguruan Tinggi. Jakarta: PT. Grasindo, 2008.</li><li>Suhertuti, dkk. Bahasa Indonesia sebagai Sarana Komunikasi Ilmiah. Bogor: Irham Publishing, 2011</li></ol>'),
(13, '2', 1234567890, '75875C', 2023, '2023-01-07', 'Pengenalan konsep-konsep dasar struktur data, termasuk array, linked list, stack, queue, dan tree.\r\nPenggunaan struktur data dalam pemrograman: implementasi dan penerapan struktur data dalam bahasa pemrograman seperti C, C++, atau Java.\r\nAlgoritma-algoritma yang berkaitan dengan struktur data, termasuk pencarian dan sorting, serta analisis kompleksitas waktu dan ruang.\r\nAplikasi struktur data dalam masalah-masalah nyata, seperti pengelolaan data pada database, optimasi rute pada sistem transportasi, dan pemecahan masalah lainnya.\r\nPraktikum laboratorium, di mana mahasiswa akan mempraktikkan konsep yang dipelajari melalui pembuatan program sederhana menggunakan struktur data yang telah diajarkan.', 'Pengenalan konsep-konsep dasar struktur data, termasuk array, linked list, stack, queue, dan tree.\r\nPenggunaan struktur data dalam pemrograman: implementasi dan penerapan struktur data dalam bahasa pemrograman seperti C, C++, atau Java.\r\nAlgoritma-algoritma yang berkaitan dengan struktur data, termasuk pencarian dan sorting, serta analisis kompleksitas waktu dan ruang.\r\nAplikasi struktur data dalam masalah-masalah nyata, seperti pengelolaan data pada database, optimasi rute pada sistem transportasi, dan pemecahan masalah lainnya.\r\nPraktikum laboratorium, di mana mahasiswa akan mempraktikkan konsep yang dipelajari melalui pembuatan program sederhana menggunakan struktur data yang telah diajarkan.', 'Pengenalan konsep-konsep dasar struktur data, termasuk array, linked list, stack, queue, dan tree.\r\nPenggunaan struktur data dalam pemrograman: implementasi dan penerapan struktur data dalam bahasa pemrograman seperti C, C++, atau Java.\r\nAlgoritma-algoritma yang berkaitan dengan struktur data, termasuk pencarian dan sorting, serta analisis kompleksitas waktu dan ruang.\r\nAplikasi struktur data dalam masalah-masalah nyata, seperti pengelolaan data pada database, optimasi rute pada sistem transportasi, dan pemecahan masalah lainnya.\r\nPraktikum laboratorium, di mana mahasiswa akan mempraktikkan konsep yang dipelajari melalui pembuatan program sederhana menggunakan struktur data yang telah diajarkan.', 'Pengenalan konsep-konsep dasar struktur data, termasuk array, linked list, stack, queue, dan tree.\r\nPenggunaan struktur data dalam pemrograman: implementasi dan penerapan struktur data dalam bahasa pemrograman seperti C, C++, atau Java.\r\nAlgoritma-algoritma yang berkaitan dengan struktur data, termasuk pencarian dan sorting, serta analisis kompleksitas waktu dan ruang.\r\nAplikasi struktur data dalam masalah-masalah nyata, seperti pengelolaan data pada database, optimasi rute pada sistem transportasi, dan pemecahan masalah lainnya.\r\nPraktikum laboratorium, di mana mahasiswa akan mempraktikkan konsep yang dipelajari melalui pembuatan program sederhana menggunakan struktur data yang telah diajarkan.'),
(14, 'DT126', 190302421, '98721', 2023, '2023-01-08', 'Mahasiswa dapat menjelaskan konsep-konsep dasar struktur data, termasuk array, linked list, stack, queue, dan tree, serta menjelaskan kelebihan dan kekurangan masing-masing struktur data tersebut.\r\nMahasiswa dapat menimplementasikan struktur data yang telah diajarkan dalam bahasa pemrograman tertentu, seperti C, C++, atau Java, serta menjelaskan bagaimana implementasi tersebut bekerja.\r\nMahasiswa dapat menjelaskan dan menerapkan algoritma-algoritma yang berkaitan dengan struktur data, termasuk pencarian dan sorting, serta menghitung kompleksitas waktu dan ruang dari algoritma tersebut.\r\nMahasiswa dapat mengaplikasikan struktur data yang telah dipelajari dalam memecahkan masalah-masalah nyata yang terkait dengan struktur data.\r\nMahasiswa dapat bekerja secara mandiri dalam menyelesaikan tugas-tugas yang berkaitan dengan struktur data, termasuk tugas-tugas laboratorium dan proyek akhir.', 'Mahasiswa dapat menjelaskan konsep-konsep dasar struktur data, termasuk array, linked list, stack, queue, dan tree, serta menjelaskan kelebihan dan kekurangan masing-masing struktur data tersebut.\r\nMahasiswa dapat menimplementasikan struktur data yang telah diajarkan dalam bahasa pemrograman tertentu, seperti C, C++, atau Java, serta menjelaskan bagaimana implementasi tersebut bekerja.\r\nMahasiswa dapat menjelaskan dan menerapkan algoritma-algoritma yang berkaitan dengan struktur data, termasuk pencarian dan sorting, serta menghitung kompleksitas waktu dan ruang dari algoritma tersebut.\r\nMahasiswa dapat mengaplikasikan struktur data yang telah dipelajari dalam memecahkan masalah-masalah nyata yang terkait dengan struktur data.\r\nMahasiswa dapat bekerja secara mandiri dalam menyelesaikan tugas-tugas yang berkaitan dengan struktur data, termasuk tugas-tugas laboratorium dan proyek akhir.', 'Mahasiswa dapat menjelaskan konsep-konsep dasar struktur data, termasuk array, linked list, stack, queue, dan tree, serta menjelaskan kelebihan dan kekurangan masing-masing struktur data tersebut.\r\nMahasiswa dapat menimplementasikan struktur data yang telah diajarkan dalam bahasa pemrograman tertentu, seperti C, C++, atau Java, serta menjelaskan bagaimana implementasi tersebut bekerja.\r\nMahasiswa dapat menjelaskan dan menerapkan algoritma-algoritma yang berkaitan dengan struktur data, termasuk pencarian dan sorting, serta menghitung kompleksitas waktu dan ruang dari algoritma tersebut.\r\nMahasiswa dapat mengaplikasikan struktur data yang telah dipelajari dalam memecahkan masalah-masalah nyata yang terkait dengan struktur data.\r\nMahasiswa dapat bekerja secara mandiri dalam menyelesaikan tugas-tugas yang berkaitan dengan struktur data, termasuk tugas-tugas laboratorium dan proyek akhir.', 'Mahasiswa dapat menjelaskan konsep-konsep dasar struktur data, termasuk array, linked list, stack, queue, dan tree, serta menjelaskan kelebihan dan kekurangan masing-masing struktur data tersebut.\r\nMahasiswa dapat menimplementasikan struktur data yang telah diajarkan dalam bahasa pemrograman tertentu, seperti C, C++, atau Java, serta menjelaskan bagaimana implementasi tersebut bekerja.\r\nMahasiswa dapat menjelaskan dan menerapkan algoritma-algoritma yang berkaitan dengan struktur data, termasuk pencarian dan sorting, serta menghitung kompleksitas waktu dan ruang dari algoritma tersebut.\r\nMahasiswa dapat mengaplikasikan struktur data yang telah dipelajari dalam memecahkan masalah-masalah nyata yang terkait dengan struktur data.\r\nMahasiswa dapat bekerja secara mandiri dalam menyelesaikan tugas-tugas yang berkaitan dengan struktur data, termasuk tugas-tugas laboratorium dan proyek akhir.'),
(17, 'DT-170', 190302315, 'DT152', 2023, '2023-01-11', 'Perkuliahan diselenggarakan sebanyak 28 kali pertemuan dalam satu semester, yang terdiri dari 14 kali pertemuan teori dan 14 pertemuan praktikum. Ditambah 2\r\nkali pertemuan yang dikhususkan untuk pelaksanaan UTS (Ujian Tengah Semester) dan UAS (Ujian Akhir Semester).\r\n• Setelah mengikuti mata kuliah ini mahasiswa diharapkan dapat memahami konsep struktur data dan Mampu membuat program dengan menggunakan bahasa\r\npemrograman yang ditentukan yaitu python.\r\n', 'Perkuliahan diselenggarakan sebanyak 28 kali pertemuan dalam satu semester, yang terdiri dari 14 kali pertemuan teori dan 14 pertemuan praktikum. Ditambah 2\r\nkali pertemuan yang dikhususkan untuk pelaksanaan UTS (Ujian Tengah Semester) dan UAS (Ujian Akhir Semester).\r\n• Setelah mengikuti mata kuliah ini mahasiswa diharapkan mampu menguasai hard skills berupa konsep dasar Struktur Data, serta soft skill berupa penyelesaian\r\nberbagai masalah dengan menggunakan konsep logika dan algoritma yang diimplementasikan dengan Python\r\n• Matakuliah ini terbagi menjadi teori yang diikuti dengan praktikum. Melalui Matakuliah ini mahasiswa mampu untuk memahami konsep, teknik dan manipulasi\r\npengorganisasian sebuah data yang diimplementasikan kedalam sebuah bahasa pemrograman seperti array, string, matriks, record. Selain itu matakuliah ini juga\r\nmemberi pemahaman tentang list linear, multi link list, non linier link list, jenis-jenis pengurutan, pencarian, stack, queue, graf, dan tree.\r\n', '• Mahasiswa telah memahami logika dalam pemrograman\r\n• Telah mengambil matakuliah algoritma dan pemrograman', 'Ref.1 : Al Sweigart; Automate The Boring stuff With Python; No Starch, San Fransisco, 2015');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(10) NOT NULL,
  `id_rps` int(10) NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `km_akhir` varchar(200) NOT NULL,
  `waktu` int(2) NOT NULL,
  `bobot` varchar(100) NOT NULL,
  `kriteria_nilai` varchar(200) NOT NULL,
  `indikator_nilai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_pembelajaran`
--

CREATE TABLE `unit_pembelajaran` (
  `id` int(10) NOT NULL,
  `id_rps` int(10) NOT NULL,
  `km_akhir_p` varchar(300) NOT NULL,
  `indikator` varchar(300) NOT NULL,
  `bhn_kajian` varchar(300) NOT NULL,
  `mtd_belajar` varchar(50) NOT NULL,
  `waktu` int(2) NOT NULL,
  `mtd_nilai` varchar(50) NOT NULL,
  `bahan_ajar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `password`, `email`, `akses`) VALUES
(2131, 'admin', '$2y$10$68rXF2sqiUS2lUuMMrokAuL4Z/jCiHBcdo66f.2113/V3O5oWktnS', 'admin@admin.com', 1),
(6869, 'Maulana', '$2y$10$mO.Z3OyQhi93ih7b.dfceO/YDwuBcciS0Ogw4uIVBwptBpWyj4uvq', 'maulana.120100@gmail.com', 3),
(8787811, 'Toto Indriyatmoko, M.Kom', '$2y$10$5iX9vKWBE6BD4ZaOdcBndOkE14ZtzCRfNoULNIpUJaNCMwOMUmq6.', 'toto.indriyatmoko@amikom.ac.id', 2),
(9092154, 'Hastari Utama, M.Cs', '$2y$10$q978o4lr4yLMmMb5/M4UF.AHr.gUo4Y7HmRChzaTT6W2nTTkaaP.u', 'Utama@amikom.ac.id', 2),
(21014620, 'Maulanaa', '$2y$10$DjOLCa1h1QdIxEKnxnIoPuyuAXncpAvSs10y9gmuBCSRRNJyDVWtu', 'maulana@gmai.co.id', 3),
(21014623, 'Irfiyanda Abidin', '$2y$10$XJ6ty11J14oQLTb0gFb8KO2DcfUjAd0dX9Amdmevc5yQyfNjH7AIy', 'irfiyanda@students.amikom.ac.id', 3),
(87654312, 'Barka Satya, M.Kom', '$2y$10$DZR4OEs3ZdXSEeLgf7zp5uBSZyZ5qOraYp9RWEYYpkudZW/qG6u/C', 'barka.satya@amikom.ac.id', 2),
(190302148, 'Ahlihi Masruro, M.Kom', '$2y$10$.Qm1elgmfXoFWX/7gcs9YOnXTyjikt1nfRM2QEdFuuKueTXDyLSSO', 'ahlihi.m@amikom.ac.id', 2),
(190302282, 'Ikmah, M.Kom', '$2y$10$Z88O2dBU/LV7Ew0ZRUqBeeHvR4c9USBH0RY1AugoWqu0GMal9F7U2', 'ikmahdarwan01@amikom.ac.id', 2),
(190302315, 'Firman Asharudin, S.Kom, M.Kom', '$2y$10$Wf/HNtPuyWD3mB6SW/qmkulmSvoahosRVr0TGTnJsy0xAJpNsHM9e', 'firman_asharudin@amikom.ac.id', 2),
(190302421, 'Ifraweri Raja Mangkuto HP, S.Pd., M.Kom', '$2y$10$M3TDtXPubgI3VijD2BT6Wel41FmwTnrcrPka3hkHJomDyV7utL1tG', 'Ifraweriraja@amikom.ac.id', 2),
(190302457, 'Dwi Rahayu, M.Kom', '$2y$10$y72VrwHAB6D2.ai9RJvoyuG2LkvjybdkZnsgem7865U.nDLGYIKZi', 'dwirahayu@amikom.ac.id', 2),
(190302469, 'Ardian Yuligar Safagi, M.Kom', '$2y$10$unwzejAJRSZMldyGq7khmO2lJfJazVy2DrWMds3Rj9A7ErSgOysn6', 'Ardian_Yuligar@amikom.ac.id', 2),
(190302481, 'Surya Tri Atmaja Ramadhani, S.Kom., M.Eng', '$2y$10$74qnZiFY7pa3GuGlYxjtN.n5MPcQ0hTpjQefx2BHfAEUgM1arnrvW', 'Suryatriatmaja@amikom.ac.id', 2),
(190302483, 'Dewi Anisa Istiqomah, M.Cs', '$2y$10$A8xujWSWOyT9qWS.JYOgGeICpzk9GkcXAu6qTinOY8.xoSGoUkNIa', 'Dewianisa@amikom.ac.id', 2),
(1234567890, 'Ria Andriani, M.Kom', '$2y$10$NeTdHkzspsBp/QxKge8I4.ZYTHmhpO8Y.ktZA24NouHWzZeVYcwZS', 'ria@amikom.ac.id', 2),
(2147483647, 'Bahrun Ghozali, M.Kom', '$2y$10$qnGkYAF.01.2nnutWt.SFeQCXj5AnL.yE8eENi89izWGGpvrDnu06', 'oza@amikom.ac.id', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `rpp`
--
ALTER TABLE `rpp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rps_ibfk_1` (`id_matkul`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `unit_pembelajaran`
--
ALTER TABLE `unit_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rpp`
--
ALTER TABLE `rpp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rps`
--
ALTER TABLE `rps`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `unit_pembelajaran`
--
ALTER TABLE `unit_pembelajaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rpp`
--
ALTER TABLE `rpp`
  ADD CONSTRAINT `rpp_ibfk_1` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rps`
--
ALTER TABLE `rps`
  ADD CONSTRAINT `rps_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `unit_pembelajaran`
--
ALTER TABLE `unit_pembelajaran`
  ADD CONSTRAINT `unit_pembelajaran_ibfk_1` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
