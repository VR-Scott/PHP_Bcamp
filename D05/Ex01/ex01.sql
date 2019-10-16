CREATE TABLE `ft_table` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `login` int(8) NOT NULL,
  `id_job` tinyint(4) NOT NULL,
  `group` enum('staff','student','other') NOT NULL,
  `creation_date` DATE NOT NULL
);