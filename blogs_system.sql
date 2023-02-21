-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 06:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image`, `description`, `parent_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', 'fashion.jpg', 'Like words, fashion is a way we express ourselves.', 0, NULL, NULL, NULL),
(2, 'Food', 'food.jpg', 'Food blogs come in several flavors. ', 0, NULL, NULL, NULL),
(3, 'Travel', 'travel.jpg', 'Before planning a trip, we tend to do a lot of research on both Google and social media.', 0, NULL, NULL, NULL),
(4, 'Health', 'health.jpg', 'The most common New Year\'s resolution is to exercise more and lose weight.', 0, NULL, NULL, NULL),
(5, 'News', 'news.jpg', 'Today, the news doesn’t just get reported on TV, but also on independent blogs.', 0, NULL, NULL, NULL),
(6, 'Sport', 'sport.jpg', 'There are 8,000 different kinds of sports.', 0, NULL, NULL, NULL),
(15, 'The Muscle Power, Strength, and Endurance of Vegetarians', '20230221140319.jpg', 'Historical examples of successful plant-based athletes range from the gladiators in ancient Rome to the Tarahumara Indians who run 160-mile races for the fun of it. That’s six back-to-back marathons. But, they weren’t put to the test until the last century or so in a study purporting to show “without reasonable doubt that the flesh-eating group of athletes was very far inferior in endurance to the abstainers, even the sedentary group” of vegetarians—meaning it isn’t that the veg athletes won simply because they had trained harder or something. Indeed, there certainly are advantages to plant-based eating, like more antioxidants to combat exercise-induced oxidative stress and the anti-inflammatory nature of many plant foods that may accelerate muscle repair and strength recovery. But, do you have to eat this way for years, decades, or even your whole life to get these apparent benefits? I discuss this in my video Vegetarian Muscle Power, Strength, and Endurance.\r\nHistorical examples of successful plant-based athletes range from the gladiators in ancient Rome to the Tarahumara Indians who run 160-mile races for the fun of it. That’s six back-to-back marathons. But, they weren’t put to the test until the last century or so in a study purporting to show “without reasonable doubt that the flesh-eating group of athletes was very far inferior in endurance to the abstainers, even the sedentary group” of vegetarians—meaning it isn’t that the veg athletes won simply because they had trained harder or something. Indeed, there certainly are advantages to plant-based eating, like more antioxidants to combat exercise-induced oxidative stress and the anti-inflammatory nature of many plant foods that may accelerate muscle repair and strength recovery. But, do you have to eat this way for years, decades, or even your whole life to get these apparent benefits? I discuss this in my video Vegetarian Muscle Power, Strength, and Endurance.\r\n\r\nWhat if you took some Texas men, eating their regular Texan diet, put them through a maximal exercise test, and then asked them to cut out meat for four days. Then, after those four days without meat, you tested them again to measure time to exhaustion, ramping up the treadmill to see how many minutes could they go without collapsing? A researcher did this and found a significant difference favoring the vegetarian diet, which boosted the time to exhaustion by about 13 percent, as you can see at 1:28 in my video. Of the five participants, “each subject had a higher time to exhaustion after following a vegetarian diet.” But there was a fatal flaw to the study. Did you catch it? They were all in the same sequence—meat first, then veg—and any time you take a test a second time, you may do better just because you’re more familiar with it. If the Texans went back to eating meat after being on the vegetarian diet and their performance tanked during a third test, then you might be onto something, but this isn’t very convincing. And, even if the effect is real, it may not be the meat reduction per se, but a function of improved glycogen stores from eating more carbohydrates or something.', 4, 1, '2023-02-21 11:03:19', '2023-02-21 11:03:19'),
(16, 'The First Studies on Vegetarian vs. Meat-Eating Athletes', '20230221140456.jpg', 'Meat-eating athletes are put to the test against vegetarian athletes and even sedentary plant-eaters in feats of endurance.\r\n\r\n“In 1896, the aptly named James Parsley led the Vegetarian Cycling Club to easy victory over two regular clubs. A week later, he won the most prestigious hill-climbing race in England….Other members of the club also turned in remarkable performances. Their competitors were having to eat crow with their beef.” Then, a Belgian researcher put it to the test in 1904 and found that those eating more plant-based reportedly lifted a weight 80 percent more times. (I couldn’t find the primary source in English, though.) I did find a famous series of experiments at Yale, published more than a century ago, on “the influence of flesh eating on endurance,” which I discuss in my video The First Studies on Vegetarian Athletes.\r\n\r\nThe Yale study compared 49 people: meat-eating athletes (mostly Yale students), vegetarian athletes, and sedentary vegetarians. “The experiment furnished a severe test of the claims of the flesh-abstainers.” And, “much to my surprise,” wrote the researcher, the results seemed to vindicate the vegetarians, suggesting that those eschewing meat “have far greater endurance than those who are accustomed to the ordinary American diet.”', 4, 1, '2023-02-21 11:04:56', '2023-02-21 11:04:56'),
(17, '“He Never Left The Hand Of His Daughter Who Died In The Earthquake”', '20230221141157.jpg', 'Irmak, 15, was killed when the building collapsed. The girl’s body is sandwiched between a mattress, dirt, and the colossal weight of the upper floors of the building. All that peeks out is a lifeless, pale hand that her father steadfastly grips. \r\n\r\n“He never left the hand of his daughter who died in the earthquake,” wrote Adem Atlan, the photographer with Agence France-Presse who took the pictures of the grieving father on Tuesday, in an Instagram story uploaded Wednesday. \r\n\r\n\"Unbelievable pain,\" he later wrote.', 5, 1, '2023-02-21 11:11:57', '2023-02-21 11:11:57'),
(18, 'The Queen\'s Cause Of Death Was Listed As \"Old Age\"', '20230221141358.jpg', 'The death certificate for Queen Elizabeth II was officially published on Thursday, revealing that the 96-year-old monarch\'s cause of death was simply listed as \"old age.\"\r\n\r\nThe National Records of Scotland published the extract of an entry in the Register of Deaths, which formally noted that the Queen died at Balmoral Castle in Aberdeenshire on Sept. 8.\r\n\r\nThe official time of death was listed as 3:10 p.m. That is almost two hours before her children Princes Andrew and Edward, and grandson Prince William, arrived at the castle, and almost three and a half hours before her death was announced to the public.', 5, 1, '2023-02-21 11:13:58', '2023-02-21 11:13:58'),
(19, 'The US Men\'s Soccer Team Beat Iran On Tuesday, But Iranian Players Deserve All The Credit', '20230221141714.jpg', 'On Tuesday, the Iranian men’s national soccer team played a critical World Cup match against the US amid some of the most challenging circumstances any athletes have faced.\r\n\r\nLast week, before their first game of the tournament, the Iranian players had refrained from singing their national anthem. They did this to show solidarity with the protesters back in Iran who had taken to the streets after 22-year-old Mahsa Amini died in police custody after being detained for not wearing a hijab. Iran’s government then ordered the players to end their protest, threatening to imprison and torture their loved ones back home, CNN reported, though players have publicly denied this. Before their second game, on Friday, the players mouthed the words to the national anthem with grimaced or tearful faces.', 6, 1, '2023-02-21 11:17:14', '2023-02-21 11:17:14'),
(20, 'Iranian Soccer Players And Fans Protested At The World Cup In Solidarity With Anti-Government Demonstrations Back Home', '20230221141906.jpg', 'Iranian soccer players and fans openly defied the country\'s besieged Islamist regime at the World Cup on Monday, staging bold protests in solidarity with anti-government demonstrations even in the face of potentially deadly consequences.\r\n\r\nThe Iranian national team stayed silent as their national anthem played before its first group match against England. Video posted on social media also shows Iranian fans in the crowd booing loudly as the national anthem plays.', 6, 1, '2023-02-21 11:19:06', '2023-02-21 11:19:06'),
(21, 'The 19 Best Crossbody Bags Available Now, Whether For Investment Or Utility', '20230221142458.jpg', 'Bottomless tote bags and incandescent evening bags all share a deserved spot in your handbag rotation, but nothing eclipses the versatility of a crossbody. Designed to be hands-free and weight-balanced—no shoulder aches or strap slippage here—crossbody bags are the perfect on-to-go accessory, but their functionality need not beget boredom. Some of the loveliest—and most coveted—luxury bags are crossbody designs, and as new designers enter the market, even those bags below the thousand-dollar price point draw trend-seeker envy. (Just ask Beyoncé.)\r\n\r\nAs such, we’ve rounded up some of the best available crossbody bags for women from a variety of luxury and mid-range designers, at a diverse range of price points and crafted from a variety of materials.', 1, 1, '2023-02-21 11:24:58', '2023-02-21 11:24:58'),
(22, 'FashionShopping Amazon’s Secret Designer Outlet Has All Your Favorite Winter Fashion Essentials', '20230221142625.jpg', 'winter wardrobes tend to feel a little stale come February. Everyone you see on the regular is all too familiar with your trusty puffer coat, those once-exciting suede boots have seen a few too many salt-and-ice sludge puddles, and your favorite summer clothes are all begging to see the light of day. It’s time for a mid-season style rejuvenation that won’t drain your summer vacation fund. Enter: Amazon’s outlet store full of designer finds at steep discounts.\r\n\r\nAmazon’s (very underrated) premium outlet is a part of their section dedicated to Premium Brands and boasts over 1,000 discounted designer finds at the time of publication. Organized by categories, its user-friendly design makes it easy to filter for whatever wardrobe voids you’re looking to fill, be it handbags, denim, coats, or so forth. You can also filter through the Premium Outlet by brand if you fancy yourself a few specific brands only.', 1, 1, '2023-02-21 11:26:25', '2023-02-21 11:28:01'),
(23, 'WHERE TO STAY IN COPENHAGEN: THE BEST NEIGHBORHOODS FOR YOUR VISIT', '20230221143628.jpg', 'Copenhagen is a lively, modern, and fun capital perfect for weekend getaways or as a base as you explore the region at large.\r\n\r\nIt’s a laid-back city with a high quality of living, boasting charming rows of colorful houses, inventive green spaces, inviting canals, and bike lanes galore (there are five times as many bikes as cars in the city, and more bikes than people too).', 3, 1, '2023-02-21 11:36:28', '2023-02-21 11:36:28'),
(24, 'A COMPLETE GUIDE TO THE JAPAN RAIL PASS', '20230221143801.jpeg', 'Japan is one of my favorite countries in the world. The serene beauty of the mountains and temples, the hustle and bustle of the sprawling cities, the exquisite food, and its long history make for a fascinating place to visit.\r\n\r\nHowever, Japan has a reputation, especially among budget travelers, as being too expensive. “Better skip Japan and head to Southeast Asia, where your money goes further,” they say.', 3, 1, '2023-02-21 11:38:01', '2023-02-21 11:38:01'),
(25, '5 Simple Tools All Home Cooks Should Have — Especially Anyone Who’s Even Thinking About Making a Holiday Meal This Year', '20230221144435.jpg', 'e still don’t know what the holidays will look like this year. (Will we all be in quarantine again? Will it be safe to celebrate with a teeny-tiny group? Will we be eating a big meal on Zoom like we did for Easter?) But we do know one thing: More of us will be cooking at home than usual. (Because, no matter what’s going on, some people will still want to play it safe at home, and we totally support that!) The only problem? If you’ve never hosted a holiday meal before, you might not have a few key tools.\r\n\r\nHere are five things every home cook should have if you’re even thinking about making a holiday meal. And honestly, these are pretty clutch to have even if you’re not going to be making a special feast.', 2, 1, '2023-02-21 11:44:35', '2023-02-21 11:44:35'),
(26, 'Gravlax With Caraway, Coriander, and Mustard-Dill Sauce Recipe', '20230221144705.jpg', 'when I think of luxury foods, I think of things that are expensive enough that I\'d buy them only in very small quantities, as an occasional indulgence, if at all. White truffles? No thanks. Caviar? Lemme grab a really small spoon. Cured fish like lox and sable? I\'ll get three-quarters of a pound of each—oh wait, that\'s $17.99 per quarter pound? I\'ll just get a quarter pound of the lox, thanks.\r\nThat\'s why I love gravlax, Scandinavia\'s dill-flavored cured salmon. It seems like just as much of a treat as lox, but, because it\'s so easy to make, there\'s no reason to pay for the cost of someone else\'s labor—just make it yourself. For the price of a nice fresh fillet of salmon and a very short, two- or three-day wait, you can serve a beautiful spread of hand-sliced gravlax as an hors d\'oeuvre or light appetizer. Plus, because you\'re making it yourself, you can customize its flavor with the aromatics of your choice.\r\nThe whole process is ridiculously easy, which is cool, because gravlax continues to be one of those dishes that manage to impress people. (No joke: The hardest thing about making your own gravlax is slicing it.) It\'s so easy, in fact, that testing this recipe was as simple as figuring out the best ratio of salt to sugar in the cure, plus a couple other variables. After that, I was done.', 2, 1, '2023-02-21 11:47:05', '2023-02-21 11:47:05'),
(27, 'The top five landing spots for post-buyout Russell Westbrook', '20230221170939.jpg', 'Do we still have to take Russell Westbrook seriously? I mean, if you can’t play with LeBron James or Kevin Durant, who can you fit next to? Whichever franchise signs him next will be his fifth in six years (unless he ruins it back with the Wizards), and we’re firmly in “This guy might be out of the league with gas left in the tank a la Allen Iverson” territory. However, the internet needs speculation, and I’m here to make fun of that craving.\r\n\r\nSo, without explaining too much/giving you a reason not to go forth and click, here are the top five landing spots for Russell Westbrook.', 6, 1, '2023-02-21 14:09:39', '2023-02-21 14:09:39'),
(28, '6 ESSENTIAL TIPS TO HELP YOU KEEP YOUR TEETH IN GOOD CONDITION', '20230221171257.jpg', 'Good oral health is essential for a healthy life. Not only do our teeth help us to chew and digest food – but they also play a big role in our overall physical and mental wellbeing. Unfortunately, many of us don’t take proper care of our teeth and end up with tooth decay or gum disease. But it doesn’t have to be this way! With the right habits and tips, you can keep your teeth in good condition for years to come. We’ll discuss 6 essential tips that will help you maintain good dental hygiene so that you can enjoy all the benefits that come with having healthy teeth.', 4, 1, '2023-02-21 14:12:57', '2023-02-21 14:12:57'),
(29, '5 LOW-CARB PACKED LUNCH IDEAS', '20230221171421.jpg', 'have you climbed aboard the low-carb bandwagon? There’s a lot to be said for these diets, as they’ve helped scores of people reach their weight loss goals. Several studies indicate considerable health benefits from such eating plans. For example, over 50% of Type 2 diabetes patients successfully reversed their disease on a low-carb diet.\r\n\r\nHowever, there is the pesky problem of how to brown-bag it. No bread? No problem! You can enjoy all the flavor you crave with these five low-carb, packed lunch ideas.', 2, 1, '2023-02-21 14:14:21', '2023-02-21 14:14:21'),
(30, 'WHAT OUTFITS TO BRING TO A SUMMER GETAWAY', '20230221171537.jpg', 'knowing there are many resort-ready accessories, outfits, and swimwear created for a summer break makes deciding what to pack for a trip a joyful endeavor. Plus, if you wait until the last minute to shop, you’ll have something fresh and interesting to bring along.\r\n\r\nThe following goods are not strictly necessary for a tropical or beach trip but make for a more comfortable stay and enjoyable experience. You can check out Hello Molly dresses for a more variety of outfits to pick on. Look at these examples of what you may wear for some style ideas.', 1, 1, '2023-02-21 14:15:37', '2023-02-21 14:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `message`, `parent_id`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 'reply', 1, '2023-02-21 10:33:12', '2023-02-21 10:33:12'),
(4, 1, 24, 'nmn,nlmlkmlmk', NULL, '2023-02-21 13:04:28', '2023-02-21 13:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_02_20_102225_create_categories_table', 1),
(12, '2023_02_21_100010_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'majd', 'default.png', 'majd@yahoo.com', NULL, '$2y$10$Rm6wuT1fqtgcPUg3vD6XUOD69lKo7OwILW0MB/dyh7WujHeM7ptE.', NULL, '2023-02-21 10:17:03', '2023-02-21 10:17:03'),
(2, 'muna', 'default.png', 'muna@yahoo.com', NULL, '$2y$10$YLlkEIpyihDEtzypQVjtG.LQJhgeTKELX1NdlY/TDaAGV0H5nR6su', NULL, '2023-02-21 14:25:37', '2023-02-21 14:25:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
