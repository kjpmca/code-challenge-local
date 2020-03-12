--
-- Database: `tasks`
--

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `referral_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `users` (`id`, `referral_code`, `name`, `email`, `phone`, `created`, `modified`) VALUES
(1, 'S501222', 'prakash', 'kjpmca@gmail.com', '123456789', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'S608222', 'suresh', 'suresh1235@gmail.com', '123456789', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

