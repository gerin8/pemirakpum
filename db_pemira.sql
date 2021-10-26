--
-- Database: `db_pemira`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `nama`) VALUES
(1411010108, 'admin', 'admin', 'MPM'),
(1311010064, 'admin1', 'admin1', 'EkkyP'),
(1, 'eki', 'eki', 'eki');

-- --------------------------------------------------------

--
-- Table structure for table `ca_bem`
--

CREATE TABLE `ca_bem` (
  `no_urut` int(11) NOT NULL,
  `capres` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cawapres` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sbg` enum('BEM','MPM') COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` text COLLATE utf8_unicode_ci NOT NULL,
  `rekamjejak` longtext COLLATE utf8_unicode_ci NOT NULL,
  `visi` text COLLATE utf8_unicode_ci NOT NULL,
  `misi` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ca_bem`
--

INSERT INTO `ca_bem` (`no_urut`, `capres`, `cawapres`, `sbg`, `alamat`, `jurusan`, `rekamjejak`, `visi`, `misi`, `foto`) VALUES
(1, 'Andri Desmana', 'Liana Monica', 'BEM', '                                                                      Negara-ratu, Natar, Lamung Selatan"\r\n              "\r\n              "\r\n              "\r\n              "\r\n              ', 'Teknik Informatika', 'Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. \r\nLiana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015.\r\nAndri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. \r\nLiana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015                                                          ', '                                                                      Menjadikan mahasiswa/i darmajaya menjadi lebih baik                                                                      ', 'Mewujudkan darmajaya yang lebih baik!\r\n               \r\n               \r\n               \r\n              Menjadikan mahasiswa/i darmajaya menjadi lebih baik dan bermartabat.                                                                      ', 'ma3 (2).jpg'),
(2, 'Agung', 'Rina', 'BEM', '                                          Sidoharjo, Natar, Lampung Selatan        "\r\n              "\r\n              "\r\n              ', 'Teknik Informatika                          ', '                            Agung Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Rina, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015                            ', '                                          ada                                                                    ', ' \r\n               \r\n               \r\n              ada                                                                    ', 'ak4 (2).jpg'),
(3, 'Komang Wardiyasa', 'Andiro Panjahitan', 'BEM', '              jalan imambonjol gg sosial no 9 a\r\ntanjunga karang \r\nbandar lampung                          "\r\n              ', 'Teknik Informatika & akuntansi', 'Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015', '              mensejahterakan kesejahteraan bangsa                                        ', ' \r\n              meneruskan kehidupan bangsa dan kesejahteraan bangsa                                        ', 'ti2 (2).jpg'),
(4, 'Raka Tamagola', 'Ganda Syahertian', 'BEM', 'Gedong meneng                          ', 'Tehnik Informatika dan Akuntansi', 'Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015                          ', 'Muda Berkarya                          ', 'Jaya Abadi                          ', 'ti2 (2).jpg'),
(5, 'ekki', 'Ganda Syahertian', 'BEM', 'gedong air                          ', 'teknik informatika dan misi', 'ada                          ', 'ada                          ', ' ada                         ', 'ti2 (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ca_hima`
--

CREATE TABLE `ca_hima` (
  `id` int(20) NOT NULL,
  `jurusan` enum('TI','MISI','AK','MA','STEKOM') COLLATE utf8_unicode_ci NOT NULL,
  `no` int(20) NOT NULL,
  `Alamat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `calon_hima` text COLLATE utf8_unicode_ci NOT NULL,
  `visi` text COLLATE utf8_unicode_ci NOT NULL,
  `misi` text COLLATE utf8_unicode_ci NOT NULL,
  `pengalaman` longtext COLLATE utf8_unicode_ci NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ca_hima`
--

INSERT INTO `ca_hima` (`id`, `jurusan`, `no`, `Alamat`, `calon_hima`, `visi`, `misi`, `pengalaman`, `foto`) VALUES
(2, 'MISI', 7, 'Bandar Jaya', 'Wido Kurniawan', '                          mari wujudkan organisasi yang adil dan sejahtera', '                          kerja kerja kerja', '                         wido kurniawan pernah menjabat sebagai badan pengurus harian di hima si yaitu kaderisasi pada tahun 2014-2015, iya pernah menjadi ketuplak pelaksanaan MISI Teknologi', 'si3.jpg'),
(2, 'TI', 6, 'Palapa', 'Arya Novan', '                          Jaya Abadi', '                          semangat sejahatera', '                          Arya Novan Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Arya Novan Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015', 'si3.jpg'),
(1, 'TI', 2, 'Way Kandis', 'Ganda S Rivardi', '                          Majju Jaya Sentosa', '                          Berkah abadi sejahtera', '                 Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015         ', 'ti1.jpg'),
(1, 'TI', 1, 'Kemiling', 'Raka Tamagola', '    Mari majukan orkem darmajaya dengan semangat pancasila                      ', '                          Kerja kerja kerjaa', '                    Raka Tamagola Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Raka Tamagola Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015      ', 'ti3.jpg'),
(3, 'AK', 11, 'Kampung Sawah', 'Yoze Rizal', '                      bangun akuntansi lebih baik    ', '                          terbuka jujur dan sejahtera', '                          Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015', 'ak4.jpg'),
(3, 'TI', 12, 'Way Dadi', 'Rahmad Kariswan', '     cerdas berjaya                     ', '            tangguh bersahaja              ', 'Arya Novan Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Arya Novan Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015', 'ak4.jpg'),
(4, 'MA', 16, 'Sukabumi', 'Rahardian Aji', '                muda bermartabat          ', 'jaya sejahtera sentosa                          ', 'Arya Novan Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Arya Novan Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015                          ', 'ma3.jpg'),
(4, 'MA', 17, 'Jatinegara', 'Rizky Rosyid', 'Memajukan hima manjement                          ', 'Aman jaya                          ', '     Arya Novan Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Arya Novan Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015                     ', 'ma3.jpg'),
(5, 'STEKOM', 21, 'Gedong meneg', 'Hasyim', 'Maju                          ', 'Kerja kerja kerja                          ', '  Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015             ', 'stekom2.jpg'),
(5, 'STEKOM', 22, 'Untung Seropati', 'Rahmad Prambudi', 'Mensejahterakan rakyat                          ', 'maju bersama kita                          ', '   Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015. Andri Desmana Putra Pernah Menjabat sebagai Ketum HIMA TI tahun 2013-2014, Menjabat sebagai Mentri IPTEK tahun 2014-2015. Liana Monica, pernah menjabat sebagai Kordinator Minat Bakat tahun 2013-2014 dan menjabat sebagai ketum HIMA Akuntansi Tahun 2014-2015                       ', 'stekom2.jpg'),
(1, 'TI', 3, 'ada', 'komang', ' ad                         ', '     ada                     ', 'ada                          ', 'ti1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_bem`
--

CREATE TABLE `hasil_bem` (
  `NPM` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `status` enum('sudah') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hasil_bem`
--

INSERT INTO `hasil_bem` (`NPM`, `no_urut`, `status`) VALUES
(1311010012, 2, 'sudah'),
(1311010009, 3, 'sudah'),
(1311010031, 1, 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_hima`
--

CREATE TABLE `hasil_hima` (
  `NPM` int(20) NOT NULL,
  `no` int(20) DEFAULT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hasil_hima`
--

INSERT INTO `hasil_hima` (`NPM`, `no`, `status`) VALUES
(1311010012, 1, 'sudah'),
(1311010009, 12, 'sudah'),
(1311010031, 3, 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `iduser` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`iduser`, `pass`, `name`) VALUES
('superadmin', 'admin', 'Kemahasiswaan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `NPM` int(16) NOT NULL,
  `sandi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` enum('TI','MISI','AK','MA','STEKOM') COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('laki-laki','perempuan') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `NPM`, `sandi`, `nama`, `jurusan`, `gender`) VALUES
(1, 141101003, 'user', 'Baruna', 'TI', 'laki-laki'),
(1, 141101002, 'user', 'Filian Anjasmara', 'TI', 'laki-laki'),
(1, 141101001, 'user', 'Andri Desmana', 'TI', 'laki-laki'),
(1, 141101004, 'user', 'Asty', 'TI', 'perempuan'),
(2, 141101005, 'user', 'Widia', 'MISI', 'perempuan'),
(3, 1411010102, 'user', 'baru', 'AK', 'laki-laki'),
(2, 141101007, 'user', 'user', 'MISI', 'laki-laki'),
(1, 1311010064, 'user', 'Ekky Prasetya', 'TI', 'laki-laki'),
(5, 1311110088, 'user', 'Antonio', '', 'laki-laki'),
(1, 1311010077, 'user', 'Raka Tamagola', 'TI', 'laki-laki'),
(1, 1311010094, 'user', 'Ganda S Rivardi', 'TI', 'laki-laki'),
(2, 1311010069, 'user', 'Deni Cagur', 'TI', 'laki-laki'),
(5, 1311010091, 'user', 'Beni Ardy', 'MA', 'laki-laki'),
(3, 1311010055, 'user', 'Sepriani Safitri', 'AK', 'perempuan'),
(1, 1311010033, 'user', 'adi santoso', 'TI', 'laki-laki'),
(1, 1311010056, 'user', 'Iskandarsyah Kurniaw', 'TI', 'laki-laki'),
(5, 1311010034, 'user', 'Jenah', 'STEKOM', 'perempuan'),
(1, 1311010012, 'user', 'Rionaldi Ali', 'TI', 'laki-laki'),
(3, 1311010009, 'user', 'ekki', 'AK', 'laki-laki'),
(1, 1311010031, 'user', 'Raka Tamagola', 'TI', 'laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ca_bem`
--
ALTER TABLE `ca_bem`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `ca_hima`
--
ALTER TABLE `ca_hima`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `hasil_bem`
--
ALTER TABLE `hasil_bem`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `hasil_hima`
--
ALTER TABLE `hasil_hima`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NPM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
