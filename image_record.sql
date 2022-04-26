
-- --------------------------------------------------------

--
-- Table structure for table `image_record`
--

CREATE TABLE `image_record` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `images` text NOT NULL,
  `fname` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `counter` int(9) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_record`
--
ALTER TABLE `image_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fname` (`fname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_record`
--
ALTER TABLE `image_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
